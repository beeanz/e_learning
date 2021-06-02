{{--
@author: ByteRain
@date: 20/08/20
--}}
@extends('frontend.app')
@section('content')
      <section class="breadcrumb-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb-content">
                      <div class="section-heading">
                        <h2 class="section__title">{{$page->title }}</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="story-area section--padding text-center">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="about-content-box">
                      <div class="section-heading">
                          @foreach ($page->content as $item)
                            <p class="section__desc text-justify">
                            {!! $item->body !!}
                          @endforeach
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

@endsection
