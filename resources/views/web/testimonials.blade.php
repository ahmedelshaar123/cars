@extends('layouts.web.app')
@section('content')
<div class=" position-relative " style="margin-top: 120px;">
    <img src='{{asset('web/dist/img/background-breadcamp.png')}}' class=" w-100" style='min-height: 300px; object-fit: cover;' />
    <div class=" position-absolute bread-crum text-center">
        <h3 class="  text-white d-block text-center h2 hvr-pop">Testimonials</h3>
{{--        <nav aria-label="breadcrumb" class="text-center" style="display: inline-flex;background-color: transparent;">--}}
{{--            <ol class="breadcrumb">--}}
{{--                <li class="breadcrumb-item "><a href="index.html" class="main-color ">Home</a></li>--}}
{{--                <li class="breadcrumb-item active text-white" aria-current="page">Testimonial</li>--}}
{{--            </ol>--}}
{{--        </nav>--}}
    </div>
</div>
<div class="car-3  py-5 my-5 ">
    <div class="container">
        <div class=" slide text-center ">
            <!-- Slider -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($testimonials as $testimonial)
                        <li data-target="#carousel" data-slide-to="{{$loop->iteration-1}}" class="{{$loop->first ? 'active' : ''}}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner slids">
                    @foreach($testimonials as $testimonial)
                        <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                            <div class="user_car mb-3">
                                <img src="{{$testimonial->image}}" style="height: 100px" width="100px"/>
                            </div>
                            {!! $testimonial->$descVC !!}
                            <h5><span class="main-color">{{$testimonial->$nameVC}}</span> ,{{$testimonial->$job}}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
