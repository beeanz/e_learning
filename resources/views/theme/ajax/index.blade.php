{{--
@author: ByteRain
@date: 06/07/20
--}}
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card m-2">
                    <div class="card-header">

                            <span class="h1 card-title">@translate(Theme Manager)</span>

                            <a class="btn btn-primary ml-3" href="{{ route("theme.manager.installui") }}" title="@translate(Install new addon)">
                                <i class="fa fa-plus-circle"></i> @translate(Install Theme)
                            </a>

                    </div>

                    <div class="card-header">

                        @if (env('THEME_MANAGER') == 'YES')
                            <h4><strong>@translate(Installed Theme)(s) ( {{ App\Themes::count() }} )</strong></h4>
                        @else
                            <h4><strong>@translate(Installed Theme)(s) ( 0 )</strong></h4>
                        @endif

                    </div>


                    <div class="card-body t-div">
                         <div class="row mt-5">
                                @forelse ($themes as $theme)
                                    <div class="col-4">
                                        <div class="news">
                                            <figure class="article">
                                                <a href="javscript:void()" onclick="forModal('{{ route('addon.preview', $theme->name) }}', '{{ strtoupper($theme->name) }}')">
                                                    <img src="{{ filePath($theme->image) }}" class="w-100 img-fluid rounded" alt="#{{ $theme->name }}" >
                                                </a>
                                            </figure>
                                            <a href="{{ $theme->activated == 0 ? route('theme.status', $theme->name) : '#!' }}" class="btn {{ $theme->activated == 0 ? 'btn-success' : 'btn-danger disable' }} w-100">{{ $theme->activated == 0 ? 'Activate' : 'Deactivate' }}</a>
                                        </div>
                                    </div>
                                    @empty
                                    <div class="col-12">
                                            <img src="{{ filePath('no-addon-found.jpg') }}" class="w-100" alt="#No Addons Found">
                                    </div>
                                @endforelse
                        </div>
                    </div>



                     {{-- Installed Addon::END --}}
                    <hr>
                    {{-- Available Addon --}}

                    <div class="card-header">

                            <h4><strong>@translate(Available Theme)(s) ( <span id="addon_count"></span> )</strong></h4>

                        <input type="hidden" id="sk_loading" value="{{ filePath('sk-loading.gif') }}">

                        <div id="no-addons" class="text-center"></div>
                        <div id="no-addons-found" class="text-center d-none">
                            <img src="{{ filePath('no-addon-found.jpg') }}" class="w-100" alt="#No Addons Found">
                        </div>

                        <div class="d-flex row mt-5" id="available_addons"></div>


                    {{-- Available Addon::END --}}


                </div>
            </div>
        </div>
    </div>

    <script>

$(document).ready(function(){
    var set = 0;
});

</script>
