<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Repair</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('web/dist/css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @stack('styles')
</head>
<body @if(app()->getLocale() == 'en') dir="ltr" class="ltr" @else dir="rtl" class="rtl" @endif>
<!-- <body> -->
@include('layouts.web.header')
@yield('content')
@include('layouts.web.footer')
<div class="over text-center ">
    <div class="lds-spinner ">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="modal fade modal_1 " id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog border-0" role="document" style="margin-top: 120px;">
        <div class="modal-content pt-2 pb-3">
            <div class="modal-header px-4 position-relative border-0 d-block">
                <!-- Button trigger modal -->


                <div class="close-btn pointer text-center" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times main-color" style="font-size: 20px;margin-top: 12px;"></i>
                </div>
            </div>


            <div class="modal-body px-5 contact">


                <form class="">
                    <div class="form-group ">
                        <label for="exampleInputEmail1" class="mb-2 ">User Name</label>
                        <input type="text" class="form-control form-control-lg " id="exampleInputEmail1" placeholder="User Name" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group ">
                        <label for="exampleInputEmail1" class="mb-2 ">password</label>
                        <input type="password" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="password" aria-describedby=" emailHelp ">
                    </div>
                    <div>
                        <a href="# ">
                            <button type="submit " class="btn btn-primary mt-2 btn-lg fourth text-white w-100 ">Login</button>
                        </a>
                    </div>
                    <h5 class="font-weight-bold d-block text-center pt-4 pb-3">OR</h5>
                    <div class="text-center ">
                        <a href="# ">
                            <button type="submit " class=" register btn btn-primary  btn-lg fourth text-white w-50 " data-toggle="modal" data-target="#TARGET-3" data-dismiss="modal">Register Now</button>
                        </a>
                    </div>
                    <div class="pointer text-center" data-toggle="modal" data-target="#TARGET-2" data-dismiss="modal">
                        <h6 class="mt-4 hvr-bob">Forget password ?</h6>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade  modal_1  modal_3" id="TARGET-3" tabindex="-1" role="dialog" aria-labelledby="#TARGET-3" aria-hidden="true">
    <div class="modal-dialog border-0" role="document" style="margin-top: 120px;">
        <div class="modal-content pt-2 pb-4">
            <div class="modal-header px-4 position-relative border-0 d-block">

                <div class="close-btn pointer text-center" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times  main-color" style="font-size: 20px;margin-top: 12px;"></i>

                </div>
            </div>
            <div class="modal-body  contact px-4">
                <form class="">
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg-6 ">
                                <div class="form-group ">
                                    <label for="exampleInputEmail1" class="mb-2 ">First Name</label>
                                    <input type="text" class="form-control form-control-lg " id="exampleInputEmail1" placeholder="First Name" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="form-group ">
                                    <label for="exampleInputEmail1" class="mb-2 ">Last Name</label>
                                    <input type="text" class="form-control form-control-lg " id="exampleInputEmail1" placeholder="Last Name" aria-describedby="emailHelp">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group ">
                            <label for="exampleInputEmail1" class="mb-2 ">Email</label>
                            <input type="email" class="form-control form-control-lg " id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group ">
                            <label for="exampleInputEmail1" class="mb-2 ">Email</label>
                            <input type="password" class="form-control form-control-lg " id="exampleInputEmail1" placeholder="password" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group ">
                            <label for="exampleInputEmail1" class="mb-3 ">Repeat password</label>
                            <input type="password" class="form-control form-control-lg " id="exampleInputEmail1" placeholder="Repeat password" aria-describedby="emailHelp">
                        </div>
                        <div class="form-check-inline mb-3">
                            <input class="form-check-input d-inline-block" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label  d-inline-block ml-3 font-weight-bold second-color" for="defaultCheck1">
                                I agree to all <a  href="#" class="main-color">terms&condition</a> and <a href="#" class="main-color">privacy policy</a>
                            </label>
                        </div>
                        <div>
                            <a href="# ">
                                <button type="submit " class="btn btn-primary mt-2 btn-lg fourth text-white w-100 ">Register</button>
                            </a>
                        </div>
                        <div class="text-center">
                            <h6 class="mt-3 text-center d-inline-block">Are you already have an account ? </h6>
                            <div class="pointer text-center d-inline-block mt-3 " data-toggle="modal" data-target="#exampleModal1" data-dismiss="modal">
                                <h5 class=" hvr-bob text-black-50">Login Now</h5>
                            </div>
                        </div>

                    </div>


                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade  modal_1  modal_3" id="TARGET-2" tabindex="-1" role="dialog" aria-labelledby="#TARGET-2" aria-hidden="true">
    <div class="modal-dialog border-0" role="document" style="margin-top: 150px;">
        <div class="modal-content pt-2 pb-5">
            <div class="modal-header px-4 position-relative border-0 d-block">
                <div class="">
                    <h5 class="pt-3 ">An email will be sent to reset password</h5>

                </div>
                <div class="close-btn pointer text-center" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times  main-color" style="font-size: 20px;margin-top: 12px;"></i>

                </div>
            </div>
            <div class="modal-body px-5 contact">

                <form class="form1">
                    <div class="form-group ">
                        <label for="exampleInputEmail1" class="mb-2 ">User Name or Email</label>
                        <input type="text" class="form-control form-control-lg " id="exampleInputEmail1" placeholder="User Name or Email" aria-describedby="emailHelp">
                    </div>


                    <div>
                        <a href="# ">
                            <button type="submit " class="btn btn-primary mt-2 btn-lg fourth text-white w-100 ">Login</button>
                        </a>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8 " type="text/javascript "></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js "></script>
<script src="{{asset('web/dist/js/jquery.min.js')}}"></script>
<script src="{{asset('web/dist/js/popper.min.js')}}"></script>
<script src="{{asset('web/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('web/dist/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('web/dist/js/waypoints.min.js')}}"></script>
<script src="{{asset('web/dist/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('web/dist/js/jsRapStar.js')}}"></script>
<script src="{{asset('web/dist/js/lightgallery.js')}}"></script>
<script src="{{asset('web/dist/js/main.js')}}"></script>
<script>
    $("#lightgallery ").lightGallery({
        selector: '.item'
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@if(session()->has('success'))
    <script>
        // setTimeout(function(){
        //     $("div.alert").remove();
        // }, 2000 ); // 2 secs
        Swal.fire({
            title: '{{session()->get('success')}}',
            imageUrl: "{{asset('web/dist/img/log0o.png')}}",
        });
        // location.reload();
    </script>
@endif
@stack('scripts')

</body>
<!-- </body> -->

</html>
