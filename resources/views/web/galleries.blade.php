@extends('layouts.web.app')
@section('content')
<div class=" position-relative " style="margin-top: 120px;">
    <img src='{{asset('web/dist/img/background-breadcamp.png')}}' class=" w-100" style='min-height: 300px; object-fit: cover;' />
    <div class=" position-absolute bread-crum text-center">
        <h3 class="  text-white d-block text-center h2 hvr-pop">Gallery</h3>
{{--        <nav aria-label="breadcrumb" class="text-center" style="display: inline-flex;background-color: transparent;">--}}
{{--            <ol class="breadcrumb">--}}
{{--                <li class="breadcrumb-item "><a href="index.html" class="main-color ">Home</a></li>--}}

{{--                <li class="breadcrumb-item active text-white" aria-current="page">Gallery</li>--}}
{{--            </ol>--}}
{{--        </nav>--}}

    </div>

</div>
<div class="car_6  pb-5 pt-4 tabs mb-5">
    <div class="container">
        <nav class="reserve ">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active hvr-skew-forward" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                   aria-controls="nav-home" aria-selected="true"> All </a>
                @foreach($services as $service)
                    <a class="nav-item nav-link hvr-skew-forward" id="nav-{{$service->id}}-tab" data-toggle="tab" href="#nav-{{$service->id}}" role="tab"
                       aria-controls="nav-{{$service->id}}" aria-selected="{{$loop->first ? 'true' : 'false'}}">{{$service->$nameVC}}</a>
                @endforeach
            </div>
        </nav>
        <div class="tab-content p-3 p-lg-4" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    <div class="col-12">
                        <div id="lightgallery" class="text-center  pt-3 px-3 pb-0 mb-3 ">
                            <div class="row px-0">
                                @foreach($services as $service)
                                    @foreach($service->photos as $photo)
                                        <div class=" col-lg-3 mb-3 px-2 col-md-6 ">
                                            <a href="{{asset($photo->path)}}" class="item">
                                                <div class=" position-relative w-100 ">
                                                    <img src="{{asset($photo->path)}}" height="252px" />
                                                    <div class=" over-sec position-absolute text-light p-3  pointer">
                                                        <div class="card text-center pt-4 px-1">
                                                            <h5 class="text-center text-dark font-weight-bold">{{$service->$nameVC}}</h5>
                                                            <p class="text-dark ">{!! $service->$descVC !!}</p>
                                                            <div class=" d-block mt-1 pb-4">
                                                                <a href="#" class="btn fourth  btn-lg  pointer   px-3">Read More</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($services as $service)
                   <div class="tab-pane fade" id="nav-{{$service->id}}" role="tabpanel" aria-labelledby="nav-{{$service->id}}-tab">
                        <div class="row">
                            <div class="col-12">
                                <div id="lightgallery" class="text-center  pt-3 px-3 pb-0 mb-3 ">
                                    <div class="row px-0">
                                        @foreach($service->photos as $photo)
                                            <div class=" col-lg-3 mb-3 px-2 col-md-6 ">
                                                <a href="{{asset($photo->path)}}" class="item">
                                                    <div class=" position-relative w-100 ">
                                                        <img src="{{asset($photo->path)}}" height="252px" />
                                                        <div class=" over-sec position-absolute text-light p-3  pointer">
                                                            <div class="card text-center pt-4 px-1">
                                                                <h5 class="text-center text-dark font-weight-bold">{{$service->$nameVC}}</h5>
                                                                <p class="text-dark ">{!! $service->$descVC !!}</p>
                                                                <div class=" d-block mt-1 pb-4">
                                                                    <a href="#" class="btn fourth  btn-lg  pointer   px-3">Read More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@stop
