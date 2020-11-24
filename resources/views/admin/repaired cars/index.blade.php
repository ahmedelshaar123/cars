@extends('layouts.admin.app',[
         'page_header'       => trans('admin.site'),
         'page_description'       => trans('admin.repaired_cars')
                                ])
@section('content')
    <div class="ibox-content">
        <div class="box-body">
            @if(count($repairedCars))
                <div class="table-responsive">
                    <table class="data-table table table-bordered" id="table1">
                        <thead>
                        <th class="text-center">#</th>
                        <th class="text-center">{{trans('admin.name')}}</th>
                        <th class="text-center">{{trans('admin.email')}}</th>
                        <th class="text-center">{{trans('admin.phone')}}</th>
                        <th class="text-center">{{trans('admin.brand')}}</th>
                        <th class="text-center">{{trans('admin.model')}}</th>
                        <th class="text-center">{{trans('admin.year')}}</th>
                        <th class="text-center">{{trans('admin.service')}}</th>
                        <th class="text-center">{{trans('admin.status')}}</th>
                        </thead>
                        <tbody>
                        @foreach($repairedCars as $repairedCar)
                            <tr id="removable{{$repairedCar->id}}">
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-center">{{$repairedCar->name}}</td>
                                <td class="text-center">{{$repairedCar->email}}</td>
                                <td class="text-center">{{$repairedCar->phone}}</td>
                                <td class="text-center">{{$repairedCar->model->brand->$nameVC}}</td>
                                <td class="text-center">{{$repairedCar->model->name}}</td>
                                <td class="text-center">{{$repairedCar->year}}</td>
                                <td class="text-center">{{$repairedCar->service->$nameVC}}</td>
                                <td class="text-center">
                                    <form method="POST" action="{{route('repaired-car-status', $repairedCar->id)}}">
                                        {{method_field('PUT')}} {{csrf_field()}}
                                        <select name="status">
                                            <option {{$repairedCar->status == 'not_repaired' ? 'selected' : ''}} value="not_repaired">{{trans('admin.not_repaired')}}</option>
                                            <option {{$repairedCar->status == 'cant_repaired' ? 'selected' : ''}} value="cant_repaired">{{trans('admin.cant_repaired')}}</option>
                                            <option {{$repairedCar->status == 'repaired' ? 'selected' : ''}} value="repaired">{{trans('admin.repaired')}}</option>
                                        </select>
                                        <br><br>
                                        <button type="submit" style="color: #0a6ebd">{{trans('admin.update')}}</button>
                                    </form>
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
