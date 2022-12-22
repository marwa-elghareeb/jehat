@extends('layouts.appPortal')

@section('content')

<section class="page-banner"
				style="background-size: 100% 100%; background-image: url('public/portal-assets/media/banner/top shape.png'); background-repeat: no-repeat; background-color: #7052fb;">
				<div class="container">
					<div class="page-title-wrapper">
						<h1 class="page-title" style="font-family: cairo">المركز الإعلامي</h1>
						<ul class="bradcurmed">
							<li>
								<a rel="noopener noreferrer" style="font-family: cairo">دليل الاستخدام</a>
							</li>
							<li style="font-family: cairo">المركز الأعلامي</li>
						</ul>
					</div>
				</div><svg class="circle" data-parallax='{"x" : -200}' xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
					<path fill-rule="evenodd" stroke="rgb(146, 112, 250)" stroke-width="100px" stroke-linecap="butt"
						stroke-linejoin="miter" opacity="0.051" fill="none"
						d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z">
					</path>
				</svg>
				<ul class="animate-ball">
					<li class="ball"></li>
					<li class="ball"></li>
					<li class="ball"></li>
					<li class="ball"></li>
				</ul>
			</section>
			<div class="prs_ms_scene_main_wrapper pixFadeRight" style="background-color: #FFFFFF">
				<div class="container pixFadeRight">
					<div class="row pixFadeRight">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pixFadeRight">
							<div class="prs_heading_section_wrapper pixFadeRight">
								<h2 style="color: #000000; font-family: Cairo;">شرح منصة المستفيد</h2>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pixFadeRight">
							<div class="prs_ms_scene_slider_wrapper pixFadeRight">
								<div class="owl-carousel owl-theme pixFadeRight">
									<div class="item">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc1.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp">
														<a rel='external' href='media/mp4/client_register.mp4'
															target="_blank" title='الية التسجيل كمستفيد'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">الية التسجيل
													كمستفيد</a><br />
											</div>
											<br />
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc2.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp"> <a rel='external'
															href='media/mp4/Client_Forget_Password.mp4' target="_blank"
															title='استرجاع كلمه المرور'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">استرجاع كلمه المرور</a><br />
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/17.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp"> <a rel='external'
															href='media/mp4/lang.mp4' target="_blank"
															title='تغيير لغة العرض'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">تغيير لغة العرض</a><br />
											</div>
											<br />
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc4.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp"> <a rel='external'
															href='media/mp4/
Edit_Client.mp4' target="_blank" title='تعديل البيانات الشخصيه'><i class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">تعديل البيانات
													الشخصيه</a><br />
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/21.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp"> <a rel='external'
															href='media/mp4/add_m
.mp4' target="_blank" title='اضافه المفوضين واداره المستندات'><i class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">اضافه المفوضين واداره
													المستندات</a><br />
											</div>
											<br />
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc3.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp"> <a rel='external'
															href='media/mp4/add_t.mp4' target="_blank"
															title='اضافه واداره المواعيد'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">اضافه واداره
													المواعيد</a><br />
											</div>
										</div>
									</div>

									<div class="item">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/19.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp"> <a rel='external'
															href='media/mp4/Add_Transaction.mp4' target="_blank"
															title='اضافه ومتابعه طلب'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">اضافه ومتابعه طلب</a><br />
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/8.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp"> <a rel='external'
															href='media/mp4/convert.mp4' target="_blank"
															title='الانتقال الى مكتبي'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">الانتقال الى مكتبي</a><br />
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc5.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp"> <a rel='external'
															href='media/mp4/Add_dep.mp4' target="_blank"
															title='انشاء جهه جديده'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">انشاء جهه جديده</a><br />
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc6.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp"> <a rel='external'
															href='media/mp4/View_Meeting.mp4' target="_blank"
															title='حضور الاجتماعات والتصويت'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">حضور الاجتماعات
													والتصويت</a><br />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="prs_ms_scene_main_wrapper pixFadeRight" style="background-color: #FFFFFF">
				<div class="container pixFadeRight">
					<div class="row pixFadeRight">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pixFadeRight">
							<div class="prs_heading_section_wrapper pixFadeRight">
								<h2 style="color: #000000; font-family: Cairo;">شرح منصة الموظف</h2>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pixFadeRight">
							<div class="prs_ms_scene_slider_wrapper pixFadeRight">
								<div class="owl-carousel owl-theme pixFadeRight">
									<div class="item">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc15.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp">
														<a rel='external' href='media/mp4/m/View_Transaction.mp4'
															target="_blank" title='التعليقات وانواع الاسناد'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">التعليقات وانواع
													الاسناد</a><br />
											</div>
											<br />
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc19.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp">
														<a rel='external' href='media/mp4/m/search_transaction.mp4'
															target="_blank" title='استخدام فلتر بحث المعاملات'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">استخدام فلتر بحث
													المعاملات</a><br />
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc16.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp">
														<a rel='external' href='media/mp4/m/All_MODClients.mp4'
															target="_blank" title='اداره العملاء والاقسام'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">ادارة العملاء
													والاقسام</a><br />
											</div>
											<br />
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc4.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp">
														<a rel='external' href='media/mp4/m/employee_management.mp4'
															target="_blank" title='ادارة الموظفين'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">ادارة الموظفين </a><br />
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc13.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp">
														<a rel='external' href='media/mp4/m/create_bills.mp4'
															target="_blank" title='اضافه وادارة الفواتير الالكترونية'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">اضافه وادارة الفواتير
													الالكترونية</a><br />
											</div>
											<br />
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc14.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp">
														<a rel='external' href='media/mp4/m/date_management%20.mp4'
															target="_blank" title='اضافه واداره المواعيد'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">اضافه واداره
													المواعيد</a><br />
											</div>
										</div>
									</div>

									<div class="item">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc12.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp">
														<a rel='external' href='media/mp4/m/Add_Transaction.mp4'
															target="_blank" title='اضافه ومتابعه الطلبات'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">اضافه ومتابعه
													الطلبات</a><br />
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc17.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp">
														<a rel='external' href='media/mp4/m/session.mp4' target="_blank"
															title='ادارة غرف الفيديو كونفرس'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">ادارة غرف الفيديو
													كونفرس</a><br />
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc11.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp">
														<a rel='external' href='media/mp4/m/manage_meeting.mp4'
															target="_blank" title='ادارة الاجتماع اثناء الانعقاد'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">ادارة الاجتماع اثناء
													الانعقاد</a><br />
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="prs_ms_scene_slider_img pixFadeRight">

													<img src="{{ asset('public/portal-assets/images/content/movie_single/sc18.jpg')}}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay pixFadeUp">
														<a rel='external' href='media/mp4/m/create_meeting.mp4'
															target="_blank" title='اليه انشاء الاجتماعات'><i
																class="flaticon-play-button pixFadeRight"></i></a>
													</div>
												</div>
												<a class="name" style="font-family: cairo">الية انشاء
													الاجتماعات</a><br />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<h1 style="font-family: cairo;">كيف يمكنني تحميل التطبيق</h1>
			<p style="font-family: cairo;">تستطيع تحميل تطبيق جهات من متجر جوجل أو أبستور</p>
			<a class="wow fadeIn animated" data-wow-delay="0.25s"
				href="https://apps.apple.com/eg/app/jehat/id1600983802">
				<img class="app-store-btn" src="{{ asset('portal-assets/media/pngfind.com-store-png-1446326.png')}}" alt="App Store Icon"
					style="width: 170px; height: 70px"></a>
			<a class="wow fadeIn animated" data-wow-delay="0.67s" href="https://play.google.com/store/apps/">
				<img class="google-play-btn" src="{{ asset('portal-assets/media/pngfind.com-google-logo-white-png-982813.png')}}"
					alt="Google Play Icon" style="width: 170px; height: 70px"><br />
			</a>
			<section class="brand-logo-ab"
				style="background-position: right top; background-size: 100% 100%; background-color: #FFFFFF; background-image: url('portal-assets/media/background/down-bg.png'); background-repeat: no-repeat;">
				<div class="section-small text-center">
					<h2 class="title wow pixFadeUp" style="font-family: cairo">
					</h2>
				</div>
				<div class="container">
					<div class="swiper-container logo-carousel wow pixFadeUp" id="logo-carousel" data-perpage="6"
						data-breakpoints='{"1024": {"slidesPerView": 4}, "768": {"slidesPerView": 4}, "620": {"slidesPerView": 3}}'>
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

@endsection
