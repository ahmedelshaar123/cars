@extends('layouts.web.app')
@section('content')
<div class="slide">
    <!-- Slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($sliders as $slider)
                <li data-target="#carouselExampleCaptions" data-slide-to="{{$loop->iteration-1}}" class="{{$loop->first ? 'active' : ''}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner slids">
            @foreach($sliders as $slider)
                <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                    <div class="over_lay position-relative">
                        <img src="{{$slider->image}}" class="d-block w-100" alt="...">
                        <div class="cover">
                        </div>
                    </div>
                    <div class="carousel-caption animate__animated animate__backInLeft">
                        <h4>@lang('web.full_service_of')</h4>
                        <h2 class=" font-weight-bold display-4  fon_h2 main-color" style="margin-top: -10px;"> @lang('web.car_repair_and') </h2>
                        <h2 class="font-weight-bold pb-2  display-4 fon_h2 main-color top_P" style="margin-top: -10px;"> @lang('web.maintenance')</h2>
                        <h4 class="h5 ">@lang('web.over_20_years_of_experience')</h4>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>

            <span class="sr-only">@lang('web.prev')</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions " role="button" data-slide="next">
            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->

            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

            <span class="sr-only">@lang('web.next')</span>
        </a>


    </div>
</div>
<div class="car_1 py-5 mt-5">
    <div class="container">
        <h3 class="font-weight-bold text-center">@lang('web.about_us')</h3>
        <p class=" mb-5 d-block font-weight-bold  position-relative under-line text-center main-color">@lang('web.we_repair_and_maintain_all_cars')</p>
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('web/dist/img/header (3).jpg')}}" alt="" class=" mt-4 hvr-pop " width="100%" height="400px" />
            </div>
            <div class="col-lg-6">
                <h3 class="font-weight-bold mt-5 hvr-float-shadow">@lang('web.over_20_years_of_experience')</h3>
                {!! $about->$valueVC !!}
{{--                <div class=" d-block mt-5">--}}
{{--                    <a href="#" class="btn fourth  btn-lg pointer py-2  ">More Details</a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>
<div class="car_2 py-5 mt-5">
    <div class="container">
        <h3 class="font-weight-bold text-center">@lang('web.what_we_do')</h3>
        <p class=" mb-5 d-block font-weight-bold  position-relative under-line text-center main-color">@lang('web.we_repair_and_maintain_all_cars')</p>
        <div class="row">
            <div class="col-lg-4 mt-5-lg mt-4">
                <img src="{{asset('web/dist/img/pic (10).jpg')}}" alt="" width="100%" height="260px" class="hvr-rotate" />
            </div>
            <div class="col-lg-4 mt-5-lg mt-4">
                <div class="card bg-light border-0 px-5 py-4 hvr-rotate">
                    <div class="text-center pt-4">
                        <h4 class="mb-4 font-weight-bold">@lang('web.brake_repair_and_service')</h4>
                        <p>Lorem ipsum dolor sit amet aliquid animi officiis aspernatur voluptas porro optio corporis adipisci? Mollitia, explicabo.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-5-lg mt-4">
                <img src="{{asset('web/dist/img/header (2).jpg')}}" alt="" width="100%" height="260px" class="hvr-rotate" />
            </div>
            <div class="col-lg-4 mt-4">
                <div class="card bg-dark border-0 px-5 py-4 hvr-rotate text-white">
                    <div class="text-center pt-4">
                        <h4 class="mb-4 font-weight-bold">@lang('web.maintenance_and_repairs')</h4>
                        <p>Lorem ipsum dolor sit amet aliquid animi officiis aspernatur voluptas porro optio corporis adipisci? Mollitia, explicabo.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                <img src="{{asset('web/dist/img/pic (9).jpg')}}" alt="" width="100%" height="260px" class="hvr-rotate" />
            </div>
            <div class="col-lg-4 mt-4">
                <div class="card border-0 px-5 py-4 hvr-rotate oil">
                    <div class="text-center pt-4">
                        <h4 class="mb-4 font-weight-bold">@lang('web.oil_change_and_filter')</h4>
                        <p style="margin-bottom: 2.5rem;">Lorem ipsum dolor sit amet aliquid animi officiis aspernatur voluptas porro optio corporis adipisci? Mollitia, explicabo.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="car-3 bg-light py-5  ">
    <div class="container">
        <h3 class="font-weight-bold text-center">@lang('web.testimonials')</h3>
        <p class=" d-block font-weight-bold  position-relative under-line text-center main-color" style="margin-bottom: 5rem;">@lang('web.testimonials')</p>
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
<div class="car-4 py-5 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-4 order-lg-1 order-12">
                <h4 class="font-weight-bold mb-3 hvr-float-shadow">@lang('web.the_car_repair_statistics')</h4>
                <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eaque ipsam ducimus earum labore quo reprehenderit molestiae alias odit, fugit soluta quisquam rem natus ut porro dolorum quis esse reiciendis!</p>
                <div class="row">
                    <div class="col-lg-4 mt-5 hvr-bob">
                        <h4 class="d-block main-color text-center font-weight-bold">{{$yearsOfExperience->$valueVC}}</h4>
                        <h5 class="text-center">@lang('web.years_of_experience')</h5>
                    </div>
                    <div class="col-lg-4 mt-5 hvr-bob">
                        <h4 class="d-block main-color text-center font-weight-bold">{{$repairedCars->$valueVC}}</h4>
                        <h5 class="text-center">@lang('web.repaired_cars')</h5>
                    </div>
                    <div class="col-lg-4 mt-5 hvr-bob">
                        <h4 class="d-block main-color text-center font-weight-bold">{{$workers->$valueVC}}</h4>
                        <h5 class="text-center">@lang('web.workers')</h5>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 order-2">
                <!-- <div class="item mb-4 dropshadow pointer position-relative " data-src="https://www.youtube.com/watch?v=JpxsRwnRwCQ ">
                    <img src="dist/img/header (2).jpg" />
                    <div class="position-absolute mx-auto text-white fa-2x text-center " style="top: 40%; left: 0; right: 0; width: 80px; height: 80px; background-color: #FDC313; padding: 19px; border-radius: 50%; opacity: .8;">
                        <i class="fa fa-play "></i>
                    </div>
                </div> -->
                <iframe width="100%" height="340" src="{{$video->$valueVC}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
        </div>
    </div>
</div>
<div class="car-5 py-5 my-5">
    <div class="container">
        @include('layouts.partials.validation-errors')
        <h3 class="font-weight-bold text-center text-white h1 ">@lang('web.car_repair')<span class="main-color">@lang('web.details')</span></h3>
        <p class=" mb-5 d-block  text-center text-white">@lang('web.get_car_repair_at_lowest_price')</p>
        <form class="pt-5" method="post" action="{{route('repaired-car')}}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-4">
                        <input type="text" class=" form-control form-control-lg " id="exampleInputEmail1" placeholder="@lang('web.name')" aria-describedby="emailHelp" name="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-4">
                        <input type="number" class="  form-control form-control-lg" id="exampleInputEmail1" placeholder="@lang('web.phone')" aria-describedby="emailHelp" name="phone">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <input type="email" class="  form-control form-control-lg" id="exampleInputEmail1" placeholder="@lang('web.email')" aria-describedby="emailHelp" name="email">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select class="form-control mb-3 font-weight-bold text-black-50" id="brand_id" name="brand_id">
                        <option value="" selected disabled>@lang('web.brand')</option>
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->$nameVC}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-control mb-3 font-weight-bold text-black-50" id="modell_id" name="modell_id">
                        <option selected disabled>@lang('web.model')</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select class="form-control mb-3 font-weight-bold text-black-50" id="exampleFormControlSelect1" name="year">
                        <option value="" selected disabled>@lang('web.year')</option>
                        @foreach($years as $year)
                            <option value="{{$year->year}}">{{$year->year}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-control mb-3 font-weight-bold text-black-50" id="exampleFormControlSelect1" name="service_id">
                        <option value="" selected disabled>@lang('web.needed_repair')</option>
                        @foreach($services as $service)
                            <option value="{{$service->id}}">{{$service->$nameVC}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text-center">
                <a href="#">
                    <button type="submit" class="btn btn-primary mt-2 btn-lg fourth text-white px-5">Send</button>
                </a>
            </div>
        </form>
    </div>
</div>

<div class="car_6  pb-5 pt-4 tabs mb-5">
    <div class="container">
        <nav class="reserve ">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active hvr-skew-forward" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                   aria-controls="nav-home" aria-selected="true"> @lang('web.all') </a>
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
                                                                <a href="{{url('services')}}" class="btn fourth  btn-lg  pointer   px-3">@lang('web.read_more')</a>
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
                                                                <a href="{{url('services')}}" class="btn fourth  btn-lg  pointer   px-3">@lang('web.read_more')</a>
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

<div class="contact py-5">
    @include('layouts.partials.validation-errors')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="d-block text-black mb-4 mt-5 font-weight-bold hvr-grow-rotate">Contact Info</h5>
                <h6 class=" d-block p-arg mr-3 text-black hvr-bob">
                    <i class="fa fa-map-marker mt-2 pr-2 text-black"></i> {{$addressVC->$valueVC}}
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
                        <label for="exampleInputEmail1" class="mb-2 ">@lang('web.name')</label>
                        <input type="text" class="form-control form-control-lg " id="exampleInputEmail1" placeholder="@lang('web.name')" aria-describedby="emailHelp" name="name">
                    </div>

                    <div class="form-group ">
                        <label for="exampleInputEmail1" class="mb-2 ">@lang('web.phone')</label>
                        <input type="number" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="@lang('web.phone')" aria-describedby="emailHelp" name="phone">

                    </div>
                    <div class="form-group ">
                        <label for="exampleInputEmail1" class="mb-2">@lang('web.email')</label>
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="@lang('web.email')" aria-describedby="emailHelp" name="email">

                    </div>
                    <div class="form-group mt-3">
                        <label for="exampleInputEmail1" class="mb-2  ">@lang('web.message')</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="@lang('web.message')" rows="4" style="color: red;" name="message"></textarea>
                    </div>

                    <div>
                        <a href="#">
                            <button type="submit" class="btn btn-primary mt-2 btn-lg fourth text-white  px-md-5 px-4 w-100">Send</button>
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

@push('scripts')
    <script>
        $('#brand_id').change(function () {
            var brand_id = $(this).find(':selected').val();
            $.ajax({
                url: "get-models",
                dataType: 'json',
                data: {'brand_id': brand_id},
                success: function (result) {
                    $('#modell_id').empty();
                    for(var i=0;i<result.models_id.length;i++) {
                        $('select[name="modell_id"]').append('<option value="' + result.models_id[i] + '">' + result.models_name[i] + '</option>');
                    }
                }
            })
        });
    </script>
@endpush



