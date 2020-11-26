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
    @include('layouts.partials.validation-errors')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="d-block text-black mb-4 mt-5 font-weight-bold hvr-grow-rotate">@lang('web.contact_info')</h5>
                <h6 class=" d-block p-arg mr-3 text-black hvr-bob">
                    <i class="fa fa-map-marker mt-2 pr-2 text-black"></i> @lang('web.location'): {{$addressVC->$valueVC}} <span class="d-block " style="padding-left: 2rem;"></span>
                </h6>
                <h6 class=" d-block p-arg mr-3 text-black hvr-bob">
                    <i class="fa fa-phone mt-2 rota mr-2 text-black "></i> +{{$phoneVC->$valueVC}}
                </h6>
                <h6 class=" d-block p-arg mr-3 text-black hvr-bob">
                    <i class="fa fa-envelope-o mt-2 pr-2 text-black"></i> {{$emailVC->$valueVC}}
                </h6>
                <h5 class="d-block text-black mb-4 mt-5 text-black font-weight-bold hvr-grow-rotate">@lang('web.opening_hours')</h5>
                <h6 class=" d-block p-arg mr-3 text-black hvr-bob">
                    <i class="fa fa-clock mt-2 pr-2 text-black "></i>{{$workTimesVC->$valueVC}}
                </h6>
{{--                <h6 class="text-black hvr-bob" style="padding-left: 2rem; ">Fri:Closed</h6>--}}
            </div>
            <div class="col-lg-6">
                <form class="pt-5" method="post" action="{{route('contact-us')}}">
                    @csrf
                    <div class="form-group ">
                        <label for="exampleInputEmail1" class="mb-2 ">@lang('web.name')</label>
                        <input type="text" class="form-control form-control-lg " id="exampleInputEmail1" placeholder="User Name" aria-describedby="emailHelp" name="name">
                    </div>

                    <div class="form-group ">
                        <label for="exampleInputEmail1" class="mb-2 ">@lang('web.phone')</label>
                        <input type="number" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Mobile Phone" aria-describedby="emailHelp" name="phone">

                    </div>
                    <div class="form-group ">
                        <label for="exampleInputEmail1" class="mb-2">@lang('web.email')</label>
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email " aria-describedby="emailHelp" name="email">

                    </div>
                    <div class="form-group mt-3">
                        <label for="exampleInputEmail1" class="mb-2  ">@lang('web.message')</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Leave Message " rows="4" style="color: red;" name="message"></textarea>
                    </div>

                    <div>
                        <a href="#">
                            <button type="submit" class="btn btn-primary mt-2 btn-lg fourth text-white  px-md-5 px-4 w-100">@lang('web.send')</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid p-0 m-0 mapp">
    <div class="position-relative">
        <div class=" wheel-map dropshadow mb-4" data-lat="45.7143528" data-lng="-74.0059731" data-zoom="10">
        </div>
        <div class="cover-map card rounded-0  p-4">
            <div class="row">
                <div class="col">
                    <h5 class="d-block text-white mb-4 mt-5 font-weight-bold hvr-grow-rotate">@lang('web.contact_info')</h5>
                    <h6 class=" d-block p-arg mr-3 text-white hvr-bob">
                        <i class="fa fa-map-marker mt-2 pr-2 text-white"></i> Location: {{$addressVC->$valueVC}} <span class="d-block" style="padding-left: 1.6rem;"></span>
                    </h6>
                    <h6 class=" d-block p-arg mr-3 text-white hvr-bob">
                        <i class="fa fa-phone mt-2 rota mr-2 text-white rota"></i> +{{$phoneVC->$valueVC}}
                    </h6>
                    <h6 class=" d-block p-arg mr-3 text-white hvr-bob">
                        <i class="fa fa-envelope-o mt-2 pr-2 text-white"></i> {{$emailVC->$valueVC}}
                    </h6>
                    <h5 class="d-block text-white my-4 text-white font-weight-bold hvr-grow-rotate">@lang('web.working_times')</h5>
                    <h6 class=" d-block p-arg mr-3 text-white hvr-bob">
                        <i class="fa fa-clock mt-2 pr-2 text-white"></i>{{$workTimesVC->$valueVC}}
                    </h6>
{{--                    <h6 class="text-white hvr-bob " style="padding-left: 1.6rem;">Fri:Closed</h6>--}}

                </div>

            </div>


        </div>
    </div>

</div>
@endsection
