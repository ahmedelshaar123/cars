@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.brands'),

                                ])
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($brand,[
                                'action'=>['Admin\BrandController@update', $brand->id],
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'PUT'
                                ])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="name_ar">{{trans('admin.name_ar')}}</label>
                {!! Form::text('name_ar',$brand->name_ar,[
                    'class'=>'form-control',
                ]) !!}
                <br>
            </div>
            <div class="form-group">
                <label for="name_en">{{trans('admin.name_en')}}</label>
                {!! Form::text('name_en',$brand->name_en,[
                    'class'=>'form-control',
                ]) !!}
                <br>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">{{trans('admin.save')}}</button>
        </div>
        {!! Form::close()!!}
    </div>
@stop
