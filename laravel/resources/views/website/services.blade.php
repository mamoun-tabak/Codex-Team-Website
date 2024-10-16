@extends('website.layouts.layout')

@section('title')
{{__('words.services')}} -
@endsection

@section('description')
{{__('words.descriptionservices')}}
@endsection

@section('keywords')
{{__('words.keywordsservices')}}
@endsection

@section('body')



<div class="breadcrumb-option spad set-bg" data-setbg="{{asset('them/img/breadcrumb-bg.webp')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>{{__('words.our_ser')}}</h2>
                        <div class="breadcrumb__links">
                            <a href="/{{app()->getLocale()}}/">{{__('words.home')}}</a>
                            <span>{{__('words.services')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Services Section Begin -->
    <section class="services-page spad">
        <div class="container">
            <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="services__item"><a href="/{{app()->getLocale()}}/gallery">
                                <div class="services__item__icon">
                                    <img src="{{asset('them/img/icons/si-1.png')}}" alt="">
                                </div></a>
                                <h4>{{__('words.ser_tt1')}}</h4>
                                <p>{{__('words.ser_cc1')}}</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="services__item"><a href="/{{app()->getLocale()}}/gallery">
                                <div class="services__item__icon">
                                    <img src="{{asset('them/img/icons/si-7.png')}}" alt="">
                                </div></a>
                                <h4>{{__('words.ser_tt7')}}</h4>
                                <p>{{__('words.ser_cc7')}}</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="services__item"><a href="/{{app()->getLocale()}}/gallery">
                                <div class="services__item__icon">
                                    <img src="{{asset('them/img/icons/si-8.png')}}" alt="">
                                </div></a>
                                <h4>{{__('words.ser_tt8')}}</h4>
                                <p>{{__('words.ser_cc8')}}</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="services__item"><a href="/{{app()->getLocale()}}/gallery">
                                <div class="services__item__icon">
                                    <img src="{{asset('them/img/icons/si-2.png')}}" alt="">
                                </div></a>
                                <h4>{{__('words.ser_tt2')}}</h4>
                                <p>{{__('words.ser_cc2')}}</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="services__item"><a href="/{{app()->getLocale()}}/gallery">
                                <div class="services__item__icon">
                                    <img src="{{asset('them/img/icons/si-3.png')}}" alt="">
                                </div></a>
                                <h4>{{__('words.ser_tt3')}}</h4>
                                <p>{{__('words.ser_cc3')}}</p>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="services__item"><a href="/{{app()->getLocale()}}/gallery">
                                <div class="services__item__icon">
                                    <img src="{{asset('them/img/icons/si-4.png')}}" alt="">
                                </div></a>
                                <h4>{{__('words.ser_tt4')}}</h4>
                                <p>{{__('words.ser_cc4')}}</p>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="services__item"><a href="/{{app()->getLocale()}}/gallery">
                                <div class="services__item__icon">
                                    <img src="{{asset('them/img/icons/si-5.png')}}" alt="">
                                </div></a>
                                <h4>{{__('words.ser_tt5')}}</h4>
                                <p>{{__('words.ser_cc5')}}</p>
                               
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="services__item"><a href="/{{app()->getLocale()}}/gallery">
                                <div class="services__item__icon">
                                    <img src="{{asset('them/img/icons/si-6.png')}}" alt="">
                                </div></a>
                                <h4>{{__('words.ser_tt6')}}</h4>
                                <p>{{__('words.ser_cc6')}}</p>
                             
                            </div>
                        </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto sp__callto">
        <div class="container">
            <div class="callto__services spad set-bg" data-setbg="{{asset('them/img/calltos-bg.webp')}}">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="callto__text">
                            <h2>{{__('words.be_a1')}}</h2>
                            <p>{{__('words.be_a2')}}</p>
                            <a href="https://wa.me/966561335277">{{__('words.be_a_go')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

    <!-- Logo Begin -->
    <div class="logo spad">
        <div class="container">
            <div class="logo__carousel owl-carousel">
                <a href="#" class="logo__item"><img src="{{asset('them/img/logo/logo-1.svg')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('them/img/logo/logo-2.svg')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('them/img/logo/logo-3.svg')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('them/img/logo/logo-4.svg')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('them/img/logo/logo-5.svg')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('them/img/logo/logo-6.svg')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('them/img/logo/logo-7.svg')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('them/img/logo/logo-8.svg')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('them/img/logo/logo-9.svg')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('them/img/logo/logo-10.svg')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('them/img/logo/logo-11.svg')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('them/img/logo/logo-12.svg')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('them/img/logo/logo-13.svg')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('them/img/logo/logo-14.svg')}}" alt=""></a>
                <a href="#" class="logo__item"><img src="{{asset('them/img/logo/logo-15.svg')}}" alt=""></a>


            </div>
        </div>
    </div>
    <!-- Logo End -->

    <!-- Footer Section Begin -->


@endsection