{{--
@author: ByteRain
@date: 06/07/20
--}}
@extends('frontend.app')
@section('content')
  <!-- ================================
      START DASHBOARD AREA
  ================================= -->
  <section class="dashboard-area">

      @include('frontend.dashboard.sidebar')
      <div class="dashboard-content-wrap">
             <div class="container-fluid">
                 <div class="row mt-5">
                     <div class="col-lg-12">
                         <div class="card-box-shared">
                             <div class="card-box-shared-title">
                                 <div class="breadcrumb-content dashboard-bread-content d-flex align-items-center justify-content-between">
                                 <h3 class="widget-title" style="color: black">@translate(My Cards)</h3>
                                 <div class="card-btn-box"
                                      data-target="#addCard"
                                      aria-expanded="false"
                                      data-toggle="modal">
                                     <button class="theme-btn">@translate(Add debit / credit card)</button>
                                 </div>
                                 </div>
                             </div>
                             <div class="card-box-shared-body">
                                 @if($message = session()->get('success'))
                                     <div class="alert alert-success mb-3">{{ $message }}</div>
                                 @endif
                                 <div class="statement-table purchase-table table-responsive mb-5">
                                     <table class="table">
                                         <thead>
                                         <tr>
                                             <th scope="col">@translate(S/L)</th>
                                             <th scope="col">@translate(Номер карты)</th>
                                             <th scope="col">@translate(Название)</th>
                                             <th scope="col">@translate(Владелец)</th>
                                             <th scope="col" class="d-flex justify-content-end">@translate(Actions)</th>
                                         </tr>
                                         </thead>
                                         <tbody>
                                           @foreach ($my_cards as $card)
                                             <tr>
                                                 <th scope="row">
                                                     <div class="statement-info">
                                                         <ul class="list-items">
                                                             <li>{{ $loop->index+1 }}</li>
                                                         </ul>
                                                     </div>
                                                 </th>
                                                 <td>
                                                     <div class="statement-info">
                                                         <ul class="list-items">
                                                             <ul class="list-items">
                                                                 <li>{{ $card->title }}</li>
                                                             </ul>
                                                         </ul>
                                                     </div>
                                                 </td>
                                                 <td>
                                                     <div class="statement-info">
                                                         <ul class="list-items">
                                                             <li>{{ $card->username }}</li>
                                                         </ul>
                                                     </div>
                                                 </td>
                                                 <td>
                                                     <div class="statement-info">
                                                         <ul class="list-items">
                                                             <li>{{ $card->card_no }} - {{ $card->card_date }}</li>
                                                         </ul>
                                                     </div>
                                                 </td>
                                                 <td>
                                                     <div class="statement-info d-flex justify-content-end">
                                                         <ul class="list-items">
                                                             <a href="{{ route('my_cards') .'?method=remove&item='. base64_encode('remove_card_'.$card->id.'_'.auth()->id()) }}"
                                                                     class="btn btn-danger w-20 mt-2">@translate(remove)</a>
                                                         </ul>
                                                     </div>
                                                 </td>
                                             </tr>
                                           @endforeach
                                         </tbody>
                                     </table>
                                 </div>

                             </div>
                         </div>
                     </div><!-- end col-lg-12 -->
                 </div><!-- end row -->
                 @include('frontend.dashboard.footer')

             </div><!-- end container-fluid -->
         </div><!-- end dashboard-content-wrap -->

  </section><!-- end dashboard-area -->
  <!-- ================================
      END DASHBOARD AREA
  ================================= -->
  <div class="border-top pt-2">
      <div class="modal fade" id="addCard" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <form action="" class="add_card" method="POST">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">@translate(Add new card)</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <div class="d_card rounded bg-white shadow-sm p-3 border">
                              @csrf
                              <input type="hidden" name="method" value="add_card">
                              <div class="text-right">
                                    <span class="badge badge-pill badge-secondary" data-container="body"
                                          data-toggle="popover" data-placement="bottom"
                                          data-content="Данные вашей карты не передаются данному сервису и сохранаяются на безопасной территории сервиса Payme"
                                          data-original-title="" title="">?</span>
                              </div>
                              <div class="row">
                                  <div class="col-6">
                                      <div class="form-group">
                                          <label for="">Номер карты <i class="text-danger">*</i></label>
                                          <input type="text" class="form-control form-control-sm" name="card_no"
                                                 placeholder="**** **** **** ****" required>
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <label for="">Срок <i class="text-danger">*</i></label>
                                          <input type="text" class="form-control form-control-sm" name="card_date"
                                                 placeholder="MM/YY" required>
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <label for="">Название <i class="text-danger">*</i></label>
                                          <input type="text" class="form-control form-control-sm" name="card_title"
                                                 placeholder="Название карты" required>
                                      </div>
                                  </div>
                                  <div class="col-6">
                                      <div class="form-group">
                                          <label for="">Владелец <i class="text-danger">*</i></label>
                                          <input type="text" class="form-control form-control-sm" name="card_username" required>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col">
                                      <div class="form-group">
                                          <div class="form-check">
                                              <input type="checkbox" class="form-check-input" name="default" value="1" id="exampleCheck3">
                                              <label class="form-check-label" for="exampleCheck3">@translate(Set default)</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col text-right">
                                      <img
                                              src="data:image/svg+xml,%3Csvg id='Layer_1' data-name='Layer 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 138 40'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill:%23333;%7D.cls-2%7Bfill:%233cc;%7D.cls-3%7Bfill:%23fff;%7D%3C/style%3E%3C/defs%3E%3Cg id='Layer_2' data-name='Layer 2'%3E%3Cg id='Layer_1-2' data-name='Layer 1-2'%3E%3Cpath class='cls-1' d='M22.73,3.95a7.1,7.1,0,0,0-1.85-2A9.18,9.18,0,0,0,18.45.77,13.68,13.68,0,0,0,15.56.16,34,34,0,0,0,12.1,0h-10A1.74,1.74,0,0,0,.2,1.62s0,.06,0,.09V17.95a15.37,15.37,0,0,0,6.57,7V21.69a1.92,1.92,0,0,1,1.75-2.08h3q6.14,0,9.37-2.57t3.28-7.62a12,12,0,0,0-.34-2.88A9,9,0,0,0,22.73,3.95Zm-5.86,8.35a3.52,3.52,0,0,1-1.49,1.39,6,6,0,0,1-2.15.57,19.58,19.58,0,0,1-2.47.15H7.88c-.69,0-1.12-.56-1.12-1.38V6.33A1,1,0,0,1,7.88,5.27h2.88q1.4,0,2.64.08a5.76,5.76,0,0,1,2.13.52A3.21,3.21,0,0,1,17,7.19a5.09,5.09,0,0,1,.51,2.52A5.08,5.08,0,0,1,16.87,12.29ZM6.78,25.93A18.19,18.19,0,0,1,.2,21.79v7.85a1.12,1.12,0,0,0,1,1.27H5.72c1.2,0,1.06-1.28,1.06-1.28ZM68.9,8.55H65a1.58,1.58,0,0,0-1.64,1.21L58.83,22.24s-4-11.37-4.3-12.25a1.82,1.82,0,0,0-1.76-1.45H49.18c-1.28,0-1.28,1-1.11,1.39s5.08,13.85,7,19a7.52,7.52,0,0,1,.63,2,5.28,5.28,0,0,1-.76,1.92,4.93,4.93,0,0,1-.5.7c3.7-1.1,8-5.11,10.16-9.44,2.18-6,5.05-14,5.18-14.41C69.92,9.07,69.92,8.55,68.9,8.55ZM51.52,34.77a9.47,9.47,0,0,1-1-.08c-.41-.06-1.19,0-1.19.7v3c0,1.15.56,1.23.85,1.31A12.92,12.92,0,0,0,53,40a7.29,7.29,0,0,0,3.25-.67,7.76,7.76,0,0,0,2.43-1.92,13.29,13.29,0,0,0,1.92-2.88q.83-1.66,1.58-3.67l.58-1.59C61.6,30.42,56.48,35.25,51.52,34.77ZM45.62,12.14a5.26,5.26,0,0,0-.86-1.39,6.06,6.06,0,0,0-1.22-1A8.92,8.92,0,0,0,42,8.91a11.53,11.53,0,0,0-1.69-.51,13.72,13.72,0,0,0-2-.29Q37.23,8,35.89,8q-8.94,0-10.18,5.64a1,1,0,0,0,.88,1.24h3.67c1,0,1-.31,1.38-1.17a2.57,2.57,0,0,1,.86-1.18,5.15,5.15,0,0,1,3.16-.81,4.5,4.5,0,0,1,2.95.73,3.44,3.44,0,0,1,1.09,2.38c0,1.24-.38,2.06-1.92,2.06-3.65-.13-7.57.28-9.78,1.55a7.23,7.23,0,0,0-3.46,6.38,6.52,6.52,0,0,0,.59,2.88,5.71,5.71,0,0,0,1.65,2A7,7,0,0,0,29.26,31a11.53,11.53,0,0,0,3.14.4,13.59,13.59,0,0,0,4.21-.6A15.7,15.7,0,0,0,40,28.89v.7c0,.69.21,1.31,1,1.31h4.25c.86,0,1.06-.61,1.06-1.37V16.44A16.14,16.14,0,0,0,46.14,14,7.68,7.68,0,0,0,45.62,12.14ZM39.81,25s-1.1,2.3-5,2.3a4.41,4.41,0,0,1-2.64-.73,2.61,2.61,0,0,1-1-2.28,2.88,2.88,0,0,1,1.65-2.82,12.59,12.59,0,0,1,4.95-.83,1.81,1.81,0,0,1,2.08,1.8Z'/%3E%3Cpath class='cls-2' d='M137,16.58a5,5,0,0,1,0,5.28c-1,1.52-6.45,7.34-8.25,9.21-1.56,1.62-3.67,3.26-5.76,3.26H79.7c-5.86,0-6.21-2-6.21-6.46V9.68c0-4.57,1.35-5.9,5.36-5.9h44.24c2.07,0,3.92,1.06,6,3.2C130.91,8.81,136.28,15.5,137,16.58Z'/%3E%3Cpath class='cls-3' d='M83.32,10.81V10.7c0-.59,0-1.16-1-1.16H78.69c-.85,0-.89.46-.89,1.18v4.8A15.17,15.17,0,0,1,83.32,10.81Z'/%3E%3Cpath class='cls-3' d='M107.63,28.17v-.26h0V16.33q0-7.27-6.42-7.27a6.4,6.4,0,0,0-3.36,1,12.18,12.18,0,0,0-2.93,2.56,5.1,5.1,0,0,0-2.08-2.63,6.89,6.89,0,0,0-3.61-.85,8.39,8.39,0,0,0-5.11,1.76c-.32.32-6.33,5-6.33,9.88v7.41c0,.23-.12,1.13.89,1.13h3.77c1.17,0,1.06-.77,1.06-1.09v-12c.63-.85,1.92-2.88,4.05-2.88a1.92,1.92,0,0,1,1.76.83,5.25,5.25,0,0,1,.54,2.76v9.35h0v1.92c0,.23-.12,1.13.89,1.13h3.73c1.17,0,1.06-.77,1.06-1.09v-.26h0V16.19c.68-.85,2-2.88,4.05-2.88a2,2,0,0,1,1.79.83,5.18,5.18,0,0,1,.55,2.76v9.35h0v1.92c0,.23-.12,1.13.89,1.13h3.77C107.77,29.24,107.63,28.48,107.63,28.17Z'/%3E%3Cpath class='cls-3' d='M128.42,23.46a8.63,8.63,0,0,1-8.54,5.61c-5.76,0-9.6-3.92-9.6-9.8s4-10,9.4-10,9,3.74,9.23,9.77c0,.77-.19,1.45-1.16,1.45H115.53c.08,3.23,1.63,5,4.39,5a3.84,3.84,0,0,0,3.54-2.14,1.36,1.36,0,0,1,1.15-.59h3.15a.63.63,0,0,1,.65.74ZM119.7,13c-2.29,0-3.84,1.59-4.18,4.21h8.2C123.51,14.92,122.27,13,119.7,13Z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"
                                              alt="" width="50">
                                  </div>
                              </div>
                          </div>
                          <small>Нажимая кнопку Save, вы присоединяетесь к <a href="https://cdn.payme.uz/terms/main.html" target="_blank">условиям офферты</a></small>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">@translate(Cancel)</button>
                          <button type="button" class="btn btn-primary add_card_btn btn-sm">@translate(Save)</button>
                      </div>
                  </form>
                  <form action="" class="verify_card" method="POST" style="display: none">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">@translate(Verify card)</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <div class="d_card rounded bg-light shadow-sm p-3 border">
                              @csrf
                              <input type="hidden" name="method" value="verify_card">
                              <input type="hidden" name="card_id">
                              <div class="form-group">
                                  <label for="">Введите отправленный код на <span id="phone"></span></label>
                                  <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text" id="timer">60</span>
                                      </div>
                                      <input type="text" class="form-control" name="code" required>
                                  </div>
                              </div>
                              <div id="error"></div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">@translate(Cancel)</button>
                          <button type="button" class="btn btn-primary btn-sm submit_verify">@translate(Send)</button>
                          <button type="button" class="btn btn-primary btn-sm resend-code" style="display: none">@translate(Resend)</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

  <!-- Modal -->
  <div class="modal modal-error" id="modalErrorCard" role="dialog">
      <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header" style="background-color: #ff0000;">
                  <h5 class="modal-title">@translate(Ooops!)</h5>
              </div>
              <div class="modal-body">
                  <p id="error_message">
                  </p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary btn-navi" data-dismiss="modal" id="modalErrorOK">@translate(OK)</button>
              </div>
          </div>
      </div>
  </div>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $('.verify_card').on('keyup keypress', function(e) {
                const keyCode = e.keyCode || e.which;
                if (keyCode === 13) {
                    e.preventDefault();
                    return false;
                }
            });

            $('input[name=card_no]').inputmask("9999 9999 9999 9999");
            $('input[name=card_date]').inputmask("99/99");
            $(function () {
                $('[data-toggle="popover"]').popover()
            })

            $('.add_card_btn').on('click', function (e) {
                e.preventDefault()
                let form = $(this).parents('form');
                let data = {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    method: form.find('input[name=method]').val(),
                    card_no: form.find('input[name=card_no]').val(),
                    card_date: form.find('input[name=card_date]').val(),
                    card_title: form.find('input[name=card_title]').val(),
                    card_username: form.find('input[name=card_username]').val(),
                    default: (form.find('input[name=default]:checked').val() === undefined) ? 0 : 1
                };
                $.ajax({
                    method: 'POST',
                    url: '{{ action('PaymeController@cabinet') }}',
                    data: data,
                    success(data){
                        if(data.success){
                            jQuery.noConflict();
                            $('form.add_card').hide()
                            $('form.verify_card').show()
                            $('#phone').html(data.verify.phone)
                            $('input[name=card_id]').val(data.card.id)
                            let timer = + String(data.verify.wait).slice(0, -3);
                            let x = setInterval(function() {
                                if(timer > -1){
                                    $('#timer').html(timer)
                                    timer--;
                                    if(timer == '-1'){
                                        $('input[name=code]').attr('disabled', 'disabled')
                                        $('.submit_verify').hide()
                                        $('.resend-code').show()
                                    }
                                }else{
                                    clearInterval(x);
                                }
                            }, 1000);
                        }else if(data.success === false){
                            openErrModal(data.error)
                        }
                    },
                    error(e){
                        console.log(e)
                    },
                })
            })

            $('#addCard').on('click', '.resend-code', function (e) {
                let card_id = $('input[name=card_id]').val();
                $.ajax({
                    url: '{{ action('PaymeController@resendCode') }}',
                    method: "POST",
                    data: {
                        '_token': $('meta[name="csrf-token"]').attr('content'),
                        card_id
                    },
                    success(data){
                        if(data.success){
                            $('input[name=code]').removeAttr('disabled')
                            $('.submit_verify').show()
                            $('.resend-code').hide()

                            let timer = 60;
                            let x = setInterval(function() {
                                if(timer > -1){
                                    $('#timer').html(timer)
                                    timer--;
                                    if(timer == '-1'){
                                        $('input[name=code]').attr('disabled', 'disabled')
                                        $('.submit_verify').hide()
                                        $('.resend-code').show()
                                    }
                                }else{
                                    clearInterval(x);
                                }
                            }, 1000);
                        }else{
                            console.log(data.msg);
                        }
                    },
                    error(err){
                        console.log(err)
                    }
                })

            })

            //action for resend code
            $('.resend-code').on('click', function (e) {
                e.preventDefault();
                let card_id = $('input[name=card_id]').val();
                let url = `{{ route('resend_code') }}`;
                console.log(111, card_id);
                console.log(111, $('meta[name="csrf-token"]').attr('content'));
                $.ajax({
                    url,
                    method: "POST",
                    data: {
                        '_token': $('meta[name="csrf-token"]').attr('content'),
                        card_id
                    },
                    success(data){
                        if(data.success){
                            $('input[name=code]').removeAttr('disabled')
                            $('.submit_verify').show()
                            $('.resend-code').hide()

                            let timer = 60;
                            let x = setInterval(function() {
                                if(timer > -1){
                                    $('#timer').html(timer)
                                    timer--;
                                    if(timer == '-1'){
                                        $('input[name=code]').attr('disabled', 'disabled')
                                        $('.submit_verify').hide()
                                        $('.resend-code').show()
                                    }
                                }else{
                                    clearInterval(x);
                                }
                            }, 1000);
                        }else{
                            console.log(222, data.msg);
                        }
                    },
                    error(err){
                        console.log(err)
                    }
                })

            })

            $('.submit_verify').on('click', function (e) {
                e.preventDefault()
                let form = $(this).parents('form');
                let data = {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    method: form.find('input[name=method]').val(),
                    card_id: form.find('input[name=card_id]').val(),
                    code: form.find('input[name=code]').val(),
                };

                $.ajax({
                    method: 'POST',
                    url: '{{ action('PaymeController@cabinet') }}',
                    data: data,
                    success(data){
                        if(data.success){
                            window.location.reload(true);
                        }else{
                            openErrModal(data.error)
                        }
                    },
                    error(e){
                        openErrModal(data.error);
                        console.log(e)
                    },
                })
            })
        })

        function openErrModal(text) {
            $('#error_message').text(text);
            $('#modalErrorCard').modal('show');
        }
    </script>
@endsection