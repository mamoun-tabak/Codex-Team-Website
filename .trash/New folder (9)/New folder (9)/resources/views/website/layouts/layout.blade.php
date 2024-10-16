<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Codex Team</title>

      <!-- Favicons -->
    <link href="{{asset($settings->favicon)}}" rel="icon">
    <link href="{{asset('them/img/apple-logo-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&family=Cairo&family=Markazi+Text&family=Noto+Kufi+Arabic:wght@200;300&family=Noto+Sans+Arabic:wght@500&family=Tajawal:wght@300;500&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('them/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('them/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('them/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('them/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('them/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('them/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('them/css/style.css')}}" type="text/css">
    
   
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header" id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{__('words.linhome')}}" title="Codex Team"><img src="{{asset($settings->logo)}}" width="120px" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>

                                
                                
                                <li @php $a = request()->url();if($a=="http://localhost/codexteam/public/ar"||$a=="http://localhost/codexteam/public/en") { echo 'class="active"'; } @endphp><a href="{{__('words.linhome')}}">{{__('words.home')}}</a></li>
                                <li @php $a = request()->url();if (strpos($a, 'about') !== false) { echo 'class="active"'; } @endphp><a href="{{__('words.linabout')}}">{{__('words.about')}}</a></li>
                                <li @php $a = request()->url();if (strpos($a, 'services') !== false) { echo 'class="active"'; } @endphp><a href="{{__('words.linservices')}}">{{__('words.services')}}</a></li>
                                <li @php $a = request()->url();if (strpos($a, 'gallery') !== false) { echo 'class="active"'; } @endphp><a href="{{__('words.lingallery')}}">{{__('words.gallery')}}</a></li>
                                <li @php $a = request()->url();if (strpos($a, 'demo') !== false) { echo 'class="active"'; } @endphp><a href="{{__('words.lindemo')}}">{{__('words.demo')}}</a></li>
                                <li @php $a = request()->url();if (strpos($a, 'contact') !== false) { echo 'class="active"'; } @endphp><a href="{{__('words.lincontact')}}">{{__('words.contact')}}</a></li>
                            </ul>
                        </nav>
                
                        <div class="header__nav__social">


                            @php
                            $a = request()->url();
                            if (strpos($a, 'ar') !== false) {
                            $a = str_replace('ar', 'en', $a);
                            } elseif (strpos($a, 'en') !== false) {
                            $a = str_replace('en', 'ar', $a);
                            }

                            @endphp

                            <a href=" {{$a}}" class="primary-btn" title="اللغة العربية" id="btn-nav">{{__('words.langg')}}</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="color">
                <div id="mobile-menu-wrap"></div>
                <div class="header__nav__social" id="new">
                    <a href="{{$a}}" id="btn-nav" title="اللغة العربية">عربي</a>
                </div>
            </div>    
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
   

    
    @yield('body')

 

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__logo">
                            <a href="{{__('words.linhome')}}"><img src="{{asset($settings->logo)}}" width="140px" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                            <a href="{{$settings->facebook}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{$settings->instagram}}"><i class="fa fa-instagram"></i></a>
                            <a href="{{$settings->twitter}}"><i class="fa fa-twitter"></i></a>
                            <a href="{{$settings->linkedin}}"><i class="fa fa-linkedin"></i></a>
                            <a href="{{$settings->youtube}}"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__option__item">
                            <h5>{{__('words.about_as')}}</h5>
                            <p>{{__('words.con_fot')}}</p>
                            <a href="{{__('words.linabout')}}" class="read__more">{{__('words.see_more')}}<span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>{{__('words.info')}}</h5>
                            <ul>
                                <li><a href="{{__('words.lincontact')}}#map">{{__('words.loc')}}</a></li>
                                <li><a href="{{__('words.lincontact')}}">{{__('words.contact')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>{{__('words.our_work')}}</h5>
                            <ul>
                                <li><a href="{{__('words.lingallery')}}">{{__('words.ser_tt1')}}</a></li>
                                <li><a href="{{__('words.lingallery')}}">{{__('words.ser_tt2')}}</a></li>
                                <li><a href="{{__('words.lingallery')}}">{{__('words.ser_tt3')}}</a></li>
                                <li><a href="{{__('words.lingallery')}}">{{__('words.ser_tt4')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__option__item">
                            <h5>{{__('words.later_new')}}</h5>
                            <p>{{__('words.lncon')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                      <p class="footer__copyright__text">Copyright &copy;
                            All rights reserved </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <a href="https://wa.me/966561747859" class="back-to-top d-flex align-items-center justify-content-center active"><i class="fa fa-whatsapp m-2" style="width: 100px;"></i></a>

    <!-- Js Plugins -->
    <script src="{{asset('them/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('them/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('them/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('them/js/mixitup.min.js')}}"></script>
    <script src="{{asset('them/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('them/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('them/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('them/js/main.js')}}"></script>
</body>

</html>