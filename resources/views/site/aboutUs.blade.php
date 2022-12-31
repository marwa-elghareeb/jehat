@extends('layouts.appPortal')

@section('content')


<style> 

.slider-area.slider-area2,
.slider-area2.slider-area2 {
    background-image: url('public/web-assets/img/hero/jehatp90.png')
}
</style>


<section class="slider-area slider-area2">
    <div class="slider-active">
      <!-- Single Slider -->
      <div class="single-slider slider-height2">
              </div>
            </div>
  </section>




  <div class="inner-page pb-5 ">
	<div class="inner-page-container">
        <div class="container">
        <div class="row justify-content-center">
            <div class="card col-9 col-md-10 col-lg-15">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                      <br>
  <section class="about p-5">
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
<br>
<br>
<section class="container our-services text-center ">
               <div class="row justify-content-center" >
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services mb-30  border border-light rounded-5 text-center" >
                            <div class="services-ion">
                                <img src=" {{ asset('public/web-assets/img/icon/18.png' ) }} " alt="" style="height: 100px; width: 100px;">
                            </div>
                            <br>
                            <div class="services-cap">
                                <h3 class="font-weight-bold text-center" >هكذا نحقق أهدافنا</h5>
                                <p class=" text-center">أن تكون المنصة واجهة استرشادية موحده<br> لكافة المعاملات في كافة القطاعات</p>
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
                                <p class=" text-center">تقديم المعلومة الدقيقة للجمهور وزيادة <br>الوعي الإرشادي لكافة الجهات بشكل عام</p>
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
                                <p class=" text-center"> أن تصبح منصة "جهات" هي القناة الأكثر<br> استخداماً من قبل المستفيدين والجهات</p>
                            </div>
                        </div>
                    </div>
                    </section><br>
                    <br>
<br>
                   
       




                    </div>

                </div>
            </div>




     </div>
            </div>

        </div>
    </div>

            </div>
        </section>
        
 


	@endsection