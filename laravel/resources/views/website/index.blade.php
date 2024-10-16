@extends('website.layouts.layout')


@section('title')
{{__('words.home')}} - 
@endsection

@section('description')
{{__('words.descriptionindex')}}
@endsection

@section('keywords')
{{__('words.keywordsindex')}}
@endsection



@section('body')




    

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" id="bg-one">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>Codex Team</span>
                                <h3>{{ __('words.tc1') }}</h3>
                                <a href="https://codex-store.com/" class="primary-btn">{{ __('words.go1') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" id="bg-two">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>Codex Team</span>
                                <h3>{{ __('words.tc2') }}</h3>
                                <a href="https://codex-store.com/" class="primary-btn">{{ __('words.go1') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" id="bg-three">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>Codex Team</span>
                                <h3>{{ __('words.tc3') }}</h3>
                                <a href="https://codex-store.com/" class="primary-btn">{{ __('words.go1') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg"  id="bg-four">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>Codex Team</span>
                                <h3>{{ __('words.tc4') }}</h3>
                                <a href="https://codex-store.com/" class="primary-btn">{{ __('words.go1') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <span>{{__('words.our_ser')}}</span>
                            <h2>{{__('words.ser_t')}}</h2>
                        </div>
                        <p>{{__('words.ser_c')}}</p>
                        <a href="/{{app()->getLocale()}}/services" class="primary-btn">{{__('words.go2')}}</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item"><a href="/{{app()->getLocale()}}/gallery">
                                <div class="services__item__icon">
                                    <img src="{{asset('them/img/icons/si-1.png')}}" alt="">
                                </div></a>
                                <h4>{{__('words.ser_tt1')}}</h4>
                                <p>{{__('words.ser_cc1')}}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item"><a href="/{{app()->getLocale()}}/gallery">
                                <div class="services__item__icon">
                                    <img src="{{asset('them/img/icons/si-2.png')}}" alt="">
                                </div></a>
                                <h4>{{__('words.ser_tt2')}}</h4>
                                <p>{{__('words.ser_cc2')}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item"><a href="/{{app()->getLocale()}}/gallery">
                                <div class="services__item__icon">
                                    <img src="{{asset('them/img/icons/si-3.png')}}" alt="">
                                </div></a>
                                <h4>{{__('words.ser_tt3')}}</h4>
                                <p>{{__('words.ser_cc3')}}

                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item"><a href="/{{app()->getLocale()}}/gallery">
                                <div class="services__item__icon">
                                    <img src="{{asset('them/img/icons/si-4.png')}}" alt="">
                                </div></a>
                                <h4>{{__('words.ser_tt4')}}</h4>
                                <p>{{__('words.ser_cc4')}}

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Work Section Begin -->
    <section class="work">
        <div class="work__gallery">
            <div class="grid-sizer"></div>
            <div class="work__item wide__item set-bg" data-setbg="{{asset('them/img/work/work-1.webp')}}">
                <!--<iframe id="video1" src="https://www.youtube.com/embed/763gzf5RffY" title="Montage video | Services" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                <a href="https://www.youtube.com/watch?v=763gzf5RffY" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>Video Montage</h4>
                    <ul>
                        <a href="/{{app()->getLocale()}}/gallery"><li><i class="fa fa-external-link mr-2"></i>Our gallery</li></a> 
                     </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="{{asset('them/img/work/work-2.webp')}}">
                <div class="work__item__hover">
                    <h4>Post Design</h4>
                    <ul>
                        <a href="/{{app()->getLocale()}}/gallery"><li><i class="fa fa-external-link mr-2"></i>Our gallery</li></a> 
                     </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="{{asset('them/img/work/work-3.webp')}}">
                <div class="work__item__hover">
                    <h4>Advertisement</h4>
                    <ul>
                        <a href="/{{app()->getLocale()}}/gallery"><li><i class="fa fa-external-link mr-2"></i>Our gallery</li></a> 
                     </ul>
                </div>
            </div>
            <div class="work__item large__item set-bg" data-setbg="{{asset('them/img/work/work-4.webp')}}">
                <div class="work__item__hover">
                    <h4>Professional Brand</h4>
                    <ul>
                        <a href="/{{app()->getLocale()}}/gallery"><li><i class="fa fa-external-link mr-2"></i>Our gallery</li></a> 
                     </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="{{asset('them/img/work/work-5.webp')}}">
                <!--<iframe id="video1" src="https://www.youtube.com/embed/6yWU5NE9vuY" title="Logo motion | Services" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                <a href="https://youtube.com/shorts/6yWU5NE9vuY?feature=shared" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        <div class="work__item__hover">
                            <h4>Logo Motion</h4>
                            <ul>
                                <a href="/{{app()->getLocale()}}/gallery"><li><i class="fa fa-external-link mr-2"></i>Our gallery</li></a> 
                             </ul>
                        </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="{{asset('them/img/work/work-6.webp')}}">
                <!--<iframe id="video1" src="https://www.youtube.com/embed/x89e24Qn8Dg" title="Motion graphic | Services" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                <a href="https://www.youtube.com/watch?v=x89e24Qn8Dg" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        <div class="work__item__hover">
                            <h4>Motion Graphic</h4>
                            <ul>
                                <a href="/{{app()->getLocale()}}/gallery"><li><i class="fa fa-external-link mr-2"></i>Our gallery</li></a> 
                             </ul>
                        </div>
            </div>
            <div class="work__item wide__item set-bg" data-setbg="{{asset('them/img/work/work-7.webp')}}">
                <div class="work__item__hover">
                    <h4>Website Mockup</h4>
                    <ul>
                        <a href="/{{app()->getLocale()}}/gallery"><li><i class="fa fa-external-link mr-2"></i>Our gallery</li></a> 
                     </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section End -->

    <!-- Counter Section Begin -->
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <img id="ci-1" src="{{asset('them/img/icons/ci-1.png')}}" alt="">
                                <h2 class="counter_num">42</h2>
                                <p>{{__('words.ab1')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img id="ci-2" src="{{asset('them/img/icons/ci-2.png')}}" alt="">
                                <h2 class="counter_num">106</h2>
                                <p>{{__('words.ab2')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <img id="ci-3" src="{{asset('them/img/icons/ci-3.png')}}" alt="">
                                <h2 class="counter_num">11</h2>
                                <p>{{__('words.ab3')}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <img id="ci-4" src="{{asset('them/img/icons/ci-4.png')}}" alt="">
                                <h2 class="counter_num">94</h2>
                                <p>{{__('words.ab4')}}
                                </p>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Live Preview Section Begin -->
    <section class="team spad set-bg" data-setbg="{{asset('them/img/team-bg.webp')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <span>{{__('words.wrt2')}}</span>
                        <h2>{{__('words.wrt')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="{{asset('them/img/team/team-1.webp')}}">
                        <div class="team__item__text">
                            <h4>{{__('words.tw4')}}</h4>
                            <p>{{__('words.live')}}</p>
                            <div class="team__item__social">
                                <a href="{{app()->getLocale()}}/demo/company" title="View"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--second set-bg" data-setbg="{{asset('them/img/team/team-2.webp')}}">
                        <div class="team__item__text">
                            <h4>{{__('words.tw3')}}</h4>
                            <p>{{__('words.live')}}</p>
                            <div class="team__item__social">
                                <a href="{{app()->getLocale()}}/demo/store" title="View"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--third set-bg" data-setbg="{{asset('them/img/team/team-3.webp')}}">
                        <div class="team__item__text">
                            <h4>{{__('words.tw2')}}</h4>
                            <p>{{__('words.live')}}</p>
                            <div class="team__item__social">
                                <a href="{{app()->getLocale()}}/demo/resturant" title="View"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--four set-bg" data-setbg="{{asset('them/img/team/team-4.webp')}}">
                        <div class="team__item__text">
                            <h4>{{__('words.tw1')}}</h4>
                            <p>{{__('words.live')}}</p>
                            <div class="team__item__social">
                                <a href="{{app()->getLocale()}}/demo/personal" title="View"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-0">
                    <div class="team__btn">
                        <a href="/{{app()->getLocale()}}/demo" class="primary-btn">{{__('words.next')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Live Preview Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad set-bg" data-setbg>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>{{__('words.rt2')}}</span>
                        <h2>{{__('words.rt1')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>{{__('words.cut1')}}</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{asset('them/img/testimonial/ta-1.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Nawaf Alqahtani</h5>
                                    <span>{{__('words.cu1')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>{{__('words.cut2')}}</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{asset('them/img/testimonial/ta-2.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Ziyad Basahal</h5>
                                    <span>{{__('words.cu2')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>{{__('words.cut3')}}</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{asset('them/img/testimonial/ta-3.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Hasan Al Saif</h5>
                                    <span>{{__('words.cu3')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>{{__('words.cut4')}}</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{asset('them/img/testimonial/ta-4.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Abdullah Y A</h5>
                                    <span>{{__('words.cu4')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>{{__('words.cut5')}}</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="{{asset('them/img/testimonial/ta-5.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Abdulaziz Baasem</h5>
                                    <span>{{__('words.cu5')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto spad set-bg" data-setbg="{{asset('them/img/callto-bg.webp')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="callto__text">
                        <h2>{{__('words.be_a1')}}</h2>
                        <p>{{__('words.be_a2')}}</p>
                        <a href="https://wa.me/966561335277">{{__('words.be_a_go')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->






@endsection