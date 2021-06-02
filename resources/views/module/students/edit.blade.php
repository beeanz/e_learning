{{--
@author: ByteRain
@date: 30/08/20
--}}
@extends('layouts.master')
@section('title','Profile')
@section('parentPageTitle', 'All')

@section('css-link')
    <link href="{{ asset('assets/plugins/datepicker/air/datepicker.css') }}" rel="stylesheet" type="text/css">
@stop

@section('page-style')

@stop

@section('content')
    <div class="card m-b-30">
        <div class="card-header">
            <span class="h1 card-title">@translate(Student Details)</span>
        </div>
        <div class="card-body">
            <div class="dashboard-tab-content mt-5">
                <form method="post" action="{{ route('students.update') }}"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->student->id }}">
                    <div class="user-form">
                        <div class="contact-form-action">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>@translate(Full Name)<span
                                                    class="text-danger ml-1">*</span></label>
                                        <input type="text" name="name" value="{{ $user->name }}"
                                               class="form-control"
                                               placeholder="@translate(Full Name)" required>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>@translate(Email Address)<span
                                                    class="text-danger ml-1">*</span></label>
                                        <input type="email" name="email" readonly
                                               value="{{ $user->email }}" class="form-control"
                                               placeholder="@translate(Full Name)" required>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>@translate(Birthday)</label>
                                        <div class="input-group">
                                            <input type="text" id="autoclose-date" name="birthday" class="form-control"
                                                   value="{{ $user->student->birthday ? date('d/m/Y', strtotime($user->student->birthday)) : '' }}"
                                                   aria-describedby="basic-addon5">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon5"><i
                                                            class="feather icon-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="inputTopicTitle">@translate(Gender)</label>
                                        <select class="form-control" name='gender'>
                                            <option value="">Select Gender</option>
                                            <option {{ $user->student->gender == 'male' ? 'selected' : "" }} value="male">
                                                @translate(Male)
                                            </option>
                                            <option {{ $user->student->gender == 'female' ? 'selected' : "" }} value="female">
                                                @translate(Female)
                                            </option>
                                        </select>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>@translate(Address)</label>
                                        <input type="text" name="address"
                                               value="{{ $user->student->address }}" class="form-control">
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>@translate(Phone Number)</label>
                                        <input type="number" name="phone"
                                               value="{{ $user->student->phone ?? ''}}"
                                               class="form-control">
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 col-sm-6">
                                    <div class="custom-checkbox">
                                        <label for="is_student">@translate(Is student ?) </label>
                                        <br>
                                        <input name="is_student" type="checkbox" class="js-switch-success"
                                               id="is_student" {{ $user->student->is_student == true ? 'checked' : '' }}>
                                        <br>
                                    </div>
                                    <br>
                                    <div class="form-group" id="sec4_four"
                                         @if(!$user->student->is_student) style="display: none @endif">
                                        <div class="form-group">
                                            <label for="inputTopicTitle">@translate(School)</label>
                                            <select class="form-control" name='school_id'>
                                                <option value="">Select School</option>
                                                @foreach($schools as $school)
                                                    <option value="{{$school->id}}" {{$user->student->school_id == $school->id ? 'selected': null }}>{{ $school->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->

                                <div class="col-lg-12">
                                    <div class="btn-box">
                                        <button class="btn btn-primary" type="submit">
                                            @translate(Save Changes)
                                        </button>
                                    </div>
                                </div><!-- end col-lg-12 -->
                            </div><!-- end row -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- end row -->

    @if (Auth::user()->user_type == "Admin")
    <div class="card m-b-150">
        <div class="card-header">
            <span class="h1 card-title">@translate(Course Details)</span>
        </div>
        <div class="card-body">
            <div class="dashboard-tab-content mt-5">
                <table class="table table-striped- table-bordered table-hover text-center">
                    <thead>
                    <tr>
                        <th>S/L</th>
                        <th>@translate(Category)</th>
                        <th>@translate(Course)</th>
                        <th>@translate(Subscription End date)</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($subs as  $item)
                        <tr>
                            <td>{{ ($loop->index+1) + ($subs->currentPage() - 1) * $subs->perPage() }}</td>
                            <td width="30%">{{ $item->enrollCourse->category->name }}</td>
                            <td width="40%">{{ $item->enrollCourse->title }}</td>
                            <td width="10%">
                                <form method="post" id="form_{{$loop->index}}"
                                      action="{{ route('subscription.change_end_at') }}">
                                    <input type="hidden" value="{{ $item->id }}" name="subs_id[{{$loop->index}}]">
                                    @csrf
                                    <div class="d-flex justify-content-between">
                                        <div class="input-group" style="width: 200px">
                                            <input type="text" id="default-date_{{$loop->index}}"
                                                   name="end_at[{{$loop->index}}]" class="form-control datepick"
                                                   value="{{ date('d/m/Y', strtotime($item->end_at)) }}"
                                                   aria-describedby="basic-addon5">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon5">
                                                    <i class="feather icon-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td><h3 class="text-center">@translate(No Data Found)</h3></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    @endforelse
                    </tbody>
                    <div class="float-left">
                        {{ $subs->links() }}
                    </div>
                </table>
            </div>
        </div>
    </div><!-- end row -->
    @endif
    <!-- END:content -->
@endsection

@section('js-link')
    @include('layouts.include.form.form_js')
@stop

@section('page-script')
    <script>
        (function ($) {
            "use strict";
            $(function () {
                $('#is_student').change(function () {
                    if ($('#is_student').is(':checked')) {
                        $('#sec4_four').show('fast');
                    } else {
                        $('#sec4_four').hide('fast');
                    }
                });

                $('.datepick').each(function () {
                    $(this).datepicker(
                        {
                            language: 'en',
                            dateFormat: 'dd/mm/yyyy',
                            autoClose: true,
                            onSelect: function (dateText) {
                                let inputName = $('input').filter(function () {
                                    return this.value == dateText
                                }).attr('name');
                                let subId = inputName.replace(/[^0-9]/gi, '');
                                $(`#form_${subId}`).submit();
                            }
                        }
                    );
                });
            });
        })(jQuery);
    </script>
@stop
