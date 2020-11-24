@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.services'),

                                ])
@section('content')
    <div class="ibox-content">
        <div @if(app()->getLocale() == 'ar')  class="pull-right" @else class="pull-left" @endif>
            <a href="{{route('services.create')}}" class="btn btn-primary">
                <i class="fa fa-plus"></i>{{trans('admin.add')}}
            </a>
        </div>
        <hr>
        <div class="box-body">
            @if(count($services))
                <div class="table-responsive">
                    <table class="data-table table table-bordered" id="table1">
                        <thead>
                            <th class="text-center">#</th>
                            <th class="text-center">{{trans('admin.name')}}</th>
                            <th class="text-center">{{trans('admin.desc')}}</th>
                            <th class="text-center">{{trans('admin.features')}}</th>
                            <th class="text-center">{{trans('admin.images')}}</th>
                            <th class="text-center">{{trans('admin.edit')}}</th>
                            <th class="text-center">{{trans('admin.delete')}}</th>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr id="removable{{$service->id}}">
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-center">{{$service->$nameVC}}</td>
                                <td class="text-center">{!!$service->$descVC!!}</td>
                                <td class="text-center">{!!$service->$features!!}</td>
                                <td class="text-center">
                                    @foreach($service->photos as $photo)
                                        <img src="{{asset($photo->path)}}"
                                             alt="" style="height: 50px;">
                                    @endforeach
                                </td>

                                <td class="text-center"><a href="{{route('services.edit', $service->id)}}"
                                                           class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                </td>
                                <td class="text-center">
                                    <button data-token="{{ csrf_token() }}"
                                            data-route="{{URL::route('services.destroy',$service->id)}}"
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
