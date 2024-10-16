@extends('website.layouts.layout')

@section('title')
{{__('words.demo')}} -
@endsection

@section('description')
{{__('words.descriptiondemo')}}
@endsection

@section('keywords')
{{__('words.keywordsdemo')}}
@endsection

@section('body')
<!-- Blog Details Hero Begin -->
<section class="blog-hero spad set-bg" data-setbg="{{asset('them/img/blog/blog-hero.webp')}}">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__hero__text">
                        <h2>{{__('words.de_tt1')}}</h2>
                        <ul>
                            <li>{{__('words.de_tt2')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <div class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="blog__details__content">
                    <div class="blog__details__text col-lg -12">
                            <p>{{__('words.de_cc1')}}</p>
                            <p>{{__('words.de_cc2')}}</p>
                            <p>{{__('words.de_cc3')}}</p>
                            <p>{{__('words.de_cc4')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Details Section End -->
    <div class="blog__details__recent pt-5">
        <h4>{{__('words.dash')}}</h4>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="blog__details__recent__item">
                        <img src="{{asset('them/img/team/team-1.webp')}}" alt="">
                        <h5>{{__('words.tt_dd1')}}</h5>
                        <div class="mt-2">
                            <span><a title="Buy" id="link-price" href="https://codex-store.com/%D9%82%D8%A7%D9%84%D8%A8-%D9%85%D9%88%D9%82%D8%B9-%D8%B4%D8%B1%D9%83%D8%A9-%D8%AC%D8%A7%D9%87%D8%B2/p758900007"><i id="plus" class="fa fa-plus-circle"></i></a></span>
                            <span><a title="Live preview" id="link-eye" href="/{{app()->getLocale()}}/demo/company"><i id="eye" class="fa fa-eye" aria-hidden="true"></i> </a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="blog__details__recent__item">
                        <img src="{{asset('them/img/team/team-2.webp')}}" alt="">
                        <h5>{{__('words.tt_dd2')}}</h5>
                        <div class="mt-2">
                            <span><a title="Buy" id="link-price" href="https://codex-store.com/%D9%82%D8%A7%D9%84%D8%A8-%D9%85%D9%88%D9%82%D8%B9-%D9%85%D8%AA%D8%AC%D8%B1-%D8%A7%D9%84%D9%83%D8%AA%D8%B1%D9%88%D9%86%D9%8A-%D8%AC%D8%A7%D9%87%D8%B2/p762446434"><i id="plus" class="fa fa-plus-circle"></i></a></span>
                            <span><a title="Live preview" id="link-eye" href="/{{app()->getLocale()}}/demo/store"><i id="eye" class="fa fa-eye" aria-hidden="true"></i> </a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="blog__details__recent__item">
                        <img src="{{asset('them/img/team/team-3.webp')}}" alt="">
                        <h5>{{__('words.tt_dd3')}}</h5>
                        <div class="mt-2">
                            <span><a title="Buy" id="link-price" href="https://codex-store.com/%D9%82%D8%A7%D9%84%D8%A8-%D9%85%D9%88%D9%82%D8%B9-%D9%85%D8%B7%D8%B9%D9%85-%D8%AC%D8%A7%D9%87%D8%B2/p1364762611"><i id="plus" class="fa fa-plus-circle"></i></a></span>
                            <span><a title="Live preview" id="link-eye" href="/{{app()->getLocale()}}/demo/resturant"><i id="eye" class="fa fa-eye" aria-hidden="true"></i> </a></span>
                        </div>    
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="blog__details__recent__item">
                        <img src="{{asset('them/img/team/team-4.webp')}}" alt="">
                        <h5>{{__('words.tt_dd4')}}</h5>
                        <div class="mt-2">
                            <span><a title="Buy" id="link-price" href="https://codex-store.com/%D9%82%D8%A7%D9%84%D8%A8-%D9%85%D9%88%D9%82%D8%B9-%D8%B3%D9%8A%D8%B1%D8%A9-%D8%B0%D8%A7%D8%AA%D9%8A%D8%A9-%D8%AC%D8%A7%D9%87%D8%B2/p86322508"><i id="plus" class="fa fa-plus-circle"></i></a></span>
                            <span><a title="Live preview" id="link-eye" href="/{{app()->getLocale()}}/demo/personal"><i id="eye" class="fa fa-eye" aria-hidden="true"></i> </a></span> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection