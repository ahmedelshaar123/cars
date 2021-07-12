@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.users'),

                                ])
@section('content')
    <div class="ibox-content">
        <div @if(app()->getLocale() == 'ar')  class="pull-right" @else class="pull-left" @endif>
            <a href="{{route('users.create')}}" class="btn btn-primary">
                <i class="fa fa-plus"></i>{{trans('admin.add')}}
            </a>
        </div>
        <hr>
        <div class="box-body">
            <div class="table-responsive">
                <table class="data-table table table-bordered" id="table1">
                    <thead>
                    <th class="text-center">#</th>
                    <th class="text-center">{{trans('admin.name')}}</th>
                    <th class="text-center">{{trans('admin.email')}}</th>
                    <th class="text-center">{{trans('admin.edit')}}</th>
                    <th class="text-center">{{trans('admin.delete')}}</th>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr id="removable{{$user->id}}">
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="text-center">{{$user->name}}</td>
                            <td class="text-center">{{$user->email}}</td>
                            <td class="text-center"><a href="{{route('users.edit', $user->id)}}"
                                                       class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                            </td>
                            <td class="text-center">
                                <button data-token="{{ csrf_token() }}"
                                        data-route="{{URL::route('users.destroy',$user->id)}}"
                                        type="button" class="destroy btn btn-danger btn-xs"><i
                                        class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
