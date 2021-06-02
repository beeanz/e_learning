<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $('.verify_card').on('keyup keypress', function(e) {
            var keyCode = e.keyCode || e.which;
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

        //after typing card number and submit
        $('.submit').on('click', function (e) {
            e.preventDefault()
            $(this).attr('disabled', 'disabled');
            let form = $(this).parents('form');
            let data = {
                '_token': $('meta[name="csrf-token"]').attr('content'),
                method: form.find('input[name=method]').val(),
                card_no: form.find('input[name=card_no]').val(),
                card_date: form.find('input[name=card_date]').val(),
                card_title: form.find('input[name=card_title]').val(),
                course_id: form.find('input[name=course_id]').val(),
                card_username: form.find('input[name=card_username]').val(),
                auto_payment: (form.find('input[name=auto_payment]:checked').val() === undefined) ? 1 : 1
            };
            $.ajax({
                method: 'POST',
                url: '{{ action('PaymeController@checkout') }}',
                data: data,
                success(data){
                    if(data.success){
                        jQuery.noConflict();
                        $('form.add_card').hide()
                        $('form.verify_card').show()
                        $('#phone').html(data.verify.phone)
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

                        $('input[name=autoPayment]').val(data.auto_payment)
                        $('input[name=card_id]').val(data.card.id)
                    } else {
                        openErrorModal(data.error);
                    }
                },
                error(e){
                    console.log(e)
                },
            })
            $(this).removeAttr('disabled');
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

        //after submit verification code
        $('.submit_verify').on('click', function (e) {
            e.preventDefault()
            $(this).attr('disabled', 'disabled');
            let form = $(this).parents('form');
            let data = {
                '_token': $('meta[name="csrf-token"]').attr('content'),
                method: form.find('input[name=method]').val(),
                price: form.find('input[name=price]').val(),
                payment_method: form.find('input[name=payment_method]').val(),
                course_id: form.find('input[name=course_id]').val(),
                auto_payment: form.find('input[name=autoPayment]').val(),
                card_id: form.find('input[name=card_id]').val(),
                code: form.find('input[name=code]').val(),
            };

            $.ajax({
                method: 'POST',
                url: '{{ action('PaymeController@checkout') }}',
                data: data,
                success(data){
                    if(data.success){
                        window.location = data.url;
                    } else {
                        openErrorModal(data.error);
                    }
                },
                error(e){
                    $('#error').value(data.error)
                    openErrorModal(data.error);
                },
            })
            $(this).removeAttr('disabled')
        })

        //after select card for pay course
        $('.confirm_btn').on('click', function (e) {
            e.preventDefault()
            $(this).attr('disabled', 'disabled');
            let form = $(this).parents('form');
            let data = {
                '_token': $('meta[name="csrf-token"]').attr('content'),
                method: form.find('input[name=method]').val(),
                payment_method: form.find('input[name=payment_method]').val(),
                course_id: form.find('input[name=course_id]').val(),
                auto_payment: (form.find('input[name=auto_payment]:checked').val() !== undefined) ? 1 : 1,
                card_id: form.find('select[name=card_id]').val(),
                price: form.find('input[name=price]').val(),
            };
            $.ajax({
                method: 'POST',
                url: '{{ action('PaymeController@checkout') }}',
                data: data,
                success(data){
                    if(data.success){
                        window.location = data.url;
                    }else{
                        openErrorModal(data.error);
                    }
                },
                error(e){
                    console.log(e)
                },
            })
            $(this).removeAttr('disabled');
        })
    })

    function openErrorModal(text) {
        $('#error_message').text(text);
        $('#modalErrorCustom').modal('show');
    }
</script>
