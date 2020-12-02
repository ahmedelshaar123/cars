@extends('layouts.web.app')
@section('content')
<div class=" position-relative " style="margin-top: 120px;">
    <img src='{{asset('web/dist/img/background-breadcamp.png')}}' class=" w-100" style='min-height: 300px; object-fit: cover;' />
    <div class=" position-absolute bread-crum text-center">
        <h3 class="  text-white d-block text-center h2 hvr-pop">@lang('web.contact_us')</h3>
{{--        <nav aria-label="breadcrumb" class="text-center" style="display: inline-flex;background-color: transparent;">--}}
{{--            <ol class="breadcrumb">--}}
{{--                <li class="breadcrumb-item "><a href="index.html" class="main-color ">Home</a></li>--}}
{{--                <li class="breadcrumb-item active text-white" aria-current="page">Contact Us </li>--}}
{{--            </ol>--}}
{{--        </nav>--}}

    </div>

</div>
<div class="contact py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="d-block text-black mb-4 mt-5 font-weight-bold hvr-grow-rotate">@lang('web.contact_info')</h5>
                <h6 class=" d-block p-arg mr-3 text-black hvr-bob">
                    <i class="fa fa-map-marker mt-2 pr-2 text-black"></i> {{$addressVC->$valueVC}} <span class="d-block " style="padding-left: 2rem;"></span>
                </h6>
                <h6 class=" d-block p-arg mr-3 text-black hvr-bob">
                    <i class="fa fa-phone mt-2 rota mr-2 text-black "></i> +{{$phoneVC->$valueVC}}
                </h6>
                <h6 class=" d-block p-arg mr-3 text-black hvr-bob">
                    <i class="fa fa-envelope-o mt-2 pr-2 text-black"></i> {{$emailVC->$valueVC}}
                </h6>
                <h5 class="d-block text-black mb-4 mt-5 text-black font-weight-bold hvr-grow-rotate">@lang('web.working_times')</h5>
                <h6 class=" d-block p-arg mr-3 text-black hvr-bob">
                    <i class="fa fa-clock mt-2 pr-2 text-black "></i> {{$workTimesVC->$valueVC}}
                </h6>
{{--                <h6 class="text-black hvr-bob" style="padding-left: 2rem; ">Fri:Closed</h6>--}}
            </div>
            <div class="col-lg-6">
                <form class="pt-5" method="post" action="{{route('contact-us')}}">
                    @csrf
                    <div class="form-group ">
                        <label for="exampleInputEmail1" class="mb-2">@lang('web.name')</label>
                        <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="@lang('web.name')" aria-describedby="emailHelp" name="name">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <label for="exampleInputEmail1" class="mb-2 ">@lang('web.phone')</label>
                        <input type="number" class="form-control form-control-lg @error('phone') is-invalid @enderror" id="exampleInputEmail1" placeholder="@lang('web.phone')" aria-describedby="emailHelp" name="phone">
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <label for="exampleInputEmail1" class="mb-2">@lang('web.email')</label>
                        <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="@lang('web.email')" aria-describedby="emailHelp" name="email">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="exampleInputEmail1" class="mb-2">@lang('web.message')</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" id="exampleFormControlTextarea1" placeholder="@lang('web.message')" rows="4" style="color: red;" name="message"></textarea>
                        @error('message')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <a href="">
                            <button type="submit" class="btn btn-primary mt-2 btn-lg fourth text-white  px-md-5 px-4 w-100">@lang('web.send')</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>



<div class="container-fluid p-0 m-0 mt-4">
    <div class="wheel-map dropshadow mb-4" data-lat="45.7143528" data-lng="-74.0059731" data-zoom="10">

    </div>
</div>


@endsection


