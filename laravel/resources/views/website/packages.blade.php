@extends('website.layouts.layout')

@section('title')
{{__('words.packages')}} -
@endsection

@section('description')
{{__('words.descriptionpackages')}}
@endsection

@section('keywords')
{{__('words.keywordspackages')}}
@endsection

@section('body')

<div class="breadcrumb-option spad set-bg" data-setbg="{{asset('them/img/breadcrumb-bg.webp')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>{{__('words.our_packages')}}</h2>
                        <div class="breadcrumb__links">
                            <a href="/{{app()->getLocale()}}/">{{__('words.home')}}</a>
                            <span>{{__('words.packages')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item" id="packages1">
                        <svg id="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M116.7 33.8c4.5-6.1 11.7-9.8 19.3-9.8H376c7.6 0 14.8 3.6 19.3 9.8l112 152c6.8 9.2 6.1 21.9-1.5 30.4l-232 256c-4.5 5-11 7.9-17.8 7.9s-13.2-2.9-17.8-7.9l-232-256c-7.7-8.5-8.3-21.2-1.5-30.4l112-152zm38.5 39.8c-3.3 2.5-4.2 7-2.1 10.5l57.4 95.6L63.3 192c-4.1 .3-7.3 3.8-7.3 8s3.2 7.6 7.3 8l192 16c.4 0 .9 0 1.3 0l192-16c4.1-.3 7.3-3.8 7.3-8s-3.2-7.6-7.3-8L301.5 179.8l57.4-95.6c2.1-3.5 1.2-8.1-2.1-10.5s-7.9-2-10.7 1L256 172.2 165.9 74.6c-2.8-3-7.4-3.4-10.7-1z"/></svg>                        
                        <h4>{{__('words.pack_tt1')}}</h4>
                        <ul>
                            <li>{{__('words.pack_time1')}}</li>
                        </ul>
                        <hr class="hr">
                        <ul id="ul">
                            <li><p>{{__('words.pack_t1_li1')}}</p></li>
                            <li><p>{{__('words.pack_t1_li2')}}</p></li>
                            <li><p>{{__('words.pack_t1_li3')}}</p></li>
                            <li><p>{{__('words.pack_t1_li4')}}</p></li>
                            <li><p>{{__('words.pack_t1_li5')}}</p></li>
                            <li><p>{{__('words.pack_t1_li6')}}</p></li>
                            <li><p>{{__('words.pack_t1_li7')}}</p></li>
                            <li><p>{{__('words.pack_t1_li8')}}</p></li>
                            <li><p>{{__('words.pack_t1_li9')}}</p></li>
                            <li><p>{{__('words.pack_t1_li10')}}</p></li>
                        </ul>
                        <p id="price-package">{{__('words.pack_pr1')}}</p>
                        <a href="https://codex-store.com/%D8%A7%D9%84%D8%A8%D8%A7%D9%82%D8%A9-%D8%A7%D9%84%D9%85%D8%A7%D8%B3%D9%8A%D8%A9/p1818006152">{{__('words.pack_order')}} <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item" id="packages2">
                        <svg id="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M4.1 38.2C1.4 34.2 0 29.4 0 24.6C0 11 11 0 24.6 0H133.9c11.2 0 21.7 5.9 27.4 15.5l68.5 114.1c-48.2 6.1-91.3 28.6-123.4 61.9L4.1 38.2zm503.7 0L405.6 191.5c-32.1-33.3-75.2-55.8-123.4-61.9L350.7 15.5C356.5 5.9 366.9 0 378.1 0H487.4C501 0 512 11 512 24.6c0 4.8-1.4 9.6-4.1 13.6zM80 336a176 176 0 1 1 352 0A176 176 0 1 1 80 336zm184.4-94.9c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z"/></svg>
                        <h4>{{__('words.pack_tt2')}}</h4>
                        <ul>
                            <li>{{__('words.pack_time2')}}</li>
                        </ul>
                        <hr class="hr">
                        <ul id="ul">
                            <li><p>{{__('words.pack_t2_li1')}}</p></li>
                            <li><p>{{__('words.pack_t2_li2')}}</p></li>
                            <li><p>{{__('words.pack_t2_li3')}}</p></li>
                            <li><p>{{__('words.pack_t2_li4')}}</p></li>
                            <li><p>{{__('words.pack_t2_li5')}}</p></li>
                            <li><p>{{__('words.pack_t2_li6')}}</p></li>
                            <li><p>{{__('words.pack_t2_li7')}}</p></li>
                            <li><p>{{__('words.pack_t2_li8')}}</p></li>
                        </ul>
                        <p id="price-package">{{__('words.pack_pr2')}}</p>
                        <a href="https://codex-store.com/%D8%A7%D9%84%D8%A8%D8%A7%D9%82%D8%A9-%D8%A7%D9%84%D8%B0%D9%87%D8%A8%D9%8A%D8%A9/p1456905771">{{__('words.pack_order')}} <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item" id="packages3">
                        <svg id="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M333.2 322.8l0 0-133.9-146 0 0L146 118.6c7.8-5.1 37-22.6 78-22.6s70.2 17.4 78 22.6L245.7 180l85.6 93.4 27.4-29.8c16.3-17.7 25.3-40.9 25.3-65V149.1c0-19-5.6-37.5-16.1-53.3L327.8 35.6C312.9 13.4 287.9 0 261.2 0h-76c-25.8 0-50.1 12.5-65.1 33.5L81.9 87C70.3 103.2 64 122.8 64 142.8V164c0 23.2 8.4 45.6 23.6 63.1l56 64.2 0 0 83.3 95.6 0 0 91.8 105.3c10 11.5 26.8 14.3 40 6.8l54.5-31.1c17.8-10.2 21.6-34.3 7.7-49.4l-87.7-95.7zM205.2 410.6l-83.3-95.6L27.1 418.5c-13.9 15.1-10.1 39.2 7.7 49.4l55.1 31.5c13 7.4 29.3 4.9 39.4-6.1l75.9-82.6z"/></svg>
                        <h4>{{__('words.pack_tt3')}}</h4>
                        <ul>
                            <li>{{__('words.pack_time3')}}</li>
                        </ul>
                        <hr class="hr">
                        <ul id="ul">
                            <li><p>{{__('words.pack_t3_li1')}}</p></li>
                            <li><p>{{__('words.pack_t3_li2')}}</p></li>
                            <li><p>{{__('words.pack_t3_li3')}}</p></li>
                            <li><p>{{__('words.pack_t3_li4')}}</p></li>
                            <li><p>{{__('words.pack_t3_li5')}}</p></li>
                            <li><p>{{__('words.pack_t3_li6')}}</p></li>
                        </ul>
                        <p id="price-package">{{__('words.pack_pr3')}}</p>
                        <a href="https://codex-store.com/%D8%A7%D9%84%D8%A8%D8%A7%D9%82%D8%A9-%D8%A7%D9%84%D9%81%D8%B6%D9%8A%D8%A9/p333720293">{{__('words.pack_order')}} <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item" id="packages4">
                        <svg id="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M224 256A128 128 0 1 1 224 0a128 128 0 1 1 0 256zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 36-146.9c2-8.1 9.8-13.4 17.9-11.3c70.1 17.6 121.9 81 121.9 156.4c0 17-13.8 30.7-30.7 30.7H285.5c-2.1 0-4-.4-5.8-1.1l.3 1.1H168l.3-1.1c-1.8 .7-3.8 1.1-5.8 1.1H30.7C13.8 512 0 498.2 0 481.3c0-75.5 51.9-138.9 121.9-156.4c8.1-2 15.9 3.3 17.9 11.3l36 146.9 33.4-123.9z"/></svg>                   
                        <h4>{{__('words.pack_tt4')}}</h4>
                        <ul>
                            <li>{{__('words.pack_time4')}}</li>
                            <li class="mt-3">{{__('words.pack_user1')}}</li>
                        </ul>
                        <hr class="hr">
                        <ul id="ul">
                            <li><p>{{__('words.pack_t4_li1')}}</p></li>
                            <li><p>{{__('words.pack_t4_li2')}}</p></li>
                            <li><p>{{__('words.pack_t4_li3')}}</p></li>
                            <li><p>{{__('words.pack_t_li-add')}}</p></li>
                            <li><p>{{__('words.pack_t4_li4')}}</p></li>
                            <li><p>{{__('words.pack_t4_li5')}}</p></li>
                            <li><p>{{__('words.pack_t4_li6')}}</p></li>
                        </ul>
                        <p id="price-package">{{__('words.pack_pr4')}}</p>
                        <a href="https://codex-store.com/%D8%A8%D8%A7%D9%82%D8%A9-%D8%B1%D8%AC%D8%A7%D9%84-%D8%A7%D9%84%D8%A3%D8%B9%D9%85%D8%A7%D9%84/p1810647931">{{__('words.pack_order')}} <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item" id="packages5">
                        <svg id="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M224 0a128 128 0 1 1 0 256A128 128 0 1 1 224 0zM178.3 304h91.4c20.6 0 40.4 3.5 58.8 9.9C323 331 320 349.1 320 368c0 59.5 29.5 112.1 74.8 144H29.7C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM352 368a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-80c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H512V304c0-8.8-7.2-16-16-16z"/></svg>                        
                        <h4>{{__('words.pack_tt5')}}</h4>
                        <ul>
                            <li>{{__('words.pack_time5')}}</li>
                            <li class="mt-3">{{__('words.pack_user2')}}</li>
                        </ul>
                        <hr class="hr">
                        <ul id="ul">
                            <li><p>{{__('words.pack_t5_li1')}}</p></li>
                            <li><p>{{__('words.pack_t5_li2')}}</p></li>
                            <li><p>{{__('words.pack_t_li-add')}}</p></li>
                            <li><p>{{__('words.pack_t5_li3')}}</p></li>
                            <li><p>{{__('words.pack_t5_li4')}}</p></li>
                            <li><p>{{__('words.pack_t5_li5')}}</p></li>
                        </ul>
                        <p id="price-package">{{__('words.pack_pr5')}}</p>
                        <a href="https://codex-store.com/%D8%A7%D9%84%D8%A8%D8%A7%D9%82%D8%A9-%D8%A7%D9%84%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF%D9%8A%D8%A9/p873820524">{{__('words.pack_order')}} <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option blog__pagi">
                        <a href="#" class="arrow__pagination left__arrow" onclick="return false;"><span class="arrow_left"></span> {{__('words.pack_prev')}}</a>
                        <a href="#" class="number__pagination">1</a>
                        <a href="#" class="arrow__pagination right__arrow" onclick="return false;">{{__('words.pack_next')}} <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

  
@endsection