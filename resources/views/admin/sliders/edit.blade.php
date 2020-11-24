@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.sliders'),

                                ])
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($slider,[
                                'action'=>['Admin\SliderController@update',$slider->id],
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'PUT',
                                'files'=>true
                                ])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="image">{{trans('admin.image')}}</label>
                <input name="image" id="img-preview-tag" type="file" onchange="readImg(this, '#img-preview');">
                <br>
                <img id="img-preview" alt="" style="height: 50px;">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">{{trans('admin.save')}}</button>
        </div>
        {!! Form::close()!!}
    </div>
@stop
