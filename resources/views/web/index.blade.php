@extends('layouts.web.app')
@section('content')
<div class="slide">
    <!-- Slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

        </ol>
        <div class="carousel-inner slids">
            <div class="carousel-item active">
                <div class="over_lay position-relative">
                    <img src="{{asset('web/dist/img/header (1).jpeg')}}" class="d-block w-100" alt="...">
                    <div class="cover">

                    </div>
                </div>
                <div class="carousel-caption animate__animated animate__backInLeft">
                    <h4>Full Service Of</h4>
                    <h2 class=" font-weight-bold display-4  fon_h2 main-color" style="margin-top: -10px;"> CarRepair& </h2>
                    <h2 class="font-weight-bold pb-2  display-4 fon_h2 main-color top_P" style="margin-top: -10px;"> Maintenance</h2>
                    <h4 class="h5 ">Over 20 Years Of Quality</h4>

                </div>
            </div>
            <div class="carousel-item">
                <div class="over_lay position-relative">
                    <img src="{{asset('web/dist/img/header (2).jpg')}}" class="d-block w-100" alt="...">
                    <div class="cover">

                    </div>
                </div>
                <div class="carousel-caption animate__animated animate__backInLeft">
                    <h4>Full Service Of</h4>
                    <h2 class=" font-weight-bold display-4  fon_h2 main-color" style="margin-top: -10px;"> CarRepair& </h2>
                    <h2 class="font-weight-bold pb-2  display-4 fon_h2 main-color top_P" style="margin-top: -10px;"> Maintenance</h2>
                    <h4 class="h5">Over 20 Years Of Quality</h4>

                </div>
            </div>

            <div class="carousel-item">
                <div class="over_lay position-relative">
                    <img src="{{asset('web/dist/img/header (3).jpg')}}" class="d-block w-100" alt="...">
                    <div class="cover">

                    </div>
                </div>
                <div class="carousel-caption animate__animated animate__backInLeft">
                    <h4>Full Service Of</h4>
                    <h2 class=" font-weight-bold display-4  fon_h2 main-color" style="margin-top: -10px;"> CarRepair& </h2>
                    <h2 class="font-weight-bold pb-2  display-4 fon_h2 main-color top_P" style="margin-top: -10px;"> Maintenance</h2>
                    <h4 class="h5">Over 20 Years Of Quality</h4>

                </div>

            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>

            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions " role="button" data-slide="next">
            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->

            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

            <span class="sr-only">Next</span>
        </a>


    </div>
</div>
<div class="car_1 py-5 mt-5">
    <div class="container">
        <h3 class="font-weight-bold text-center">About Us</h3>
        <p class=" mb-5 d-block font-weight-bold  position-relative under-line text-center main-color">We repair & maintenance for all car</p>
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('web/dist/img/header (3).jpg')}}" alt="" class=" mt-4 hvr-pop " width="100%" height="400px" />
            </div>
            <div class="col-lg-6">
                <h3 class="font-weight-bold mt-5 hvr-float-shadow"> Over 20 Years experience</h3>
                <p class="">Lorem ipsum dolor sit, Voluptatum rem excepturi deleniti assumenda dolor sit quae quisquam sapiente repellat impedit </p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque placeat dignissimos pariatur. Nulla maiores laborum amet fugit tempore sed veritatis pariatur accusantium obcaecati laboriosam.
                    <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque placeat dignissimos pariatur. Nulla maiores laborum amet fugit tempore sed veritatis pariatur accusantium obcaecati laboriosam.
                </p>
                <div class=" d-block mt-5">
                    <a href="#" class="btn fourth  btn-lg pointer py-2  ">More Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="car_2 py-5 mt-5">
    <div class="container">
        <h3 class="font-weight-bold text-center">What We Do</h3>
        <p class=" mb-5 d-block font-weight-bold  position-relative under-line text-center main-color">We offer full service Car repair & maintenance </p>
        <div class="row">
            <div class="col-lg-4 mt-5-lg mt-4">
                <img src="{{asset('web/dist/img/pic (10).jpg')}}" alt="" width="100%" height="260px" class="hvr-rotate" />
            </div>
            <div class="col-lg-4 mt-5-lg mt-4">
                <div class="card bg-light border-0 px-5 py-4 hvr-rotate">
                    <div class="text-center pt-4">
                        <h4 class="mb-4 font-weight-bold">Brake Repair and Service</h4>
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
                        <h4 class="mb-4 font-weight-bold">Maintenance and Repairs</h4>
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
                        <h4 class="mb-4 font-weight-bold">Oil Change and filter</h4>
                        <p style="margin-bottom: 2.5rem;">Lorem ipsum dolor sit amet aliquid animi officiis aspernatur voluptas porro optio corporis adipisci? Mollitia, explicabo.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="car-3 bg-light py-5  ">
    <div class="container">
        <h3 class="font-weight-bold text-center">Testimonial</h3>
        <p class=" d-block font-weight-bold  position-relative under-line text-center main-color" style="margin-bottom: 5rem;">Clients opinion car repair & maintenance</p>
        <div class=" slide text-center ">
            <!-- Slider -->

            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>

                </ol>
                <div class="carousel-inner slids">
                    <div class="carousel-item active">
                        <div class="user_car mb-3">
                            <i class="fa fa-user fa-7x" aria-hidden="true"></i>
                        </div>
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat saepe voluptate nostrum ratione. Aliquam aliquid facere quas consectetur vero? Debitis enim quaerat
                            mollitia illum sequi porro qui, maiores voluptas animi? Lorem, ipsum dolor Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <h5><span class="main-color">Nada Sameh</span> ,Electrician</h5>
                    </div>
                    <div class="carousel-item ">
                        <div class="user_car mb-3">
                            <i class="fa fa-user fa-7x" aria-hidden="true"></i>
                        </div>
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat saepe voluptate nostrum ratione. Aliquam aliquid facere quas consectetur vero? Debitis enim quaerat
                            mollitia illum sequi porro qui, maiores voluptas animi? Lorem, ipsum dolor Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <h5><span class="main-color">Nada Sameh</span> ,Electrician</h5>
                    </div>
                    <div class="carousel-item ">
                        <div class="user_car mb-3">
                            <i class="fa fa-user fa-7x" aria-hidden="true"></i>
                        </div>
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat saepe voluptate nostrum ratione. Aliquam aliquid facere quas consectetur vero? Debitis enim quaerat
                            mollitia illum sequi porro qui, maiores voluptas animi? Lorem, ipsum dolor Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <h5><span class="main-color">Nada Sameh</span> ,Electrician</h5>
                    </div>
                </div>



            </div>
        </div>
    </div>

</div>
<div class="car-4 py-5 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-4 order-lg-1 order-12">
                <h4 class="font-weight-bold mb-3 hvr-float-shadow">The Car Repair Statistics</h4>
                <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eaque ipsam ducimus earum labore quo reprehenderit molestiae alias odit, fugit soluta quisquam rem natus ut porro dolorum quis esse reiciendis!</p>
                <div class="row">
                    <div class="col-lg-4 mt-5 hvr-bob">
                        <h4 class="d-block main-color text-center font-weight-bold">20</h4>
                        <h5 class="text-center">Years of EXperience</h5>
                    </div>
                    <div class="col-lg-4 mt-5 hvr-bob">
                        <h4 class="d-block main-color text-center font-weight-bold">1.5k</h4>
                        <h5 class="text-center">Cars Repaired</h5>
                    </div>
                    <div class="col-lg-4 mt-5 hvr-bob">
                        <h4 class="d-block main-color text-center font-weight-bold">50</h4>
                        <h5 class="text-center">Workers & Technicians</h5>
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
                <iframe width="100%" height="340" src="https://www.youtube.com/embed/nFtbf4prm78" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
        </div>
    </div>
</div>
<div class="car-5 py-5 my-5">
    <div class="container">
        <h3 class="font-weight-bold text-center text-white h1 ">Car Repair <span class="main-color">Detail</span></h3>
        <p class=" mb-5 d-block  text-center text-white">Get the car repair at the lowest price</p>
        <div class="row">
            <div class="col-lg-3 ">
                <select class="form-control mb-5 font-weight-bold text-black-50" id="exampleFormControlSelect1">

                    <option> Car Brand</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="col-lg-2 ">
                <select class="form-control mb-5 font-weight-bold text-black-50" id="exampleFormControlSelect1">

                    <option> Model</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="col-lg-2 ">
                <select class="form-control mb-5 font-weight-bold text-black-50" id="exampleFormControlSelect1">

                    <option> Year</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="col-lg-3">
                <select class="form-control mb-5 font-weight-bold text-black-50" id="exampleFormControlSelect1">

                    <option> Repair Needed</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="col-lg-2">
                <a href="#">
                    <button class="btn btn-info    ml-lg-3 mt-2  btn_color">Send </button>
                </a>
            </div>
        </div>



    </div>
</div>

<div class="car_6 mt-3 py-5 tabs">
    <div class="container">
        <h3 class="font-weight-bold text-center">Gallery</h3>
        <p class=" mb-5 d-block font-weight-bold  position-relative under-line text-center main-color">Some image of car repair & maintenance </p>
        <nav class="reserve ">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active hvr-skew-forward" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"> All </a>
                <a class="nav-item nav-link hvr-skew-forward" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Oil Change</a>
                <a class="nav-item nav-link hvr-skew-forward" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Tire Change</a>
                <a class="nav-item nav-link hvr-skew-forward" id="nav-contact_us-tab" data-toggle="tab" href="#nav-contact_us" role="tab" aria-controls="nav-contact_us" aria-selected="false">Engine Repair</a>
                <a class="nav-item nav-link hvr-skew-forward" id="nav-contact_u-tab" data-toggle="tab" href="#nav-contact_u" role="tab" aria-controls="nav-contact_u" aria-selected="false">Transmission Change</a>
                <a class="nav-item nav-link hvr-skew-forward" id="nav-contact_ue-tab" data-toggle="tab" href="#nav-contact_ue" role="tab" aria-controls="nav-contact_ue" aria-selected="false">Brake Repair</a>
            </div>
        </nav>
        <div class="tab-content p-3 p-lg-4" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    <div class="col-12">
                        <div id="lightgallery" class="text-center  pt-3 px-3 pb-0 mb-3 ">
                            <div class="row px-0">
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (14).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (14).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (4).jpg')}}" class="item">
                                        <div class="   ">
                                            <img src="{{asset('web/dist/img/pic (4).jpg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/header (1).jpeg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/header (1).jpeg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (10).jpg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/pic (10).jpg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (7).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (7).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (8).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (8).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (13).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (13).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (14).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (14).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/header (1).jpeg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/header (1).jpeg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (10).jpg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/pic (10).jpg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (13).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (13).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (7).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (7).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="gallarey.html">
                        <button class="btn btn-info    ml-lg-3 btt"> Read More</button>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">
                    <div class="col-12">
                        <div id="lightgallery" class="text-center  pt-3 px-3 pb-0 mb-3 ">
                            <div class="row px-0">
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (14).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (14).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (4).jpg')}}" class="item">
                                        <div class="   ">
                                            <img src="{{asset('web/dist/img/pic (4).jpg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/header (1).jpeg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/header (1).jpeg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (10).jpg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/pic (10).jpg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (7).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (7).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (8).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (8).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (13).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (13).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (14).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (14).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/header (1).jpeg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/header (1).jpeg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (10).jpg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/pic (10).jpg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (13).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (13).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (7).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (7).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#">
                        <button class="btn btn-info    ml-lg-3 btt"> Read More</button>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">
                    <div class="col-12">
                        <div id="lightgallery" class="text-center  pt-3 px-3 pb-0 mb-3 ">
                            <div class="row px-0">
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (14).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (14).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (4).jpg')}}" class="item">
                                        <div class="   ">
                                            <img src="{{asset('web/dist/img/pic (4).jpg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/header (1).jpeg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/header (1).jpeg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (10).jpg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/pic (10).jpg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (7).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (7).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (8).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (8).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (13).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (13).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (14).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (14).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/header (1).jpeg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/header (1).jpeg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (10).jpg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/pic (10).jpg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (13).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (13).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (7).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (7).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#">
                        <button class="btn btn-info    ml-lg-3 btt"> Read More</button>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact_us" role="tabpanel" aria-labelledby="nav-contact_us-tab">
                <div class="row">
                    <div class="col-12">
                        <div id="lightgallery" class="text-center  pt-3 px-3 pb-0 mb-3 ">
                            <div class="row px-0">
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (14).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (14).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (4).jpg')}}" class="item">
                                        <div class="   ">
                                            <img src="{{asset('web/dist/img/pic (4).jpg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/header (1).jpeg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/header (1).jpeg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (10).jpg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/pic (10).jpg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (7).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (7).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (8).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (8).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (13).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (13).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (14).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (14).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/header (1).jpeg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/header (1).jpeg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (10).jpg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/pic (10).jpg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (13).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (13).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (7).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (7).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#">
                        <button class="btn btn-info    ml-lg-3 btt"> Read More</button>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact_u" role="tabpanel" aria-labelledby="nav-contact_u-tab">
                <div class="row">
                    <div class="col-12">
                        <div id="lightgallery" class="text-center  pt-3 px-3 pb-0 mb-3 ">
                            <div class="row px-0">
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="" class="item">
                                        <div class="">
                                            <img src="" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="" class="item">
                                        <div class="   ">
                                            <img src="" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="" class="item">
                                        <div class=" ">
                                            <img src="" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="" class="item">
                                        <div class=" ">
                                            <img src="" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="" class="item">
                                        <div class="">
                                            <img src="" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="" class="item">
                                        <div class="">
                                            <img src="" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="" class="item">
                                        <div class="">
                                            <img src="" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="" class="item">
                                        <div class="">
                                            <img src="" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="" class="item">
                                        <div class=" ">
                                            <img src="" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="" class="item">
                                        <div class=" ">
                                            <img src="" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="" class="item">
                                        <div class="">
                                            <img src="" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (7).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (7).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#">
                        <button class="btn btn-info    ml-lg-3 btt"> Read More</button>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact_ue" role="tabpanel" aria-labelledby="nav-contact_ue-tab">
                <div class="row">
                    <div class="col-12">
                        <div id="lightgallery" class="text-center  pt-3 px-3 pb-0 mb-3 ">
                            <div class="row px-0">
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (14).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (14).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (4).jpg')}}" class="item">
                                        <div class="   ">
                                            <img src="{{asset('web/dist/img/pic (4).jpg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/header (1).jpeg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/header (1).jpeg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (10).jpg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/pic (10).jpg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (7).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (7).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (8).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (8).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (13).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (13).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (14).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (14).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/header (1).jpeg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/header (1).jpeg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3  mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (10).jpg')}}" class="item">
                                        <div class=" ">
                                            <img src="{{asset('web/dist/img/pic (10).jpg')}}" height="250px" />
                                        </div>
                                    </a>

                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (13).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (13).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>
                                <div class=" col-lg-3 mb-3 px-2 col-md-6 hvr-hang">
                                    <a href="{{asset('web/dist/img/pic (7).jpg')}}" class="item">
                                        <div class="">
                                            <img src="{{asset('web/dist/img/pic (7).jpg')}}" height="250px" />
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#">
                        <button class="btn btn-info    ml-lg-3 btt"> Read More</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-0 m-0 mappp">
    <div class="position-relative">
        <div class=" wheel-map dropshadow mb-4" data-lat="45.7143528" data-lng="-74.0059731" data-zoom="10">

        </div>
        <div class="cover-map card rounded-0  p-4">
            <div class="row">
                <div class="col">
                    <h5 class="d-block text-white mb-4 mt-5 font-weight-bold hvr-grow-rotate">Contact Info</h5>
                    <h6 class=" d-block p-arg mr-3 text-white hvr-bob">
                        <i class="fa fa-map-marker mt-2 pr-2 text-white"></i> Location,Mansoura,Mansoura <span class="d-block" style="padding-left: 1.6rem;">Mansoura,Mansoura</span>
                    </h6>
                    <h6 class=" d-block p-arg mr-3 text-white hvr-bob">
                        <i class="fa fa-phone mt-2 rota mr-2 text-white rota"></i> +01012345678
                    </h6>
                    <h6 class=" d-block p-arg mr-3 text-white hvr-bob">
                        <i class="fa fa-envelope-o mt-2 pr-2 text-white"></i> moh@gmail.com
                    </h6>
                    <h5 class="d-block text-white my-4 text-white font-weight-bold hvr-grow-rotate">Opening Hours</h5>
                    <h6 class=" d-block p-arg mr-3 text-white hvr-bob">
                        <i class="fa fa-clock mt-2 pr-2 text-white"></i>Sat-Thurs 7.00-6.00pm
                    </h6>
                    <h6 class="text-white hvr-bob" style="padding-left: 1.6rem;">Fri:Closed</h6>

                </div>

            </div>


        </div>
    </div>

</div>
@endsection



