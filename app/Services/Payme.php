<?php


namespace App\Services;


use Illuminate\Support\Facades\Http;

class Payme
{
    public static function request($method, $data)
    {
        switch ($method){
            case 'createCard':
                return self::createCard($data);
                break;
            case 'sendVerifyCode':
                return self::sendVerifyCode($data);
                break;
            case 'verifyCard':
                return self::verifyCard($data);
                break;
            case 'createInvoice':
                return self::createInvoice($data);
                break;
            case 'pay':
                return self::pay($data);
                break;
            case 'cardRemove':
                return self::cardsRemove($data);
                break;
        }
    }

    protected static function createCard($data)
    {
        return Http::withHeaders([
            'X-Auth' => env('PAYME_SUBSCRIBE_MERCHANT_ID')
        ])->retry(3)->post(env('PAYME_PRD_URL'), $data);
    }

    protected static function sendVerifyCode($data)
    {
        return Http::withHeaders([
            'X-Auth' => env('PAYME_SUBSCRIBE_MERCHANT_ID')
        ])->retry(3)->post(env('PAYME_PRD_URL'), $data);
    }

    protected static function verifyCard($data)
    {
        return Http::withHeaders([
            'X-Auth' => env('PAYME_SUBSCRIBE_MERCHANT_ID')
        ])->retry(3)->post(env('PAYME_PRD_URL'), $data);
    }

    protected static function createInvoice($data)
    {
        return Http::withHeaders([
            'X-Auth' => env('PAYME_SUBSCRIBE_MERCHANT_ID').':'.env('PAYME_SUBSCRIBE_KEY')
        ])->retry(3)->post(env('PAYME_PRD_URL'), $data);
    }

    protected static function pay($data)
    {
        return Http::withHeaders([
            'X-Auth' => env('PAYME_SUBSCRIBE_MERCHANT_ID').':'.env('PAYME_SUBSCRIBE_KEY')
        ])->retry(3)->post(env('PAYME_PRD_URL'), $data);
    }

    protected static function cardsRemove($data)
    {
        return Http::withHeaders([
            'X-Auth' => env('PAYME_SUBSCRIBE_MERCHANT_ID').':'.env('PAYME_SUBSCRIBE_KEY')
        ])->retry(3)->post(env('PAYME_PRD_URL'), $data);
    }



}
