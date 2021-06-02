{{--
@author: ByteRain
@date: 06/07/20
--}}
@extends('frontend.app')
@section('content')

    <!-- ================================
      START CART AREA
  ================================= -->
    <section class="cart-area padding-top-120px padding-bottom-60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <h2>@translate(Get Your Subscription Package Now)</h2>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="card mt-5 mb-3 rounded shadow">
                <div class="row mt-5">
                    <div class="col-lg-6 col-md-6">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="price-card t-border-6 t-bg-color-7">
                                    <div class="price-card__header text-center mb-3">
                                        <h2 class="mt-0 mb-3 text-capitalize text-center t-text-light">
                                            <span class="badge badge-primary">{{ $subscription_package }}</span>
                                        </h2>
                                        <span class="h4 text-dark">{{ formatPrice($subscription_price) }} </span>
                                    </div>
                                    <div class="price-card__body t-pl-50 t-pr-50 t-mt-30">
                                        <ul class="t-list align-items-start h4 text-center">
                                            <li class="price-list__item text-dark sm-text mb-3">
                                                <i class="fa fa-check-circle text-success"
                                                   aria-hidden="true"></i> {{ App\SubscriptionCourse::where('subscription_duration','LIKE','%'.$subscription_package.'%')->where('subscription_id', $subscription_id)->count() }}
                                                @translate(Courses)
                                            </li>
                                            <li class="price-list__item text-dark sm-text mb-3">
                                                <i class="fa fa-check-circle text-success" aria-hidden="true"></i>
                                                @translate(Anytime renew subscription)
                                            </li>
                                            <li class="price-list__item text-dark sm-text mb-3">
                                                <i class="fa fa-check-circle text-success" aria-hidden="true"></i>
                                                @translate(Courses & tutorials)
                                            </li>
                                            <li class="price-list__item text-dark sm-text mb-3">
                                                <i class="fa fa-check-circle text-success" aria-hidden="true"></i>
                                                @translate(Quiz & certificate)
                                            </li>
                                            <li class="price-list__item text-dark sm-text mb-3">
                                                <i class="fa fa-check-circle text-success" aria-hidden="true"></i>
                                                @translate(Automatic enroll new subscription courses)
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 col-md-6">
                        <div class="card border-0">
                            <div class="card-body">
                                <img src="{{ filePath('get_subs.png') }}" class="img-fluid w-100 rounded"
                                     alt="#Subscription">
                            </div>
                        </div>
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div>
            @php
                $total_price = $subscription_price;
                if(Auth::user()->user_type == "Student") {
                     $student = \App\Model\Student::where('user_id', Auth::user()->id)->first();
                     if ($student->is_student == 1 && $student->school_id != null) {
                         $total_price = 0;
                     }
                 }
            @endphp
            <div class="cart-detail-wrap mt-4">
                <div class="row">
                    @if(env('COUPON_ACTIVE') != "NO" && couponRouteForBlade())
                        <div class="col-lg-6 ml-auto">
                            <div class="contact-form-action mt-4">
                                @if(!Session::has('coupon'))
                                    <h3 class="widget-title font-size-20">@translate(Have coupon code? Apply here)</h3>
                                    <form action="{{ route('checkout.coupon.store') }}"
                                          class="needs-validation"
                                          novalidate
                                          method="post">
                                        @csrf
                                        <div class="input-box">
                                            <div class="form-group mb-0">
                                                <!-- Search bar -->
                                                <input class="form-control" type="text" name="code"
                                                       placeholder="Enter Coupon Code Here">
                                                <input type="hidden" name="total" value="{{ onlyPrice($total_price) }}">
                                                <button type="submit" class="btn btn-primary mt-2">@translate(Apply
                                                    Coupon)
                                                </button>
                                                <!-- Search bar END -->
                                            </div>
                                        </div><!-- end input-box -->
                                    </form>
                                @endif
                                <div class="mt-4">
                                    @if(Session::has('success'))
                                        <p class="alert alert-success">{{ Session::get('success') }}</p>
                                    @endif
                                    @if(Session::has('error'))
                                        <p class="alert alert-danger">{{ Session::get('error') }}</p>
                                    @endif
                                </div>
                                @php
                                    if(Session::has('coupon')) {
                                        $coupon = session()->get('coupon')['name'];
                                        $rate = \App\Coupon::where('code', $coupon)->select('rate')->first()->rate;
                                        $total_price = $subscription_price - $rate;
                                        if ($total_price < 0) {
                                            $total_price = 0;
                                        }
                                    }
                                @endphp
                                @if(Session::has('coupon'))
                                <!-- coupon -->
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <figure>
                                                <figcaption>
                                                    <h3>@translate(Coupon Code Applied): <span
                                                                class="badge badge-success">{{ $coupon }}</span>
                                                    </h3>
                                                    <br>
                                                    <h3>@translate(Discounted Amount):
                                                        <span class="badge badge-success"> {{ couponDiscount($coupon) }} </span>
                                                    </h3>
                                                </figcaption>
                                                <form action="{{ route('checkout.coupon.destroy') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="coupon"
                                                               value="{{ $coupon }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-danger">@translate(Try
                                                            Another Coupon)
                                                        </button>
                                                    </div>
                                                </form>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- coupon END -->
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="cart-detail-wrap mt-4">
                <div class="row">
                    <div class="col-lg-6 ml-auto">
                        <div class="shopping-cart-detail-item">
                            <div class="shopping-cart-content pt-2">
                                <ul class="list-items">
                                    <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                                        <span class="primary-color">@translate(Total):</span>
                                        <span class="primary-color-3">{{formatPrice($total_price)}}</span>
                                    </li>
                                </ul>
                                @if(onlyPrice($total_price) == 0)
                                    <div class="btn-box mt-4">
                                        <a href="{{route('free.payment')}}" class="theme-btn theme-btn-light">@translate(Checkout)</a>
                                        <input type="hidden" name="subscription_price"
                                               value="{{ $subscription_price }}">
                                        <input type="hidden" name="subscription_package"
                                               value="{{ $subscription_package }}">
                                    </div>
                                @else
                                    {{-- checkout --}}
                                    <div class="card-box-shared">
                                        <div class="card-box-shared-title">
                                            <h3 class="widget-title">@translate(Select Payment Method)</h3>
                                        </div>
                                        <div class="card-box-shared-body p-0">
                                            <div class="payment-method-wrap">
                                                <div class="checkout-item-list">
                                                    <div class="accordion" id="paymentMethodExample">

                                                        {{-- Payme --}}
                                                        @if (env('PAYME_PRD_URL') != NULL && env('PAYME_SUBSCRIBE_KEY') != NULL && env('PAYME_SUBSCRIBE_MERCHANT_ID') != NULL)
                                                            @if($my_cards->count())
                                                                <div class="card">
                                                                    <div class="card-header w-75" id="headingTwo">
                                                                        <div class="checkout-item d-flex align-items-center justify-content-between">
                                                                            <label for="radio-8 payme-label"
                                                                                   class="radio-trigger collapsed mb-0 w-100"
                                                                                   data-target="#selectCard"
                                                                                   aria-expanded="false"
                                                                                   data-toggle="modal"
                                                                                   aria-controls="collapseTwo">
                                                                            <span class="widget-title font-size-18 payme-btn d-block text-center">
                                                                              <img src="{{ asset('frontend/images/payme.png') }}"
                                                                                   class="img-fluid" alt="payme_logo">
                                                                            </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="card">
                                                                    <div class="card-header w-75" id="headingTwo">
                                                                        <div class="checkout-item d-flex align-items-center justify-content-between">
                                                                            <label for="radio-8 payme-label"
                                                                                   class="radio-trigger collapsed mb-0 w-100"
                                                                                   data-target="#addCard"
                                                                                   aria-expanded="false"
                                                                                   data-toggle="modal"
                                                                                   aria-controls="collapseTwo">
                                                                            <span class="widget-title font-size-18 payme-btn d-block text-center">
                                                                              <img src="{{ asset('frontend/images/payme.png') }}"
                                                                                   class="img-fluid" alt="payme_logo">
                                                                            </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endif
                                                        {{-- Payme::END --}}

                                                        @if(env('STRIPE_KEY') != NULL && env('STRIPE_SECRET') != NULL)
                                                            {{-- Stripe --}}
                                                            <div class="card">
                                                                <div class="card-header w-75" id="headingTwo">
                                                                    <div class="checkout-item d-flex align-items-center justify-content-between">
                                                                        <label for="radio-8 stripe-label"
                                                                               class="radio-trigger collapsed mb-0 w-100"
                                                                               data-toggle="collapse"
                                                                               data-target="#collapseTwo"
                                                                               aria-expanded="false"
                                                                               aria-controls="collapseTwo">
                                                                            <span class="widget-title font-size-18 stripe-btn d-block text-center">
                                                                              <img src="{{ asset('frontend/images/stripe.png') }}"
                                                                                   class="img-fluid" alt="stripe_logo">
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div id="collapseTwo" class="collapse"
                                                                     aria-labelledby="headingTwo"
                                                                     data-parent="#paymentMethodExample">
                                                                    <div class="card-body mb-3">
                                                                        <div class="contact-form-action">
                                                                            <form role="form"
                                                                                  action="{{ route('stripe.post') }}"
                                                                                  method="post"
                                                                                  class="require-validation"
                                                                                  data-cc-on-file="false"
                                                                                  data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                                                  id="payment-form">
                                                                                @csrf
                                                                                <div class="input-box">
                                                                                    <label class="label-text">@translate(Name
                                                                                        on Card)
                                                                                        <span class="primary-color-2 ml-1">*</span>
                                                                                    </label>
                                                                                    <div class="form-group">
                                                                                        <span class="la la-pencil input-icon"></span>
                                                                                        <input class="form-control"
                                                                                               placeholder="Card Name"
                                                                                               type="text" name="text"
                                                                                               required="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-box">
                                                                                    <label class="label-text">@translate(Card
                                                                                        Number)
                                                                                        <span class="primary-color-2 ml-1">*</span>
                                                                                    </label>
                                                                                    <div class="form-group">
                                                                                        <span class="la la-pencil input-icon"></span>
                                                                                        <input class="form-control card-number"
                                                                                               name="text"
                                                                                               placeholder="1234  5678  9876  5432"
                                                                                               required="" type="text">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-box">
                                                                                    <label class="label-text">@translate(Expiry
                                                                                        Month)
                                                                                        <span class="primary-color-2 ml-1">*</span>
                                                                                    </label>
                                                                                    <div class="form-group">
                                                                                        <span class="la la-pencil input-icon"></span>
                                                                                        <input class="form-control card-expiry-month"
                                                                                               placeholder="MM"
                                                                                               required=""
                                                                                               name="text" type="text">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-box">
                                                                                    <label class="label-text">@translate(Expiry
                                                                                        Year)
                                                                                        <span class="primary-color-2 ml-1">*</span>
                                                                                    </label>
                                                                                    <div class="form-group">
                                                                                        <span class="la la-pencil input-icon"></span>
                                                                                        <input class="form-control card-expiry-year"
                                                                                               placeholder="YY"
                                                                                               required=""
                                                                                               name="text" type="text">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-box">
                                                                                    <label class="label-text">@translate(CVC)
                                                                                        <span class="primary-color-2 ml-1">*</span>
                                                                                    </label>
                                                                                    <div class="form-group">
                                                                                        <span class="la la-pencil input-icon"></span>
                                                                                        <input class="form-control card-cvc"
                                                                                               placeholder="CVC"
                                                                                               required=""
                                                                                               name="text" type="text">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-box">
                                                                                    <input type="hidden" name="name"
                                                                                           value="{{ Auth::user()->name }}">
                                                                                    <input type="hidden" name="amount"
                                                                                           value="{{ StripePrice($total_price) }}">
                                                                                    <input type="hidden"
                                                                                           name="subscription_price"
                                                                                           value="{{ $subscription_price }}">
                                                                                    <input type="hidden"
                                                                                           name="subscription_package"
                                                                                           value="{{ $subscription_package }}">
                                                                                </div>
                                                                                <button type="submit"
                                                                                        class="theme-btn d-block text-center m-auto">
                                                                                    @translate(Proceed)({{formatPrice($total_price)}})
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end card -->
                                                            {{-- Stripe::END --}}
                                                        @endif


                                                    <!-- end card -->
                                                        {{-- Paypal button --}}

                                                        <div class="card">
                                                            <div id="paypal-button"></div>
                                                        </div><!-- end card -->
                                                        {{-- Paypal button:END --}}

                                                        {{-- PAYTM PAYMENT --}}
                                                        @if(env('PAYTM_MERCHANT_ID') != "" &&  env('PAYTM_MERCHANT_KEY') != "" &&  env('PAYTM_ACTIVE') != "NO" && paytmRouteForBlade())
                                                            {{--PAYTM--}}
                                                            <form action="{{ route('paytm.payment') }}" method="POST"
                                                                  id="payTmForm">
                                                                @csrf
                                                                <input type="hidden" name="amount"
                                                                       value="{{ PaytmPrice($total_price) }}">
                                                                <input type="hidden" name="subscription_price"
                                                                       value="{{ $subscription_price }}">
                                                                <input type="hidden" name="subscription_package"
                                                                       value="{{ $subscription_package }}">
                                                            </form>
                                                            <a href="javascript:void()" title="Pay via PayTM"
                                                               onclick="paytmPay()">
                                                                <div class="card border-bottom-0 paytm-top">
                                                                    <div class="card-header">
                                                                        <div class="checkout-item d-flex align-items-center justify-content-between">
																<span class="widget-title font-size-18 stripe-btn w-75 d-block text-center font-weight-bold m-auto">
																		<img src="{{ filePath('paytm.png') }}"
                                                                             height="25px"
                                                                             width="80px" alt="Paytm">
																</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            {{--PAYTM ends--}}
                                                        @endif

                                                        {{-- PAYTM PAYMENT::END --}}
                                                        <form id="paypal-form" method="post"
                                                              action="{{route('paypal.paymnet')}}" class="invisible">
                                                            @csrf
                                                            <input type="hidden" name="orderID" id="orderID">
                                                            <input type="hidden" name="payerID" id="payerID">
                                                            <input type="hidden" name="paymentID" id="paymentID">
                                                            <input type="hidden" name="paymentToken" id="paymentToken">
                                                            <input type="hidden" value="{{PaypalPrice($total_price)}}"
                                                                   name="amount" id="amount">

                                                            <input type="hidden" name="subscription_price"
                                                                   value="{{ $subscription_price }}">

                                                            <input type="hidden" name="subscription_package"
                                                                   value="{{ $subscription_package }}">

                                                        </form>

                                                    </div><!-- end accordion -->
                                                </div>
                                            </div><!-- end payment-method-wrap -->
                                        </div><!-- end card-box-shared-body -->


                                        <div class="m-5">
                                            @if (env('PAYME_PRD_URL') != NULL || env('PAYPAL_CLIENT_ID') != NULL || env('STRIPE_KEY') != NULL)
                                                <h5>@translate(We accept -)</h5>
                                            @endif

                                            @if (env('PAYME_PRD_URL') != NULL && env('PAYME_SUBSCRIBE_KEY') != NULL && env('PAYME_SUBSCRIBE_MERCHANT_ID') != NULL)
                                                <img src="{{ filePath('payme.png') }}" class="w-25 p-2" alt="#payMe">
                                            @endif

                                            @if (env('PAYPAL_CLIENT_ID') != NULL && env('PAYPAL_APP_SECRET') != NULL)
                                                <img src="{{ filePath('paypal.png') }}" class="w-25 p-2" alt="#paypal">
                                            @endif

                                            @if (env('PAYTM_ACTIVE') != 'NO' && env('PAYTM_MERCHANT_ID') != NULL  && env('PAYTM_MERCHANT_KEY') != NULL)
                                                <img src="{{ filePath('paytm.png') }}" alt="#paytm" class="w-25 p-2">
                                            @endif

                                            @if (env('STRIPE_KEY') != NULL && env('STRIPE_SECRET') != NULL)
                                                <img src="{{ filePath('stripe.png') }}" alt="#stripe" class="w-25 p-2">
                                            @endif

                                        </div>

                                    </div>
                                @endif
                                {{-- checkout::END --}}


                                {{-- stripe --}}

                            </div><!-- end shopping-cart-content -->
                        </div><!-- end shopping-cart-detail-item -->
                    </div><!-- end col-lg-4 -->

                </div><!-- end row -->
            </div>
        </div><!-- end container -->
    </section><!-- end cart-area -->
    <!-- ================================
        END CART AREA
    ================================= -->
@endsection

@if (env('PAYME_PRD_URL') != NULL && env('PAYME_SUBSCRIBE_KEY') != NULL && env('PAYME_SUBSCRIBE_MERCHANT_ID') != NULL)
    @include('payme.scripts.checkout')
    @if($my_cards->count())
        @include('payme.modals.select_card')
    @else
        @include('payme.modals.add_card')
    @endif
@endif

@section('js')
    @if (env('STRIPE_KEY') != NULL && env('STRIPE_SECRET') != NULL)
        {{-- stripe --}}
        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <script type="text/javascript">
            "use strict"
            $(function () {
                var $form = $(".require-validation");
                $('form.require-validation').bind('submit', function (e) {
                    var $form = $(".require-validation"),
                        inputSelector = ['input[type=email]', 'input[type=password]',
                            'input[type=text]', 'input[type=file]',
                            'textarea'].join(', '),
                        $inputs = $form.find('.required').find(inputSelector),
                        $errorMessage = $form.find('div.error'),
                        valid = true;
                    $errorMessage.addClass('hide');

                    $('.has-error').removeClass('has-error');
                    $inputs.each(function (i, el) {
                        var $input = $(el);
                        if ($input.val() === '') {
                            $input.parent().addClass('has-error');
                            $errorMessage.removeClass('hide');
                            e.preventDefault();
                        }
                    });

                    if (!$form.data('cc-on-file')) {
                        e.preventDefault();
                        Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                        Stripe.createToken({
                            number: $('.card-number').val(),
                            cvc: $('.card-cvc').val(),
                            exp_month: $('.card-expiry-month').val(),
                            exp_year: $('.card-expiry-year').val()
                        }, stripeResponseHandler);
                    }

                });

                function stripeResponseHandler(status, response) {
                    if (response.error) {
                        $('.error')
                            .removeClass('hide')
                            .find('.alert')
                            .text(response.error.message);
                    } else {
                        // token contains id, last4, and card type
                        var token = response['id'];
                        // insert the token into the form so it gets submitted to the server
                        $form.find('input[type=text]').empty();
                        $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                        $form.get(0).submit();
                    }
                }
            });
        </script>
    @endif

    @if (env('PAYPAL_CLIENT_ID') != NULL && env('PAYPAL_APP_SECRET') != NULL)
        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
        <script>
            "use strict"
            paypal.Button.render({
                // Configure environment
                env: '{{env('PAYPAL_ENVIRONMENT')}}',
                client: {
                    production: '{{env('PAYPAL_CLIENT_ID')}}'
                },
                //Todo::must be  env data in client
                // Customize button (optional)
                locale: 'en_US',
                style: {
                    size: 'responsive',
                    color: 'gold',
                    shape: 'pill',
                    label: 'checkout',
                },

                // Enable Pay Now checkout flow (optional)
                commit: true,

                // Set up a payment
                payment: function (data, actions) {
                    return actions.payment.create({
                        transactions: [{
                            amount: {
                                total: '{{$total_price}}',
                                currency: 'USD'
                            }
                        }]
                    });
                },
                // Execute the payment
                onAuthorize: function (data, actions) {
                    return actions.payment.execute().then(function () {
                        // Show a confirmation message to the buyer
                        /*append data in input form*/
                        $('#orderID').val(data.orderID);
                        $('#payerID').val(data.payerID);
                        $('#paymentID').val(data.paymentID)
                        $('#paymentToken').val(data.paymentToken)
                        $('#paypal-form').submit();
                    });
                }
            }, '#paypal-button');
        </script>
    @endif

    {{-- PAYTM START --}}
    @if(env('PAYTM_MERCHANT_ID') != "" &&  env('PAYTM_MERCHANT_KEY') != "" &&  env('PAYTM_ACTIVE') != "NO" && paytmRouteForBlade())
        <script>
            function paytmPay() {
                $('#payTmForm').submit();
            }
        </script>
    @endif

    {{-- PAYTM END --}}
@endsection
