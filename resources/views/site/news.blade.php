@extends('layouts.appPortal')

@section('content')


<style> .slider-area.slider-area2,
.slider-area2.slider-area2 {
    background-image: url('public/web-assets/img/hero/jehatp90.png')
}

</style>


<main dir="rtl">
        <!--? slider Area Start-->
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2 text-center">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">الاخبار</h1>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!--? Blog Area Start-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src=" {{ asset('public/web-assets/img/ng.jpeg' ) }} "alt="" style="height: 550px; width: 700px;">
                                    <a href="#" class="blog_item_date">
                                        <h3>يناير</h3>
                                        <p>2023</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="blog_details.html">
                                        <h2 class="blog-head" style="color: #2d2d2d;">حضور صاحب السمو الملكي الأمير/ فيصل بن بندر بن عبدالعزيز آل سعود، أمير منطقة الرياض، انتخابات مجلس إدارة جمعية بن باز الخيرية وذلك عبر #منصة_جهات</h2>
                                    </a>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-comments"></i> المزيد من الأخبار</a></li>
                                    </ul>
                                </div>
                            </article>
                            
                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            
                          
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">اخر الأخبار</h3>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_1.png" alt="post">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3 style="color: #2d2d2d;">From life was you fish...</h3>
                                        </a>
                                        <p>January 12, 2019</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_2.png" alt="post">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3 style="color: #2d2d2d;">The Amazing Hubble</h3>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_3.png" alt="post">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3 style="color: #2d2d2d;">Astronomy Or Astrology</h3>
                                        </a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="assets/img/post/post_4.png" alt="post">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3 style="color: #2d2d2d;">Asteroids telescope</h3>
                                        </a>
                                        <p>01 Hours ago</p>
                                    </div>
                                </div>
                            </aside>
                            

                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
        <!--? Want To work 01-->
       
        <!-- Want To work End -->
    </main>




@endsection