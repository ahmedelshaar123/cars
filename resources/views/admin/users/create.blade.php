@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.users'),

                                ])
@inject('user', 'App\User')
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($user,[
                                'action'=>'Admin\UserController@store',
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'POST',
                                ])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="name">{{trans("admin.name")}}</label>
                {!! Form::text("name",null,[
                    'class'=>'form-control',

                ]) !!}
                <br>
                <label for="email">{{trans("admin.email")}}</label>
                {!! Form::text("email",null,[
                    'class'=>'form-control',

                ]) !!}
                <br>
                <label for="password">{{trans("admin.password")}}</label>
                {!! Form::password("password",null,[
                    'class'=>'form-control',

                ]) !!}
                <br>
                <label for="password_confirmation">{{trans("admin.password_confirmation")}}</label>
                {!! Form::password("password_confirmation",null,[
                    'class'=>'form-control',

                ]) !!}
                <br>
                <label for="roles[]">{{trans("admin.roles")}}</label>
                <select multiple name="roles[]" class="form-control">
                    @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
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
