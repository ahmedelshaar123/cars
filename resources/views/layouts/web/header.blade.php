<header>
    <!-- NavBar -->
    <nav class="navv navbar navbar-expand-lg py-2 py-lg-2 w-100 navbar-fixed-top fixed-top ">
        <div class="container ">
            <a class="navbar-brand " href="#"><img src="{{asset('web/dist/img/logo11.png')}}" class="mt-lg-4 m-0 p-0   hvr-wobble-top " width="130px" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item {{request()->segment(2) == '' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/')}}">@lang('web.home') <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item {{request()->segment(2) == 'about' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('about')}}">@lang('web.about_us')</a>
                    </li>

                    <li class="nav-item {{request()->segment(2) == 'services' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('services')}}"> @lang('web.services')</a>
                    </li>

                    <li class="nav-item {{request()->segment(2) == 'galleries' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('galleries')}}">@lang('web.galleries')</a>
                    </li>

                    <li class="nav-item {{request()->segment(2) == 'testimonials' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('testimonials')}}">@lang('web.testimonials')</a>

                    </li>
                    <li class="nav-item {{request()->segment(2) == 'contact-us' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('contact-us')}}">@lang('web.contact_us')</a>

                    </li>
{{--                    <a href="#">--}}
{{--                        <i class="fa fa-search ml-lg-5  text-white" style="font-size: 20px; margin-top: 2.5rem"></i>--}}
{{--                    </a>--}}
{{--                    <a href="#">--}}
{{--                        <button class="btn btn-info  pt-1 pb-2   ml-lg-3 btton" data-toggle="modal" data-target="#exampleModal1"> Login</button>--}}
{{--                    </a>--}}

                </ul>

            </div>

        </div>

    </nav>

</header>

