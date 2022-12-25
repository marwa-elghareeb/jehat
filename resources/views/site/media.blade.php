@extends('layouts.appPortal')

@section('content')

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
								<h1 data-animation="bounceIn" data-delay="0.2s">دليل المستخدم</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<div class="section-top-border">
		<h3>شرح منصة مستفيد </h3>
		<div class="row gallery-item">
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_dep.mp4" class="video-wrap position-relative">
					<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g1.jpg' ) }}">

					<h5> انشاء جهه جديده </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/client_register.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g5.jpg' ) }}">
					<h5> الية التسجيل كمستفيد </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/lang.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g3.jpg' ) }}">
					<h5> تغيير لغة العرض </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/View_Meeting.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g8.jpg' ) }}">
					<h5> حضور الاجتماعات والتصويت </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Client_Forget_Password.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g4.jpg' ) }}">
					<h5> استرجاع كلمه المرور </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Edit_Client.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g2.jpg' ) }}">
					<h5> تعديل البيانات الشخصيه </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_m.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g9.jpg' ) }}">
					<h5> اضافه المفوضين واداره المستندات </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_t.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g6.jpg' ) }}">
					<h5> اضافه واداره المواعيد </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_Transaction.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g10.jpg' ) }}">
					<h5> اضافه ومتابعه طلب </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/convert.mp4" class="video-wrap position-relative">
				<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g7.jpg' ) }}">
					<h5> الانتقال الى مكتبي </h5>
				</a>
			</div>
		</div>
	</div>

	<div class="section-top-border">
		<h3>شرح منصة مستفيد</h3>
		<div class="row gallery-item">
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_dep.mp4" class="video-wrap position-relative">
					<div class="single-gallery-image" style="background: url(assets/img/elements/g1.jpg);"></div>
					<h5> انشاء جهه جديده </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/client_register.mp4" class="video-wrap position-relative">
					<div class="single-gallery-image" style="background: url(assets/img/elements/g5.jpg);"></div>
					<h5> الية التسجيل كمستفيد </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/lang.mp4" class="video-wrap position-relative">
					<div class="single-gallery-image" style="background: url(assets/img/elements/g3.jpg);"></div>
					<h5> تغيير لغة العرض </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/View_Meeting.mp4" class="video-wrap position-relative">
					<div class="single-gallery-image" style="background: url(assets/img/elements/g8.jpg);"></div>
					<h5> حضور الاجتماعات والتصويت </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Client_Forget_Password.mp4" class="video-wrap position-relative">
					<div class="single-gallery-image" style="background: url(assets/img/elements/g4.jpg);"></div>
					<h5> استرجاع كلمه المرور </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Edit_Client.mp4" class="video-wrap position-relative">
					<div class="single-gallery-image" style="background: url(assets/img/elements/g2.jpg);"></div>
					<h5> تعديل البيانات الشخصيه </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_m.mp4" class="video-wrap position-relative">
					<div class="single-gallery-image" style="background: url(assets/img/elements/g9.jpg);"></div>
					<h5> اضافه المفوضين واداره المستندات </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_t.mp4" class="video-wrap position-relative">
					<div class="single-gallery-image" style="background: url(assets/img/elements/g6.jpg);"></div>
					<h5> اضافه واداره المواعيد </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_Transaction.mp4" class="video-wrap position-relative">
					<div class="single-gallery-image" style="background: url(assets/img/elements/g10.jpg);"></div>
					<h5> اضافه ومتابعه طلب </h5>
				</a>
			</div>
			<div class="col-md-3">
				<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/convert.mp4" class="video-wrap position-relative">
					<div class="single-gallery-image" style="background: url(assets/img/elements/g7.jpg);"></div>
					<h5> الانتقال الى مكتبي </h5>
				</a>
			</div>
		</div>
	</div>

	@endsection