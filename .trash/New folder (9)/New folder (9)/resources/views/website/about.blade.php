@extends('website.layouts.layout')

@section('title')
{{__('words.about')}} -
@endsection

@section('body')



  <!-- Breadcrumb Begin -->
  <div class="breadcrumb-option spad set-bg" data-setbg="{{asset('them/img/breadcrumb-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>About us</h2>
                        <div class="breadcrumb__links">
                            <a href="index.html">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="about__pic__item about__pic__item--large set-bg"
                                    data-setbg="{{asset('them/img/about/about-1.jpg')}}"></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="about__pic__item set-bg" data-setbg="{{asset('them/img/about/about-2.jpg')}}"></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="about__pic__item set-bg" data-setbg="{{asset('them/img/about/about-3.jpg')}}"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>{{__('words.about_codex')}}</span>
                            <h2>{{__('words.who_we')}}</h2>
                        </div>
                        <div class="about__text__desc">
                            <p>{{__('words.p_about1')}}</p>
                            <p>{{__('words.p_about2')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad set-bg" data-setbg="{{asset('them/img/testimonial-bg.jpg')}}">
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
                                    <h5>Ziyad Basahal{{__('words.')}}</h5>
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
                                    <h5>Hasan Al Saif{{__('words.')}}</h5>
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
                                    <h5>Abdullah Y A{{__('words.')}}</h5>
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
                                    <h5>Abdulaziz Baasem{{__('words.')}}</h5>
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

    <!-- Counter Section Begin -->
     <!-- Counter Section Begin -->
     <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <img src="{{asset('them/img/icons/ci-1.png')}}" alt="">
                                <h2 class="counter_num">42</h2>
                                <p>{{__('words.ab1')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img src="{{asset('them/img/icons/ci-2.png')}}" alt="">
                                <h2 class="counter_num">106</h2>
                                <p>{{__('words.ab2')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <img src="{{asset('them/img/icons/ci-3.png')}}" alt="">
                                <h2 class="counter_num">11</h2>
                                <p>{{__('words.ab3')}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <img src="{{asset('them/img/icons/ci-4.png')}}" alt="">
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

    <!-- Call To Action Section Begin -->
    <section class="callto spad set-bg" data-setbg="{{asset('them/img/callto-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="callto__text">
                        <h2>{{__('words.be_a1')}}</h2>
                        <p>{{__('words.be_a2')}}</p>
                        <a href="https://wa.me/966561747859">{{__('words.be_a_go')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->


@endsection