@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.role'),

                                ])
@section('content')
    <div class="ibox-content">
        <hr>
        <div class="box-body">
            <div class="table-responsive">
                <table class="data-table table table-bordered" id="table1">
                    <thead>
                    <th class="text-center">{{trans('admin.name')}}</th>
                    <th class="text-center">{{trans('admin.permissions')}}</th>
                    </thead>
                    <tbody>
                        <tr id="removable{{$role->id}}">
                            <td class="text-center">{{$role->name}}</td>
                            @foreach($rolePermissions as  $rolePermission)
                                <td class="text-center">{{$rolePermission->name}}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
