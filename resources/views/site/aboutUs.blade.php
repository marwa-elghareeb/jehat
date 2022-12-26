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
	           <h1 class="title wow pixFadeUp" data-wow-delay="0.3s" style="font-family: cairo; visibility: visible; animation-delay: 0.3s; animation-name: i;">منصة جهات </h1>
          </div>
	        <p class="description wow pixFadeUp" data-wow-delay="0.4s" style="font-family: cairo; visibility: visible; animation-delay: 0.4s; animation-name: i;">نحن نسعى من اجل مواكبة الحداثة والتطور ونشر الثقافة الرقمية , وفى إطار رؤية 2030  ساهمنا بدور فعال  فى زيادة الوعي التقنى لدى الجمهور , حيث تُتيح المنصة للجهات فتح مكاتب افتراضية لموظفيها وغرف إجتماعات . كما تُمكن المستفيدين من الوصول للجهات بكل سهولة ويُسر, 
           فى مختلف المجالات نحن  نوظف خبراتنا لنؤمن لعملائنا واقعاً ملموسأ يحقق رغابتهم بالنمو والإزدهار المستدام 
           </p>
         <div class="singiture wow pixFadeUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: i;">
	      	<h2 class="sub-title wow pixFadeUp" style="font-family: cairo; visibility: visible; animation-name: i;">رئيس مجلس الإدارة</h2>
	     	<h3 style="font-family: cairo">سعد عبدالله المحسن</h3>
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
<section class="team text-center py-5">
               <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services mb-30  border border-light rounded-5 text-center" >
                            <div class="services-ion">
                                <img src=" {{ asset('public/web-assets/img/icon/18.png' ) }} " alt="" style="height: 100px; width: 100px;">
                            </div>
                            <br>
                            <div class="services-cap">
                                <h3 class="font-weight-bold text-center" >هكذا نحقق أهدافنا</h5>
                                <p>أن تكون المنصة واجهة استرشادية موحده<br> لكافة المعاملات في كافة القطاعات</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6">
                        <div class="single-services mb-30  border border-light rounded-5 text-center">
                            <div class="services-ion">
                            <img src=" {{ asset('public/web-assets/img/icon/19.png ' ) }} " alt="" style="height: 100px; width: 100px;">
                        </div>
                        <br>
                            <div class="services-cap">
                                <h3 class="font-weight-bold text-center" >تلك هى رسالتنا</h5>
                                <p>تقديم المعلومة الدقيقة للجمهور وزيادة <br>الوعي الإرشادي لكافة الجهات بشكل عام</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 ">
                        <div class="single-services mb-30 text-center border border-light rounded-5" >
                            <div class="services-ion">
                                <img src="{{ asset('public/web-assets/img/icon/20.png' ) }}" alt="" style="height: 100px; width: 100px;">
                            </div>
                            <br>
                            <div class="services-cap">
                                <h3 class="font-weight-bold text-center"  >رؤيتنا الإستراتيجية</a></h5>
                                <p> أن تصبح منصة "جهات" هي القناة الأكثر<br> استخداماً من قبل المستفيدين والجهات</p>
                            </div>
                        </div>
                    </div>
                    </section>
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
 


       <div class="row justify-content-center"><div class="col-lg-4 col-md-6"><div class="saaspik-icon-box-wrapper style-four wow pixFadeLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: k;"><div class="saaspik-icon-box-icon"><img src="media\feature\20.png" alt=""></div><div class="pixsass-icon-box-content"><h3 class="pixsass-icon-box-title">
	<a style="font-family: cairo"> رؤيتنا الإستراتيجية</a></h3>
	<p style="font-family: cairo">أن تصبح منصة "جهات" هي القناة الأكثر استخداماً من قبل المستفيدين والجهات </p> <svg class="layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="270px"><path fill-rule="evenodd" fill="rgb(253, 248, 248)" d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z"></path></svg></div></div></div><div class="col-lg-4 col-md-6"><div class="saaspik-icon-box-wrapper style-four wow pixFadeLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: k;"><div class="saaspik-icon-box-icon"><img src="media\feature\19.png" alt=""></div><div class="pixsass-icon-box-content"><h3 class="pixsass-icon-box-title">
	<a style="font-family: cairo">تلك هى رسالتنا</a></h3>
	<p style="font-family: cairo">تقديم المعلومة الدقيقة للجمهور
 وزيادة الوعي الإرشادي لكافة الجهات بشكل عام 
</p></div><svg class="layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="270px"><path fill-rule="evenodd" fill="rgb(253, 248, 248)" d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z"></path></svg></div></div><div class="col-lg-4 col-md-6"><div class="saaspik-icon-box-wrapper style-four wow pixFadeLeft" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: k;"><div class="saaspik-icon-box-icon"><img src="media\feature\18.png" alt=""></div><div class="pixsass-icon-box-content"><h3 class="pixsass-icon-box-title">
	<a style="font-family: cairo">هكذا نحقق أهدافنا</a></h3>
	<p style="font-family: cairo">أن تكون المنصة واجهة استرشادية موحده لكافة المعاملات  في كافة القطاعات 
</p></div><svg class="layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="270px"><path fill-rule="evenodd" fill="rgb(253, 248, 248)" d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z"></path></svg></div></div></div>

	@endsection
