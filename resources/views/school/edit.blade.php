{{--
@author: ByteRain
@date: 12/04/20
--}}
<div class="card-body">
    <form action="{{route('school.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$school->id}}">
        <div class="form-group">
            <label>@translate(Name)  <span class="text-danger">*</span></label>
            <input class="form-control" value="{{$school->name}}" type="text" min="0" name="name" required>
        </div>
        <div class="form-group">
            <label>@translate(Phone) </label>
            <input value="{{$school->phone}}" class="form-control"
                   type="text" name="phone" >
        </div>
        <div class="form-group">
            <label>@translate(Address) </label>
            <input value="{{$school->address}}" class="form-control"
                   type="text" name="address" >
        </div>
        <div class="form-group">
            <label>@translate(Site) </label>
            <input value="{{$school->site}}" class="form-control"
                   type="text" name="site" >
        </div>

        <div class="form-group">
            <input type="hidden" class="package" name="image" value="{{$school->image}}">
            <img src="{{filePath($school->image)}}" class="img-fluid" width="100">
            <br>
            <img class="school_preview rounded shadow-sm d-none" src="" alt="#School thumbnail" width="100" height="auto">
                @error('image') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
            <input type="hidden" name="school_url" class="school_url" value="">
            <br>
            @if (MediaActive())
            {{-- media --}}
            <a href="javascript:void()" onclick="openNav('{{ route('media.slide') }}', 'school')" class="btn btn-primary media-btn mt-2 p-2">Upload From Media <i class="fa fa-cloud-upload ml-2" aria-hidden="true"></i> </a>
            @endif
        </div>
        <div class="float-right">
            <button class="btn btn-primary float-right" type="submit">@translate(Save)</button>
        </div>
    </form>
</div>