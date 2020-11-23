@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.models'),

                                ])
@section('content')
    <div class="ibox-content">
        <div @if(app()->getLocale() == 'ar')  class="pull-right" @else class="pull-left" @endif>
            <a href="{{route('models.create')}}" class="btn btn-primary">
                <i class="fa fa-plus"></i>{{trans('admin.add')}}
            </a>
        </div>
        <hr>
        <div class="box-body">
            @if(count($models))
                <div class="table-responsive">
                    <table class="data-table table table-bordered" id="table1">
                        <thead>
                            <th class="text-center">#</th>
                            <th class="text-center">{{trans('admin.model')}}</th>
                            <th class="text-center">{{trans('admin.brand')}}</th>
                            <th class="text-center">{{trans('admin.edit')}}</th>
                            <th class="text-center">{{trans('admin.delete')}}</th>

                        </thead>
                        <tbody>
                            @foreach($models as $model)
                                <tr id="removable{{$model->id}}">
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td class="text-center">{{$model->$nameVC}}</td>
                                    <td class="text-center">{{$model->brand->$nameVC}}</td>
                                    <td class="text-center"><a href="{{route('models.edit', $model->id)}}"
                                                               class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <button data-token="{{ csrf_token() }}"
                                                data-route="{{URL::route('models.destroy',$model->id)}}"
                                                type="button" class="destroy btn btn-danger btn-xs"><i
                                                class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        @else
            <div class="col-md-4 col-md-offset-4">
                <div class="alert alert-info md-blue text-center">{{trans('admin.no_data')}}</div>
            </div>
        @endif
    </div>

@stop
