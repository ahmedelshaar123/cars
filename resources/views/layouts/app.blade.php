<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--favicons -->
    <link rel="icon" type="image/png" href="{{asset('uploads/logo.png')}}"/>
    <link href="{{asset('uploads/logo.png')}}" rel="apple-touch-icon">
    <!--favicons -->
    <title> {{trans('admin.site')}} | {{trans('admin.db')}} </title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="{{asset('inspina/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('inspina/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('inspina/Ionicons/css/ionicons.min.css')}}">
    <link href="{{asset('inspina/css/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('inspina/js/plugins/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('inspina/js/plugins/sweetalert/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('inspina/js/plugins/bootstrap-fileinput/css/fileinput.min.css')}}">
    <link rel="stylesheet" href="{{asset('inspina/js/plugins/lightbox2/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <link href="{{asset('inspina/css/style.css')}}" rel="stylesheet">
    @if(app()->getLocale() == 'ar')
        <link href="{{asset('inspina/css/bootstrap-rtl.min.css')}}" rel="stylesheet">
        <link href="{{asset('inspina/css/inspina-rtl.css')}}" rel="stylesheet">
    @else
        <link href="{{asset('inspina/css/style.css')}}" rel="stylesheet">
    @endif
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    @stack('styles')
</head>
<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg">
        <style>
            span.select2-container {
                z-index: 10050;
                width: 100% !important;
                padding: 0;
            }
            .select2-container .select2-search--inline {
                float: left;
                width: 100%;
            }
        </style>
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
            </nav>
        </div>
        <section class="content-header">
            <h1>
                {{$page_header ?? trans('admin.site')}}
                <small>{!! $page_description ?? '' !!}</small>
            </h1>
        </section>
        <div class="wrapper wrapper-content">
            <div class="row">
                {{--                @if(session()->has('key'))--}}
                {{--                    <div class="alert alert-success">{{session()->get('key')}}</div>--}}
                {{--                @endif--}}
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
            <div class="footer">
                <div>
                    <strong>&copy;</strong>{{trans('admin.all_rights_reserved')}}
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .swal2-popup {
        font-size: 1.5rem !important;
    }
</style>
</body>
</html>
