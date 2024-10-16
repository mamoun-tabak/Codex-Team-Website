<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>اسم المطعم</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('demo/resturant/assets')}}/img/logo-icon.png" rel="icon">
  <link href="{{asset('demo/resturant/assets')}}/img/apple-logo-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400&family=Markazi+Text&family=Noto+Kufi+Arabic:wght@200&family=Noto+Sans+Arabic:wght@500&family=Tajawal:wght@300;500&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('demo/resturant/assets')}}/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{asset('demo/resturant/assets')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('demo/resturant/assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('demo/resturant/assets')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('demo/resturant/assets')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('demo/resturant/assets')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('demo/resturant/assets')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('demo/resturant/assets')}}/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="resturant.html">شعار المطعم

      </a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">الأساسية</a></li>
          <li><a class="nav-link scrollto" href="#about">حول</a></li>
          <li><a class="nav-link scrollto" href="#menu">القائمة</a></li>
          <li><a class="nav-link scrollto" href="#gallery">المعرض</a></li>
          <li><a class="nav-link scrollto" href="#chefs">الأكثر طلباً</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">التوصيات</a></li>
          <li><a class="nav-link scrollto" href="#contact">اتصل بنا</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#footer" class="book-a-table-btn scrollto d-none d-lg-flex">تابعنا</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-12">
          <h1>أهلا وسهلا في<span> اسم المطعم </span></h1>
          <p class="pt-4" id="slogan" >خيارك نحو المذاق الأفضل</p>

          <div class="btns">
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h3> حول مأكولاتنا</h3>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('demo/resturant/assets')}}/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p>نوفر لكم أفضل وجبات الإفطار والغداء والعشاء</p>
            <ul class="pt-3">
              <li><i class="bi bi-check-circle"></i> نقدم لكم أطيب أنواع المقبلات الشرقية</li>
              <li><i class="bi bi-check-circle"></i> نقدم لكم صنف خاص للمشاوي والمأكولات المنزلية</li>
              <li><i class="bi bi-check-circle"></i> يوجد جميع أنواع الحلويات الشرقية والغربية</li>
            </ul>
            <p>
              تأسس مطعمنا سنة 1990 في المملكة العربية السعودية ،
              ولمطعمنا في منطقة الرياض قصص وذكريات كثيرة عاشها مختلف الأهالي بتعدد أعمارهم وفئاتهم الاجتماعية

            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>قائمتنا اللذيذة</h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">الكل</li>
              <li data-filter=".filter-starters">مقبلات</li>
              <li data-filter=".filter-salads">سلطات</li>
              <li data-filter=".filter-specialty">مشاوي</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('demo/resturant/assets')}}/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">حساء </a><span>$ 5.95</span>
            </div>
            <div class="menu-ingredients">
              حساء باللحم والحامض
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="{{asset('demo/resturant/assets')}}/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">خبز توست</a><span>$ 6.95</span>
            </div>
            <div class="menu-ingredients">
              خبز توست بالزبدة اللذيذة
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('demo/resturant/assets')}}/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">كعكة سرطان البحر
              </a><span>$ 7.95</span>
            </div>
            <div class="menu-ingredients">
              كعكة سلطعون لذيذة تقدم على لفائف محمصة مع الخس وصلصة التارتار
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('demo/resturant/assets')}}/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">طبق قيصر  </a><span>$ 8.95</span>
            </div>
            <div class="menu-ingredients">
              مشكل خضار وبيض وخبز توست
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="{{asset('demo/resturant/assets')}}/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">طبق مشاوي</a><span>$ 9.95</span>
            </div>
            <div class="menu-ingredients">
              دجاج مشوي مع جبنة البروفولون وقلوب الخرشوف والبيستو الأحمر المحمص
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('demo/resturant/assets')}}/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">أصابع الموزاريلا</a><span>$ 4.95</span>
            </div>
            <div class="menu-ingredients">
              بريوش بالموزاريلا والطماطم
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('demo/resturant/assets')}}/img/menu/greek-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">سلطة يونانية</a><span>$ 9.95</span>
            </div>
            <div class="menu-ingredients">
              سبانخ طازج ، رومين مقرمش ، طماطم ، زيتون يوناني
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('demo/resturant/assets')}}/img/menu/spinach-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">سلطة اسبانية</a><span>$ 9.95</span>
            </div>
            <div class="menu-ingredients">
              سبانخ طازجة مع فطر ، بيض مسلوق وصلصة بيكون دافئة
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="{{asset('demo/resturant/assets')}}/img/menu/lobster-roll.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">معكرونة مشكلة</a><span>$ 12.95</span>
            </div>
            <div class="menu-ingredients">
              لحم جراد البحر ، مايونيز ، خس مقرمش على لفائف ضخمة محمصة
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h3>صور عن المطعم</h3>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('demo/resturant/assets')}}/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('demo/resturant/assets')}}/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('demo/resturant/assets')}}/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('demo/resturant/assets')}}/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('demo/resturant/assets')}}/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('demo/resturant/assets')}}/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('demo/resturant/assets')}}/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('demo/resturant/assets')}}/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('demo/resturant/assets')}}/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('demo/resturant/assets')}}/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('demo/resturant/assets')}}/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('demo/resturant/assets')}}/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('demo/resturant/assets')}}/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('demo/resturant/assets')}}/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('demo/resturant/assets')}}/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('demo/resturant/assets')}}/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

        <!-- ======= Chefs Section ======= -->
        <section id="chefs" class="chefs">
          <div class="container" data-aos="fade-up">
    
            <div class="section-title">
              <h3>الأطباق الأكثر طلباً</h3>
            </div>
    
            <div class="row">
    
              <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="{{asset('demo/resturant/assets')}}/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>لحمة بطحينة</h4>
                      <span>فطور</span>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                  <img src="{{asset('demo/resturant/assets')}}/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>صحن فتة</h4>
                      <span>مقبلات</span>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                  <img src="{{asset('demo/resturant/assets')}}/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>لحمة بالفرن</h4>
                      <span>غداء</span>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>آراء الناس بنا</h3>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  من أفضل المطاعم التي أكلت عندها ، الطعام جدا لذيذ
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('demo/resturant/assets')}}/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>عماد قنوع</h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  مادري وش أكتب عن هالمطعم ،، أعتبره المطعم رقم 1 في السعودية 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('demo/resturant/assets')}}/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>نور الراوي</h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  بصراحة مررررة لذييذ واسعاره مرة ممتاازة واحس مافي احد مايحبه بس العيب والوحيد اللي فيه الزحمة
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('demo/resturant/assets')}}/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>جنى القادري</h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  احب هذا المطعم اكثر شيئ البروست والهمبرجر وجميع الصلصات
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('demo/resturant/assets')}}/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>أحمد فارس</h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  رائع بكل معنى الكلمة. خصوصا وجبة الجمبري الإقتصادية. هذامن غير ذكر أسعاره الممتازة جدا مع جودة الطهي.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('demo/resturant/assets')}}/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>عبد الكريم دهان</h3>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>اتصل بنا</h3>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927758.036116166!2d47.482006871122366!3d24.724997873219028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2z2KfZhNix2YrYp9i2!5e0!3m2!1sar!2ssa!4v1692209351492!5m2!1sar!2ssa" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <h4>الموقع :</h4>
                <p>الشارع 64، الرياض، المملكة العربية السعودية</p>
              </div>

              <div class="open-hours">
                <h4>أوقات الدوام :</h4>
                <p>
                   السبت - الخميس :<br>
                  08:00 - 23:00
                </p>
              </div>

              <div class="email">
                <h4>البريد الالكتروني :</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <h4>الاتصال :</h4>
                <p> 966500000000 </p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="الاسم" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="البريد الالكتروني" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="عنوان الموضوع" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="الرسالة" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">انتظار</div>
                <div class="error-message"></div>
                <div class="sent-message">تم إرسال الرسالة، شكراً لك</div>
              </div>
              <div class="text-center"><button type="submit">إرسال</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>" اسم المطعم "</h3>
              <p>
                الشارع 64، الرياض، المملكة العربية السعودية <br><br><br>
                <strong>الهاتف : </strong> 966500000000<br>
                <strong>البريد الالكتروني : </strong> info@example.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>روابط مفيدة</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">الأساسية</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">حول</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">شروط الخدمة</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">سياسة الخصوصية</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>خدماتنا</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#menu">القائمة</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">المعرض</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">اتصل بنا</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>تابعنا على مواقع التواصل</h4>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
         جميع الحقوق محفوظة &copy;
      </div>
      <div class="credits">
                Created by <a href="/{{app()->getLocale()}}/">Codex Team</a>

      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Extra buttons -->
  <a id="order" title="اطلب الموقع الآن" href="https://codex-store.com/%D9%82%D8%A7%D9%84%D8%A8-%D9%85%D9%88%D9%82%D8%B9-%D9%85%D8%B7%D8%B9%D9%85-%D8%AC%D8%A7%D9%87%D8%B2/p1364762611" class="back-to-top d-flex align-items-center justify-content-center active">اطلبه الآن</a>
  <a id="back" title="رجوع" href="/{{app()->getLocale()}}/demo" class="back-to-top d-flex align-items-center justify-content-center active"><i id="bi-back" class="bi bi-arrow-90deg-right"></i></a>
  <!-- Extra buttons end -->

  <!-- Vendor JS Files -->
  <script src="{{asset('demo/resturant/assets')}}/vendor/aos/aos.js"></script>
  <script src="{{asset('demo/resturant/assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('demo/resturant/assets')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('demo/resturant/assets')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('demo/resturant/assets')}}/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('demo/resturant/assets')}}/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('demo/resturant/assets')}}/js/main.js"></script>

</body>

</html>