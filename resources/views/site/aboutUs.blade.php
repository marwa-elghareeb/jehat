@extends('layouts.appPortal')

@section('content')
<style>
  .screen-img{
  display: flex !important;
  justify-content: flex-end !important;
  margin-left: auto !important;
  margin-right: 0 !important;
}
</style>
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
                                    <h1  data-animation="bounceIn" data-delay="0.2s">من نحن</h1>
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
        <section class="about">
  <div class="container ">
    <div class="row">
      <div class="col-lg-7">
        <div class="about-content">
          <div class="section-title">
	           <h2 class="title wow pixFadeUp" data-wow-delay="0.3s" style="font-family: cairo; visibility: visible; animation-delay: 0.3s; animation-name: i;">منصة جهات </h2>
          </div>
	        <p class="description wow pixFadeUp" data-wow-delay="0.4s" style="font-family: cairo; visibility: visible; animation-delay: 0.4s; animation-name: i;">نحن نسعى من اجل مواكبة الحداثة والتطور ونشر الثقافة الرقمية , وفى إطار رؤية 2030  ساهمنا بدور فعال  فى زيادة الوعي التقنى لدى الجمهور , حيث تُتيح المنصة للجهات فتح مكاتب افتراضية لموظفيها وغرف إجتماعات . كما تُمكن المستفيدين من الوصول للجهات بكل سهولة ويُسر, 
           فى مختلف المجالات نحن  نوظف خبراتنا لنؤمن لعملائنا واقعاً ملموسأ يحقق رغابتهم بالنمو والإزدهار المستدام 
           </p>
         <div class="singiture wow pixFadeUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: i;">
	      	<h3 class="sub-title wow pixFadeUp" style="font-family: cairo; visibility: visible; animation-name: i;">رئيس مجلس الإدارة</h3>
	     	<h4 style="font-family: cairo">سعد عبدالله المحسن</h4>
        <img src=" {{ asset('public/web-assets/img/sing.png') }}" class="wow pixFadeUp" data-wow-delay="0.6s" alt="sign" style="visibility: visible; animation-delay: 0.6s; animation-name: i;">
      </div>
    </div>
  </div>
  <div class="col-lg-5">
          <div class="about-thumb wow pixFadeRight" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: l;">
          <img src="{{ asset('public/web-assets/img/1m.png') }}"  class="img-fluid" alt="about">
          </div>
      </div>
    </div>
  </div>
</section>
                <div class="row">
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30 " style="text-align : center">  
                            <div class="services-ion">
                                <img src=" {{ asset('public/web-assets/img/icon/18.png' ) }} " alt="" style="height: 100px; width: 100px;">
                            </div>
                            <div class="services-cap">
                                <h5 style="text-align : center" <a href="#">هكذا نحقق أهدافنا</a></h5>
                                <p>أن تكون المنصة واجهة استرشادية موحده لكافة المعاملات في كافة القطاعات</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30" style="text-align : center">
                            <div class="services-ion">
                            <img src=" {{ asset('public/web-assets/img/icon/19.png ' ) }} " alt="" style="height: 100px; width: 100px;">
                        </div>
                            <div class="services-cap">
                                <h5 style="text-align : center" <a href="#">تلك هى رسالتنا</a> </h5>
                                <p>تقديم المعلومة الدقيقة للجمهور وزيادة الوعي الإرشادي لكافة الجهات بشكل عام</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30" style="text-align : center">
                            <div class="services-ion">
                                <img src="{{ asset('public/web-assets/img/icon/20.png' ) }}" alt="" style="height: 100px; width: 100px;">
                            </div>
                            <div class="services-cap">
                                <h5 style="text-align : center" <a href="#">رؤيتنا الإستراتيجية</a></h5>
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
        





	@endsection
