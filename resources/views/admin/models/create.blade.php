@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.models'),

                                ])
@inject('model', 'App\Models\Modell')
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($model,[
                                'action'=>'Admin\ModelController@store',
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'POST'
                                ])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="brand_id">{{trans('admin.brands')}}</label>
                {!! Form::select('brand_id',$brands,null,[
                    'class'=>'form-control',
                    'placeholder' => trans('admin.choose_brand')
                ])
                !!}
                <br>
                <label for="name">{{trans('admin.models')}}</label>
                {!! Form::text('name',null,[
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
