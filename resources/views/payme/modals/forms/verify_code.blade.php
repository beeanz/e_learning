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
            <input type="hidden" name="price" value="{{ $total_price }}">
            <input type="hidden" name="payment_method" value="Payme">
            <input type="hidden" name="course_id" value="{{ $courses->first()->id }}">
            <input type="hidden" name="autoPayment">
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
