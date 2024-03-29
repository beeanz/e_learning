{{--
@author: ByteRain
@date: 02/10/20
--}}
@extends('frontend.app')

@section('content')

    <!--======================================
          START breadcrumb AREA
  ======================================-->

    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">

                        <div class="section-heading">
                            <h2 class="section__title">

                                @php
                                    $x = 2;
                                @endphp
                                @if ($x <= count(Request::segments()))
                                    {{str_replace('-', ' ',ucfirst(Request::segment(2)))}}
                                @else
                                    @if($breadcrumb != null)
                                        {{$breadcrumb}}
                                        @else
                                        {{str_replace('-', ' ',ucfirst(Request::segment(1)))}}
                                    @endif
                                @endif


                            </h2>
                        </div>

                        <ul class="breadcrumb__list">
                            <li class="active__list-item"><a href="{{ route('homepage') }}">@translate(Home)</a></li>
                            @for($i = 1; $i <= count(Request::segments()); $i++)
                                <li class="bread-item">
                                    <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">

                                        {{str_replace('-', ' ',ucfirst(Request::segment($i)))}}
                                    </a>
                                </li>
                            @endfor

                          
                        </ul>

                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <!--======================================
            END breadcrumb AREA
    ======================================-->


    <!--======================================
            START COURSE AREA
    ======================================-->
    <section class="course-area padding-top-80px padding-bottom-120px">
        <div class="course-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="filter-bar d-flex justify-content-between align-items-center">

                            <ul class="filter-bar-tab nav nav-tabs align-items-center" id="myTab" role="tablist">
                                <li class="nav-item">
                                  <span title="grid view">
                                      <i class="la la-th-large nav-link icon-element active"></i>
                                  </span>
                                </li>

                                @if($courses->count() != 0)
                                    <li class="nav-item"> @translate(Showing) {{ $courses->firstItem() }}
                                        -{{ $courses->count() < 10 ? $courses->count(): $courses->perPage() }}
                                        @translate(of) {{ $courses->total() }} @translate(results)
                                    </li>
                                @else
                                    <li class="nav-item"> @translate(No Course Found)</li>
                                @endif
                            </ul>

                        </div>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="course-content-wrapper mt-4">
                    <div class="row">

                        {{-- sidebar END --}}
                        <div class="col-lg-12">

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active show">
                                    <div class="row">
                                        @forelse($courses as $course)
                                            <div class="col-lg-6">
                                                <div class="column-td-half">
                                                    <div class="card-item card-preview"
                                                         data-tooltip-content="#tooltip_content_{{$course->course->id}}">
                                                        <div class="card-image">
                                                            <a href="{{route('course.single',$course->course->slug)}}"
                                                               class="card__img"><img
                                                                    src="{{ filePath($course->course->image) }}"
                                                                    alt="{{$course->course->title}}"></a>
                                                            @if(bestSellingTags($course->course->id))
                                                                <div class="card-badge">
                                                                    <span
                                                                        class="badge-label">@translate(bestseller)</span>
                                                                </div>
                                                            @endif
                                                        </div><!-- end card-image -->
                                                        <div class="card-content">
                                                            <p class="card__label">
                                                                <span class="card__label-text">{{$course->course->level}}</span>
                                                                @auth()
                                                                    <a href="#!"
                                                                       onclick="addToCart({{$course->course->id}},'{{route('add.to.wishlist')}}')"
                                                                       class="card__collection-icon love-{{$course->course->id}}"><span

                                                                            class="la la-heart-o love-span-{{$course->course->id}} "></span></a>
                                                                @endauth

                                                                @guest()
                                                                    <a href="{{route('login')}}"
                                                                       class="card__collection-icon"
                                                                       data-toggle="tooltip" data-placement="top"
                                                                       title="Add to Wishlist"><span
                                                                            class="la la-heart-o"></span></a>
                                                                @endguest
                                                            </p>
                                                            <h3 class="card__title">
                                                                <a href="{{route('course.single',$course->course->slug)}}"
                                                                   title="{{$course->course->title}}">{{ Str::limit($course->course->title,58) }}</a>
                                                            </h3>
                                                            <p class="card__author">
                                                                <a href="{{route('single.instructor',$course->course->relationBetweenInstructorUser->slug)}}">{{$course->course->relationBetweenInstructorUser->name}}</a>
                                                            </p>
                                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                    <span class="star-rating-wrap">
                                                     @translate(Enrolled) <span
                                                            class="star__count">{{\App\Model\Enrollment::where('course_id',$course->course->id)->count()}}</span>
                                                  </span>
                                                            </div><!-- end rating-wrap -->
                                                            <div class="card-action">
                                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                                    <li>
                                                          <span class="meta__date">
                                                              <i class="la la-play-circle"></i> {{$course->course->classes->count()}} @translate(Classes)
                                                          </span>
                                                                    </li>
                                                                    <li>
                                                          <span class="meta__date">
                                                              @php
                                                                  $total_duration = 0;
                                                                  foreach ($course->course->classes as $item){
                                                                      $total_duration +=$item->contents->sum('duration');
                                                                  }
                                                              @endphp
                                                              <i class="la la-clock-o"></i>{{duration($total_duration)}}

                                                          </span>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- end card-action -->
                                                            <div
                                                                class="card-price-wrap d-flex justify-content-between align-items-center">
                                                                <!--if free-->
                                                                @if($course->course->is_free)
                                                                    <span class="card__price">@translate(Free)</span>
                                                                @else
                                                                    @if($course->course->is_discount)
                                                                        <span class="card__price">{{formatPrice($course->course->discount_price)}}</span>
                                                                        <span class="card__price"><del>{{formatPrice($course->course->price)}}</del></span>

                                                                    @else
                                                                        <span
                                                                            class="card__price">{{formatPrice($course->course->price)}}</span>
                                                                    @endif
                                                                @endif
                                                            <!--there are the login-->
                                                                @auth()
                                                                    @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'Student')
                                                                        <a href="#!"
                                                                           class="text-btn addToCart-{{$course->course->id}}"
                                                                           onclick="addToCart({{$course->course->id}},'{{route('add.to.cart')}}')">@translate(Add to cart)</a>
                                                                    @else
                                                                        <a href="{{route('login')}}" class="text-btn">@translate(Add to cart)</a>
                                                                    @endif
                                                                @endauth

                                                                @guest()
                                                                    <a href="{{route('login')}}" class="text-btn">@translate(Add to cart)</a>
                                                                @endguest


                                                            </div><!-- end card-price-wrap -->
                                                        </div><!-- end card-content -->
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->


                                        @empty
                                            <div class="col-12 m-5">
                                                <img src="{{asset('no_data.png')}}" class="w-100 img-fluid">
                                            </div>
                                        @endforelse

                                        @foreach($courses as $c_tooltip)
                                            <div class="tooltip_templates">
                                                <div id="tooltip_content_{{$c_tooltip->course->id}}">
                                                    <div class="card-item">
                                                        <div class="card-content">
                                                            <p class="card__author">
                                                                @translate(By) <a
                                                                    href="{{route('single.instructor',$c_tooltip->course->relationBetweenInstructorUser->slug)}}">{{$c_tooltip->course->relationBetweenInstructorUser->name}}</a>
                                                            </p>
                                                            <h3 class="card__title">
                                                                <a href="{{route('course.single',$c_tooltip->course->slug)}}"
                                                                   title="{{$c_tooltip->course->title}}">{{\Illuminate\Support\Str::limit($c_tooltip->course->title,58)}}</a>
                                                            </h3>
                                                            <p class="card__label">
                                                                <span class="mr-1">@translate(in)</span><a
                                                                    href="{{route('course.category',$c_tooltip->course->category->slug)}}"
                                                                    class="mr-1">{{$c_tooltip->course->category->name}}</a>
                                                            </p>
                                                            <div class="rating-wrap d-flex mt-2 mb-3">

                                                            <span class="star-rating-wrap">
                                                     @translate(Enrolled) <span
                                                                    class="star__count">{{\App\Model\Enrollment::where('course_id',$c_tooltip->course->id)->count()}}</span>
                                                </span>
                                                            </div><!-- end rating-wrap -->
                                                            <ul class="list-items mb-3 font-size-14">
                                                                @foreach(json_decode($c_tooltip->course->requirement) as $requirement)
                                                                    <li>{{$requirement}}</li>
                                                                @endforeach
                                                            </ul>
                                                            <div class="card-action">
                                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                                    <li><span class="meta__date"><i
                                                                                class="la la-play-circle"></i> {{$c_tooltip->course->classes->count()}} @translate(Classes)</span>
                                                                    </li>
                                                                    <li><span class="meta__date">
                                                            @php
                                                                $total_duration = 0;
                                                                foreach ($c_tooltip->course->classes as $item){
                                                                    $total_duration +=$item->contents->sum('duration');
                                                                }
                                                            @endphp
                                                            <i class="la la-clock-o"></i>{{duration($total_duration)}}</span>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- end card-action -->
                                                            <div class="btn-box w-100 text-center mb-3">
                                                                <a href="{{route('course.single',$c_tooltip->course->slug)}}"
                                                                   class="theme-btn d-block">
                                                                    @translate(Preview this course)</a>
                                                            </div>
                                                        </div><!-- end card-content -->
                                                    </div><!-- end card-item -->
                                                </div>
                                            </div><!-- end tooltip_templates -->

                                        @endforeach
                                    </div>
                                </div>

                            </div><!-- end tab-content -->


                        </div><!-- end col-lg-8 -->
                    </div><!-- end row -->
                    {{ $courses->links('frontend.include.paginate') }}
                </div><!-- end card-content-wrapper -->
            </div><!-- end container -->
        </div><!-- end course-wrapper -->
    </section><!-- end courses-area -->
    <!--======================================
            END COURSE AREA
    ======================================-->
@endsection
