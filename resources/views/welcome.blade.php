@extends('layouts.appPortal')


@section('content')

<head>
<link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
<style>
.btn {
font-size: 30px;}

.slider-height {
    min-height: 890px; }

.slider-area,
.slider-area2 {
    background-image: url('public/web-assets/img/hero/jehat90.png' );
    background-size: cover;
   background-repeat: repeat;
}

.slider-area .hero__caption,
.slider-area2 .hero__caption {
    text-align: center;
    padding-top: 190px
}
.btn {
    background: #f2bf51;
}
.btn::before {
    background: #7f5afc;
      }

.slider-area .hero__caption h11,
.slider-area2 .hero__caption h1 {
   font-family: 'Cairo';
    font-size: 68px;
    font-weight: 600;
    color: #e3e1eb;
    line-height: 1.3;
    margin-bottom: -10px
}
.slider-area .hero__caption h1,
.slider-area2 .hero__caption h1 {
    font-family: 'Cairo';
    font-size: 42px;
    font-weight: 600;
    color: #e3e1eb;
    line-height: 1.3;
    margin-bottom: -10px
}
.slider-area .hero__caption h8,
.slider-area2 .hero__caption h8 {
    font-family: 'Cairo';
    font-size: 68px;
    font-weight: 600;
    color: #f2bf51;
    line-height: 1.3;
    margin-bottom: -10px
}

.slider-area .hero__caption p,
.slider-area2 .hero__caption p {
     font-family: 'Cairo';
    color: #e5e3ee;
    font-size: 25px;
    margin-bottom: 34px;
    padding: 0 50px
}





.services .icon-box {
  padding: 30px;
  position: relative;
  overflow: hidden;
  background: #fff;
  box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);
  transition: all 0.3s ease-in-out;
  border-radius: 8px;
  z-index: 1;
}

.services .icon-box::before {
  content: "";
  position: absolute;
  background: #E3E0ED;
  right: -60px;
  top: -40px;
  width: 100px;
  height: 100px;
  border-radius: 50px;
  transition: all 0.3s;
  z-index: -1;
}

.services .icon-box:hover::before {
  background: #f6f5f9;
  right: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border-radius: 0px;
}

.services .icon {
  margin: 0 auto 20px auto;
  padding-top: 10px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  background: #6847dc;
  transition: all 0.3s ease-in-out;
}

.services .icon i {
  font-size: 36px;
  line-height: 1;
  color: #fff;
}

.services .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

.services .title a {
  color: #111;
}

.services .description {
  font-size: 15px;
  line-height: 28px;
  margin-bottom: 0;
}

.services .icon-box:hover .title a,
.services .icon-box:hover .description {
  color: #6847dc;
}

.services .icon-box:hover .icon {
  background: #fff;
}

.services .icon-box:hover .icon i {
  color: #3498db;
}


.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-family: 'Cairo';
  font-size: 32px;
  text-transform: uppercase;
  position: relative;
  color: #444347;
}

.section-title h2::before,
.section-title h2::after {
  content: "";
  width: 50px;
  height: 2px;
  background:#E3E0ED ;
  display: inline-block;
}

.section-title h2::before {
  margin: 0 15px 10px 0;
}

.section-title h2::after {
  margin: 0 0 10px 15px;
}

.section-title p {
  margin: 15px 0 0 0;
}
























</style>
</head>
 <!--? slider Area Start-->
 <section class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption text-center">
 <h11 data-animation="bounceIn" data-delay="0.2s">منـصـة
 <h8>
 جـهـات 
 </h8>
 
 
 </h11>
                                     <h1 data-animation="bounceIn" data-delay="0.2s"> مـسـتـقـبل كل الجـهـات</h1>
 <p data-animation="fadeInUp" data-delay="0.4s"><br>
									
									تـتيح للجهات فتح مكاتب افتراضية لموظفيها وغرف اجتمـاعات <br>
كما تمكن المستفيدين من الوصول للجهات بكل سهولة ويسر
 
									
									</p>

                                    <a href="{{ URL :: to ('/cards')}}" class="btn hero-btn" data-animation="fadeInUp" data-delay="0.7s">منصة جهات
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption text-center">
  <h11 data-animation="bounceIn" data-delay="0.2s">منـصـة
 <h8>
 جـهـات 
 </h8>
 
 
 </h11>
                                    <h1 data-animation="bounceIn" data-delay="0.2s"> مـسـتـقـبل كل الجـهـات</h1>
 <p data-animation="fadeInUp" data-delay="0.4s"><br>
									
									تـتيح للجهات فتح مكاتب افتراضية لموظفيها وغرف اجتمـاعات <br>
كما تمكن المستفيدين من الوصول للجهات بكل سهولة ويسر
 
									
									</p>                                   
                                <a href="{{ URL :: to ('/cards')}}" class="btn hero-btn" data-animation="fadeInUp" data-delay="0.7s"> 
                                        منصة جهات</a>
                                </div>
                                <!--########################################################################################################-->
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- slider Area End-->
        <div class="project-screen">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="screen-img">
                        <br>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <!--? Brand Area Start -->
        <br>
        <br>
        <br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


        <!-- Brand Area End -->
          <!--? Brand Area Start -->
        
		



















 <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>مركز جهات للتواصل الرقمي الموحد</h2>
          
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">الموارد البشرية </a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="text-center">
                                <img src=" {{ asset('public/web-assets/img/icon/pi1.png ') }}" alt="">
                            </div>
                            <br>
              <h4 class="title"><a href="">الفواتير</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
             <div class="text-center">
                                <img src=" {{ asset('public/web-assets/img/icon/ed1.png ') }}" alt="">
                            </div>
                            <br>
              <h4 class="title"><a href="">المحررات </a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
           <div class="text-center">
                                <img src=" {{ asset('public/web-assets/img/icon/me1.png ') }}" alt="">
                            </div>
                            <br>
              <h4 class="title"><a href="">الأجتماعات </a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


<br>

 <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="text-center">
                                <img src=" {{ asset('public/web-assets/img/icon/of1.png ') }}" alt="">
                            </div>
                            <br>
              <h4 class="title"><a href="">المكاتب الافتراضية</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">الفعاليات </a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="text-center">
                                <img src=" {{ asset('public/web-assets/img/icon/mall1.png ') }}" alt="">
                            </div>
                            <br>
              <h4 class="title"><a href="">مول</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
             <div class="text-center">
                                <img src=" {{ asset('public/web-assets/img/icon/co1.png ') }}" alt="">
                            </div>
                            <br>
              <h4 class="title"><a href="">الحسابات </a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->





























        
        <!-- Our Services End -->
        <!--? About Area  -->
        <section class="about-area2 section-padding40 section-bg2" data-background="{{ asset('public/web-assets/img/gallery/section-bg3.png') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <div class="about-icon">
                                <img src=" {{ asset('public/web-assets/img/icon/about.svg') }}" alt="">
                            </div>
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-25">
                                <h2>منصة الجهات</h2>
                            </div>
                            <p class="mb-20">
                                أول أبراج مكتبية أفتراضية .... نعم اول أبراج أفتراضيه تعكس الواقع الفعلي للابراج المكتبيه وتستطيع أي جهة أن تأخذ مساحة بهذا البرج وتفتح مكاتب أفتراضية لكل موظفيها فتتمكن الجهة من نقل العمل المكتبي الى بيئة الكترونية منظمة وفق احدث المتطلبات ومعايير الحماية

                            </p>
                            <a href="https://app.jehat.sa/client_register.aspx" class="all-btn"><button type="button" class="btn btn-outline-secondary  pt-8 btn-sm">سجل الأن</button></a>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-9 col-sm-9">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-icon embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" 
                            src="{{asset('public/web-assets/img/jehat.mp4')}} " 
                            allowfullscreen></iframe>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? About Area  -->
        
                 
 <div class="brand-area">
            <div class="container">
                <h1 >أكثر من 850 جهة وشركة وثقوا بنا</h1>
                <br>
                <div class="brand-active brand-border pt-50">
                    <div class="single-brand">
                        <img src=" {{ asset('public/web-assets/img/gallery/brand1.png ' ) }}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src=" {{ asset('public/web-assets/img/gallery/brand2.png  ') }}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src=" {{ asset('public/web-assets/img/gallery/brand3.png ' ) }}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('public/web-assets/img/gallery/brand4.png ' ) }}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src=" {{ asset('public/web-assets/img/gallery/brand5.png ' ) }}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src=" {{ asset('public/web-assets/img/gallery/brand6.png ' ) }}" alt="">
                    </div>
                    
                    
                </div>
            </div>
        </div>

        

        
        <!--? Testimonial Area Start -->
        <section class="testimonial-area fix">    
            <div class="container" >   
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center">
                            <h2>ماذا قالوا عنا </h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-wrapper section-bg2 pt-15">
                    <div class="row align-items-center justify-content-center">
                        <div class=" col-lg-8 col-md-12 col-sm-9">
                            <div class="about-caption">
                                <!-- Testimonial Start -->
                                <div class="h1-testimonial-active dot-style">
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial text-center">
                                        <div class="testimonial-caption">
                                            <img src=" {{ asset('public/web-assets/img/icon/mm.png ') }}" alt="" class="quotes-sign"> 
                                        </div>
                                        <!-- founder -->
                                        <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-text">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial text-center">
                                        <div class="testimonial-caption">
                                            <img src="{{ asset('public/web-assets/img/icon/quotes-sign.png') }}" alt="" class="quotes-sign">                      
                                        </div>
                                        <!-- founder -->
                                        <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testimonial text-center">
                                        <div class="testimonial-caption">
                                            <img src="{{ asset('public/web-assets/img/icon/mn.png ') }}" alt="" class="quotes-sign">                      
                                        </div>
                                        <!-- founder -->
                                        <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Testimonial End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--? Testimonial Area End -->

       

@endsection