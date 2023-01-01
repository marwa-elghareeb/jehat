@extends('layouts.appPortal')

@section('content')
<style>

.slider-area.slider-area2,
.slider-area2.slider-area2 {
    background-image: url('public/web-assets/img/hero/jehatp90.png')
}
.card{
border-radius:4rem
}

  .small-text {
    color: #2c2b0c;
  }

  .work-process-section {
    width: 100%;
    display: block;
    padding: 90px 0px 100px;
  }

  .work-process-section .heading-block {
    width: 100%;
    display: block;
    max-width: 600px;
    margin: 0px auto 60px;
    text-align: center;
  }

  .work-process-section .heading-block .description {
    font-size: 16px;
    color: #666666;
    margin-bottom: 0px;
  }

  .work-process-block {
    max-width: 1600px;
    width: 100%;
    margin: 0px auto;
    /* height: 450px; */
  }

  .work-process-layout1 .work-process-top .number {
    display: inline-block;
    width: 80px;
    height: 80px;
    text-align: center;
    border: 5px solid;
    font-size: 26px;
    font-weight: 700;
    line-height: 73px;
    margin-left: 40px;
    margin-bottom: 25px;
    background-color: #404DFF !important;
    border-radius: 50%;
    position: relative;
    -webkit-transition: all ease 0.4s;
    transition: all ease 0.4s;
  }

  .work-process-layout1 .work-process-top {
    text-align: center;
    position: relative;
  }

  .work-process-layout1 .work-process-top .shape {
    -webkit-transition: all ease 0.4s;
    transition: all ease 0.4s;
    display: inline-block;
    position: absolute;
    left: 25px;
    top: 63px;
    width: 100%;
    height: 270px;
    max-width: 270px;
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 29% 100%);
    clip-path: polygon(0 0, 100% 0, 100% 100%, 29% 100%);
    border-radius: 10px;
    z-index: 0;
    -webkit-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    transform: rotate(-5deg);
    background-color: #a340cc;
  }

  .work-process-layout1 .vs-work-process-2 .shape {
    background: #8233a3 !important;
  }

  .work-process-layout1 .vs-work-process-2 .number {
    background: #404DFF !important;
  }

  .work-process-layout1 .vs-work-process-2 .work-process-content {
    border-color: #be79db !important;
  }

  /* .work-process-layout1 .vs-work-process-3 .shape { background: #008dc4  !important; }
.work-process-layout1 .vs-work-process-3 .number{ background: #008dc4  !important; }
.work-process-layout1 .vs-work-process-3 .work-process-content { border-color: #008dc4  !important; }
 */
  .work-process-layout1 .vs-work-process-4 .shape {
    background: #8233a3 !important;
  }

  .work-process-layout1 .vs-work-process-4 .number {
    background: #404DFF !important;
  }

  .work-process-layout1 .vs-work-process-4 .work-process-content {
    border-color: #be79db !important;
  }

  .work-process-layout1 .work-process-content {
    -webkit-transition: all ease 0.4s;
    transition: all ease 0.4s;
    border-radius: 10px;
    box-shadow: 0px 3px 0px 0px rgba(17, 180, 245, 0.004),
      0px 3px 50px 0px rgba(17, 180, 245, 0.1);
    background-color: rgba(255, 255, 255, 0.969);
    padding: 35px 20px;
    padding-bottom: 30px;
    max-width: 270px;
    border-bottom: 3px solid #be79db;
    position: relative;
  }

  .work-process-layout1 .work-process-content.odd-block {
    border-color: #be79db;
  }

  .work-process-layout1 .work-process-content .icon {
    width: 45px;
    height: 45px;
    margin: 0px auto 20px;
  }

  .work-process-layout1 .work-process-content .icon img {
    width: 100%;
    height: 100%;
  }

  .work-process-layout1 .work-process-content .process-title {
    color: #1d165c;
    font-size: 20px;
    line-height: 30px;
    transition: all 500ms ease;
    font-weight: 600;
    margin-bottom: 12px;
  }

  .work-process-layout1 .work-process-content .text {
    position: relative;
    font-size: 14px;
    line-height: 24px;
    color: #666666;
    transition: all 500ms ease;
    margin-bottom: 0px;
  }

  .work-process-layout1 .vs-work-process:hover .work-process-top .shape {
    -webkit-transform: rotate(0);
    -ms-transform: rotate(0);
    transform: rotate(0);
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
  }

  .work-process-layout1 .vs-work-process:hover .work-process-top .number {
    margin-bottom: 0px;
    margin-left: 0%;
  }

  .screen-img {
    display: flex !important;
    justify-content: flex-end !important;
    margin-left: auto !important;
    margin-right: 0 !important;
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

</style>

<main>
<section class="slider-area slider-area2">
    <div class="slider-active">
      <!-- Single Slider -->
      <div class="single-slider slider-height2">
              </div>
            </div>
  </section>
  <div class="inner-page pb-5 ">
	<div class="inner-page-container">
        <div class="container1">
        <div class="row justify-content-center">
            <div class="card col-9 col-md-10 col-lg-15">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                      <br>
  <div class="section-title" data-aos="fade-up">
          <h1 data-animation="bounceIn" data-delay="0.2s">منصة جهات</h1>
          
        </div><br><br><br>
        <br><br>
  <section id="services" class="services">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div> <img src=" {{ asset('public/web-assets/img/icon/icons8-office-100.png ') }}" alt=""></div>
              <h4 class="title"><a href=""> المكاتب الافتراضيه</a></h4>
              <p class="description">يتم عرض جميع الشركات الموجوده فى المنصه وكذلك الاقسام الخاصه بها وايضا الموظفين</p><br><br>
              <a href="{{ URL :: to ('/allCompanies')}}" 
              class="btn btn-outline-secondary  btn-sm pt-8 ">المزيد</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="text-center">
                                <img src=" {{ asset('public/web-assets/img/icon/icons8-office-1001.png ') }}" alt="">
                            </div>
                            <br>
              <h4 class="title"><a href="">مكتبى </a></h4>
              <p class="description">عرض جميع المعارض الموجود فى المنصه وتفاصيل كل معرض</p>
              <br><br>
              <a href="https://app.jehat.sa/client_login.aspx" class="btn btn-outline-secondary  pt-8 btn-sm">المزيد</a>

            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
             <div class="text-center">
                                <img  src=" {{ asset('public/web-assets/img/icon/icons8-shop-100.png ') }}" alt="">
                            </div>
                            <br>
              <h4 class="title"><a href="">المتاجر الالكترونيه</a></h4>
              <p class="description">يتم العمل عليها فى الوقت الحالى وسيتم رفعها قريبا</p>
              <br><br>
              <button type="button" class="btn btn-outline-secondary  pt-8 btn-sm">المزيد</button>

            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
           <div class="text-center">
                                <img src=" {{ asset('public/web-assets/img/icon/icons8-office-100.png ') }}" alt="">
                            </div>
                            <br>
              <h4 class="title"><a href="">المعارض الافتراضيه</a></h4>
              <p class="description">يتم عرض جميع الشركات الموجوده فى المنصه وكذلك الاقسام الخاصه بها وايضا الموظفين</p>
              <br><br>
              <button type="button" class="btn btn-outline-secondary  pt-8 btn-sm">المزيد</button>

            </div>
          </div>
        </div>
      </div>
      <br><br><br>
    </section><!-- End Services Section -->

</main>
@endsection


    <!--  
<section class="work-process-section " id="processDiv">
    <!--<div class="container-fluid">
    <div class="heading-block">
      <p class="small-text  "> _Work Flow_ </p>
      <h1 class="heading "> Our service Process </h1>
      <p class="description "> Web designing in a powerful way of just not a profession, however, in a passion for our Company. We have a tendency to believe the idea that smart looking. </p>
    </div>--

    <div class="container">
    <div class=" work-process-block work-process-layout1">
      <div class="row">
        <div class="col-xl-3 col-sm-6">
          <div class="vs-work-process text-center">
            <div class="work-process-top animate__slideInDown wow animate__animated">
              <span class="shape"></span>
              <span class="number border-white text-white">04</span>
            </div>
            <div class="work-process-content animate__zoomIn animate__animated wow">
              <!--?<div class="icon"><img src="https://image.flaticon.com/icons/png/512/1352/1352623.png"></div>--
              <h3 class="process-title heading4">المعارض الافتراضيه</h3>
              <p class="text">يتم عرض جميع المعارض الموجود فى المنصه وتفاصيل كل معرض</p><br>
              <button type="button" class="btn btn-outline-secondary  pt-8 btn-sm">المزيد</button>

            </div>
          </div>
        </div>
        <!--  --
        <div class="col-xl-3 col-sm-6">
          <div class="vs-work-process vs-work-process-2 text-center">
            <div class="work-process-top animate__slideInDown wow animate__animated" data-wow-delay="0.2s">
              <span class="shape"></span>
              <span class="number border-white text-white">03</span>
            </div>
            <div class="work-process-content animate__zoomIn animate__animated wow" data-wow-delay="0.2s">
              <!--?<div class="icon"><img src="https://image.flaticon.com/icons/png/512/1352/1352623.png"></div>-
              <h3 class="process-title heading4">المتاجر الالكترونيه</h3>
              <p class="text">يتم العمل عليها فى الوقت الحالى وسيتم رفعها قريبا</p><br>
              <button type="button" class="btn btn-outline-secondary  pt-8 btn-sm">المزيد</button>

            </div>
          </div>
        </div>
        <!--  --
        <div class="col-xl-3 col-sm-6">
          <div class="vs-work-process vs-work-process-3 text-center">
            <div class="work-process-top animate__slideInDown wow animate__animated" data-wow-delay="0.3s">
              <span class="shape"></span>
              <span class="number border-white text-white">02</span>
            </div>
            <div class="work-process-content animate__zoomIn animate__animated wow" data-wow-delay="0.3s">
              <!--?<div class="icon"><img src="https://image.flaticon.com/icons/png/512/1352/1352623.png"></div>--
             
              <h3 class="process-title heading4">مكتبى  </h3>
              <p class="text">عرض جميع المعارض الموجود فى المنصه وتفاصيل كل معرض</p><br>
              <a href="https://app.jehat.sa/client_login.aspx" class="btn btn-outline-secondary  pt-8 btn-sm">المزيد</a>


            </div>
          </div>
        </div>
        <!--  --
        <div class="col-xl-3 col-sm-6">
          <div class="vs-work-process vs-work-process-4 text-center">
            <div class="work-process-top animate__slideInDown wow animate__animated" data-wow-delay="0.4s">
              <span class="shape"></span>
              <span class="number border-white text-white">01</span>
            </div>
            <div class="work-process-content animate__zoomIn animate__animated wow" data-wow-delay="0.4s">
              <!--?<div class="icon"><img src="https://image.flaticon.com/icons/png/512/1352/1352623.png"></div>--
            
              <h3 class="process-title heading4">المكاتب الافتراضيه</h3>
              <p class="text">يتم عرض جميع الشركات الموجوده فى المنصه وكذلك الاقسام الخاصه بها وايضا الموظفين</p><br>
              <a href="{{ URL :: to ('/allCompanies')}}" 
              class="btn btn-outline-secondary  btn-sm pt-8 ">المزيد</a>

            </div>
            </div>
          </div>
        </div>
        <!--  --
      </div>
    </div>
  


    </div>

  </section>-->