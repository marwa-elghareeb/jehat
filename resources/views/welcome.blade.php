@extends('layouts.appPortal')


@section('content')

<section class="banner banner-two">
	<div class="vector-bg">
		<img src="{{ asset('public\portal-assets\media\banner\top shape.png')}}" alt="circle" style="top: 0px; height: 100%;">
	</div>
	<div class="container">
		<div class="banner-content-wrap">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="banner-content" style="text-align: left !important">
						<h1 class="banner-title wow pixFadeUp" data-wow-delay="0.3s" style="font-family: cairo; text-align: left;">منصة <span>جهات<br>
								<span class="auto-style1">مستقبل كل الجهات</span></span> </h1>
						<p class="description wow pixFadeUp" data-wow-delay="0.5s" style="font-family: cairo">تُتيح للجهات فتح مكاتب افتراضية لموظفيها وغرف
							إجتماعات . كما تُمكن المستفيدين من الوصول للجهات بكل سهولة ويُسر
						</p>
						<h2 class="title wow pixFadeUp" data-wow-delay="0.3s" style="font-family: cairo; font-size: large; color: #8070FA;">سجل كمستفيد واحجز
							مكتبك الإفتراضي</h2>
						<h2 class="title wow pixFadeUp" data-wow-delay="0.3s" style="font-family: cairo; font-size: large; color: #8070FA;">&nbsp;</h2>
						<a href="https://gtm.easygo.systems" 
						class="pxs-btn banner-btn color-two wow pixFadeUp" 
						data-wow-delay="0.6s" style="font-family: cairo;
						 background-color: #FFC107; width: 160px; height: 50px; font-size: 12px;">أضعط
							هنا</a>&nbsp;
							 <img alt="" src="{{ asset('public/portal-assets/media/bg.png')}}" 
							style="height: 50px" width="50"><span></span>
							<!--button class="btn"><i class="fa fa-home"></i> Home</button-->
					</div>
				</div>
				<div class="col-lg-6">
					<div class="animate-promo-mockup">
						<img src="{{ asset('public\portal-assets\media\banner\01.png')}}" 
						class="wow pixFadeDown" alt="mpckup" data-wow-duration="1.5s">
						 <img src="{{ asset('public\portal-assets\media\banner\02.png')}}" 
						 class="wow pixFadeRight" data-wow-delay="0.3s" data-wow-duration="1s"
						  alt="mpckup"> <img src="{{ asset('public\portal-assets\media\banner\03.png')}}"
						   class="wow pixFadeUp" alt="mpckup" data-wow-duration="1.7s"> 
						   <img src="{{ asset('public\portal-assets\media\banner\04.png')}}" 
						   class="wow pixFadeRight" alt="mpckup"> 
						   <img src="{{ asset('public\portal-assets\media\banner\05.png')}}" 
						   class="wow pixFadeDown" alt="mpckup" data-wow-duration="2s">
						    <img src="{{ asset('public\portal-assets\media\banner\06.png')}}"
							 alt="mpckup" data-wow-delay="0.3s"> 
							 <img src="{{ asset('public\portal-assets\media\banner\07.png')}}" 
							 class="wow pixFadeLeft" alt="mpckup" data-wow-delay="0.6s" 
							 data-wow-duration="1.5s"> 
							 <img src="{{ asset('public\portal-assets\media\banner\cloud_01.png')}}"
							  alt="mpckup"> 
							  <img src="{{ asset('public\portal-assets\media\banner\cloud_02.png')}}" 
							  alt="mpckup">
							   <img src="{{ asset('public\portal-assets\media\banner\cloud_03.png')}}"
							    alt="mpckup"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="brand-logo" style="z-index: 999">
	<div class="section-small text-center wow pixFadeUp">
		<h2 class="title" style="font-family: cairo"> أكثر من 850 جهة وشركة وثقوا بنا</h2>
	</div>
	<div class="container">
		<div class="swiper-container logo-carousel wow pixFadeUp" data-wow-delay="0.3s" id="logo-carousel" data-perpage="6" data-breakpoints='{"1024": {"slidesPerView": 4}, "768": {"slidesPerView": 4}, "640": {"slidesPerView": 3}}'>
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
<section class="featured-two-same" style="background-position: right center; background-size: 100% 100%; background-color: #FFFFFF; background-image: url('portal-assets/media/background/down-bg.png'); background-repeat: no-repeat;">
	<div class="container">
		<div class="section-title color-two text-center">
			<div class="wpb_text_column wpb_content_element ">
				<div class="wpb_wrapper">
					<div>
						<div style="text-align: center">
							<video class="wp-video-shortcode" id="video-3945-1" preload="metadata" controls="controls" style="width: 100%;">
								<source type="video/mp4" src="{{ asset('public/portal-assets/media/jehat.mp4')}}">
								<a href="media/jehat.mp4"></a>
							</video>
						</div>
					</div>

				</div>
			</div><br />
			<h3 class=" wow pixFadeUp" style="font-family: cairo; font-size: 18px; color: #8070FA;">بعض
				المزايا</h3>
			<h2 class="title wow pixFadeUp" data-wow-delay="0.3s" style="font-family: cairo">لماذا منصة جهات
				هى الأفضل</h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.5s" style="text-align: center">
					<div class="saaspik-icon-box-icon"><img src="{{ asset('public\portal-assets\media\feature\6.png')}}" alt=""></div>
					<div class="pixsass-icon-box-content">
						<h3 class="pixsass-icon-box-title">
							<a href="#" style="font-family: cairo">التطوير المستمر</a>
						</h3>
						<p style="font-family: cairo"> تمتع بتصميم صديق للجوال <br>وموديولات متعددة
							الاستخدام <br>تواكب كل جديد</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.6s" style="text-align: center">
					<div class="saaspik-icon-box-icon"><img src="{{ asset('public\portal-assets\media\feature\7.png')}}" alt=""></div>
					<div class="pixsass-icon-box-content">
						<h3 class="pixsass-icon-box-title">
							<a href="#" style="font-family: cairo">دعم فني</a>
						</h3>
						<p style="font-family: cairo">دعم فني على مدار الساعه <br>لدينا فريق تقني مدرب على
							اعلى مستوي <br>لحل كافة المشكلات</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.7s" style="text-align: center">
					<div class="saaspik-icon-box-icon"><img src="{{ asset('public\portal-assets\media\feature\9.png')}}" alt=""></div>
					<div class="pixsass-icon-box-content">
						<h3 class="pixsass-icon-box-title">
							<a href="#" style="font-family: cairo">التخزين السحابي</a>
						</h3>
						<p style="font-family: cairo;">بكل أمان ويسر يمكنك <br>متابعه جميع معاملاتك من اى
							مكان <br>دون الخوف من فقدانها </p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.8s" style="text-align: center">
					<div class="saaspik-icon-box-icon"><img src="{{ asset('public\portal-assets\media\feature\63.png')}}" alt=""></div>
					<div class="pixsass-icon-box-content">
						<h3 class="pixsass-icon-box-title">
							<a href="#" style="font-family: cairo">تقارير متعددة</a>
						</h3>
						<p style="font-family: cairo">تقدم المنصه تقارير واحصائيات <br>متعددة قابله للعرض
							<br>وايضا للطباعة
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.9s" style="text-align: center">
					<div class="saaspik-icon-box-icon"><img src="{{ asset('public\portal-assets\media\feature\62.png')}}" alt=""></div>
					<div class="pixsass-icon-box-content">
						<h3 class="pixsass-icon-box-title">
							<a href="#" style="font-family: cairo">سهولة الإستخدام</a>
						</h3>
						<p style="font-family: cairo">بكل مرونه تستطيع ضبط الاعدادت <br>حسب طريقة الاستخدام
							و العرض المفضله <br>اليك </p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="saaspik-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="1s" style="text-align: center">
					<div class="saaspik-icon-box-icon"><img src="{{ asset('public\portal-assets\media\feature\61.png')}}" alt=""></div>
					<div class="pixsass-icon-box-content">
						<h3 class="pixsass-icon-box-title">
							<a href="#" style="font-family: cairo">معاملات متعددة</a>
						</h3>
						<p style="font-family: cairo">إدارة المعاملات باحترافيه <br>وإدارة شئون الموظفين بكل
							يسر <br>وعدد غير محدود من العملاء </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="scroll-circle wow pixFadeRight"><img src="{{ asset('public\portal-assets\media\background\circle.png')}}" data-parallax='{"y" : -230}' alt="circle"></div>
</section>
<section class="revolutionize-two">
	<div class="bg-angle"></div>
	<div class="container">
		<div class="section-title dark-title text-center">
			<h3 class=" wow pixFadeUp" style="font-family: cairo; font-size: 18px; color: #FFFFFF;">منصة
				جهات</h3>
			<h2 class="title wow pixFadeUp" data-wow-delay="0.3s" style="font-family: cairo">أحدث التقنيات
				المستخدمة <br>بين يديك </h2>
		</div>
		<div id="pix-tabs" class="wow pixFadeUp" data-wow-delay="0.5s">
			<ul id="pix-tabs-nav" class="pix-tab-two">
				<li>
					<a href="#tab1" style="font-family: cairo">إجتماعات متعددة</a>
				</li>
				<li>
					<a href="#tab2" style="font-family: cairo">تقارير متنوعة</a>
				</li>
				<li>
					<a href="#tab3" style="font-family: cairo">معاملات متعددة</a>
				</li>
				<li>
					<a href="#tab4" style="font-family: cairo">سهولة الإستخدام</a>
				</li>
			</ul>
			<div id="pix-tabs-content">
				<div id="tab1" class="content color-two"><img src="{{ asset('public\portal-assets\media\revolutionize\1.jpg')}}" alt="revolutionize">
					<div class="shape-shadow"></div>
				</div>
				<div id="tab2" class="content color-two"><img src="{{ asset('public\portal-assets\media\revolutionize\2.jpg')}}" alt="revolutionize">
					<div class="shape-shadow"></div>
				</div>
				<div id="tab3" class="content color-two"><img src="{{ asset('public\portal-assets\media\revolutionize\3.jpg')}}" alt="revolutionize">
					<div class="shape-shadow"></div>
				</div>
				<div id="tab4" class="content color-two"><img src="{{ asset('public\portal-assets\media\revolutionize\4.jpg')}}" alt="revolutionize">
					<div class="shape-shadow"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="editor-design-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="editure-feature-image-two">
					<div class="animaated-elements">
						<img src="{{ asset('public\portal-assets\media\animated\01.png')}}" alt="main-bg" class="main-bg wow pixFade" style="left: 6px; top: 5px">
						<img src="{{ asset('public\portal-assets\media\animated\02.png')}}" alt="main-bg" class="elm-clock wow pixFadeLeft" data-wow-delay="0.5s">
						<img src="{{ asset('public\portal-assets\media\animated\03.png')}}" alt="elm-man" class="elm-man wow pixFadeRight" data-wow-delay="0.7s">
						<img src="{{ asset('public\portal-assets\media\animated\04.png ')}}" alt="elm-table" class="elm-table wow pixFadeUp" data-wow-delay="0.1s">
						<img src="{{ asset('public\portal-assets\media\animated\05.png')}}" alt="main-bg" class="elm-sm-vase wow pixFade" data-wow-delay="0.9s">
						<img src="{{ asset('public\portal-assets\media\animated\06.png')}}" alt="elm-vase" class="elm-vase wow pixFadeLeft" data-wow-delay="0.9s">
						<div class="elm-mass wow pixFadeDown" data-wow-delay="1s">
							<img src="{{ asset('public\portal-assets\media\animated\07.png')}}" alt="massage" class="mass-img">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="editor-content color-two">
					<div class="section-title style-two color-two">
						<h2 class="title wow pixFadeUp" data-wow-delay="0.3s" style="font-family: cairo; ">
							منصة الجهات</h2>
						<p class="text-right" data-wow-delay="0.5s" style="font-family: cairo">هل تريد إدارة
							كافة المعاملات وشئون الموظفين <br>من نافذة واحدة </p>
					</div>
					<div class="description wow pixFadeUp" data-wow-delay="0.7s">
						<p style="font-family: cairo; " class="text-right"> أول أبراج مكتبية أفتراضية ....
							نعم اول أبراج أفتراضيه تعكس الواقع الفعلي للابراج المكتبيه وتستطيع أي جهة أن
							تأخذ مساحة بهذا البرج وتفتح مكاتب أفتراضية لكل موظفيها فتتمكن الجهة من نقل العمل
							المكتبي الى بيئة الكترونية منظمة وفق احدث المتطلبات ومعايير الحماية</p>
						<a href="https://gtm.easygo.systems" class="pix-btn color-two wow pixFadeUp" data-wow-delay="0.9s" style="font-family: cairo">سجل الأن</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="genera-informes-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 pix-order-two">
				<div class="genera-informes-content">
					<div class="section-title style-two">
						<h2 class="title wow pixFadeUp" style="font-family: cairo; ">منصة المستفيد</h2>
						<p class="auto-style4" data-wow-delay="0.3s" style="font-family: cairo">كل شخص
							يستطيع بهويته الشخصية ان يفتح له مكتب أفتراضي ويتواصل من مكتبه مع أي جهة موجوده
							داخل المنصة
							بسهولة ويسر والتمتع بكافة المزايا التقنية من ترتيب وتنظيم المعاملات والاجتماعات
							والمواعيد فلا حاجه للذهاب الى مقر الجهة ولا تقلق من نسيان موعد تابع جميع
							معاملاتك لحظه بلحظه كل هذا واكثر سارع بالتسجيل الان</p>
					</div>
					<a href="https://gtm.easygo.systems/Client_Login.aspx" class="pix-btn btn-outline-two wow pixFadeUp" data-wow-delay="0.5s" style="font-family: cairo">سجل الأن</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="animaated-elements-two">
					<img src="{{ asset('public\portal-assets\media\animated\1.png')}}" class="elm-one wow pixFade" alt="informes" style="position: absolute; left: 6px; top: 5px;">
					<img src="{{ asset('public\portal-assets\media\animated\2.png')}}" class="elm-two wow pixFadeDown" alt="informes">
					<img src="{{ asset('public\portal-assets\media\animated\3.png')}}" class="elm-three wow pixFadeDown" alt="informes">
					<img src="{{ asset('public\portal-assets\media\animated\4.png')}}" class="elm-four wow pixFadeRight" alt="informes">
				</div>
			</div>
		</div>
	</div>
	<div class="scroll-circle wow pixFadeRight"><img src="{{ asset('public\portal-assets\media\background\circle2.png')}}" data-parallax='{"y" : 180}' alt="circle"></div>
</section>
<section class="testimonials-two">
	<div class="animate-shape wow pixFadeDown"><img src="{{ asset('public\portal-assets\media\background\ellipse2.png')}}" data-parallax='{"y" : 230}' alt="shape"></div>
	<div class="container">
		<div class="section-title color-two text-center">
			<h2 class="title wow pixFadeUp" data-wow-delay="0.3s" style="font-family: cairo">ماذا قال
				عملائنا عنا</h2>
		</div>
		<div id="testimonial-wrapper" class="wow pixFadeUp" data-wow-delay="0.4s">
			<div class="swiper-container" id="testimonial" data-speed="1200" data-autoplay="12000" style="height: 540px">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="testimonial">
							<div class="single-bio-thumb"><img src="{{ asset('public\portal-assets\media\testimonial\2.jpg')}}" alt="testimonial"></div>
							<div class="testimonial-content">

								<p style="font-family: cairo">نتقدم بالشكر الجزيل
									لمنصة جهات
									بقيادة رئيس مجلس الإدارة الأستاذ سعد المحّسن على جهود الاشراف على نقل
									العمل المكتبي الى بيئة الكترونية عبر منصة جهات
									ولقد أثمرت تلك الجهود بإجتمعنا معكم حول قناعتنا بمنصة جهات والتي تتبنوها
									وفقكم الله ودائما من نجاح الى نجاح</p>
							</div>
							<div class="bio-info">
								<h3 class="name">

									<span lang="ar-eg" style="font-family: cairo; color: #7052fb;">مجلس
										الجمعيات التعاونية</span>
								</h3><span class="job"></span>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial">
							<div class="single-bio-thumb"><img src="{{ asset('public\portal-assets\media\testimonial\3.png')}}" alt="testimonial"></div>
							<div class="testimonial-content">

								<p style="font-family: cairo">مع التحية والتقدير للزميل الاستاذ سعد المحّسن
									رئيس الجمعية
									أقدم لك ولبقية مجلس الأدارة أجزل الشكر وأوفاه في تبني المنصة اجتماع
									جمعية عسير
									والتي حققت رضى تام من الجمعية العمومية بعسير
									كما أهيب بكافة الجمعيات سواء منطقة الرياض او غيرها من المناطق بالتعاون
									معكم
								</p>
							</div>
							<div class="bio-info">
								<h3 class="name">

									<span lang="ar-eg" style="font-family: cairo; color: #7052fb;">الجمعية
										التعاونية لمنتجي الدواجن بعسير</span>
								</h3><span class="job"></span>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial">
							<div class="single-bio-thumb"><img src="{{ asset('public\portal-assets\media\testimonial\4.jpg')}}" alt="testimonial"></div>
							<div class="testimonial-content">

								<p style="font-family: cairo">ابارك لكم والأخوة الأفاضل أعضاء مجلس الإدارة
									والجمعية العموميه بهذا الإنجاز التنموي المميز وأنتخاب المجلس فى دورته
									الثانية عبر منصة جهات مؤملا التطور والتوسع فى خدماتها والتمكين لها
									نشكركم جزيل الشكر لما قدمتم من خدمات مميزة لتوفير بيئة عمل مميزه ونقل
									الإجتماعات عن بعد</p>
							</div>
							<div class="bio-info">
								<h3 class="name">

									<span lang="ar-eg" style="font-family: cairo; color: #7052fb;">فلاح
										المطيري</span>
								</h3><span class="job"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="shape-shadow"></div>
			<div class="slider-nav wow pixFadeUp" data-wow-delay="0.3s">
				<div id="slide-prev" class="swiper-button-prev"><i class="ei ei-arrow_left"></i></div>
				<div id="slide-next" class="swiper-button-next"><i class="ei ei-arrow_right"></i></div>
			</div>
		</div>
	</div>
</section>
<section class="auto-style3">
	<div class="bg-map" data-bg-image="{{ asset('public/portal-assets/media/background/map.png')}}"></div>
	<div class="container">
		<div class="section-title color-two text-center">
			<h2 class="title wow pixFadeUp" data-wow-delay="0.3s" style="font-family: cairo"><br>دائما أنتم
				مصدر فخر لنا</h2>
		</div>
		<div class="countup-wrapper">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="fun-fact wow pixFadeUp" data-wow-delay="0.3s">
						<div class="counter">
							<h4 class="count" data-counter="12000">12000</h4><span>+</span>
						</div>
						<p style="font-family: cairo">عدد المستفيدين</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="fun-fact color-two wow pixFadeUp" data-wow-delay="0.5s">
						<div class="counter">
							<h4 class="count" data-counter="380">380</h4><span>+</span>
						</div>
						<p style="font-family: cairo">الجهات الخاصه</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="fun-fact color-three wow pixFadeUp" data-wow-delay="0.7s">
						<div class="counter">
							<h4 class="count" data-counter="244">244</h4><span>+</span>
						</div>
						<p style="font-family: cairo">جهات غير ربحية</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="fun-fact color-four wow pixFadeUp" data-wow-delay="0.9s">
						<div class="counter">
							<h4 class="count" data-counter="8">8</h4><span>+</span>
						</div>
						<p style="font-family: cairo">جهات حكومية</p>
					</div>
				</div>
			</div>
		</div>
		<div class="button-container text-center wow pixFadeUp" data-wow-delay="1s"></div>
	</div>
</section>
<section id="blog-grid" style="background-position: center top; background-size: 100% 100%; background-color: #FFFFFF; background-image: url('portal-assets/media/background/down-bg.png'); background-repeat: no-repeat;">
	<div class="container">
		<div class="section-title color-two text-center">
			<h1 style="font-family: cairo;">كيف يمكنني تحميل التطبيق</h1>
			<p style="font-family: cairo;">تستطيع تحميل تطبيق جهات من متجر جوجل أو أبستور</p>
			<a class="wow fadeIn animated" data-wow-delay="0.25s" href="https://apps.apple.com/eg/app/jehat/id1600983802">
				<img class="app-store-btn" src="{{ asset('public\portal-assets\media/pngfind.com-store-png-1446326.png')}}" alt="App Store Icon" style="width: 150px; height: 50px"></a>
			<a class="wow fadeIn animated" data-wow-delay="0.67s" href="https://play.google.com/store/apps/">
				<img class="google-play-btn" src="{{ asset('public\portal-assets\media/pngfind.com-google-logo-white-png-982813.png')}}" alt="Google Play Icon" style="width: 150px; height: 50px"><br /></a><br />
			<h3 class=" wow pixFadeUp" style="font-family: cairo; font-size: 18px; color: #A252FB;">الاسئلة
				الشائعة

			</h3>
			<h2 class="title wow pixFadeUp" data-wow-delay="0.3s" style="font-family: cairo">تقديم المعلومة
				الدقيقة للجمهور وزيادة الوعي الإرشادي

			</h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<article class="blog-post color-two wow pixFadeLeft" data-wow-delay="0.4s">
					<div class="feature-image"><a href="https://jehat.sa/media/meeting.ppsx
"><img src="{{ asset('public\portal-assets\media\blog\1.jpg')}}" alt="blog-thumb"></a></div>
					<div class="blog-content">
						<h3 class="entry-title" style="text-align: right">
							<a href="https://jehat.sa/media/meeting.ppsx" style="font-family: cairo; text-align: center;">كيفية إنشاء وإدارة
								الإجتماعات ونظام التصويت عن بعد</a>
						</h3>
					</div>
				</article>
			</div>
			<div class="col-lg-4 col-md-6">
				<article class="blog-post color-two wow pixFadeLeft" data-wow-delay="0.6s">
					<div class="feature-image"><a href="https://gtm.sa/aamr/media/1.mp4">
						<img src="{{ asset('public\portal-assets\media\blog\2.jpg')}}" alt="blog-thumb"></a></div>
					<div class="blog-content">
						<h3 class="entry-title" style="text-align: right">
							<a href="https://gtm.sa/aamr/media/1.mp4" style="font-family: cairo">كيفية
								التسجل كمستفيد وطلب ومتابعة المعاملات</a>
						</h3>
					</div>
				</article>
			</div>
			<div class="col-lg-4 col-md-6">
				<article class="blog-post color-two wow pixFadeLeft" data-wow-delay="0.7s">
					<div class="feature-image"><a href="https://jehat.sa/media/jehat.ppsx">
						<img src="{{ asset('public\portal-assets\media\blog\3.jpg')}}" alt="blog-thumb"></a></div>
					<div class="blog-content">
						<h3 class="entry-title" style="text-align: right">
							<a href="https://jehat.sa/media/jehat.ppsx
" style="font-family: cairo"> خطوات البدء الفعلي لاستخدام المنصة كجهة
							</a>
						</h3>
					</div>
				</article>
			</div>
		</div>.<br />.
	</div><br />
	<a href="media.html" style="font-family: Cairo; color: #0000FF; font-size: mediumclass" blog-post color-two wow pixFadeLeft data-wow-delay="0.4s">للمزيد<br>
	</a><br>
	<div class="tabs-wrapper wow pixFadeUp" data-wow-delay="0.5s">
		<ul class="nav faq-tabs" role="tablist" style="width: 100%">
			<li class="nav-item">
				<a class="nav-link active" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="true" style="font-family: cairo; width: 130px; text-align: center;">الجهات</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="service-tab" data-toggle="tab" href="#service" role="tab" aria-controls="service" aria-selected="false" style="font-family: cairo; width: 130px; text-align: center;">المستفيد</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="design" role="tabpanel" aria-labelledby="design-tab">
				<div id="accordion" class="faq faq-two pixFade">
					<div class="card active">
						<div class="card-header" id="heading100">
							<h5>
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse001" aria-expanded="false" aria-controls="collapse001" style="font-family: cairo; text-align: right; vertical-align: middle; white-space: normal;"><span></span>
									كيف أضيف انواع معاملات جديدة ؟ </button>
							</h5>
						</div>
						<div id="collapse001" class="collapse show" aria-labelledby="heading100" data-parent="#accordion">
							<div class="card-body">
								<p class="text-right" style="font-family: cairo">تستطيع إضافة وتعديل انواع
									المعاملات التابعة للجهه عن طريق الدخول الى قائمه اعدادات ومن ثم اختيار
									انواع المعاملات ثم عبر كتابه نوع المعامله المراد اضافته او تعديله مرة
									باللغة العربيه واخري بالانجليزيه والضغط حفظ</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading200">
							<h5 class="text-right">
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse100" aria-expanded="true" aria-controls="collapse100" style="font-family: cairo; text-align: right;">لدى موظف الان اجازة لمده
									شهر كيف اوقف توزيع المعاملات لديه ؟</button>
							</h5>
						</div>
						<div id="collapse100" class="collapse" aria-labelledby="heading200" data-parent="#accordion">
							<div class="card-body">
								<p class="text-right" style="font-family: cairo">بكل سهولة الدخول الى قائمه
									الموظفين لديك واختيار الموظف ثم الضغط على ايقونه التعديل والتي علي شكل
									قلم ثم من تابه جهات العمل تاكد ان التوزيع التلقائى للمعاملات غير مفعل ثم
									اضغط حفظ</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading300">
							<h5>
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse200" aria-expanded="false" aria-controls="collapse200" style="font-family: cairo; text-align: right;">تم إنشاء اجتماع عام ولكن
									لم اتمكن من بدأ الاجتماع الايقونه لا تظهر </button>
							</h5>
						</div>
						<div id="collapse200" class="collapse" aria-labelledby="heading300" data-parent="#accordion">
							<div class="card-body">
								<p class="text-right" style="font-family: cairo">تاكد ان تاريخ الاجتماع تم
									إدخاله بصورة صحيحه حيث لا تظهر ايقونات التحكم فى الاجتماع الا فى التاريخ
									المحدد لعقد الاجتماع</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading400">
							<h5>
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse300" aria-expanded="false" aria-controls="collapse300" style="font-family: cairo; text-align: right;">كيف أحصل على تقرير عدد
									المعاملات القائمه عند كل موظف ومدى الانجاز المطلوب؟</button>
							</h5>
						</div>
						<div id="collapse300" class="collapse" aria-labelledby="heading400" data-parent="#accordion">
							<div class="card-body">
								<p class="text-right" style="font-family: cairo">من قائمه معاملات أختار
									مراجعة معاملات موظف ثم اختار النطاق الزمنى للتقرير تستطيع عرض وطباعة
									تقرير مفصل يبين عدد المعاملات القائمه عند كل موظف ومدي الانجاز</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">
				<div id="accordion-2" class="faq faq-two pixFade">
					<div class="card active">
						<div class="card-header" id="heading101">
							<h5>
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse01" aria-expanded="false" aria-controls="collapse01" style="font-family: cairo; text-align: right; vertical-align: middle; white-space: normal;">كيف
									اتمكن من مخاطبة جهة ؟</button>
							</h5>
						</div>
						<div id="collapse01" class="collapse show" aria-labelledby="heading101" data-parent="#accordion-2">
							<div class="card-body">
								<p style="font-family: cairo; text-align: right;"> تستطيع مخاطبه جميع الجهات
									المسجلة فى المنصة بإختيار إضافة طلب وتحديد الجهه المراد التواصل معها
									وكتابه عنوان الموضوع والتفاصل وتحديد أولويه المعاملة وارفاق المستندات
									ايضا ان وجدت ثم الضغط على حفظ </p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading201">
							<h5>
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse101" aria-expanded="true" aria-controls="collapse101" style="font-family: cairo; text-align: right; vertical-align: middle; white-space: normal;">لم
									اتمكن من التصويت على بنود الإجتماع لعدم ظهور ايقونه التصويت</button>
							</h5>
						</div>
						<div id="collapse101" class="collapse" aria-labelledby="heading201" data-parent="#accordion-2">
							<div class="card-body">
								<p style="font-family: cairo; text-align: right;">فى حال دعوتك الى اجتماع ما
									لابد ان يتوفر شرطين حتى تتمكن من التصويت اولا أن يكون حالة الإجتماع
									منعقد ثانيا لابد أن تسجل حضور أولا وذلك بالضغط على أيقونة حضور ومن ثم
									تستطيع التصويت على البنود واختيار المرشحين</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading301">
							<h5>
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse201" aria-expanded="false" aria-controls="collapse201" style="font-family: cairo; text-align: right; vertical-align: middle; white-space: normal;">عند
									تسجيل الدخول تظهر رسالة ان اسم المستخدم أو الباسورد المدخل خطأ </button>
							</h5>
						</div>
						<div id="collapse201" class="collapse" aria-labelledby="heading301" data-parent="#accordion-2">
							<div class="card-body">
								<p style="font-family: cairo; text-align: right;">فى حال نسيان اسم المستخدم
									أو الباسورد يمكنك الضغط على نسيت كلمة المرور وإدخال الميل الذى تم
									التسجيل بة فى المنصة وسوف يرسل لك النظام بيانات الدخول على الميل</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading401">
							<h5>
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse301" aria-expanded="false" aria-controls="collapse301" style="font-family: cairo; text-align: right; vertical-align: middle; white-space: normal;">تم
									التسجيل فى المنصة ولم يصلنى كود التفعيل على الميل</button>
							</h5>
						</div>
						<div id="collapse301" class="collapse" aria-labelledby="heading401" data-parent="#accordion-2">
							<div class="card-body">
								<p style="font-family: cairo; text-align: right;">كود التفعيل يتم إرسالة على
									الميل فى وقت لا يتعدى 3 دقائق كحد أقصي ويمكنك تفقد حافظه الميل البريد
									الوارد أو بريد الكتروني غير هام وسوف تجد رسالة مرسلة من النظام تحتوى على
									كود التفعيل ورابط صفحة التفعيل</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
				<div id="accordion-3" class="faq faq-two pixFade">
					<div class="card active">
						<div class="card-header" id="heading102">
							<h5><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse002" aria-expanded="false" aria-controls="collapse002">How to contact with Customer
									Service?</button></h5>
						</div>
						<div id="collapse002" class="collapse show" aria-labelledby="heading102" data-parent="#accordion-3">
							<div class="card-body">
								<p>Easy peasy owt to do with me cras I don't want no agro what a load of
									rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
									said the full monty.</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading202">
							<h5><button class="btn btn-link" data-toggle="collapse" data-target="#collapse102" aria-expanded="true" aria-controls="collapse102">How delete my account?</button></h5>
						</div>
						<div id="collapse102" class="collapse" aria-labelledby="heading202" data-parent="#accordion-3">
							<div class="card-body">
								<p>Easy peasy owt to do with me cras I don't want no agro what a load of
									rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
									said the full monty.</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading303">
							<h5><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse203" aria-expanded="false" aria-controls="collapse203">Where is the edit optioon on
									dashboard?</button></h5>
						</div>
						<div id="collapse203" class="collapse" aria-labelledby="heading303" data-parent="#accordion-3">
							<div class="card-body">
								<p>Easy peasy owt to do with me cras I don't want no agro what a load of
									rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
									said the full monty.</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading403">
							<h5><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse303" aria-expanded="false" aria-controls="collapse303">Is there any custome pricing
									system?</button></h5>
						</div>
						<div id="collapse303" class="collapse" aria-labelledby="heading403" data-parent="#accordion-3">
							<div class="card-body">
								<p>Easy peasy owt to do with me cras I don't want no agro what a load of
									rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
									said the full monty.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="branding" role="tabpanel" aria-labelledby="branding-tab">
				<div id="accordion-4" class="faq faq-two pixFade">
					<div class="card active">
						<div class="card-header" id="heading10">
							<h5><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse00" aria-expanded="false" aria-controls="collapse00">How to contact with Customer
									Service?</button></h5>
						</div>
						<div id="collapse00" class="collapse show" aria-labelledby="heading10" data-parent="#accordion-4">
							<div class="card-body">
								<p>Easy peasy owt to do with me cras I don't want no agro what a load of
									rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
									said the full monty.</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading20">
							<h5><button class="btn btn-link" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">How delete my account?</button></h5>
						</div>
						<div id="collapse10" class="collapse" aria-labelledby="heading20" data-parent="#accordion-4">
							<div class="card-body">
								<p>Easy peasy owt to do with me cras I don't want no agro what a load of
									rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
									said the full monty.</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading30">
							<h5><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">Where is the edit optioon on
									dashboard?</button></h5>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading40">
							<h5><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse30" aria-expanded="false" aria-controls="collapse30">Is there any custome pricing system?</button>
							</h5>
						</div>
						<div id="collapse30" class="collapse" aria-labelledby="heading40" data-parent="#accordion-4">
							<div class="card-body">
								<p>Easy peasy owt to do with me cras I don't want no agro what a load of
									rubbish starkers absolutely bladdered, old tinkety tonk old fruit so I
									said the full monty.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection