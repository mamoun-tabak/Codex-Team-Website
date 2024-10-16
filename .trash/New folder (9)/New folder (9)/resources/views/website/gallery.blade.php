@extends('website.layouts.layout')

@section('title')
{{__('words.gallery')}} -
@endsection

@section('body')

<div class="breadcrumb-option spad set-bg" data-setbg="{{asset('them/img/breadcrumb-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>{{__('words.sample_t')}}</h2>
                        <div class="breadcrumb__links">
                            <a href="index.html">{{__('words.home')}}</a>
                            <span>{{__('words.gallery')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Gallery Section Begin -->
    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="portfolio__filter">
                        <li class="active" data-filter="*">{{__('words.all')}}</li>
                        <li data-filter=".branding" id="web">Web Design</li>
                        <li data-filter=".digital-marketing">Graphic Design</li>
                        <li data-filter=".web">Motion Graphic</li>
                        <li data-filter=".photography">Video Montage</li>
                        <script>
                            document.getElementById('web').click();
                        </script>
                    </ul>
                </div>
            </div>
            <div class="row portfolio__gallery">
                <div class="col-lg-4 col-md-6 col-sm-6 mix digital-marketing">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('them/img/portfolio/2.png')}}">
                        </div>
                        <div class="portfolio__item__text">
                            <h4>{{__('words.d_onlinestore')}}</h4>
                            <ul>
                                <li>Graphic design</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix digital-marketing">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('them/img/portfolio/1.jpg')}}">
                        </div>
                        <div class="portfolio__item__text">
                            <h4>{{__('words.d_branddesign')}}</h4>
                            <ul>
                                <li>Graphic design</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix digital-marketing">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('them/img/portfolio/3.png')}}">
                        </div>
                        <div class="portfolio__item__text">
                            <h4>{{__('words.d_socila')}}</h4>
                            <ul>
                                <li>Graphic design</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix branding">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('them/img/portfolio/4.jpg')}}"></div>
                        <div class="portfolio__item__text">
                            <h4>{{__('words.d_contracting')}}</h4>
                            <ul>
                                <li>Web design</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix branding">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('them/img/portfolio/5.jpg')}}"></div>
                        <div class="portfolio__item__text">
                            <h4>{{__('words.d_kaimny')}}</h4>
                            <ul>
                                <li>Web design</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix branding">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('them/img/portfolio/6.jpg')}}"></div>
                        <div class="portfolio__item__text">
                            <h4>{{__('words.d_advertiser')}}</h4>
                            <ul>
                                <li>Web design</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix photography">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('them/img/portfolio/portfolio-8.jpg')}}">
                            <iframe id="video1" src="https://www.youtube.com/embed/763gzf5RffY" title="Montage video | Services" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>{{__('words.d_founding')}}</h4>
                            <ul>
                                <li>Montage</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix web">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-9.jpg">
                            <iframe id="video1" src="https://www.youtube.com/embed/x89e24Qn8Dg" title="Motion graphic | Services" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                       </div>
                        <div class="portfolio__item__text">
                            <h4>{{__('words.d_motion')}}</h4>
                            <ul>
                                <li>Motion graphic</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix web">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-2.jpg">
                            <iframe id="video1" src="https://www.youtube.com/embed/6yWU5NE9vuY" title="Logo motion | Services" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>{{__('words.d_logo')}}</h4>
                            <ul>
                                <li>Motion graphic</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option">
                        <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> {{__('words.prev')}}</a>
                        <a href="#" class="number__pagination">1</a>
                        <a href="-" class="arrow__pagination right__arrow">{{__('words.next')}} <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

@endsection