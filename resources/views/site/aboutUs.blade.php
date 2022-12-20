@extends('layouts.appPortal')

@section('content')


<body dir="rtl">

    <main>
        <!--? slider Area Start-->
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2 text-center">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">منصة جهات</h1>
                                    <div class="screen-img">
                                        <img src="{{ asset('public/web-assets/img/gallery/screen.png' ) }}" alt="" class=" w-50">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--? Our Services Start -->
        <section class="our-services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                             <h3>نحن نسعى من اجل مواكبة الحداثة والتطور ونشر الثقافة الرقمية , وفى إطار رؤية 2030 ساهمنا بدور فعال فى زيادة الوعي التقنى لدى الجمهور , حيث تُتيح المنصة للجهات فتح مكاتب افتراضية لموظفيها وغرف إجتماعات . كما تُمكن المستفيدين من الوصول للجهات بكل سهولة ويُسر, فى مختلف المجالات نحن نوظف خبراتنا لنؤمن لعملائنا واقعاً ملموسأ يحقق رغابتهم بالنمو والإزدهار المستدام</h3>
                             <h2>رئيس مجلس الإدارة</h2>
                             <h1>سعد عبدالله المحسن</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30">
                            <div class="services-ion">
                                <img src=" {{ asset('public/web-assets/img/icon/18.png' ) }} " alt="" style="height: 100px; width: 100px;">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">هكذا نحقق أهدافنا</a></h5>
                                <p>أن تكون المنصة واجهة استرشادية موحده لكافة المعاملات في كافة القطاعات</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30">
                            <div class="services-ion">
                            <img src=" {{ asset('public/web-assets/img/icon/19.png ' ) }} " alt="" style="height: 100px; width: 100px;">
                        </div>
                            <div class="services-cap">
                                <h5><a href="#">تلك هى رسالتنا</a></h5>
                                <p>تقديم المعلومة الدقيقة للجمهور وزيادة الوعي الإرشادي لكافة الجهات بشكل عام</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30">
                            <div class="services-ion">
                                <img src="{{ asset('public/web-assets/img/icon/20.png' ) }}" alt="" style="height: 100px; width: 100px;">
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">رؤيتنا الإستراتيجية</a></h5>
                                <p> أن تصبح منصة "جهات" هي القناة الأكثر استخداماً من قبل المستفيدين والجهات</p>
                            </div>
                        </div>
                    </div>
                    <section class="team text-center py-5">
                        <div class="container">
                          <div class="header my-5">
                            <h1>فريق عمل منصة جهات  </h1>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-lg-3">
                              <div class="img-block mb-5">
                                <img src=" {{ asset('public/web-assets/img/14.jpg' ) }}" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
                                <div class="content mt-2">
                                  <h4>Dr . Ayman Mahmoud Helmy</h4>
                                  <p class="text-muted">CEO of Egypt</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-3 ">
                              <div class="img-block mb-5">
                                <img src=" {{ asset('public/web-assets/img/13.jpg ' ) }}" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
                                <div class="content mt-2">
                                  <h4>Datuk Hj Abdul Rahim</h4>
                                  <p class="text-muted">CEO of Malaysia</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                              <div class="img-block mb-5">
                                <img src="{{ asset('public/web-assets/img/12.jpg  ' ) }}" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
                                <div class="content mt-2">
                                  <h4>Ahmed Basuony </h4>
                                  <p class="text-muted">IT Manager</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                              <div class="img-block mb-5">
                                <img src=" {{ asset('public/web-assets/img/11.jpg' ) }}" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
                                <div class="content mt-2">
                                  <h4>Saad Al Mohsen</h4>
                                  <p class="text-muted">Chairman of Board of Directors</p>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

            </div>
        </section>
        <!-- Our Services End -->
        <!--? Want To work 01-->
        <section class="wantToWork-area ">
            <div class="container">
                <div class="wants-wrapper w-padding2 section-bg2" data-background=" {{ asset('public/web-assets/img/gallery/section_bg02.png' ) }}">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-7 col-lg-9 col-md-8">
                            <div class="wantToWork-caption text-center">
                                <h2>كيف يمكنني تحميل التطبيق</h2>
                                <p>تستطيع تحميل تطبيق جهات من متجر جوجل أو أبستور</p>
                                <a class="wow fadeIn  animated" data-wow-delay="0.25s" href="https://apps.apple.com/eg/app/jehat/id1600983802" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeIn;">
                                    <img class="app-store-btn" src="public/web-assets/img/pngfind.com-store-png-1446326.png" alt="App Store Icon" style="width: 170px; height: 70px"></a>
                                    <a class="wow fadeIn  animated" data-wow-delay="0.67s" href="https://play.google.com/store/apps/" style="visibility: visible; animation-delay: 0.67s; animation-name: fadeIn;">
                                        <img class="google-play-btn" src="public/web-assets/img/pngfind.com-google-logo-white-png-982813.png" alt="Google Play Icon" style="width: 170px; height: 70px"><br>
                                    </a>
                                </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
    </main>






	@endsection
