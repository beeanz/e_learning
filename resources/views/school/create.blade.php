{{--
@author: ByteRain
@date: 30/08/20
--}}
<div class="card-body">
    <form action="{{route('school.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id">
        <div class="form-group">
            <label>@translate(Name)  <span class="text-danger">*</span></label>
            <input class="form-control" type="text" min="0" name="name" required>
        </div>
        <div class="form-group">
            <label>@translate(Phone) </label>
            <input class="form-control"
                   type="text" name="phone">
        </div>
        <div class="form-group">
            <label>@translate(Address)</label>
            <input class="form-control"
                   type="text" name="address">
        </div>
        <div class="form-group">
            <label>@translate(Site) </label>
            <input class="form-control"
                   type="text" name="site">
        </div>
        <div class="form-group">
            <label class="col-form-label text-md-right">@translate(Image) </label>
            <div class="custom-file">

                <input class="custom-file-input package" id="customFile" name="image" type="hidden">
                @error('image') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
                <img class="school_preview rounded shadow-sm d-none" width="60" src="" alt="#School thumbnail">
                <input type="hidden" name="school_url" class="school_url" value="">
                <br>
                @if (MediaActive())
                    {{-- media --}}
                    <a href="javascript:void()" onclick="openNav('{{ route('media.slide') }}', 'school')" class="btn btn-primary media-btn mt-2 p-2">Upload From Media <i class="fa fa-cloud-upload ml-2" aria-hidden="true"></i> </a>
                @endif
            </div>
        </div>
        <div class="float-right">
            <button class="btn btn-primary float-right" type="submit">@translate(Save)</button>
        </div>
    </form>
</div>
