<header>
    <!-- NavBar -->
    <nav @if(request()->segment(2) != '') class="navbar navvbar navbar-expand-lg py-2 py-lg-2 w-100 navbar-fixed-top fixed-top"
         @elseif(request()->segment(2) == '') class="navv navbar navbar-expand-lg py-2 py-lg-2 w-100 navbar-fixed-top fixed-top" @endif>
        <div class="container ">
            <a class="navbar-brand " href="#"><img @if(request()->segment(2) != '') src="{{asset('web/dist/img/log0o.png')}}"
               @elseif(request()->segment(2) == '') src="{{asset('web/dist/img/logo11.png')}}" @endif
               class=" m-lg-4 p-0 hvr-wobble-top " width="130px" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item  {{request()->segment(2) == '' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/')}}"> @lang('web.home') <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item {{request()->segment(2) == 'about' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('about')}}">@lang('web.about_us')</a>
                    </li>

                    <li class="nav-item {{request()->segment(2) == 'services' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('services')}}"> @lang('web.services')</a>
                    </li>

                    <li class="nav-item {{request()->segment(2) == 'galleries' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('galleries')}}">@lang('web.gallery')</a>
                    </li>

                    <li class="nav-item {{request()->segment(2) == 'testimonials' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('testimonials')}}">@lang('web.testimonials')</a>

                    </li>
                    <li class="nav-item {{request()->segment(2) == 'contact-us' ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('contact-us')}}">@lang('web.contact_us')</a>

                    </li>
                    <div class="ml-lg-3" style="margin-top: 1.8rem;">
                        @if(LaravelLocalization::getCurrentLocale() == 'ar' )
                            <a class="text-center" rel="alternate" hreflang="en"
                               href="{{LaravelLocalization::getLocalizedURL('en', null, [], true)}}">
                                <img @if(request()->segment(2) != '') src="{{asset('web/dist/img/languag.svg')}}" @elseif(request()->segment(2) == '')
                                    src="{{asset('web/dist/img/language.svg')}}" @endif  alt="" class="pointer ">
                            </a>
                        @else
                            <a class="text-center" rel="alternate" hreflang="ar"
                               href="{{LaravelLocalization::getLocalizedURL('ar', null, [], true)}}">
                                <img @if(request()->segment(2) != '') src="{{asset('web/dist/img/languag.svg')}}" @elseif(request()->segment(2) == '')
                                src="{{asset('web/dist/img/language.svg')}}" @endif alt="" class="pointer ">
                            </a>
                            @endif
                    </div>
                </ul>

            </div>

        </div>

    </nav>

</header>
