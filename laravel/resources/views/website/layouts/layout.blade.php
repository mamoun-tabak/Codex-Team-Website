<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Codex Team</title>
    
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4RY6LQFN1C"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-4RY6LQFN1C');
    </script>

      <!-- Favicons -->
    <link href="{{asset('them/img/logo-icon.webp')}}" rel="icon">
    <link href="{{asset('them/img/logo-icon.webp')}}" rel="apple-touch-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--arabic-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,800&family=Noto+Kufi+Arabic:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&family=Cairo&family=Markazi+Text&family=Noto+Kufi+Arabic:wght@200;300&family=Noto+Sans+Arabic:wght@500&family=Tajawal:wght@300;500&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    
    <!--<link rel="stylesheet" href="{{asset('them/css/elegant-icons.css')}}" type="text/css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" integrity="sha512-WEQNv9d3+sqyHjrqUZobDhFARZDko2wpWdfcpv44lsypsSuMO0kHGd3MQ8rrsBn/Qa39VojphdU6CMkpJUmDVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css" integrity="sha512-heyoieAHmpAL3BdaQMsbIOhVvGb4+pl4aGCZqWzX/f1BChRArrBy/XUZDHW9WVi5p6pf92pX4yjkfmdaIYa2QQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    @php
                            $a = request()->url();
                            $arabi = app()->getLocale();
                           
    @endphp
    
   
     
    @if($arabi === "ar")
        <link rel="stylesheet" href="{{asset('them/css/arabi.css')}}" type="text/css">
    @else
        <link rel="stylesheet" href="{{asset('them/css/style.css')}}" type="text/css">
    @endif
   
   
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
                        <a href="/{{app()->getLocale()}}/" title="Codex Team"><img src="{{asset('them/img/logo.webp')}}" width="120px" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>

                                    @php
                                        $currentViewName = Str::of(request()->route()->getName())->afterLast('.')->kebab()->replace('_', ' ')->title();
                                    @endphp
                                
                                <li @php if($currentViewName =="Home") { echo 'class="active"'; } @endphp ><a href="/{{app()->getLocale()}}/">{{__('words.home')}}</a></li>
                                <li @php if (strpos($a, 'about') !== false) { echo 'class="active"'; } @endphp><a href="/{{app()->getLocale()}}/about">{{__('words.about')}}</a></li>
                                <li @php if (strpos($a, 'services') !== false) { echo 'class="active"'; } @endphp><a href="/{{app()->getLocale()}}/services">{{__('words.services')}}</a></li>
                                <li @php if (strpos($a, 'gallery') !== false) { echo 'class="active"'; } @endphp><a href="/{{app()->getLocale()}}/gallery">{{__('words.gallery')}}</a></li>
                                <li @php if (strpos($a, 'packages') !== false) { echo 'class="active"'; } @endphp><a href="/{{app()->getLocale()}}/packages">{{__('words.packages')}}</a></li>
                                <li @php if (strpos($a, 'demo') !== false) { echo 'class="active"'; } @endphp><a href="/{{app()->getLocale()}}/demo">{{__('words.demo')}}</a></li>
                                <li @php if (strpos($a, 'contact') !== false) { echo 'class="active"'; } @endphp><a href="/{{app()->getLocale()}}/contact">{{__('words.contact')}}</a></li>
                            </ul>
                        </nav>
                
                        <div class="header__nav__social">


                            @php
                            if (strpos($a, 'ar') !== false) {
                                $a = str_replace('ar', 'en', $a);
                            }elseif (strpos($a, 'en') !== false) {
                                $a = str_replace('en', 'ar', $a);
                            }elseif (strpos($a, 'en') == false && strpos($a, 'ar') == false) {
                                $a = str_replace('https://codexteam.site', 'https://codexteam.site/ar', $a);
                            }
                            @endphp

                            <a href=" {{$a}}" class="primary-btn" id="btn-nav">{{__('words.langg')}}</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="color">
                <div id="mobile-menu-wrap"></div>
                <div class="header__nav__social" id="new">
                    <a href="{{$a}}" id="btn-nav" title="" class="pr-2 pl-2 pt-1 pb-1">{{__('words.langg')}}</a>
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
                            <a href="/{{app()->getLocale()}}/"><img src="{{asset('them/img/logo.webp')}}" width="140px" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                            <a href="{{$settings->facebook}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{$settings->instagram}}"><i class="fa fa-instagram"></i></a>
                            <a href="{{$settings->twitter}}"><i class="fa fa-twitter"></i></a>
                            <a href="{{$settings->linkedin}}"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.youtube.com/@Codexteam11"><i class="fa fa-youtube-play"></i></a>
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
                            <a href="/{{app()->getLocale()}}/about" class="read__more">{{__('words.see_more')}}<span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>{{__('words.info')}}</h5>
                            <ul>
                                <li><a href="/{{app()->getLocale()}}/contact#map">{{__('words.loc')}}</a></li>
                                <li><a href="/{{app()->getLocale()}}/contact">{{__('words.contact_ff')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>{{__('words.our_work')}}</h5>
                            <ul>
                                <li><a href="/{{app()->getLocale()}}/gallery">{{__('words.ser_tt1')}}</a></li>
                                <li><a href="/{{app()->getLocale()}}/gallery">{{__('words.ser_tt2')}}</a></li>
                                <li><a href="/{{app()->getLocale()}}/gallery">{{__('words.ser_tt3')}}</a></li>
                                <li><a href="/{{app()->getLocale()}}/gallery">{{__('words.ser_tt4')}}</a></li> 
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

    <a href="https://wa.me/966561335277" class="back-to-top d-flex align-items-center justify-content-center active"><i class="fa fa-whatsapp m-2" style="width: 100px;"></i></a>

    <!-- Js Plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js" integrity="sha512-nKZDK+ztK6Ug+2B6DZx+QtgeyAmo9YThZob8O3xgjqhw2IVQdAITFasl/jqbyDwclMkLXFOZRiytnUrXk/PM6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.js" integrity="sha512-AmJ0T6lpw/ZQtCleMyfbraDy8AGQ9tWaB/PmRkXdKxH9Kvo0oTuW6+2hTEQ89mHkFIO/LpColEe3+QE+FJtgIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('them/js/main.js')}}"></script>
</body>

</html>