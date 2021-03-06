@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.roles'),

                                ])
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($role,[
                                'action'=>['Admin\RoleController@update', $role->id],
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'PUT',
                                ])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="name">{{trans("admin.name")}}</label>
                {!! Form::text("name",$role->name,[
                    'class'=>'form-control',

                ]) !!}
                <br>
                <label for="permissions[]">{{trans("admin.permissions")}}</label>
                <select multiple name="permissions[]" class="form-control">
                    @foreach($permissions as $permission)
                        <option {{in_array($permission->id, $rolePermissions) ? 'selected' : ''}} value="{{$permission->id}}">{{$permission->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">{{trans('admin.save')}}</button>
        </div>
        {!! Form::close()!!}
    </div>
@stop
