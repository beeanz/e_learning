<div class="modal fade" id="selectCard" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST">
                @csrf
                <input type="hidden" name="method" value="pay">
                <input type="hidden" name="payment_method" value="Payme">
                <input type="hidden" name="price" value="{{formatPrice($total_price)}}">
                <input type="hidden" name="course_id" value="{{ $courses->first()->id }}">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle2">@translate(Confirmation)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">@translate(Select card)</label>
                        <select name="card_id" class="form-control">
                            @foreach($my_cards as $card)
                                <option value="{{ $card->id }}">{{ $card->title }} ({{$card->card_no}})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Итого к оплате</span>
                            </div>
                            <input type="text" class="form-control text-right font-weight-bold"
                                   value="{{ number_format($courses->first()->price, 2, '.', ',') }}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" checked disabled value="1"
                                   id="exampleCheck4">
                            <input type="hidden" class="form-check-input" name="auto_payment" value="1" />

                            <label class="form-check-label" for="exampleCheck4">@translate(Enable auto payment)</label>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-sm"
                            data-dismiss="modal">@translate(Cancel)</button>
                    <button type="button" class="btn btn-primary btn-sm confirm_btn">@translate(Confirm)</button>
                </div>
            </form>
        </div>
    </div>
</div>
