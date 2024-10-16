@extends('website.layouts.layout')

@section('title')
{{__('words.demo')}} -
@endsection

@section('body')
<!-- Blog Details Hero Begin -->
<section class="blog-hero spad set-bg" data-setbg="{{asset('them/img/blog/blog-hero.jpg')}}">
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
        <h4>Template + Dashboard{{__('words.')}}</h4>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="blog__details__recent__item">
                        <img src="{{asset('them/img/team/team-1.jpg')}}" alt="">
                        <h5>{{__('words.tt_dd1')}}</h5>
                        <h5 class="price">200 {{__('words.r_sar')}}</h5>
                        <div class="mt-2">
                            <span><a title="Buy" id="link-price" href="https://api.whatsapp.com/send?phone=966561747859&text=Hi%20Codex%20team%0AI%20want%20to%20buy%20%7C%20Company%20template%0ACan%20you%20provide%20me"><i id="plus" class="fa fa-plus-circle"></i></a></span>
                            <span><a title="Live preview" id="link-eye" href="{{route('demo.company')}}"><i id="eye" class="fa fa-eye" aria-hidden="true"></i> </a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="blog__details__recent__item">
                        <img src="{{asset('them/img/team/team-2.jpg')}}" alt="">
                        <h5>{{__('words.tt_dd2')}}</h5>
                        <h5 class="price">200 {{__('words.r_sar')}}</h5>
                        <div class="mt-2">
                            <span><a title="Buy" id="link-price" href="https://api.whatsapp.com/send?phone=966561747859&text=Hi%20Codex%20team%0AI%20want%20to%20buy%20%7C%20Electronic%20shop%20template%0ACan%20you%20provide%20me"><i id="plus" class="fa fa-plus-circle"></i></a></span>
                            <span><a title="Live preview" id="link-eye" href="{{route('demo.store')}}"><i id="eye" class="fa fa-eye" aria-hidden="true"></i> </a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="blog__details__recent__item">
                        <img src="{{asset('them/img/team/team-3.jpg')}}" alt="">
                        <h5>{{__('words.tt_dd3')}}</h5>
                        <h5 class="price">200 {{__('words.r_sar')}}</h5>
                        <div class="mt-2">
                            <span><a title="Buy" id="link-price" href="https://api.whatsapp.com/send?phone=966561747859&text=Hi%20Codex%20team%0AI%20want%20to%20buy%20%7C%20Restaurant%20%2F%20Cafe%20template%0ACan%20you%20provide%20me"><i id="plus" class="fa fa-plus-circle"></i></a></span>
                            <span><a title="Live preview" id="link-eye" href="{{route('demo.resturant')}}"><i id="eye" class="fa fa-eye" aria-hidden="true"></i> </a></span>
                        </div>    
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="blog__details__recent__item">
                        <img src="{{asset('them/img/team/team-4.jpg')}}" alt="">
                        <h5>{{__('words.tt_dd4')}}</h5>
                        <h5 class="price">200 {{__('words.r_sar')}}</h5>
                        <div class="mt-2">
                            <span><a title="Buy" id="link-price" href="https://api.whatsapp.com/send?phone=966561747859&text=Hi%20Codex%20team%0AI%20want%20to%20buy%20%7C%20Personal%20business%20template%0ACan%20you%20provide%20me"><i id="plus" class="fa fa-plus-circle"></i></a></span>
                            <span><a title="Live preview" id="link-eye" href="{{route('demo.personal')}}"><i id="eye" class="fa fa-eye" aria-hidden="true"></i> </a></span> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection