{{--
@author: ByteRain
@date: 02/10/20
--}}
@extends('layouts.master')
@section('title','Package List')
@section('parentPageTitle', 'All Package')
@section('content')
    <div class="card m-2">
        <div class="card-header">
            <div class="float-left">
                <h2 class="card-title">@translate(School List)</h2>
            </div>
            <div class="float-right">
                <div class="row">
                    <div class="col">
                        <a href="#!"
                           onclick="forModal('{{ route("school.create") }}', '@translate(School Create)')"
                           class="btn btn-primary">
                            <i class="la la-plus"></i>
                            @translate(Register New school)
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped table-bordered table-hover text-center">
                <thead>
                <tr>
                    <th>S/L</th>
                    <th>@translate(Image)</th>
                    <th>@translate(Name)</th>
                    <th>@translate(Phone)</th>
                    <th>@translate(Address)</th>
                    <th>@translate(Site)</th>
                    <th>@translate(Action)</th>
                </tr>
                </thead>
                <tbody>
                @forelse($schools as  $item)
                    <tr>
                        <td>{{ ($loop->index+1)}}</td>
                        <td>
                            @if($item->image)
                            <img src="{{filePath($item->image)}}" alt="image" class="rounded-circle avatar-lg"></td>
                            @endif
                        <td>
                            {{ $item->name }}
                        </td>
                        <td>
                            {{$item->phone}}
                        </td>
                        <td class="font-weight-bold">
                            {{$item->address}}
                        </td>
                        <td>
                            <a href="{{$item->site}}">{{$item->site}}</a>
                        </td>
                        <td>
                            <div class="kanban-menu">
                                <div class="dropdown">
                                    <button class="btn btn-link p-0 m-0 border-0 l-h-20 font-16" type="button"
                                            id="KanbanBoardButton1" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="feather icon-more-vertical-"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right action-btn"
                                         aria-labelledby="KanbanBoardButton1" x-placement="bottom-end">
                                        <a class="dropdown-item"
                                           onclick="forModal('{{ route('school.edit', $item->id) }}','@translate(School Update)')"
                                           href="#!">
                                            <i class="feather icon-edit-2 mr-2"></i>@translate(Edit)</a>
                                        <a class="dropdown-item"
                                           onclick="confirm_modal('{{ route('school.destroy', $item->id) }}')"
                                           href="#!">
                                            <i class="feather icon-trash mr-2"></i>@translate(Delete)</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td><h3 class="text-center">@translate(No Data Found)</h3></td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
