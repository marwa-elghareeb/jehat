<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> منصة جهات</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="manifest" href="site.webmanifest">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/web-assets/img/favicon.png')}}">

	<!-- CSS here -->
    <link rel="preconnect" href="https://fonts.gstatic.com ">
	<link rel="stylesheet" href=" {{ asset('public/web-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web-assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('public/web-assets/css/slicknav.css') }}">
    <link rel="stylesheet" href=" {{ asset('public/web-assets/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href=" {{ asset('public/web-assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="  {{ asset('public/web-assets/css/gijgo.css') }}">
    <link rel="stylesheet" href=" {{ asset('public/web-assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web-assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web-assets/css/magnific-popup.css ') }}">
    <link rel="stylesheet" href=" {{ asset('public/web-assets/css/fontawesome-all.min.css ') }}">
    <link rel="stylesheet" href=" {{ asset('public/web-assets/css/themify-icons.css ') }}">
    <link rel="stylesheet" href=" {{ asset('public/web-assets/css/slick.css ') }}">
    <link rel="stylesheet" href="{{ asset('public/web-assets/css/nice-select.css ') }}">
	<link rel="stylesheet" href="{{ asset('public/web-assets/css/style.css ') }}">
</head>

<body>
	<!-- ? Preloader Start -->
	<div id="preloader-active">
		<div class="preloader d-flex align-items-center justify-content-center">
			<div class="preloader-inner position-relative">
				<div class="preloader-circle"></div>
				<div class="preloader-img pere-text">
					<img src="assets/img/logo/loder.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<!-- Preloader Start -->
	<header dir="rtl">
		<!-- Header Start -->
		<div class="header-area header-transparent">
			<div class="main-header ">
				<div class="header-bottom  header-sticky">
					<div class="container-fluid">
						<div class="row align-items-center">
							<!-- Logo -->
							<div class="col-xl-2 col-lg-2">
								<div class="logo">
									<a href="index.html"><img src=" {{ asset('public/web-assets/img/logo/logo.png') }}" alt=""></a>
								</div>
							</div>
							<div class="col-xl-10 col-lg-10">
								<div class="menu-wrapper  d-flex align-items-center justify-content-end">
									<!-- Main-menu -->
									<div class="main-menu d-none d-lg-block">
										<nav>
											<ul id="navigation">
												<li class="active"><a href="index.html">الرئيسية</a></li>
												<li><a href="features.html">من نحن</a></li>
												<li><a href="about.html">دليل المستخدم</a></li>
												<li><a href="contact.html">تواصل معنا</a></li>

												<li><a href="faq.html">مركز المساعدة </a></li>
												<li><a href="blog.html">برج جهات الافتراضي</a>
													<!--ul class="submenu">
                                                            <li><a href="blog.html">الشركات</a></li>
                                                            <li><a href="blog_details.html">الموظفين</a></li>
                                                           <<li><a href="elements.html">Element</a></li>
</ul-->

												</li>
											</ul>
										</nav>
									</div>
									<!-- Header-btn -->
									<div class="header-right-btn d-none d-lg-block ml-65">
										<a href="https://app.jehat.sa/client_login.aspx" class="border-btn">تسجل دخول</a>
									</div>
								</div>
							</div>
							<!-- Mobile Menu -->
							<div class="col-12">
								<div class="mobile_menu d-block d-lg-none"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header End -->
	</header>
	<!-- header end -->


	@yield('content')


	
    <footer dir="rtl">
     <div class="footer-wrappper section-bg" data-background=" {{ asset('public/web-assets/img/gallery/footer-bg.png') }}">
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-25">
                                    <a href="index.html"><img src="s {{ asset('public/web-assets/img/logo/logo2_footer.png') }}" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>يمكنك متابعتنا على قنوات التواصل الأجتماعي </p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>عن منصة جهات</h4>
                                <ul>
                                    <li><a href="#"> من نحن </a></li>
                                    <li><a href="#">الشهادات</a></li>
                                    <li><a href="#">اعضاء الادارة</a></li>
                                    <li><a href="#">شركائنا</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>المسؤولية القانونية</h4>
                                <ul>
                                    <li><a href="#">شروط استخدام المنصة</a></li>
                                    <li><a href="#">حماية العملاء</a></li>
                                    <li><a href="#">سياسة الخصوصية</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>تواصل معنا</h4>
                                <ul>
                                    <li><a href="#">الدعم الفني</a></li>
                                    <li><a href="#">info@jehat.sa</a></li>
                                    <li><a href="#">+966553777769</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    جميع الحقوق محفوظة منصة جهات &copy; 2022
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Footer End-->
      </div>
  </footer>

  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src=" {{ asset('public/web-assets/js/vendor/modernizr-3.5.0.min.js  ') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src=" {{ asset('public/web-assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src=" {{ asset('public/web-assets/js/popper.min.js') }}"></script>
<script src=" {{ asset('public/web-assets/js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src=" {{ asset('public/web-assets/js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="  {{ asset('public/web-assets/js/owl.carousel.min.js') }}"></script>
<script src=" {{ asset('public/web-assets/js/slick.min.js ') }}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('public/web-assets/js/wow.min.js') }}"></script>
<script src=" {{ asset('public/web-assets/js/animated.headline.js') }}"></script>
<script src=" {{ asset('public/web-assets/js/jquery.magnific-popup.js ') }}"></script>

<!-- Date Picker -->
<script src="{{ asset('public/web-assets/js/gijgo.min.js ') }}"></script>
<!-- Nice-select, sticky -->
<script src="{{ asset('public/web-assets/js/jquery.nice-select.min.js') }}"></script>
<script src=" {{ asset('public/web-assets/js/jquery.sticky.js') }}"></script>
<!-- Progress -->
<script src=" {{ asset('public/web-assets/js/jquery.barfiller.js') }}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src=" {{ asset('public/web-assets/js/jquery.counterup.min.js') }}"></script>
<script src=" {{ asset('public/web-assets/js/waypoints.min.js') }}"></script>
<script src=" {{ asset('public/web-assets/js/jquery.countdown.min.js') }}"></script>
<script src=" {{ asset('public/web-assets/js/hover-direction-snake.min.js') }}"></script>

<!-- contact js -->
<script src=" {{ asset('public/web-assets/js/contact.js') }}"></script>
<script src=" {{ asset('public/web-assets/js/jquery.form.js  ') }}"></script>
<script src=" {{ asset('public/web-assets/js/jquery.validate.min.js') }}"></script>
<script src="  {{ asset('public/web-assets/js/mail-script.js ') }}"></script>
<script src=" {{ asset('public/web-assets/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src=" {{ asset('public/web-assets/js/plugins.js ') }}"></script>
<script src="{{ asset('public/web-assets/js/main.js ') }}"></script>

</body>
</html>