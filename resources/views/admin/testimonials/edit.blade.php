@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.testimonials'),

                                ])
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($testimonial,[
                                'action'=>['Admin\TestimonialController@update', $testimonial->id],
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'PUT',
                                'files'=>true
                                ])!!}
        <div class="box-body">
            <div class="form-group">
                @foreach(LaravelLocalization::getSupportedLocales() as $key => $value)
                    <label for="desc">{{trans("admin.name_$key")}}</label>
                    {!! Form::text("name_$key",$testimonial->$nameVC,[
                        'class'=>'form-control',
                    ]) !!}
                    <br>
                    {!! Form::text("job_$key",$testimonial->$job,[
                        'class'=>'form-control',
                    ]) !!}
                    <br>
                    <label for="desc">{{trans("admin.desc_$key")}}</label>
                    {!! Form::textarea("desc_$key",$testimonial->$descVC,[
                        'class'=>'form-control myTextArea',
                        'rows'=>'15',
                    ]) !!}
                    <br>
                @endforeach
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
