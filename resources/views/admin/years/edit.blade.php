@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.years'),

                                ])
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($ye,[
                                'action'=>['Admin\YearController@update', $ye->id],
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'PUT'
                                ])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="link">{{trans('admin.year')}}</label>
                {!! Form::number('year',$ye->year,[
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
