@extends('layouts.appPortal')

@section('content')

<!-------------------------------------------------------------------------------->
<div class="breadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="breadcrumbs-title">المركز
					<span>الاعلامي</span>
				</h2>
				<ul class="breadcrumb-list">
					<li><a href="{{ URL :: to ('/')}}">الرئيسية</a></li>
					<li>المركز الاعلامي
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-------------------------------------------------------------------------------->
<main>
	<div class="media-section">
		<div class="container">
			<div class="card card-container">
				<div class="row">
					<div class="col-12">
						<div class="section-tittle">
							<h2> المركز الاعلامي</h2>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<a class="download-pdf" href="{{ asset('public/web-assets/presentation.pdf')}}">
							<h2>
								<img class="pdf" src="{{ asset('public/web-assets/img/icon/pdficon.svg')}} " alt="">
								تحميل ملف آلية عمل المنصة

							</h2>
						</a>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<a class="download-pdf" href="{{ asset('public/web-assets/user guide.pdf')}}">

							<h2><img class="pdf" src="{{ asset('public/web-assets/img/icon/pdficon.svg')}} " alt=""> تحميل ملف دليل المستخدم </h2>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h1 class="explain">شرح منصة مستفيد </h1>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_dep.mp4" class="video-wrap position-relative">
							<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g1.jpg')}}">

							<h3> انشاء جهه جديده </h3>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/client_register.mp4" class="video-wrap position-relative">
							<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g5.jpg')}}">
							<h3> الية التسجيل كمستفيد </h3>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/lang.mp4" class="video-wrap position-relative">
							<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g3.jpg')}}">
							<h3> تغيير لغة العرض </h3>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/View_Meeting.mp4" class="video-wrap position-relative">
							<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g8.jpg')}}">
							<h3> حضور الاجتماعات والتصويت </h3>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Client_Forget_Password.mp4" class="video-wrap position-relative">
							<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g4.jpg')}}">
							<h3> استرجاع كلمه المرور </h3>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Edit_Client.mp4" class="video-wrap position-relative">
							<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g2.jpg')}}">
							<h3> تعديل البيانات الشخصيه </h3>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_m.mp4" class="video-wrap position-relative">
							<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g9.jpg')}}">
							<h3> اضافه المفوضين واداره المستندات </h3>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/add_t.mp4" class="video-wrap position-relative">
							<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g6.jpg')}}">
							<h3> اضافه واداره المواعيد </h3>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/Add_Transaction.mp4" class="video-wrap position-relative">
							<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g10.jpg')}}">
							<h3> اضافه ومتابعه طلب </h3>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<a class="popup-video btn-icon" href="https://www.jehat.sa/media/mp4/convert.mp4" class="video-wrap position-relative">
							<img class="single-gallery-image" src="{{ asset('public/web-assets/img/g7.jpg')}}">
							<h3> الانتقال الى مكتبي </h3>
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>






</main>



@endsection