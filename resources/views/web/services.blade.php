@extends('layouts.web.app')
@section('content')
<div class=" position-relative " style="margin-top: 120px;">
    <img src='{{asset('web/dist/img/background-breadcamp.png')}}' class=" w-100" style='min-height: 300px; object-fit: cover;' />
    <div class=" position-absolute bread-crum text-center">
        <h3 class="  text-white d-block text-center h2 hvr-pop">Services</h3>
{{--        <nav aria-label="breadcrumb" class="text-center" style="display: inline-flex;background-color: transparent;">--}}
{{--            <ol class="breadcrumb">--}}
{{--                <li class="breadcrumb-item "><a href="index.html" class="main-color ">Home</a></li>--}}
{{--                <li class="breadcrumb-item "><a href="index.html" class="main-color ">Services</a></li>--}}
{{--                <li class="breadcrumb-item active text-white" aria-current="page">Engine Repair</li>--}}
{{--            </ol>--}}
{{--        </nav>--}}

    </div>

</div>
<div class="container login_ py-5 services mb-5">

    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills text-center bg-light rounded-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach($services as $service)
                    <a class="nav-link {{$loop->first ? 'active' : ''}}" id="v-pills-{{$service->id}}-tab" data-toggle="pill" href="#v-pills-{{$service->id}}" role="tab"
                       aria-controls="v-pills-{{$service->id}}" aria-selected="{{$loop->first ? 'true' : 'false'}}">
                        <div>
                            {{$service->$nameVC}}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content" id="v-pills-tabContent">
                @foreach($services as $service)
                    <div class="tab-pane fade show {{$loop->first ? 'active' : ''}}" id="v-pills-{{$service->id}}" role="tabpanel" aria-labelledby="v-pills-{{$service->id}}-tab">
                        <img src="{{asset($service->photos()->first()->path)}}" alt="" class="mt-md-0 mt-5 hvr-pop" style="width: 1000px" height="200px"  />
                        <h3 class="font-weight-bold my-4 hvr-float-shadow">{{$service->$nameVC}}</h3>
                        {!! $service->$descVC !!}
                        {!! $service->$features !!}
{{--                        <div class=" d-block mt-5 ">--}}
{{--                            <a href="#" class="btn fourth  btn-lg pointer py-2" data-toggle="modal" data-target="#exampleModal2">Use This Service</a>--}}
{{--                        </div>--}}
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
@endsection
