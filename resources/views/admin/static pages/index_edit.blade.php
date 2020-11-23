@extends('layouts.admin.app',[
                                'page_header'       => trans('admin.site'),
                                'page_description'  => trans('admin.static_pages')
                                ])
@inject('staticPage', 'App\Models\StaticPage')

@section('content')
    <div class="box box-primary">
        <!-- form start -->
        {!! Form::model($staticPage,[
                                'action'=>['Admin\StaticPageController@update',$staticPage->id],
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'PUT',
                                ])!!}

        <div class="box-body">
            @include('layouts.partials.validation-errors')

            @foreach($staticPages as $staticPage)
                <div class="form-body">
                    <div class="form-group">
                            <label for="{{$staticPage->key}}">{{$staticPage->$nameVC}}</label>
                            {!! Form::textarea($staticPage->key,$staticPage->$valueVC,[
                                'class'=>'form-control myTextArea',
                            ]) !!}
                            <br>
                    </div>
                </div>
            @endforeach
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{trans('admin.save')}}</button>
            </div>

        </div>
        <br>
        {!! Form::close()!!}
    </div><!-- /.box -->

@stop


