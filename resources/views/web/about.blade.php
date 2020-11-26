@extends('layouts.web.app')
@section('content')
<div class=" position-relative " style="margin-top: 120px;">
    <img src='{{asset('web/dist/img/background-breadcamp.png')}}' class=" w-100" style='min-height: 300px; object-fit: cover;' />
    <div class=" position-absolute bread-crum text-center">
        <h3 class="  text-white d-block text-center h2 hvr-pop">@lang('web.about_us')</h3>
{{--        <nav aria-label="breadcrumb" class="text-center" style="display: inline-flex;background-color: transparent;">--}}
{{--            <ol class="breadcrumb">--}}
{{--                <li class="breadcrumb-item "><a href="{{url('/')}}" class="main-color ">Home</a></li>--}}
{{--                <li class="breadcrumb-item active text-white" aria-current="page">About Us </li>--}}
{{--            </ol>--}}
{{--        </nav>--}}

    </div>

</div>

<div class="car_1 py-5 mt-5 about-2">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('web/dist/img/header (3).jpg')}}" alt="" class=" mt-4 hvr-pop " width="100%" height="400px" />
            </div>
            <div class="col-lg-6">
                <h3 class="font-weight-bold mt-5 hvr-float-shadow">@lang('web.over_20_years_experience')</h3>
                {!! $about->$valueVC !!}
{{--                <div class=" d-block mt-5 ">--}}
{{--                    <a href="#" class="btn fourth  btn-lg pointer py-2  ">More Details</a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>
<div class="about-2 py-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="font-weight-bold pb-4 hvr-float-shadow">@lang('web.our_message')</h2>
                {!! $message->$valueVC !!}
            </div>
            <div class="col-lg-6">
                <h2 class="font-weight-bold pb-4 hvr-float-shadow">@lang('web.our_vision')</h2>
                {!! $vision->$valueVC !!}
            </div>
        </div>
    </div>
</div>

@stop
