@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.years'),

                                ])
@inject('year', 'App\Models\Year')
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($year,[
                                'action'=>'Admin\YearController@store',
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'POST'
                                ])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="year">{{trans('admin.year')}}</label>
                {!! Form::number('year',null,[
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
