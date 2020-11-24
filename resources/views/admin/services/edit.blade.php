@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.services'),

                                ])
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($service,[
                                'action'=>['Admin\ServiceController@update', $service->id],
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'PUT',
                                'files'=>true
                                ])!!}
        <div class="box-body">
            <div class="form-group">
                @foreach(LaravelLocalization::getSupportedLocales() as $key => $value)
                    <label for="name">{{trans("admin.name_$key")}}</label>
                    {!! Form::text("name_$key",$service->$nameVC,[
                        'class'=>'form-control',

                    ]) !!}
                    <br>
                    <label for="desc">{{trans("admin.desc_$key")}}</label>
                    {!! Form::textarea("desc_$key",$service->$descVC,[
                        'class'=>'form-control myTextArea',

                    ]) !!}
                    <br>
                    <label for="features">{{trans("admin.features_$key")}}</label>
                    {!! Form::textarea("features_$key",$service->$features,[
                        'class'=>'form-control  myTextArea',

                    ]) !!}
                    <br>
                @endforeach

                <label for="image">{{trans('admin.images')}}</label>
                <input multiple name="image[]" type="file" id="multi-imgs-tag" onchange="previewImages(this)">
                <br>
                <div id="preview"></div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">{{trans('admin.save')}}</button>
        </div>
        {!! Form::close()!!}
    </div>
@stop
