@extends('layouts.appPortalPages')

@section('content')


<section class="page-banner" style="background-size: 100% 100%; background-image: url('public/portal-assets/media/banner/top shape.png'); background-repeat: no-repeat; background-color: #7052fb;">
	<div class="container">
		<div class="page-title-wrapper">
			<h1 class="page-title" style="font-family: cairo">من نحن</h1>
			<ul class="bradcurmed">
				<li>
					<a href="{{ URL :: to ('/')}}" rel="noopener noreferrer" style="font-family: cairo">الرئيسية</a>
				</li>
				<li style="font-family: cairo">من نحن</li>
			</ul>
		</div>
	</div><svg class="circle" data-parallax='{"x" : -200}' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
		<path fill-rule="evenodd" stroke="rgb(146, 112, 250)" stroke-width="100px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.051" fill="none" d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z">
		</path>
	</svg>
	<ul class="animate-ball">
		<li class="ball"></li>
		<li class="ball"></li>
		<li class="ball"></li>
		<li class="ball"></li>
	</ul>
</section>



<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="about-content">
					<div class="section-title">
						<h2 class="title wow pixFadeUp" data-wow-delay="0.3s" style="font-family: cairo">
							منصة جهات </h2>
					</div>
					<p class="description wow pixFadeUp" data-wow-delay="0.4s" style="font-family: cairo">
						نحن نسعى من اجل مواكبة الحداثة والتطور ونشر الثقافة الرقمية , وفى إطار رؤية 2030
						ساهمنا بدور فعال فى زيادة الوعي التقنى لدى الجمهور , حيث تُتيح المنصة للجهات فتح
						مكاتب افتراضية لموظفيها وغرف إجتماعات . كما تُمكن المستفيدين من الوصول للجهات بكل
						سهولة ويُسر,
						فى مختلف المجالات نحن نوظف خبراتنا لنؤمن لعملائنا واقعاً ملموسأ يحقق رغابتهم بالنمو
						والإزدهار المستدام
					</p>
					<div class="singiture wow pixFadeUp" data-wow-delay="0.5s">
						<h3 class="sub-title wow pixFadeUp" style="font-family: cairo">رئيس مجلس الإدارة
						</h3>
						<h4 style="font-family: cairo">سعد عبدالله المحسن</h4><img src="{{ asset('portal-assets\media\about\sing.png')}}" class="wow pixFadeUp" data-wow-delay="0.6s" alt="sign">
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="about-thumb wow pixFadeRight" data-wow-delay="0.6s">
					<img src="{{ asset('public\portal-assets\media\about\1.png')}}" alt="about">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="featured-four-ab" style="background-image: url('public/portal-assets/media/background/map2.png'); background-repeat: no-repeat">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6">
				<div class="saaspik-icon-box-wrapper style-four wow pixFadeLeft" data-wow-delay="0.5s">
					<div class="saaspik-icon-box-icon"><img src="{{ asset('public\portal-assets\media\feature\20.png')}}" alt=""></div>
					<div class="pixsass-icon-box-content">
						<h3 class="pixsass-icon-box-title">
							<a style="font-family: cairo"> رؤيتنا الإستراتيجية</a>
						</h3>
						<p style="font-family: cairo">أن تصبح منصة "جهات" هي القناة الأكثر استخداماً من قبل
							المستفيدين والجهات </p> <svg class="layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="270px">
							<path fill-rule="evenodd" fill="rgb(253, 248, 248)" d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z">
							</path>
						</svg>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="saaspik-icon-box-wrapper style-four wow pixFadeLeft" data-wow-delay="0.6s">
					<div class="saaspik-icon-box-icon"><img src="{{ asset('public\portal-assets\media\feature\19.png')}}" alt=""></div>
					<div class="pixsass-icon-box-content">
						<h3 class="pixsass-icon-box-title">
							<a style="font-family: cairo">تلك هى رسالتنا</a>
						</h3>
						<p style="font-family: cairo">تقديم المعلومة الدقيقة للجمهور
							وزيادة الوعي الإرشادي لكافة الجهات بشكل عام
						</p>
					</div><svg class="layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="270px">
						<path fill-rule="evenodd" fill="rgb(253, 248, 248)" d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z">
						</path>
					</svg>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="saaspik-icon-box-wrapper style-four wow pixFadeLeft" data-wow-delay="0.9s">
					<div class="saaspik-icon-box-icon"><img src="{{ asset('public\portal-assets\media\feature\18.png')}}" alt=""></div>
					<div class="pixsass-icon-box-content">
						<h3 class="pixsass-icon-box-title">
							<a style="font-family: cairo">هكذا نحقق أهدافنا</a>
						</h3>
						<p style="font-family: cairo">أن تكون المنصة واجهة استرشادية موحده لكافة المعاملات
							في كافة القطاعات
						</p>
					</div><svg class="layer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="270px">
						<path fill-rule="evenodd" fill="rgb(253, 248, 248)" d="M-0.000,269.999 L-0.000,-0.001 L370.000,-0.001 C370.000,-0.001 347.889,107.879 188.862,112.181 C35.160,116.338 -0.000,269.999 -0.000,269.999 Z">
						</path>
					</svg>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="teams">
	<div class="container">
		<div class="section-title text-center">
			<h2 class="title wow pixFadeUp" data-wow-delay="0.3s" style="font-family: cairo">فريق عمل منصة
				جهات</h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="team-member wow pixFadeRight" data-wow-delay="0.3s">
					<div class="member-avater"><img src="{{ asset('public\portal-assets\media\team\1.jpg')}}" alt="avater">
						<ul class="member-social">
							<li><a><i class="fab fa-facebook-f"></i></a></li>
							<li><a><i class="fab fa-twitter"></i></a></li>
							<li><a><i class="fab fa-linkedin-in"></i></a></li>
						</ul><svg class="layer-one" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="210px">
							<path fill-rule="evenodd" opacity="0.302" fill="rgb(146, 112, 250)" d="M-0.000,79.999 C-0.000,79.999 85.262,-11.383 187.324,50.502 C297.703,117.429 370.000,-0.001 370.000,-0.001 L370.000,203.999 C370.000,207.313 367.314,209.999 364.000,209.999 L6.000,209.999 C2.686,209.999 -0.000,207.313 -0.000,203.999 L-0.000,79.999 Z">
							</path>
						</svg> <svg class="layer-two" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="218px">
							<path fill-rule="evenodd" opacity="0.8" fill="rgb(146, 112, 250)" d="M-0.000,27.999 C-0.000,27.999 95.694,-46.224 188.615,48.781 C278.036,140.208 370.000,57.999 370.000,57.999 L370.000,211.999 C370.000,215.313 367.314,217.999 364.000,217.999 L6.000,217.999 C2.686,217.999 -0.000,215.313 -0.000,211.999 L-0.000,27.999 Z">
							</path>
						</svg>
					</div>
					<div class="team-info">
						<h3 class="name">Saad Al Mohsen</h3>
						<h4 class="job">Chairman of Board of Directors</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="team-member wow pixFadeRight" data-wow-delay="0.5s">
					<div class="member-avater"><img src="{{ asset('public\portal-assets\media\team\2.jpg')}}" alt="avater">
						<ul class="member-social">
							<li><a><i class="fab fa-facebook-f"></i></a></li>
							<li><a><i class="fab fa-twitter"></i></a></li>
							<li><a><i class="fab fa-linkedin-in"></i></a></li>
						</ul><svg class="layer-one" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="210px">
							<path fill-rule="evenodd" opacity="0.302" fill="rgb(146, 112, 250)" d="M-0.000,79.999 C-0.000,79.999 85.262,-11.383 187.324,50.502 C297.703,117.429 370.000,-0.001 370.000,-0.001 L370.000,203.999 C370.000,207.313 367.314,209.999 364.000,209.999 L6.000,209.999 C2.686,209.999 -0.000,207.313 -0.000,203.999 L-0.000,79.999 Z">
							</path>
						</svg> <svg class="layer-two" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="218px">
							<path fill-rule="evenodd" opacity="0.8" fill="rgb(146, 112, 250)" d="M-0.000,27.999 C-0.000,27.999 95.694,-46.224 188.615,48.781 C278.036,140.208 370.000,57.999 370.000,57.999 L370.000,211.999 C370.000,215.313 367.314,217.999 364.000,217.999 L6.000,217.999 C2.686,217.999 -0.000,215.313 -0.000,211.999 L-0.000,27.999 Z">
							</path>
						</svg>
					</div>
					<div class="team-info">
						<h3 class="name">Emad Zaree</h3>
						<h4 class="job">Director of Development</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="team-member wow pixFadeRight" data-wow-delay="0.7s">
					<div class="member-avater"><img src="{{ asset('public\portal-assets\media\team\3.jpg')}}" alt="avater">
						<ul class="member-social">
							<li><a><i class="fab fa-facebook-f"></i></a></li>
							<li><a><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul><svg class="layer-one" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="210px">
							<path fill-rule="evenodd" opacity="0.302" fill="rgb(146, 112, 250)" d="M-0.000,79.999 C-0.000,79.999 85.262,-11.383 187.324,50.502 C297.703,117.429 370.000,-0.001 370.000,-0.001 L370.000,203.999 C370.000,207.313 367.314,209.999 364.000,209.999 L6.000,209.999 C2.686,209.999 -0.000,207.313 -0.000,203.999 L-0.000,79.999 Z">
							</path>
						</svg> <svg class="layer-two" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="218px">
							<path fill-rule="evenodd" opacity="0.8" fill="rgb(146, 112, 250)" d="M-0.000,27.999 C-0.000,27.999 95.694,-46.224 188.615,48.781 C278.036,140.208 370.000,57.999 370.000,57.999 L370.000,211.999 C370.000,215.313 367.314,217.999 364.000,217.999 L6.000,217.999 C2.686,217.999 -0.000,215.313 -0.000,211.999 L-0.000,27.999 Z">
							</path>
						</svg>
					</div>
					<div class="team-info">
						<h3 class="name">Ahmed Basuony</h3>
						<h4 class="job">IT Manager</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="team-member wow pixFadeRight" data-wow-delay="0.9s">
					<div class="member-avater"><img src="{{ asset('public\portal-assets\media\team\4.jpg')}}" alt="avater">
						<ul class="member-social">
							<li><a><i class="fab fa-facebook-f"></i></a></li>
							<li><a><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul><svg class="layer-one" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="210px">
							<path fill-rule="evenodd" opacity="0.302" fill="rgb(146, 112, 250)" d="M-0.000,79.999 C-0.000,79.999 85.262,-11.383 187.324,50.502 C297.703,117.429 370.000,-0.001 370.000,-0.001 L370.000,203.999 C370.000,207.313 367.314,209.999 364.000,209.999 L6.000,209.999 C2.686,209.999 -0.000,207.313 -0.000,203.999 L-0.000,79.999 Z">
							</path>
						</svg> <svg class="layer-two" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="218px">
							<path fill-rule="evenodd" opacity="0.8" fill="rgb(146, 112, 250)" d="M-0.000,27.999 C-0.000,27.999 95.694,-46.224 188.615,48.781 C278.036,140.208 370.000,57.999 370.000,57.999 L370.000,211.999 C370.000,215.313 367.314,217.999 364.000,217.999 L6.000,217.999 C2.686,217.999 -0.000,215.313 -0.000,211.999 L-0.000,27.999 Z">
							</path>
						</svg>
					</div>
					<div class="team-info">
						<h3 class="name">Datuk Hj Abdul Rahim</h3>
						<h4 class="job">
							CEO of Malaysia</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="team-member wow pixFadeRight" data-wow-delay="1.1s">
					<div class="member-avater"><img src="{{ asset('public\portal-assets\media\team\6.jpg')}}" alt="avater">
						<ul class="member-social">
							<li><a><i class="fab fa-facebook-f"></i></a></li>
							<li><a><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul><svg class="layer-one" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="210px">
							<path fill-rule="evenodd" opacity="0.302" fill="rgb(146, 112, 250)" d="M-0.000,79.999 C-0.000,79.999 85.262,-11.383 187.324,50.502 C297.703,117.429 370.000,-0.001 370.000,-0.001 L370.000,203.999 C370.000,207.313 367.314,209.999 364.000,209.999 L6.000,209.999 C2.686,209.999 -0.000,207.313 -0.000,203.999 L-0.000,79.999 Z">
							</path>
						</svg> <svg class="layer-two" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="218px">
							<path fill-rule="evenodd" opacity="0.8" fill="rgb(146, 112, 250)" d="M-0.000,27.999 C-0.000,27.999 95.694,-46.224 188.615,48.781 C278.036,140.208 370.000,57.999 370.000,57.999 L370.000,211.999 C370.000,215.313 367.314,217.999 364.000,217.999 L6.000,217.999 C2.686,217.999 -0.000,215.313 -0.000,211.999 L-0.000,27.999 Z">
							</path>
						</svg>
					</div>
					<div class="team-info">
						<h3 class="name">
							Ayman Ahmed Khalifa</h3>
						<h4 class="job">CEO of Saudi</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="team-member wow pixFadeRight" data-wow-delay="1.1s">
					<div class="member-avater"><img src="{{ asset('public\portal-assets\media\team\9.jpg')}}" alt="avater">
						<ul class="member-social">
							<li><a><i class="fab fa-facebook-f"></i></a></li>
							<li><a><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul><svg class="layer-one" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="210px">
							<path fill-rule="evenodd" opacity="0.302" fill="rgb(146, 112, 250)" d="M-0.000,79.999 C-0.000,79.999 85.262,-11.383 187.324,50.502 C297.703,117.429 370.000,-0.001 370.000,-0.001 L370.000,203.999 C370.000,207.313 367.314,209.999 364.000,209.999 L6.000,209.999 C2.686,209.999 -0.000,207.313 -0.000,203.999 L-0.000,79.999 Z">
							</path>
						</svg> <svg class="layer-two" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="218px">
							<path fill-rule="evenodd" opacity="0.8" fill="rgb(146, 112, 250)" d="M-0.000,27.999 C-0.000,27.999 95.694,-46.224 188.615,48.781 C278.036,140.208 370.000,57.999 370.000,57.999 L370.000,211.999 C370.000,215.313 367.314,217.999 364.000,217.999 L6.000,217.999 C2.686,217.999 -0.000,215.313 -0.000,211.999 L-0.000,27.999 Z">
							</path>
						</svg>
					</div>
					<div class="team-info">
						<h3 class="name">
							Dr. Fadi Abu Fawzy Shaheen</h3>
						<h4 class="job">CEO of USA</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="team-member wow pixFadeRight" data-wow-delay="1.1s">
					<div class="member-avater"><img src="{{ asset('public\portal-assets\media\team\8.jpg')}}" alt="avater">
						<ul class="member-social">
							<li><a><i class="fab fa-facebook-f"></i></a></li>
							<li><a><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul><svg class="layer-one" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="210px">
							<path fill-rule="evenodd" opacity="0.302" fill="rgb(146, 112, 250)" d="M-0.000,79.999 C-0.000,79.999 85.262,-11.383 187.324,50.502 C297.703,117.429 370.000,-0.001 370.000,-0.001 L370.000,203.999 C370.000,207.313 367.314,209.999 364.000,209.999 L6.000,209.999 C2.686,209.999 -0.000,207.313 -0.000,203.999 L-0.000,79.999 Z">
							</path>
						</svg> <svg class="layer-two" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="218px">
							<path fill-rule="evenodd" opacity="0.8" fill="rgb(146, 112, 250)" d="M-0.000,27.999 C-0.000,27.999 95.694,-46.224 188.615,48.781 C278.036,140.208 370.000,57.999 370.000,57.999 L370.000,211.999 C370.000,215.313 367.314,217.999 364.000,217.999 L6.000,217.999 C2.686,217.999 -0.000,215.313 -0.000,211.999 L-0.000,27.999 Z">
							</path>
						</svg>
					</div>
					<div class="team-info">
						<h3 class="name">
							Dr. Mohammad Saleh Ali Matar</h3>
						<h4 class="job">CEO OF YEMEN</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="team-member wow pixFadeRight" data-wow-delay="1.1s">
					<div class="member-avater"><img src="{{ asset('public\portal-assets\media\team\7.jpg')}}" alt="avater">
						<ul class="member-social">
							<li><a><i class="fab fa-facebook-f"></i></a></li>
							<li><a><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul><svg class="layer-one" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="210px">
							<path fill-rule="evenodd" opacity="0.302" fill="rgb(146, 112, 250)" d="M-0.000,79.999 C-0.000,79.999 85.262,-11.383 187.324,50.502 C297.703,117.429 370.000,-0.001 370.000,-0.001 L370.000,203.999 C370.000,207.313 367.314,209.999 364.000,209.999 L6.000,209.999 C2.686,209.999 -0.000,207.313 -0.000,203.999 L-0.000,79.999 Z">
							</path>
						</svg> <svg class="layer-two" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="218px">
							<path fill-rule="evenodd" opacity="0.8" fill="rgb(146, 112, 250)" d="M-0.000,27.999 C-0.000,27.999 95.694,-46.224 188.615,48.781 C278.036,140.208 370.000,57.999 370.000,57.999 L370.000,211.999 C370.000,215.313 367.314,217.999 364.000,217.999 L6.000,217.999 C2.686,217.999 -0.000,215.313 -0.000,211.999 L-0.000,27.999 Z">
							</path>
						</svg>
					</div>
					<div class="team-info">
						<h3 class="name">
							Ezzedine Hassan Othman</h3>
						<h4 class="job">CEO of Sudan</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="team-member wow pixFadeRight" data-wow-delay="1.37s">
					<div class="member-avater"><img src="{{ asset('public\portal-assets\media\team\5.jpg')}}" alt="avater">
						<ul class="member-social">
							<li><a><i class="fab fa-facebook-f"></i></a></li>
							<li><a><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul><svg class="layer-one" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="210px">
							<path fill-rule="evenodd" opacity="0.302" fill="rgb(146, 112, 250)" d="M-0.000,79.999 C-0.000,79.999 85.262,-11.383 187.324,50.502 C297.703,117.429 370.000,-0.001 370.000,-0.001 L370.000,203.999 C370.000,207.313 367.314,209.999 364.000,209.999 L6.000,209.999 C2.686,209.999 -0.000,207.313 -0.000,203.999 L-0.000,79.999 Z">
							</path>
						</svg> <svg class="layer-two" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="370px" height="218px">
							<path fill-rule="evenodd" opacity="0.8" fill="rgb(146, 112, 250)" d="M-0.000,27.999 C-0.000,27.999 95.694,-46.224 188.615,48.781 C278.036,140.208 370.000,57.999 370.000,57.999 L370.000,211.999 C370.000,215.313 367.314,217.999 364.000,217.999 L6.000,217.999 C2.686,217.999 -0.000,215.313 -0.000,211.999 L-0.000,27.999 Z">
							</path>
						</svg>
					</div>
					<div class="team-info">
						<h3 class="name">
							Dr . Ayman Mahmoud Helmy</h3>
						<h4 class="job">CEO of Egypt</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="brand-logo-ab" style="background-position: right top; background-size: 100% 100%; background-color: #FFFFFF; background-image: url('portal-assets/media/background/down-bg.png'); background-repeat: no-repeat;">
	<div class="section-small text-center">
		<h2 class="title wow pixFadeUp" style="font-family: cairo">أكثر من 850 جهة وشركة وثقوا بنا
		</h2>
	</div>
	<div class="container">
		<div class="swiper-container logo-carousel wow pixFadeUp" id="logo-carousel" data-perpage="6" data-breakpoints='{"1024": {"slidesPerView": 4}, "768": {"slidesPerView": 4}, "620": {"slidesPerView": 3}}'>
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="brand-logo"><img src="{{ asset('public\portal-assets\media\brand\1.png')}}" alt="brand"></div>
				</div>
				<div class="swiper-slide">
					<div class="brand-logo"><img src="{{ asset('public\portal-assets\media\brand\2.png')}}" alt="brand"></div>
				</div>
				<div class="swiper-slide">
					<div class="brand-logo"><img src="{{ asset('public\portal-assets\media\brand\3.png')}}" alt="brand"></div>
				</div>
				<div class="swiper-slide">
					<div class="brand-logo"><img src="{{ asset('public\portal-assets\media\brand\4.png')}}" alt="brand"></div>
				</div>
				<div class="swiper-slide">
					<div class="brand-logo"><img src="{{ asset('public\portal-assets\media\brand\5.png')}}" alt="brand"></div>
				</div>
				<div class="swiper-slide">
					<div class="brand-logo"><img src="{{ asset('public\portal-assets\media\brand\6.png')}}" alt="brand"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<h1 style="font-family: cairo;">كيف يمكنني تحميل التطبيق</h1>
<p style="font-family: cairo;">تستطيع تحميل تطبيق جهات من متجر جوجل أو أبستور</p>
<a class="wow fadeIn animated" data-wow-delay="0.25s" href="https://apps.apple.com/eg/app/jehat/id1600983802">
	<img class="app-store-btn" src="{{ asset('public/portal-assets/media/pngfind.com-store-png-1446326.png')}}" alt="App Store Icon" style="width: 170px; height: 70px"></a>
<a class="wow fadeIn animated" data-wow-delay="0.67s" href="https://play.google.com/store/apps/">
	<img class="google-play-btn" src="{{ asset('public/portal-assets/media/pngfind.com-google-logo-white-png-982813.png')}}" alt="Google Play Icon" style="width: 170px; height: 70px"><br />
	</a-->





	@endsection