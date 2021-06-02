<?php

namespace App\Http\Controllers;

use App\Model\Course;
use App\Card;
use App\Invoice;
use App\PaymentDescription;
use App\PaymeRequest;
use App\Services\Payme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Session;
use Alert;


class PaymeController extends Controller
{
    public $card;
    public $course;
    public $paymeRequest;

    public function __construct(Course $course, Card $card, PaymeRequest $paymeRequest)
    {
        $this->theme = themeManager();
        $this->card = $card;
        $this->course = $course;
        $this->paymeRequest = $paymeRequest;
    }

    /**
     * @param $id
     */
    public function checkout()
    {
        try {
            // get course / card for checkout
            try {
                DB::beginTransaction();
                if (\request()->filled('method') && \request('method') === 'save_card') {
                    $validator = Validator::make(request()->all(), [
                        "method" => "required",
                        "card_no" => "required",
                        "card_date" => "required",
                        "card_title" => "required",
                        "card_username" => "required",
                        "auto_payment" => "required"
                    ]);

                    if ($validator->fails()) {
                        return response()->json([
                            'success' => false,
                            'error' => $validator->errors()
                        ]);
                    }
                    return $this->saveCard(request());
                }
                if (request()->filled('method') && request('method') === "verify_card") {
                    $validator = Validator::make(request()->all(), [
                        "method" => "required",
                        "price" => "required",
                        "payment_method" => "required",
                        "course_id" => "required",
                        "auto_payment" => "required",
                        "card_id" => "required",
                        'code' => 'required'
                    ]);

                    if ($validator->fails()) {
                        return response()->json([
                            'success' => false,
                            'error' => $validator->errors()
                        ]);
                    }

                    return $this->verifyCode(request());
                }
            } catch (\Exception $exception) {
                DB::rollback();
                Log::error('Exception error: ', array($exception->getMessage()));
                return response()->json([
                    'success' => false,
                    'error' => @translate('Something went wrong, please contact us')
                ]);
            }
            if (\request()->filled('method') && \request('method') === 'pay' && request()->filled('course_id')) {

                $validator = Validator::make(request()->all(), [
                    "method" => "required",
                    "card_id" => "required",
                    "course_id" => "required",
                    "auto_payment" => "required",
                    "payment_method" => "required",
                ]);

                if ($validator->fails()) {
                    return response()->json([
                        'success' => false,
                        'error' => $validator->errors()
                    ]);
                }
                try {
                    DB::beginTransaction();
                    return $this->verifyCode(request());
                } catch (\Exception $exception) {
                    DB::rollBack();
                    Log::error('Exception error: ', array($exception->getMessage()));
                    return response()->json([
                        'success' => false,
                        'error' => @translate('Something went wrong, please contact us')
                    ]);
                }
            }
        } catch (\Exception $exception) {
            Log::error('Exception error: ', array($exception->getMessage()));
            return response()->json([
                'success' => false,
                'error' => @translate('Something went wrong, please contact us') . $exception->getMessage()
            ]);
        }
    }

    /**
     * view for edit or add cards.
     */
    public function cabinet()
    {
        if (request()->filled('method') && request('method') === 'add_card') {
            DB::beginTransaction();
            $payme_request = PaymeRequest::create([]);
            $card_data = $this->generatePostData('cards.create', [
                'id' => $payme_request->id, 'request' => request()->all()
            ]);
            $response = Payme::request('createCard', $card_data);
            if ($response->status() === 200) {
                $res = $response->object();
                if (isset($res->result)) {
                    $payme_request->update([
                        'request_data' => $card_data,
                        'response_data' => json_encode($res->result, JSON_UNESCAPED_UNICODE)
                    ]);
                    if (isset($res->result->card->number)) {
                        //check if card its no verified
                        $exist = $this->card->whereCardNo($res->result->card->number)->whereVerify(0)->first();
                        //if yes delete it
                        if ($exist){
                            $exist->delete();
                        }
                        //check if has verified card with this number.
                        $exist = $this->card->whereCardNo($res->result->card->number)->whereVerify(1)->first();
                        if ($exist) {
                            return [
                                'success' => false,
                                'error' => @translate('This card is already registered')
                            ];
                        }
                    }
                    $card = $this->createCard(request('card_title'), request('card_username'), $res->result->card ?? NULL, request('default'));
                    $payme_request = $this->paymeRequest->create([]);
                    $send_code_data = $this->generatePostData('cards.get_verify_code', [
                        'id' => $payme_request->id, 'data' => $card
                    ]);

                    $send_code_response = Payme::request('sendVerifyCode', $send_code_data);
                    if ($send_code_response->status() === 200) {
                        $res = $send_code_response->object();
                        if (isset($res->result)) {
                            $payme_request->update([
                                'request_data' => $send_code_data,
                                'response_data' => json_encode($res->result, JSON_UNESCAPED_UNICODE)
                            ]);
                            DB::commit();
                            return [
                                'success' => true,
                                'card' => $card,
                                'verify' => $res->result
                            ];
                        } elseif (isset($res->error)) {
                            $payme_request->update([
                                'request_data' => $send_code_data,
                                'response_data' => json_encode($res->error, JSON_UNESCAPED_UNICODE),
                                'failed' => 1
                            ]);
                            Log::error('payme sms verification error: ', array(json_encode($res->error, JSON_UNESCAPED_UNICODE)));
                            DB::rollback();
                            return response()->json([
                                'success' => false,
                                'error' => 'Ошибка сервера: ' . $res->error->message ?? ''
                            ]);
                        }
                    } else {
                        Log::error('payme server error: !200');
                        DB::rollback();
                        return response()->json([
                            'success' => false,
                            'error' => 'Ошибка сервера!'
                        ]);
                    }
                } elseif (isset($res->error)) {
                    $payme_request->update([
                        'request_data' => $card_data,
                        'response_data' => json_encode($res->result, JSON_UNESCAPED_UNICODE),
                        'failed' => 1
                    ]);
                    Log::error('payme server error: ', array(json_encode($res->error, JSON_UNESCAPED_UNICODE)));
                    DB::rollback();
                    return response()->json([
                        'success' => false,
                        'error' => 'Ошибка сервера: ' . $res->error->message ?? ''
                    ]);
                }
            } else {
                Log::error('payme server error: !200');
                DB::rollback();
                return response()->json([
                    'success' => false,
                    'error' => 'Ошибка сервера!'
                ]);
            }
        }
        if (request()->filled('method') && request('method') === 'verify_card') {
            $validator = Validator::make(request()->all(), [
                "method" => "required",
                "card_id" => "required",
                'code' => 'required'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'error' => $validator->errors()
                ]);
            }

            $card = $this->card->find(request()->card_id);

            $confirmed = $this->confirm(request(), $card);
            if (!$confirmed) {
                Log::error('error confirm card');
                session()->flash('error', 'Карта не подтверждена');
                DB::rollback();
                return response()->json([
                    'success' => false,
                    'error' => 'Введен неверный код'
                ]);
            } else {
                session()->flash('success', 'Карта успешна подтверждена');
                return ['success' => true];
            }
        }
        if (request()->filled('method') && request('method') === 'remove' && request()->filled('item')) {
            try {
                $card = base64_decode(request('item'));
                $exploded = explode('_', $card);
                if (isset($exploded[2]) && (isset($exploded[3]) && $exploded[3] == auth()->id())) {
                    $card = Card::find($exploded[2]);
                    if ($card) {
                        $payme_request = PaymeRequest::create([]);

                        $card_data = $this->generatePostData('cards.remove', [
                            'id' => $payme_request->id, 'card' => $card
                        ]);

                        $response = Payme::request('cardRemove', $card_data);

                        if ($response->status() === 200) {
                            $res = $response->object();
                            if (isset($res->result)) {
                                $payme_request->update([
                                    'request_data' => $card_data,
                                    'response_data' => json_encode($res->result, JSON_UNESCAPED_UNICODE)
                                ]);

                                if (isset($res->result->success)) {
                                    $card->delete();
                                    return redirect()->route('my_cards')->with('success', @translate('Your card has been successfully deleted'));
                                }
                            } elseif (isset($res->error)) {
                                $payme_request->update([
                                    'request_data' => $card_data,
                                    'response_data' => json_encode($res->error, JSON_UNESCAPED_UNICODE),
                                    'failed' => 1
                                ]);
                                return redirect()->route('my_cards')
                                    ->with('error', $res->error->message);
                            }
                        }
                    } else {
                        return redirect()->route('my_cards')
                            ->with('error', 'Card not found');
                    }
                } else {
                    return redirect()->route('my_cards')
                        ->with('error', 'Invalid card data');
                }
            } catch (\Exception $exception) {
                return redirect()->route('my_cards')
                    ->with('error', $exception->getMessage());
            }
        }

        $my_cards = $this->card->whereUserId(auth()->id())->where('verify', 1)->get();
        return view($this->theme . '.payme_cards.index', compact('my_cards'));
    }

    /**
     * @param $title
     * @param $username
     * @param $payme_response
     * @return mixed
     */
    protected function createCard($title, $username, $payme_response, $default = false)
    {
        $exist = $this->card->where([
            'card_no' => $payme_response->number,
            'user_id' => auth()->id(),
            'verify' => 0
        ])->first();

        if ($exist){
            $exist->delete();
        }

        $card = $this->card->create([
            'user_id' => auth()->id(),
            'title' => $title,
            'username' => $username,
            'card_date' => str_replace('/', '', $payme_response->expire),
            'card_no' => $payme_response->number,
            'card_token' => $payme_response->token,
            'verify' => $payme_response->verify ?? 0,
            'default' => !!$default,
            'recurrent' => !!$payme_response->recurrent
        ]);

        if ($default) {
            $this->card->whereUserId(auth()->id())->where('id', '!=', $card->id)->update(['default' => 0]);
        }

        return $card;
    }


    /**
     * @param $data
     * @return PaymentDescription
     */
    protected function createPaymentDescription($data)
    {
        $payment = new PaymentDescription();
        $payment->payment_method = $data->payment_method;
        $payment->user_id = auth()->id();
        $payment->course_id = $data->course_id;
        $payment->amount = (int)$data->price;
        $payment->auto_payment = $data->auto_payment;
        $payment->save();
        return $payment;
    }

    /**
     * @param $payment_id
     * @param $card_id
     * @return Invoice
     */
    public function createInvoice($payment_id, $card_id)
    {
        $invoice = new Invoice();
        $invoice->payment_description_id = $payment_id;
        $invoice->card_id = $card_id;
        $invoice->save();
        return $invoice;
    }

    /**
     * @param $method
     * @param $data
     * @return array
     */
    public function generatePostData($method, $data)
    {
        switch ($method) {
            case 'cards.create':
                $res = $this->clearCardNo($data['request']['card_no'] ?? $data->card_no, $data['request']['card_date'] ?? $data->card_date);
                $card_no = $res['card_no'];
                $card_date = $res['card_date'];
                return [
                    "id" => $data['id'],
                    "method" => $method,
                    "params" => [
                        "card" => [
                            "number" => $card_no,
                            "expire" => $card_date
                        ],
                        "save" => true
                    ]
                ];
            case 'cards.get_verify_code':
                return [
                    "id" => $data['id'],
                    "method" => $method,
                    "params" => [
                        "token" => (isset($data['card'])) ? $data['card']->card_token : $data['data']->card_token
                    ]
                ];
            case 'cards.verify':
                return [
                    "id" => $data['id'],
                    "method" => $method,
                    "params" => [
                        "token" => $data['card']->card_token,
                        "code" => $data['request']->code
                    ]
                ];
            case 'receipts.create':
                return [
                    "id" => $data['id'],
                    "method" => $method,
                    'params' => [
                        'amount' => intval($data['course']->price.'00'),
                        'account' => [
                            'order_id' => $data['payment']->id,
                            'user_id' => $data['payment']->user_id,
                            'course_id' => $data['payment']->course_id,
                        ],
                        'detail' => [
                            "items" => [
                                "title" => "Курс " . (int)$data['course']->name,
                                "price" => (int)$data['course']->price,
                                "count" => 1
                            ]
                        ],
                    ],
                ];
            case 'receipts.pay':
                $invoice = json_decode($data['invoice']->invoice_data);
                return [
                    "id" => $data['id'],
                    "method" => "receipts.pay",
                    "params" => [
                        "id" => $invoice->_id,
                        "token" => $data['card']->card_token,
                        "payer" => [
                            "user_id" => auth()->id()
                        ]
                    ]
                ];
            case 'cards.remove':
                return [
                    "id" => $data['id'],
                    "method" => "cards.remove",
                    "params" => [
                        "token" => $data['card']->card_token,
                    ]
                ];
        }
    }

    /**
     * @param $card_no
     * @param $card_date
     * @return array
     */
    protected function clearCardNo($card_no, $card_date)
    {
        $card_no = str_replace([' ', '-', ','], '', $card_no);
        $card_date = str_replace([' ', '-', '/', ','], '', $card_date);
        return [
            'card_no' => $card_no,
            'card_date' => $card_date,
        ];
    }

    /**
     * @param $request
     * @return array
     */
    protected function saveCard($request)
    {
        $payme_request = $this->paymeRequest->create([]);
        $card_data = $this->generatePostData('cards.create', [
            'id' => $payme_request->id, 'request' => $request->all()
        ]);
        $response = Payme::request('createCard', $card_data);
        if ($response->status() === 200) {
            $res = $response->object();
            if (isset($res->result)) {

                $payme_request->update([
                    'request_data' => $card_data,
                    'response_data' => json_encode($res->result, JSON_UNESCAPED_UNICODE)
                ]);
                $card = $this->createCard(request('card_title'), request('card_username'), $res->result->card ?? NULL, true);
                $payme_request = $this->paymeRequest->create([]);

                $send_code_data = $this->generatePostData('cards.get_verify_code', [
                    'id' => $payme_request->id, 'data' => $card
                ]);

                $send_code_response = Payme::request('sendVerifyCode', $send_code_data);

                if ($send_code_response->status() === 200) {
                    $res = $send_code_response->object();
                    if (isset($res->result)) {
                        $payme_request->update([
                            'request_data' => $send_code_data,
                            'response_data' => json_encode($res->result, JSON_UNESCAPED_UNICODE)
                        ]);
                        DB::commit();
                        return [
                            'success' => true,
                            'card' => $card,
                            'verify' => $res->result,
                            'auto_payment' => (int)$request->auto_payment
                        ];
                    } elseif (isset($res->error)) {
                        $payme_request->update([
                            'request_data' => $send_code_data,
                            'response_data' => json_encode($res->error, JSON_UNESCAPED_UNICODE),
                            'failed' => 1
                        ]);
                        Log::error('payme sms verification error: ', array(json_encode($res->error, JSON_UNESCAPED_UNICODE)));
                        DB::rollback();
                        return response()->json([
                            'success' => false,
                            'error' => 'Ошибка сервера: ' . $res->error->message ?? ''
                        ]);
                    }
                }
            } elseif (isset($res->error)) {
                //Dont saving on database
                $payme_request->update([
                    'request_data' => $card_data,
                    'response_data' => json_encode($res->error, JSON_UNESCAPED_UNICODE),
                    'failed' => 1,
                ]);
                Log::error('payme error: ', array(json_encode($res->error, JSON_UNESCAPED_UNICODE)));
                DB::rollback();
                return response()->json([
                    'success' => false,
                    'error' => 'Ошибка сервера: ' . $res->error->message ?? ''
                ]);
            }
        } else {
            Log::error('payme error: Status not 200');
            DB::rollback();
            return response()->json([
                'success' => false,
                'error' => 'Ошибка сервера!'
            ]);
        }
    }

    /**
     * @param $request
     * verify sms code and made the payment
     */
    protected function verifyCode($request)
    {
        // Verify card
        $card = $this->card->find($request->card_id);

        $verified = $card->verify === 0 ? false : true;

        //if error show msg to user
        if (!$verified) {
            $confirmed = $this->confirm($request, $card);
            if (!$confirmed) {
                Log::error('error confirm card');
                session()->flash('error', 'Карта не подтверждена');
                DB::rollback();
                return [
                    'success' => false,
                    'error_code' => 911,
                    'message' => 'Карта не подтверждена',
                ];
            }
        }

        $course = $this->course->find($request->course_id);
        if (!$course) {
            Log::error('DB error: Course not found');
            session()->flash('error', 'Курс не найден');
            DB::rollback();
            return [
                'success' => false,
                'message' => 'Course not found',
            ];
        }
        // end verify card

        //make payment
        $payment = $this->createPaymentDescription($request);
        $invoice = $this->createInvoice($payment->id, $card->id);
        $payme_request = $this->paymeRequest->create([]);

        $check_data = $this->generatePostData('receipts.create', [
            'payment' => $payment, 'course' => $course, 'invoice' => $invoice, 'id' => $payme_request->id
        ]);

        $invoice_response = Payme::request('createInvoice', $check_data);
        if ($invoice_response->status() === 200) {
            $res = $invoice_response->object();
            if (isset($res->result) && isset($res->result->receipt)) {
                $payme_request->update([
                    'request_data' => $check_data,
                    'response_data' => json_encode($res->result, JSON_UNESCAPED_UNICODE)
                ]);
                $invoice->update([
                    'invoice_data' => json_encode($res->result->receipt, JSON_UNESCAPED_UNICODE),
                    'invoice_status' => 1
                ]);

                $payme_request = $this->paymeRequest->create([]);

                $pay_data = $this->generatePostData('receipts.pay', [
                    'card' => $card, 'invoice' => $invoice, 'id' => $payme_request->id
                ]);

                $pay_response = Payme::request('pay', $pay_data);

                if ($pay_response->status() === 200) {
                    $res = $pay_response->object();
                    if (isset($res->result) && isset($res->result->receipt)) {
                        $payme_request->update([
                            'request_data' => $pay_data,
                            'response_data' => json_encode($res->result, JSON_UNESCAPED_UNICODE)
                        ]);
                        $payment->update(['payed_at' => $res->result->receipt->pay_time]);

                        $invoice->update([
                            'pay_data' => json_encode($res->result->receipt, JSON_UNESCAPED_UNICODE),
                            'payment_status' => 1
                        ]);

                        session()->flash('success', 'Success payment');
                        DB::commit();

                        /*put session and redirect*/
                        Session::forget('coupon');
                        request()->session()->put('payment', 'Payme');
                        return redirect()->route('checkout');

                    } elseif (isset($res->error)) {
                        $payme_request->update([
                            'request_data' => $pay_data,
                            'response_data' => json_encode($res->error, JSON_UNESCAPED_UNICODE),
                            'failed' => 1
                        ]);
                        $invoice->update([
                            'pay_data' => json_encode($res->result->receipt, JSON_UNESCAPED_UNICODE),
                            'payment_status' => 0
                        ]);
                        Log::error('payme invoice creating error: ', array(json_encode($res->error, JSON_UNESCAPED_UNICODE)));
                        DB::rollback();
                        return response()->json([
                            'success' => false,
                            'error' => 'Ошибка сервера: ' . $res->error->message ?? ''
                        ]);
                    }
                }
            } elseif (isset($res->error)) {
                $payme_request->update([
                    'request_data' => $check_data,
                    'response_data' => json_encode($res->error, JSON_UNESCAPED_UNICODE),
                    'failed' => 1
                ]);
                $invoice->update(['invoice_data' => json_encode($res->result->receipt, JSON_UNESCAPED_UNICODE)]);
                Log::error('payme invoice creating error: ', array(json_encode($res->error, JSON_UNESCAPED_UNICODE)));
                DB::rollback();
                return response()->json([
                    'success' => false,
                    'error' => 'Ошибка сервера: ' . $res->error->message ?? ''
                ]);
            }
        } else {
            $payme_request->update([
                'request_data' => $check_data,
                'response_data' => 'response status NOT 200',
                'failed' => 1,
            ]);
            Log::error('payme error: Status not 200');
            DB::rollback();
            return response()->json([
                'success' => false,
                'error' => 'Ошибка сервера!'
            ]);
        }
    }

    /**
     * @param $request
     * @param $card
     * @return bool
     */
    protected function confirm($request, $card)
    {
        $payme_request = PaymeRequest::create([]);

        $verify_data = $this->generatePostData('cards.verify', [
            'card' => $card, 'request' => $request, 'id' => $payme_request->id
        ]);

        $verify_response = Payme::request('verifyCard', $verify_data);

        if ($verify_response->status() === 200) {
            $res = $verify_response->object();
            if (isset($res->result) && isset($res->result->card->verify)) {
                $payme_request->update([
                    'request_data' => $verify_data,
                    'response_data' => json_encode($res->result, JSON_UNESCAPED_UNICODE)
                ]);
                $card->update(['verify' => !!$res->result->card->verify]);
                return true;
            } elseif (isset($res->error)) {
                $payme_request->update([
                    'request_data' => $verify_data,
                    'response_data' => json_encode($res->error, JSON_UNESCAPED_UNICODE),
                    'failed' => 1
                ]);
                Log::error('payme verify error: ', array(json_encode($res->error, JSON_UNESCAPED_UNICODE)));
                return false;
            }
        }
    }

    public function resendCode()
    {
        request()->validate(['card_id' => 'required']);

        $card = $this->card->find(request('card_id'));
        if (!$card){
            return [
                'success' => false,
                'msg' => 'Card not exist'
            ];
        }
        $payme_request = PaymeRequest::create([]);
        $verify_data = $this->generatePostData('cards.get_verify_code', [
            'card' => $card, 'request' => request(), 'id' => $payme_request->id
        ]);
        $verify_response = Payme::request('sendVerifyCode', $verify_data);
        if ($verify_response->status() === 200) {
            $res = $verify_response->object();
            if (isset($res->result) && isset($res->result->sent)) {
                $payme_request->update([
                    'request_data' => $verify_data,
                    'response_data' => json_encode($res->result, JSON_UNESCAPED_UNICODE)
                ]);
                return [
                    'success' => true
                ];
            } elseif (isset($res->error)) {
                $payme_request->update([
                    'request_data' => $verify_data,
                    'response_data' => json_encode($res->error, JSON_UNESCAPED_UNICODE),
                    'failed' => 1
                ]);
                return [
                    'success' => false,
                    'msg' => $res->error->message ?? ''
                ];
            }
        }
    }


}
