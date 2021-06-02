@extends('frontend.app')
@section('content')


    <!--================================
         START SLIDER AREA
=================================-->
    <section class="slider-area slider-area2">
        <div class="homepage-slide2">
            @foreach($sliders as $item)
                <div class="single-slide-item" style="background-image: url({{filePath($item->image)}});}">
                    <div id="perticles-js-2"></div>
                    <div class="slide-item-table">
                        <div class="slide-item-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="section-heading">
                                            <h2 class="section__title">{{$item->title}}</h2>
                                            <p class="section__desc">
                                                {{$item->sub_title}}
                                            </p>
                                        </div>
                                        <div class="hero-search-form">
                                            <div class="contact-form-action">
                                                <form>
                                                    <div class="input-box">
                                                        <div class="form-group mb-0">
                                                            <!-- ======================== Search Suggession ============================= -->
                                                            <div class="overflow-hidden search-list w-100">
                                                                <div id="appendSearchCart2"></div>
                                                            </div>

                                                        </div>
                                                    </div><!-- end input-box -->
                                                </form>
                                            </div><!-- end contact-form-action -->
                                        </div>
                                    </div><!-- col-lg-6 -->
                                </div><!-- row -->
                            </div><!-- container -->


                            <div class="our-post-content">
                                <span class="hw-circle"></span>
                                <span class="hw-circle"></span>
                                <span class="hw-circle"></span>
                                <div class="how-we-work-wrap">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="our-post-item">
                                                    <i class="la la-mouse-pointer icon-element"></i>
                                                    <div class="our__text">
                                                        <h4 class="widget-title">{{number_format(\App\Model\Course::Published()->where('is_published',true)->count())}}
                                                            @translate(Online courses)</h4>
                                                        <p>@translate(Explore new opportunities)</p>
                                                    </div><!-- our__text -->
                                                </div><!-- our-post-item -->
                                            </div><!-- col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="our-post-item">
                                                    <i class="fa fa-certificate icon-element"></i>
                                                    <div class="our__text">
                                                        <h4 class="widget-title">@translate(Earn a certificate)</h4>
                                                        <p>@translate(High-level instructors, to offer you the best content)</p>
                                                    </div><!-- our__text -->
                                                </div><!-- our-post-item -->
                                            </div><!-- col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="our-post-item">
                                                    <i class="fa fa-history icon-element"></i>
                                                    <div class="our__text">
                                                        <h4 class="widget-title">@translate(On line course)</h4>
                                                        <p>@translate(Learn on your schedule)<br><span>@translate(Anytime, anywhere)</span></p>
                                                    </div><!-- our__text -->
                                                </div><!-- our-post-item -->
                                            </div><!-- col-lg-4 -->
                                        </div><!-- row -->
                                    </div>
                                </div><!-- end how-we-work-wrap -->
                            </div><!-- our-post-content -->
                        </div><!-- slide-item-tablecell -->
                    </div><!-- slide-item-table -->
                </div><!-- end single-slide-item -->
            @endforeach
        </div><!-- end homepage-slides -->
    </section>
    <!--================================
            END SLIDER AREA
    =================================-->

    <!-- About Section Starts -->
    <section class="about-section padding-top-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h5 class="section__meta"></h5>
                        <h2 class="section__title section-title">@translate(know more about) <span>@translate(大和　- YAMATO -)</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-content-left">
                        @php
                            $color = array('green-icon','yellow-icon','blue-icon');
                            $i = 0;
                        @endphp
                        @foreach(\App\KnowAbout::where('align','left')->get()->take(3) as $leftContent)
                            <div class="about-single-content">
                                <div class="content-top">
                                    <div class="content-icon template-icon {{$color[$loop->index++]}}">
                                        <i class="{{$leftContent->icon}}"></i>
                                    </div>
                                    <h5>{{$leftContent->title}}</h5>
                                </div>
                                <p class="margin-top-10">{{$leftContent->desc}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4 padding-top-60px">
                    @php
                        $videoContent = \App\KnowAbout::where('align','center')->first()
                    @endphp
                    @if( $videoContent != null)
                        <div class="video-popup-area">
                            <div class="video-play-button">
                                <a href="{{$videoContent->video}}" class="button-video">
                                    <i class="fa fa-play item-ripple"></i>
                                </a>
                            </div>
                            @if($videoContent->image)
                                <img class="img"
                                        src="{{$videoContent->image == null ? filePath('images/about-image.png') : filePath($videoContent->image) }}"
                                        alt="image">
                                <div class="image-absolute"></div>
                            @endif
                        </div>
                    @endif
                </div>

                <div class="col-lg-4">
                    <div class="about-content-right">
                        @foreach(\App\KnowAbout::where('align','right')->get()->take(3) as $leftContent)
                            <div class="about-single-content">
                                <div class="content-top">
                                    <div class="content-icon template-icon {{$color[$loop->index++]}}">
                                        <i class="{{$leftContent->icon}}"></i>
                                    </div>
                                    <h5>{{$leftContent->title}}</h5>
                                </div>
                                <p class="margin-top-10">{{$leftContent->desc}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--======================================
            START LatestCourse AREA
    ======================================-->
    <section class="course-area padding-top-60px">
        <div class="course-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading text-center">
                            <h5 class="section__meta">@translate(Our New Courses For You)</h5>
                            <h2 class="section__title">@translate(Latest Courses)</h2>
                            <span class="section-divider"></span>
                        </div><!-- end section-heading -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row margin-top-28px">
                    <div class="col-lg-12">
                        <div class="tab-content">
                            <div class="course-carousel">
                                @foreach($latestCourses as $l_course)
                                    <div class="card-item card-preview"
                                            {{-- remove tooltip --}}
                                            {{--  data-tooltip-content="#tooltip_content_{{$l_course->id}}"--}}>
                                        <div class="card-image">
                                            <a href="{{route('course.single',$l_course->slug)}}"
                                               class="card__img"><img
                                                        src="{{ filePath($l_course->image) }}"
                                                        alt="{{$l_course->title}}"></a>
                                            @if(bestSellingTags($l_course->id))
                                                <div class="card-badge">
                                                                    <span
                                                                            class="badge-label">@translate(bestseller)</span>
                                                </div>
                                            @endif
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">{{$l_course->level}}</span>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="{{route('course.single',$l_course->slug)}}">{{\Illuminate\Support\Str::limit($l_course->title,58)}}</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="{{route('single.instructor',$l_course->relationBetweenInstructorUser->slug)}}">{{$l_course->relationBetweenInstructorUser->name}}</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                    <span class="star-rating-wrap">
                                                     @translate(Enrolled) <span
                                                                class="star__count">{{\App\Model\Enrollment::where('course_id',$l_course->id)->count()}}</span>
                                                  </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                          <span class="meta__date">
                                                              <i class="la la-play-circle"></i> {{$l_course->classes->count()}} @translate(Classes)
                                                          </span>
                                                    </li>
                                                    <li>
                                                          <span class="meta__date">
                                                              @php
                                                                  $total_duration = 0;
                                                                  foreach ($l_course->classes as $item){
                                                                      $total_duration +=$item->contents->sum('duration');
                                                                  }
                                                              @endphp
                                                              <i class="la la-clock-o"></i>{{duration($total_duration)}}

                                                          </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div
                                                    class="card-price-wrap justify-content-between align-items-center">
                                                <!--if free-->
                                                @if($l_course->is_free)
                                                    <span class="card__price">@translate(Free)</span>
                                                @else
                                                    @if($l_course->is_discount)
                                                        <span class="card__price">{{formatPrice($l_course->discount_price)}}</span>
                                                        <span class="card__price"><del>{{formatPrice($l_course->price)}}</del></span>
                                                    @else
                                                        <span
                                                                class="card__price">{{formatPrice($l_course->price)}}</span>
                                                @endif
                                            @endif
                                            <!--there are the login-->
                                                <a href="{{route('course.single',$l_course->slug)}}"
                                                   class="theme-btn d-block addToCart-{{$l_course->id}}">@translate(Preview
                                                    this course)</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div>
                                @endforeach
                            </div><!-- end course-carousel -->
                        </div><!-- end tab-content -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end course-wrapper -->
    </section><!-- end courses-area -->
    @foreach($latestCourses as $l_c_tooltip)
        <div class="tooltip_templates">
            <div id="tooltip_content_{{$l_c_tooltip->id}}">
                <div class="card-item">
                    <div class="card-content">
                        <p class="card__author">
                            @translate(By) <a
                                    href="{{route('single.instructor',$l_c_tooltip->relationBetweenInstructorUser->slug)}}">{{$l_c_tooltip->relationBetweenInstructorUser->name}}</a>
                        </p>
                        <h3 class="card__title">
                            <a href="{{route('course.single',$l_c_tooltip->slug)}}">{{\Illuminate\Support\Str::limit($l_c_tooltip->title,58)}}</a>
                        </h3>
                        <p class="card__label">
                            <span class="mr-1">@translate(in)</span><a
                                    href="{{route('course.category',$l_c_tooltip->category->slug)}}"
                                    class="mr-1">{{$l_c_tooltip->category->name}}</a>
                        </p>
                        <div class="rating-wrap d-flex mt-2 mb-3">

                                                                    <span class="star-rating-wrap">
                                                             @translate(Enrolled) <span
                                                                                class="star__count">{{\App\Model\Enrollment::where('course_id',$l_c_tooltip->id)->count()}}</span>
                                                        </span>
                        </div><!-- end rating-wrap -->
                        <ul class="list-items mb-3 font-size-14">
                            @foreach(json_decode($l_c_tooltip->requirement) as $requirement)
                                <li>{{$requirement}}</li>
                            @endforeach

                        </ul>
                        <div class="card-action">
                            <ul class="card-duration d-flex justify-content-between align-items-center">
                                <li><span class="meta__date"><i
                                                class="la la-play-circle"></i> {{$l_c_tooltip->classes->count()}} @translate(Classes)</span>
                                </li>
                                <li><span class="meta__date">
                                                                    @php
                                                                        $total_duration = 0;
                                                                        foreach ($l_c_tooltip->classes as $item){
                                                                            $total_duration +=$item->contents->sum('duration');
                                                                        }
                                                                    @endphp
                                                                    <i class="la la-clock-o"></i>{{duration($total_duration)}}
                                          </span>
                                </li>
                            </ul>
                        </div><!-- end card-action -->
                        <div class="btn-box w-100 text-center mb-3">
                            <a href="{{route('course.single',$l_c_tooltip->slug)}}"
                               class="theme-btn d-block">
                                @translate(Preview this course)</a>
                        </div>
                    </div><!-- end card-content -->
                </div><!-- end card-item -->
            </div>
        </div>
    @endforeach
    <!--======================================
            END LatestCourse AREA
    ======================================-->


    <!--======================================
            START CATEGORY AREA
    ======================================-->
    <section class="category-area padding-bottom-90px padding-top-90px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="section-heading">
                        <h5 class="section__meta">@translate(Categories)</h5>
                        <h2 class="section__title">@translate(Popular Categories)</h2>
                        <span class="section-divider"></span>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-9 -->
                <div class="col-lg-3">
                    <div class="btn-box h-100 d-flex align-items-center justify-content-end">
                        <a href="{{route('course.filter')}}" class="theme-btn">@translate(all Categories)</a>
                    </div><!-- end btn-box-->
                </div>
            </div><!-- end row -->
            <div class="category-wrapper margin-top-28px">
                <div class="row">
                    @foreach($popular_cat as $item)
                        <div class="col-lg-4 column-td-half">
                            <div class="category-item">
                                <img src="{{ filePath($item->icon) }}" alt="" width="auto" height="200">
                                <div class="category-content">
                                    <div class="category-inner">
                                        <h3 class="cat__title"><a
                                                    href="{{route('course.category',$item->slug)}}">{{$item->name}}</a>
                                        </h3>
                                        <p class="cat__meta">{{$item->courses->count()}} @translate(Course(s))</p>
                                        <a href="{{route('course.category',$item->slug)}}" class="theme-btn">@translate(explore now)</a>
                                    </div>
                                </div><!-- end category-content -->
                            </div><!-- end category-item -->
                        </div><!-- end col-lg-4 -->
                    @endforeach
                </div><!-- end row -->
            </div><!-- end category-wrapper -->
        </div><!-- end container -->
        </div><!-- end course-wrapper -->
    </section>
    <!-- end courses-area -->

    <div class="section-block my-lg-5"></div>
    <!-- ================================
           START FUNFACT AREA
    ================================= -->
    <section class="funfact-area text-center overflow-hidden padding-top-85px padding-bottom-85px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 column-td-half">
                    <div class="counter-item">
                        <span class="la la-bullhorn count__icon"></span>
                        <h4 class="count__title text-color-2 count-up" data-from="0"
                            data-to="{{\App\User::where('user_type','Instructor')->get()->count()}}" data-time="1000">
                            0</h4>
                        <p class="count__meta">@translate(expert instructors)</p>
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-td-half">
                    <div class="counter-item">
                        <span class="la la-globe count__icon"></span>
                        <h4 class="count__title  count__title text-color-2 count-up1" data-from="0"
                            data-to="{{\App\User::where('user_type','Student')->get()->count()}}" data-time="1000">
                            0</h4>
                        <p class="count__meta">@translate(Students)</p>
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-td-half">
                    <div class="counter-item">
                        <span class="la la-users count__icon"></span>
                        <h4 class="count__title  count__title text-color-2 count-up2" data-from="0"
                            data-to="{{\App\Model\Enrollment::count()}}" data-time="1000">0</h4>
                        <p class="count__meta">@translate(Total enrolled)</p>
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-td-half">
                    <div class="counter-item">
                        <span class="la la-certificate count__icon"></span>
                        <h4 class="count__title count__title text-color-2 count-up3" data-from="0"
                            data-to="{{\App\Model\Course::Published()->count()}}" data-time="1000">0</h4>
                        <p class="count__meta">@translate(Total Course)</p>
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end funfact-area -->


    <div class="section-block"></div>
    <div class="section-block"></div>

@endsection
