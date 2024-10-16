@extends('website.layouts.layout')

@section('title')
{{__('words.contact')}} -
@endsection

@section('description')
{{__('words.descriptioncontact')}}
@endsection

@section('keywords')
{{__('words.keywordscontact')}}
@endsection

@section('body')

<div class="breadcrumb-option spad set-bg" data-setbg="{{asset('them/img/breadcrumb-bg.webp')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>{{__('words.contact_me')}}</h2>
                        <div class="breadcrumb__links">
                            <a href="/{{app()->getLocale()}}/"> {{__('words.home')}}</a>
                            <span>{{__('words.contact')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Widget Section Begin -->
    <section class="contact-widget spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>{{__('words.info_c_1')}}</h4>
                            <p>{{__('words.info_ct_1')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>{{__('words.info_c_2')}}</h4>
                            <p>{{$settings->phone}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>{{__('words.info_c_3')}}</h4>
                            <p>{{$settings->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Widget Section End -->

    <!-- Call To Action Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div id="map" class="contact__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927758.036116166!2d47.482006871122366!3d24.724997873219028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2z2KfZhNix2YrYp9i2!5e0!3m2!1sar!2ssa!4v1692040887906!5m2!1sar!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <h3>{{__('words.join_us')}}</h3>
                        <form action="#">
                            <input type="text" placeholder="{{__('words.name')}}">
                            <input type="text" placeholder="{{__('words.emaily')}}">
                            <input type="text" placeholder="{{__('words.jopy')}}">
                            <textarea placeholder="{{__('words.messg')}}"></textarea>
                            <button type="submit" class="site-btn">{{__('words.send_message')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

  
@endsection