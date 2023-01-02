@extends('layouts.appPortal')

@section('content')


<style> 


.slider-area.slider-area3,
.slider-area3.slider-area3 {
    background-image: url('public/web-assets/img/hero/jehatp90.png')
}





.card {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 0px;
    padding-right: 2px;
    padding-bottom: 0px;
    padding-left: 2px
}

.section-title h2 {
  font-family: 'Cairo';
  font-size: 18px;
  text-transform: uppercase;
  position: relative;
  color: #444347;
}

.slider-area .hero__caption h1, .slider-area2 .hero__caption h1 {
  font-family: 'Cairo';
    font-size: 54px;
    font-weight: 600;
    color: #fff;
    line-height: 1.3;
    margin-bottom: 22px;}

h1, h2, h3, h4, h5, h6 {
    font-family: 'Cairo';
    color: #1D2547;
	font-size: 20px;
    margin-top: 0px;
    font-style: normal;
    font-weight: 400;
}
h7{
    font-family: 'Cairo';
    color: #fff;
	font-size: 30px;
    margin-top: 0px;
    font-style: normal;
    font-weight: 400;
}

.card{
border-radius:4rem
}

.container1 {
    max-width: 1600px;
    margin-top: -320px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
    padding-top: 0px;
    padding-right: 30px;
    padding-bottom: 0px;
    padding-left: 30px;
}

.single-gallery-image {
    margin-top: -50px;
    background-repeat: no-repeat !important;
    background-position: center center !important;
    background-size: cover !important;
    height: 200px;
}


</style>
<main>
	<!--? slider Area Start-->
	<section class="slider-area slider-area3">
		<div class="slider-active">
			<!-- Single Slider -->
			<div class="single-slider slider-height2">
			


	
      </div>
    </div>
  </section>
  <!--? Our Services Start -->
  
  
 		  
 
 <div class="inner-page pb-5">
	<div class="inner-page-container">
<div class="container1">
        <div class="row justify-content-center">
            <div class="card col-12 col-md-12 col-lg-9">
                <div class="card-wrapper">
                    <div class="card-box align-center">
					<br>
	 <div class=" ">
  <div class="section-tittle">
<h2> المركز الاعلامي</h2>
          </div>

		  <br>
		  <br>  
  <div class="d-flex align-items-center flex-column ">			  
<div class="card col-6 col-md-12 col-lg-4">
			<div class="section-title h2">

	<a href="{{ asset('public/web-assets/presentation.pdf' ) }}"  " >
 <h2>تحميل ملف آلية عمل المنصة <img src=" {{ asset('public/web-assets/img/icon/pdficon.svg' ) }} " alt="" style="height: 40px; width: 40px;"> </h2></a>
 
                            </div>
		</div>
         
	<br>
     
          <div class="card col-6 col-md-12 col-lg-4">
			<div class="section-title h2" >
	<a href="{{ asset('public/web-assets/user guide.pdf' ) }}"  "> 
	
	<h2> تحميل ملف دليل المستخدم  <img src=" {{ asset('public/web-assets/img/icon/pdficon.svg' ) }} " alt="" style="height: 40px; width: 40px;"> </h2></a>
	</div>      
</div>
</div>

</div>	
</h2>

			

<br>
<br>
<br>


	
		<h1>شرح منصة مستفيد </h1>
		<div class="row gallery-item justify-content-center ">
			<div class="col-md-3 col d-flex justify-content-center m-5 p-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_dep.mp4" class="video-wrap position-relative">
					<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g1.jpg' ) }}">

					<h3> انشاء جهه جديده </h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center p-5 m-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/client_register.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g5.jpg' ) }}">
					<h3> الية التسجيل كمستفيد </h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center p-5 m-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/lang.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g3.jpg' ) }}">
					<h3> تغيير لغة العرض </h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center p-5 m-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/View_Meeting.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g8.jpg' ) }}">
					<h3> حضور الاجتماعات والتصويت </h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center p-5 m-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Client_Forget_Password.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g4.jpg' ) }}">
					<h3> استرجاع كلمه المرور </h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center p-5 m-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Edit_Client.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g2.jpg' ) }}">
					<h3> تعديل البيانات الشخصيه </h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center p-5 m-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_m.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g9.jpg' ) }}">
					<h3> اضافه المفوضين واداره المستندات </h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center m-5 p-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_t.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g6.jpg' ) }}">
					<h3> اضافه واداره المواعيد </h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center m-5 p-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_Transaction.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g10.jpg' ) }}">
					<h3> اضافه ومتابعه طلب </h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center m-5 p-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/convert.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g7.jpg' ) }}">
					<h3> الانتقال الى مكتبي </h3>
				</a>
			</div>

	<div class="section-top-border">
	<div class="container">
		<h1>شرح منصة الموظف</h1>
		<div class="row gallery-item justify-content-center">
			<div class="col-md-3 col d-flex justify-content-center m-5 p-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_dep.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h1.jpg' ) }}">
					<h3> اضافه وادارة الفواتير الالكترونية</h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center m-5 p-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/client_register.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h2.jpg' ) }}">
					<h3> اضافه ومتابعه الطلبات </h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center m-5 p-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/lang.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h3.jpg' ) }}">
					<h3> ادارة الاجتماع اثناء الانعقاد</h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center m-5 p-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/View_Meeting.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h4.jpg' ) }}">
					<h3>التعليقات وانواع الاسناد</h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center m-5 p-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Client_Forget_Password.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h5.jpg' ) }}">
					<h3>ادارة العملاء والاقسام </h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center m-5 p-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Edit_Client.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h6.jpg' ) }}">
					<h3> ادارة غرف الفيديو كونفرس</h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center m-5 p-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_m.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h7.jpg' ) }}">
					<h3> الية انشاء  الاجتماعات</h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center m-5 p-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_t.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h8.jpg' ) }}">
					<h3> استخدام فلتر بحث المعاملات</h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center m-5 p-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_Transaction.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h9.jpg' ) }}">
					<h3> ادارة الموظفين </h3>
				</a>
			</div>
			<div class="col-md-3 col d-flex justify-content-center m-5 p-5">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/convert.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/h10.jpg' ) }}">
					<h3> اضافه واداره المواعيد</h3>
				</a>
			</div>
		</div>
	</div>
</div>
		</div>
	</div>
</div>
      
                    </div>
                </div>
            </div>
        </div>
    </div>
	
</main>
	@endsection