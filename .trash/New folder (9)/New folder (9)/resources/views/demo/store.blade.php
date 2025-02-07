<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&family=Cairo&family=Markazi+Text&family=Noto+Kufi+Arabic:wght@200;300&family=Noto+Sans+Arabic:wght@500&family=Tajawal:wght@300;400;500&display=swap" rel="stylesheet">
  
    <!-- Title  -->
    <title>اسم المتجر</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('demo/store/img/core-img/favicon.png')}}">
    <link href="{{asset('demo/store/img/core-img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('demo/store/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('demo/store/css/style.css')}}">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="store.html"><img src="{{asset('demo/store/img/core-img/logo.png')}}" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">المتجر</a></li>
                            <li><a href="#top_catagory_area">الأصناف</a></li>
                            <li><a href="#clothing">المنتجات</a></li>
                            <li><a href="#contact">الاتصال</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="بحث">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="{{asset('demo/store/img/core-img/heart.svg')}}" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#"><img src="{{asset('demo/store/img/core-img/user.svg')}}" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="{{asset('demo/store/img/core-img/bag.svg')}}" alt=""> <span>2</span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay" style="background-image: url({{asset('demo/store/img/bg-img/bg-1.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h6>موديلات نسائية</h6>
                        <h2>موسم جديد</h2>
                        <a href="#top_catagory_area" class="btn essence-btn">عرض الأصناف</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix" id="top_catagory_area">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4 mt-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url({{asset('demo/store/img/bg-img/bg-2.jpg')}});">
                        <div class="catagory-content">
                            <a href="#clothing">ألبسة</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4 mt-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url({{asset('demo/store/img/bg-img/bg-3.jpg')}});">
                        <div class="catagory-content">
                            <a href="#shoes">أحذية</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4 mt-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url({{asset('demo/store/img/bg-img/bg-4.jpg')}});">
                        <div class="catagory-content">
                            <a href="#ax">اكسسوارات</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="cta-area" id="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-image: url({{asset('demo/store/img/bg-img/bg-5.jpg')}});">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h6>- 50%</h6>
                                <h2>خصومات قوية</h2>
                                <a href="#clothing" class="btn essence-btn">اشتري الآن</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### clothing Area Start ##### -->
    <section class="new_arrivals_area pb-5 pt-5 clearfix"  id="clothing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>الألبسة</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('demo/store/img/product-img/111.webp')}}" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>سويتشيرت بياقة هودي وأكمام طويلة وطبعة
                                    </h6>
                                </a>
                                <p class="product-price">  80.00 ريال</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!--  أضف إلى العربة -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">
                                             أضف إلى العربة <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('demo/store/img/product-img/222.webp')}}" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>تي شيرت بلون أحمر
                                    </h6>
                                </a>
                                <p class="product-price">80.00 ريال</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!--  أضف إلى العربة -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn"> أضف إلى العربة <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('demo/store/img/product-img/333.webp')}}" alt="">
                                <!-- Product Badge -->
                                <div class="product-badge offer-badge">
                                    <span>- 30%</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6>تي شيرت بلون أخضر
                                    </h6>
                                </a>
                                <p class="product-price"><span class="old-price"> 75.00 ريال</span>  50.00 ريال</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!--  أضف إلى العربة -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn"> أضف إلى العربة <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('demo/store/img/product-img/444.webp')}}" alt="">
                                <!-- Product Badge -->
                                <div class="product-badge new-badge">
                                    <span>جديد</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6> تيشيرت بطبعة جرافيك بلون زهري
                                    </h6>
                                </a>
                                <p class="product-price">80.00 ريال</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!--  أضف إلى العربة -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn"> أضف إلى العربة <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### clothing Area End ##### -->
   
    <!-- ##### shoes Area Start ##### -->
    <section class="new_arrivals_area pb-5 clearfix"  id="shoes">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>الأحذية</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('demo/store/img/product-img/1.jpg')}}" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Nike</span>
                                <a href="single-product-details.html">
                                    <h6>حذاء Nike   </h6>
                                </a>
                                <p class="product-price">  80.00 ريال</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!--  أضف إلى العربة -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn"> أضف إلى العربة <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('demo/store/img/product-img/2.jpg')}}" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>brand</span>
                                <a href="single-product-details.html">
                                    <h6>حذاء رياضي </h6>
                                </a>
                                <p class="product-price">80.00 ريال</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!--  أضف إلى العربة-->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn"> أضف إلى العربة <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('demo/store/img/product-img/3.jpg')}}" alt="">
                                <!-- Product Badge -->

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>brand</span>
                                <a href="single-product-details.html">
                                    <h6>حذاء طبي</h6>
                                </a>
                                <p class="product-price">80 ريال</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!--  أضف إلى العربة -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn"> أضف إلى العربة <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('demo/store/img/product-img/4.jpg')}}" alt="">
                                <!-- Product Badge -->
                                <div class="product-badge offer-badge">
                                    <span>- 25%</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>brand</span>
                                <a href="single-product-details.html">
                                    <h6>حذاء رياضي</h6>
                                </a>
                                <p class="product-price"><span class="old-price"> 75.00 ريال</span>  50.00 ريال</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!--  أضف إلى العربة -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn"> أضف إلى العربة <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### shoes Area End ##### -->

        <!-- ##### ax Area Start ##### -->
    <section class="new_arrivals_area pb-5 clearfix"  id="ax">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>الاكسسوارات</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('demo/store/img/product-img/11.jpg')}}" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>brand</span>
                                <a href="single-product-details.html">
                                    <h6>سلسلة نظارات بخرز أزرق  </h6>
                                </a>
                                <p class="product-price">  80.00 ريال</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!--  أضف إلى العربة -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn"> أضف إلى العربة <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('demo/store/img/product-img/22.jpg')}}" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>brand</span>
                                <a href="single-product-details.html">
                                    <h6>سلسلة نظارات بخرز متعدد الالوان </h6>
                                </a>
                                <p class="product-price">80.00 ريال</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!--  أضف إلى العربة -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn"> أضف إلى العربة <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('demo/store/img/product-img/33.jpg')}}" alt="">
                                <!-- Product Badge -->
                                <div class="product-badge new-badge">
                                    <span>جديد</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>brand</span>
                                <a href="single-product-details.html">
                                    <h6>سلسلة نظارات ذهبية جنزير</h6>
                                </a>
                                <p class="product-price"> 50.00 ريال</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!--  أضف إلى العربة -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn"> أضف إلى العربة <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('demo/store/img/product-img/44.jpg')}}" alt="">

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>brand</span>
                                <a href="single-product-details.html">
                                    <h6>سلسلة نظارات ذهبية بخرز أزرق وأسود</h6>
                                </a>
                                <p class="product-price">80.00 ريال</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!--  أضف إلى العربة-->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn"> أضف إلى العربة <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### ax Area End ##### -->

    <!-- ##### Brands Area Start ##### -->
    <div class="brands-area d-flex align-items-center justify-content-between">
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{asset('demo/store/img/core-img/brand1.png')}}" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{asset('demo/store/img/core-img/brand2.png')}}" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{asset('demo/store/img/core-img/brand3.png')}}" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{asset('demo/store/img/core-img/brand4.png')}}" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{asset('demo/store/img/core-img/brand5.png')}}" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{asset('demo/store/img/core-img/brand6.png')}}" alt="">
        </div>
    </div>
    <!-- ##### Brands Area End ##### -->

    <!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact pb-5 pt-5">
        <div class="container">
      
          <div class="section-title pb-4">
            <h2>اتصل بي</h2>
            <p>إليك معلومات الاتصال بي</p>
          </div>
      
          <div class="row">
      
            <div class="col-lg-6">
      
                  <div class="row">
                    <div class="col-md-12">
                      <div class="info-box">
                        <i class="fa fa-share-alt bx"></i>
                        <h3>روابط التواصل الاجتماعي</h3>
                        <div class="social-links">
                          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                          <a href="#" class="google-plus"><i class="fa fa-skype"></i></a>
                          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="info-box mt-4">
                        <i class="fa fa-envelope bx"></i>
                        <h3>البريد الالكتروني</h3>
                        <p>contact@example.com</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="info-box mt-4">
                        <i class="fa fa-phone bx"></i>
                        <h3>الهاتف</h3>
                        <p>0000 000 00 966</p>
                      </div>
                    </div>
                  </div>
      
            </div>
      
            <div class="col-lg-6 mt-3">
                <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14944269.677089518!2d55.72804706216176!3d23.871763938433638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2z2KfZhNiz2LnZiNiv2YrYqQ!5e0!3m2!1sar!2ssa!4v1692708632955!5m2!1sar!2ssa" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
      
          </div>
      
        </div>
    </section>
    <!-- End Contact Me Section -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo ml-50">
                            <a href="#"><img src="{{asset('demo/store/img/core-img/logo2.png')}}" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">المتجر</a></li>
                                <li><a href="#top_catagory_area">الأصناف</a></li>
                                <li><a href="#contact">الاتصال</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">سياسة الخصوصية</a></li>
                            <li><a href="#">شروط الاستخدام</a></li>
                            <li><a href="#cta-area">العروض</a></li>
                            <li><a href="#">طرق الدفع</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>اشترك</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="بريدك الالكتروني">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p class="copyright">
                         جميع الحقوق محفوظة &copy; 
                    </p>
                    <p class="credits">
                        تم تصميمه وتطويره بواسطة <a class="mr-1" href="../../index.html">Codex team</a>
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('demo/store/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('demo/store/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('demo/store/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('demo/store/js/plugins.js')}}"></script>
    <!-- Classy Nav js -->
    <script src="{{asset('demo/store/js/classy-nav.min.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('demo/store/js/active.js')}}"></script>
    
    <!-- Extra buttons -->
    <a id="order" title="اطلب الموقع الآن" href="https://api.whatsapp.com/send?phone=966561747859&text=Hi%20Codex%20team%0AI%20want%20to%20buy%20%7C%20Electronic%20store%20template%0ACan%20you%20provide%20me" class="back-to-top d-flex align-items-center justify-content-center active">اطلبه الآن</a>
    <a id="back" title="رجوع" href="../../blog-details.html" class="back-to-top d-flex align-items-center justify-content-center active"><i id="bi-back" class="fa fa-undo" aria-hidden="true"></i></a>
    <!-- Extra buttons end -->

</body>

</html>