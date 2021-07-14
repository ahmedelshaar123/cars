@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.user'),

                                ])
@section('content')
    <div class="ibox-content">
        <hr>
        <div class="box-body">
            <div class="table-responsive">
                <table class="data-table table table-bordered" id="table1">
                    <thead>
                    <th class="text-center">{{trans('admin.name')}}</th>
                    <th class="text-center">{{trans('admin.email')}}</th>
                    <th class="text-center">{{trans('admin.roles')}}</th>
                    </thead>
                    <tbody>
                        <tr id="removable{{$user->id}}">
                            <td class="text-center">{{$user->name}}</td>
                            <td class="text-center">{{$user->email}}</td>
                            <td class="text-center">@foreach($user->getRoleNames() as $role) {{$role}} @endforeach</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
