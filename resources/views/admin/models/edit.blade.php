@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.models'),

                                ])
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($model,[
                                'action'=>['Admin\ModelController@update', $model->id],
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'PUT'
                                ])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="brand_id">{{trans('admin.brands')}}</label>
                {!! Form::select('brand_id',$brands->pluck($nameVC),$model->$nameVC,[
                    'class'=>'form-control',
                ])
                !!}
                <br>
                <label for="name">{{trans('admin.models')}}</label>
                {!! Form::text('name',$model->$nameVC,[
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
