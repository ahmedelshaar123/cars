@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.sliders'),

                                ])
@inject('slider', 'App\Models\Slider')
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($slider,[
                                'action'=>'Admin\SliderController@store',
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'POST',
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
