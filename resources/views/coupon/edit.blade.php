{{--
@author: ByteRain
@date: 12/04/20
--}}
<div class="card-body">
    <form method="post" action="{{route('coupon.update', $single_coupon->id)}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>@translate(Coupon Code)</label>
            <input type="text" name="code" value="{{ $single_coupon->code }}" class="form-control"
                   placeholder="@translate(Coupon Code)" required>
        </div>

        <div class="form-group">
            <label>@translate(Discount Amount)</label>
            <input type="number" name="rate" value="{{ $single_coupon->rate }}" min="0" step="0.01" class="form-control"
                   placeholder="@translate(Discount Amount)" required>
        </div>

        <div class="form-group">
            <label>
                @translate(Starting Date)<sup class="text-danger">*</sup>
            </label>
            <div class="input-group">
                <input type="text" id="coupon_start_edit" name="start_day" value="{{ date('d/m/Y', strtotime($single_coupon->start_day)) }}"
                       class="form-control"
                       value="{{ old('start_day') }}" required placeholder="@translate(Start Date)"
                       aria-describedby="basic-addon5">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon5"><i class="feather icon-calendar"></i></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>
                @translate(Ending Date)<sup class="text-danger">*</sup>
            </label>
            <div class="input-group">
                <input type="text" id="coupon_end_edit" name="end_day" value="{{ date('d/m/Y', strtotime($single_coupon->end_day)) }}"
                       class="form-control"
                       value="{{ old('end_day') }}" required placeholder="@translate(End Date)"
                       aria-describedby="basic-addon5">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon5"><i class="feather icon-calendar"></i></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>@translate(Minimum Shopping Amount)</label>
            <input type="number" name="min_value" value="{{ $single_coupon->min_value }}" class="form-control" min="0"
                   placeholder="@translate(Minimum Shopping Amount)" required>
        </div>

        <div class="form-group">
            <input type="checkbox" name="is_published"
                   id="published" {{ $single_coupon->is_published == 1 ? 'checked' : '' }}>
            <label for="published">@translate(Is published?)</label>
        </div>

        <button type="submit" class="btn btn-primary">@translate(Submit)</button>

    </form>
</div>

@section('script')
    <script type="text/javascript" src="{{ asset('js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <link type="text/javascript" src="{{ asset('css/tempusdominus-bootstrap-4.min.css') }}"/>
    <script type="text/javascript">
        "use strict"
        $(function () {
            $('#coupon_start_edit, #coupon_end_edit').datetimepicker();
        });
    </script>
@endsection
