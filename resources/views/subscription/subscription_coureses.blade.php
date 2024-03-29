{{--
@author: ByteRain
@date: 06/07/20
--}}
@extends('layouts.master')
@section('title','Course Index')
@section('parentPageTitle', 'All Course')
@section('css-link')
    @include('layouts.include.form.form_css')
@stop
@section('page-style')
@stop
@section('content')
    <!-- BEGIN:content -->
    <div class="card m-b-30 shadow">
        <div class="row px-3 pt-3">
            <h3 class="col-md-6">
                {{ $package }} @translate(Courses)
            </h3>
        </div>


        <div class="card-body">

            <div class="table-responsive">
                <table class="table foo-filtering-table text-center">
                    <thead class="text-center">
                    <tr class="footable-header">

                        <th data-breakpoints="xs" class="footable-first-visible">
                            @translate(S/L)
                        </th>
                   
                        <th>
                            @translate(Title)
                        </th>
                        <th>
                            @translate(Category)
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($courses as $course)

                        <tr>
                            <td class="footable-first-visible">
                                {{ ($loop->index+1) + ($courses->currentPage() - 1)*$courses->perPage() }}
                                
                                
                            </td>
                           
                            <td class="w-45 text-left">
                                <a href="{{  route('course.show',[$course->course->id,$course->course->slug]) }}">
                                    <div class="card">
                                        <div class="row no-gutters">
                                            <div class="col-md-4 overflow-auto my-auto">
                                                <img src="{{filePath($course->course->image)}}" class="card-img avatar-xl"
                                                     alt="Card image">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title font-16">{{ $course->course->title }}</h5>
                                                    <p class="text-secondary">{{$course->course->level}}</p>
                                                    <p class="card-text">{{ $course->course->relationBetweenInstructorUser->name }}</p>
                                                    <div class="d-flex justify-content-between">
                                                        <span
                                                            class="badge badge-{{ $course->course->is_published == true ? 'success'  : 'primary' }} p-2">{{ $course->course->is_published == true ? 'Published'  : 'Not Published' }}</span>
                                                        @if ($course->course->is_discount == true )
                                                            <span>{{ formatPrice($course->course->discount_price) }}</span>
                                                            <span> <del> {{ formatPrice($course->course->price) }} </del> </span>
                                                        @else
                                                            <span>{{ $course->course->price != null ? formatPrice($course->course->price)  : 'Free' }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td><span class="badge badge-info">{{ $course->course->relationBetweenCategory->name }}</span></td>
                  
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">
                                <img src="{{ filePath('no-course-found.jpg') }}" class="img-fluid w-100" alt="#No COurse Found">
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                    <div class="float-left">
                        {{ $courses->links() }}
                    </div>
                </table>
            </div>

        </div>

    </div>
    <!-- END:content -->
@endsection
@section('js-link')

@stop
@section('page-script')

@stop
