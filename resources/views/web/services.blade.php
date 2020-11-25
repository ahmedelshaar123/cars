@extends('layouts.web.app')
@section('content')
<div class=" position-relative " style="margin-top: 120px;">
    <img src='dist/img/background-breadcamp.png' class=" w-100" style='min-height: 300px; object-fit: cover;' />
    <div class=" position-absolute bread-crum text-center">
        <h3 class="  text-white d-block text-center h2 hvr-pop">Services</h3>
        <nav aria-label="breadcrumb" class="text-center" style="display: inline-flex;background-color: transparent;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="index.html" class="main-color ">Home</a></li>
                <li class="breadcrumb-item "><a href="index.html" class="main-color ">Services</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Engine Repair</li>
            </ol>
        </nav>

    </div>

</div>
<div class="container login_ py-5 services mb-5">

    <div class="row">
        <div class="col-md-3  ">
            <div class="nav flex-column nav-pills text-center bg-light rounded-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active  " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    <div>
                        Brake Repair
                    </div>
                </a>
                <a class="nav-link  " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    <div>Tire Repair</div>
                </a>
                <a class="nav-link  " id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                    <div>Oil Change</div>
                </a>
                <a class="nav-link " id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    <div>
                        Transmission Repair
                    </div>
                </a>
                <a class="nav-link " id="v-pills-Engine-tab" data-toggle="pill" href="#v-pills-Engine" role="tab" aria-controls="v-pills-Engine" aria-selected="false">
                    <div>
                        Engine Repair
                    </div>
                </a>
                <a class="nav-link no_bootom" id="v-pills-Drivetrain-tab" data-toggle="pill" href="#v-pills-Drivetrain" role="tab" aria-controls="v-pills-Drivetrain" aria-selected="false">
                    <div>
                        Drivetrain Repair
                    </div>
                </a>
            </div>

        </div>
        <div class="col-md-9">

            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <img src="dist/img/pic (10).jpg" alt="" class="mt-md-0 mt-5 hvr-pop" />
                    <h3 class="font-weight-bold my-4 hvr-float-shadow"> Engine Repair</h3>
                    <p class="lead mb-4">Lorem ipsum dolor sit, Voluptatum rem excepturi deleniti assumenda dolor sit quae quisquam sapiente repellat impedit met fugit tempore sed veritatis pariatur accusantium obcaecati laboriosam. Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Itaque placeat dignissimos pariatur. Nulla maiores Itaque placeat dignissimos pariatur. Nulla maioresItaque placeat dignissimos pariatur. Nulla maiores Itaque placeat dignissimos pariatur. Nulla maiores laborupariatur
                        accusantium obcaecati laboriosam.

                    </p>
                    <ol class="list-unstyled font-smaal">
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>

                    </ol>
                    <div class=" d-block mt-5 ">
                        <a href="#" class="btn fourth  btn-lg pointer py-2" data-toggle="modal" data-target="#exampleModal2">Use This Service</a>
                    </div>
                </div>
                <div class="tab-pane fade reserve" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <img src="dist/img/pic (10).jpg" alt="" class="mt-md-0 mt-5 hvr-pop" />
                    <h3 class="font-weight-bold my-4 hvr-float-shadow"> Engine Repair</h3>
                    <p class="lead mb-4">Lorem ipsum dolor sit, Voluptatum rem excepturi deleniti assumenda dolor sit quae quisquam sapiente repellat impedit met fugit tempore sed veritatis pariatur accusantium obcaecati laboriosam. Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Itaque placeat dignissimos pariatur. Nulla maiores Itaque placeat dignissimos pariatur. Nulla maioresItaque placeat dignissimos pariatur. Nulla maiores Itaque placeat dignissimos pariatur. Nulla maiores laborupariatur
                        accusantium obcaecati laboriosam.

                    </p>
                    <ol class="list-unstyled font-smaal">
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>

                    </ol>
                    <div class=" d-block mt-5 ">
                        <a href="#" class="btn fourth  btn-lg pointer py-2 " data-toggle="modal" data-target="#exampleModal2">Use This Service</a>
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <img src="dist/img/pic (10).jpg" alt="" class="mt-md-0 mt-5 hvr-pop" />
                    <h3 class="font-weight-bold my-4 hvr-float-shadow"> Engine Repair</h3>
                    <p class="lead mb-4">Lorem ipsum dolor sit, Voluptatum rem excepturi deleniti assumenda dolor sit quae quisquam sapiente repellat impedit met fugit tempore sed veritatis pariatur accusantium obcaecati laboriosam. Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Itaque placeat dignissimos pariatur. Nulla maiores Itaque placeat dignissimos pariatur. Nulla maioresItaque placeat dignissimos pariatur. Nulla maiores Itaque placeat dignissimos pariatur. Nulla maiores laborupariatur
                        accusantium obcaecati laboriosam.

                    </p>
                    <ol class="list-unstyled font-smaal">
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>

                    </ol>
                    <div class=" d-block mt-5 ">
                        <a href="#" class="btn fourth  btn-lg pointer py-2 " data-toggle="modal" data-target="#exampleModal2">Use This Service</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"><img src="dist/img/pic (10).jpg" alt="" class="mt-md-0 mt-5 hvr-pop" />
                    <h3 class="font-weight-bold my-4 hvr-float-shadow"> Engine Repair</h3>
                    <p class="lead mb-4">Lorem ipsum dolor sit, Voluptatum rem excepturi deleniti assumenda dolor sit quae quisquam sapiente repellat impedit met fugit tempore sed veritatis pariatur accusantium obcaecati laboriosam. Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Itaque placeat dignissimos pariatur. Nulla maiores Itaque placeat dignissimos pariatur. Nulla maioresItaque placeat dignissimos pariatur. Nulla maiores Itaque placeat dignissimos pariatur. Nulla maiores laborupariatur
                        accusantium obcaecati laboriosam.

                    </p>
                    <ol class="list-unstyled font-smaal">
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>

                    </ol>
                    <div class=" d-block mt-5 ">
                        <a href="#" class="btn fourth  btn-lg pointer py-2" data-toggle="modal" data-target="#exampleModal2">Use This Service</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-Engine" role="tabpanel" aria-labelledby="v-pills-Engine-tab"><img src="dist/img/pic (10).jpg" alt="" class="mt-md-0 mt-5 hvr-pop" />
                    <h3 class="font-weight-bold my-4 hvr-float-shadow"> Engine Repair</h3>
                    <p class="lead mb-4">Lorem ipsum dolor sit, Voluptatum rem excepturi deleniti assumenda dolor sit quae quisquam sapiente repellat impedit met fugit tempore sed veritatis pariatur accusantium obcaecati laboriosam. Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Itaque placeat dignissimos pariatur. Nulla maiores Itaque placeat dignissimos pariatur. Nulla maioresItaque placeat dignissimos pariatur. Nulla maiores Itaque placeat dignissimos pariatur. Nulla maiores laborupariatur
                        accusantium obcaecati laboriosam.

                    </p>
                    <ol class="list-unstyled font-smaal">
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>

                    </ol>
                    <div class=" d-block mt-5 ">
                        <a href="#" class="btn fourth  btn-lg pointer py-2  " data-toggle="modal" data-target="#exampleModal2">Use This Service</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-Drivetrain" role="tabpanel" aria-labelledby="v-pills-Drivetrain-tab"><img src="dist/img/pic (10).jpg" alt="" class="mt-md-0 mt-5 hvr-pop" />
                    <h3 class="font-weight-bold my-4 hvr-float-shadow"> Engine Repair</h3>
                    <p class="lead mb-4">Lorem ipsum dolor sit, Voluptatum rem excepturi deleniti assumenda dolor sit quae quisquam sapiente repellat impedit met fugit tempore sed veritatis pariatur accusantium obcaecati laboriosam. Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Itaque placeat dignissimos pariatur. Nulla maiores Itaque placeat dignissimos pariatur. Nulla maioresItaque placeat dignissimos pariatur. Nulla maiores Itaque placeat dignissimos pariatur. Nulla maiores laborupariatur
                        accusantium obcaecati laboriosam.

                    </p>
                    <ol class="list-unstyled font-smaal">
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li class="h5 "> <i class="fa fa-check-circle  main-color pr-3 hvr-wobble-top" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>

                    </ol>
                    <div class=" d-block mt-5 ">
                        <a href="#" class="btn fourth  btn-lg pointer py-2  " data-toggle="modal" data-target="#exampleModal2">Use This Service</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--start footer-->
<footer class="pt-4 pb-2 foot_er ">

    <div class=" foot_under clearfix ">
        <div class="container ">

            <div class=" ">
                <div class="row ">
                    <div class="col-lg-6 ">
                        <h5 class="text-white pt-2 "> ALL Rights Reserved © 2020
                            <a href="# " class="main-color ">SMART LEVEL</a>

                        </h5>
                    </div>
                    <div class="col-lg-6 ">
                        <a href="# ">
                                <span class="float-md-right text-center d-inline-block d-sm-inline-block mt-3 mt-md-0 mb-lg-2 hvr-wobble-top ">
                                  <img src='dist/img/smart-footer-logo.png' width="170 "/>
                               </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>


<!--end footer-->
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
<div class="modal fade model modal_1  modal_3" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg border-0" role="document" style="margin-top: 40px;">
        <div class="modal-content pt-3 pb-4">
            <div class="modal-header px-4 position-relative border-0 d-block">
                <h5 class="text-center font-weight-bold"> <span class="main-color">Car Repair</span> Service</h5>
                <p class="text-center ">write an appointment to repair your car and send all details</p>
                <div class="close-btn pointer text-center" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times  text-dark" style="font-size: 20px;margin-top: 12px;"></i>

                </div>
            </div>
            <div class="modal-body  contact px-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <h6 class="font-weight-bold pb-4">Info about you</h6>
                            <form class="">
                                <div class="form-group ">
                                    <label for="exampleInputEmail1" class="mb-2 ">User Name</label>
                                    <input type="text" class="form-control form-control-lg " id="exampleInputEmail1" placeholder="User Name" aria-describedby="emailHelp">
                                </div>

                                <div class="form-group ">
                                    <label for="exampleInputEmail1" class="mb-2 ">Phone</label>
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Phone" aria-describedby=" emailHelp ">
                                </div>
                                <div class="form-group ">
                                    <label for="exampleInputEmail1" class="mb-2 ">Email</label>
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" aria-describedby=" emailHelp ">
                                </div>
                                <div class="form-group ">
                                    <label for="exampleInputEmail1" class="mb-2 ">address</label>
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="address" aria-describedby=" emailHelp ">
                                </div>


                            </form>
                        </div>
                        <div class="col-lg-4">
                            <h6 class="font-weight-bold pb-4">About Car</h6>
                            <form class="">
                                <div class="form-group ">
                                    <label for="exampleInputEmail1" class="mb-2 ">Card Brand</label>
                                    <input type="text" class="form-control form-control-lg " id="exampleInputEmail1" placeholder="Card Brand" aria-describedby="emailHelp">
                                </div>

                                <div class="form-group ">
                                    <label for="exampleInputEmail1" class="mb-2 ">Model</label>
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Model" aria-describedby=" emailHelp ">
                                </div>
                                <div class="form-group ">
                                    <label for="exampleInputEmail1" class="mb-2 ">Year</label>
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Year" aria-describedby=" emailHelp ">
                                </div>
                                <div class="form-group ">
                                    <label for="exampleInputEmail1" class="mb-2 ">Type Of Service</label>
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Type Of Service" aria-describedby=" emailHelp ">
                                </div>


                            </form>
                        </div>
                        <div class="col-lg-4">
                            <h6 class="font-weight-bold pb-4">Determine appointment</h6>
                            <form class="">
                                <label for="exampleInputEmail1" class="mb-2 ">Date</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Date" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar text-black-50" aria-hidden="true"></i></span>
                                    </div>
                                </div>

                                <label for="exampleInputEmail1" class="mb-2 ">Hour</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Hour" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-clock-o text-black-50" aria-hidden="true"></i></span>
                                    </div>
                                </div>



                            </form>
                        </div>

                    </div>
                    <div class="pt-5 text-center">
                        <a href="# ">
                            <button type="submit " class=" bont btn btn-primary  btn-lg fourth text-white " data-toggle="modal">Send</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js "></script>
<script src="dist/js/jquery.min.js "></script>
<script src="dist/js/popper.min.js "></script>
<script src="dist/js/bootstrap.min.js "></script>
<script src="dist/js/jquery.counterup.min.js "></script>
<script src="dist/js/waypoints.min.js "></script>
<script src="dist/js/owl.carousel.min.js "></script>
<script src="dist/js/jsRapStar.js "></script>
<script src="dist/js/lightgallery.js"></script>
<script src="dist/js/main.js"></script>
<script>
    $("#lightgallery").lightGallery({
        selector: '.item'
    });
</script>

</body>
<!-- </body> -->

</html>
