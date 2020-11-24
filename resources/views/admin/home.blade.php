@extends('layouts.admin.app',[
                                'page_header'       => trans('admin.site'),
                                'page_description'  => trans('admin.statistics')
                                ])
@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">

            <div class="col-lg-3">
                <div class="widget red-bg p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-sliders fa-4x"></i>
                        <h1 class="m-xs">{{$sliders}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.sliders')}}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget bg-aqua p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-first-order fa-4x"></i>
                        <h1 class="m-xs">{{$services}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.services')}}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget bg-red p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-certificate fa-4x"></i>
                        <h1 class="m-xs">{{$testimonials}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.testimonials')}}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget bg-purple p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-car fa-4x"></i>
                        <h1 class="m-xs">{{$brands}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.brands')}}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget bg-green p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-car fa-4x"></i>
                        <h1 class="m-xs">{{$repairedCars}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.repaired_cars')}}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget blue-bg p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-phone fa-4x"></i>
                        <h1 class="m-xs">{{$contacts}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.contacts')}}
                        </h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
