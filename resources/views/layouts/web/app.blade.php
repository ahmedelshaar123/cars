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
<body di r="ltr" class="ltr">
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
@stack('scripts')

</body>
<!-- </body> -->

</html>
