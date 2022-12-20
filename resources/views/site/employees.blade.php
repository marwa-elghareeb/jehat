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
                  <h1 data-animation="bounceIn" data-delay="0.2s">الموظفين</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--? Blog Area Start -->
    <section class="blog_area single-post-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 posts-list">
            <div class="single-post">






            </div>

            <div class="blog-author">
              <div class="media align-items-center">
                <img src=" {{ asset('public/web-assets/img/blog/author.png' ) }}" alt="">
                <div class="media-body">
                  <a href="#">
                    <h4>Saad Al Mohsen</h4>
                  </a>
                  <p>Chairman of Board of Directors</p>
                </div>
              </div>
            </div>
            <div class="blog-author">
              <div class="media align-items-center">
                <img src=" {{ asset('public/web-assets/img/blog/3.jpg' ) }}" alt="">
                <div class="media-body">
                  <a href="#">
                    <h4>Ahmed Basuony</h4>
                  </a>
                  <p>IT Manager</p>
                </div>
              </div>
            </div>
            <div class="blog-author">
              <div class="media align-items-center">
                <img src="{{ asset('public/web-assets/img/blog/rr.png' ) }}" alt="">
                <div class="media-body">
                  <a href="#">
                    <h4>Marwa Elghareeb</h4>
                  </a>
                  <p>Information technology trainer</p>
                </div>
              </div>
            </div>


          </div>
          <div class="col-lg-4">
            <div class="blog_right_sidebar">
              <aside class="single_sidebar_widget search_widget">
                <form action="#">
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder='البحث عن موظف'
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                      <div class="input-group-append">
                        <button class="btns" type="button"><i class="ti-search"></i></button>
                      </div>
                    </div>
                  </div>
                  <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                    type="submit">بحث</button>
                </form>
              </aside>
              <aside class="single_sidebar_widget post_category_widget">
                <h4 class="widget_title" style="color: #2d2d2d;">الاقسام</h4>
                <ul class="list cat-list">
                  <li>
                    <a href="#" class="d-flex">
                      <p>تقنية المعلومات</p>
                      <p>(02)</p>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="d-flex">
                      <p>ادارة الاعمال</p>
                      <p>(05)</p>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="d-flex">
                      <p>الجمعيات</p>
                      <p>(03)</p>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="d-flex">
                      <p>التسويق</p>
                      <p>(04)</p>
                    </a>
                  </li>
                  <!--<li>
  <a href="#" class="d-flex">
   <p>Inspiration</p>
   <p>(21)</p>
 </a>
</li>
<li>
  <a href="#" class="d-flex">
   <p>Health Care</p>
   <p>(21)</p>
 </a>
</li>-->
                </ul>
              </aside>
              <!--<aside class="single_sidebar_widget popular_post_widget">
  <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
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
</aside>-->
              <!--<aside class="single_sidebar_widget tag_cloud_widget">
  <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
  <ul class="list">
   <li>
    <a href="#">project</a>
  </li>
  <li>
    <a href="#">love</a>
  </li>
  <li>
    <a href="#">technology</a>
  </li>
  <li>
    <a href="#">travel</a>
  </li>
  <li>
    <a href="#">restaurant</a>
  </li>
  <li>
    <a href="#">life style</a>
  </li>
  <li>
    <a href="#">design</a>
  </li>
  <li>
    <a href="#">illustration</a>
  </li>
</ul>
</aside>-->
              <!--<aside class="single_sidebar_widget instagram_feeds">
  <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
  <ul class="instagram_row flex-wrap">
   <li>
    <a href="#">
     <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
   </a>
 </li>
 <li>
  <a href="#">
   <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
 </a>
</li>
<li>
  <a href="#">
   <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
 </a>
</li>
<li>
  <a href="#">
   <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
 </a>
</li>
<li>
  <a href="#">
   <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
 </a>
</li>
<li>
  <a href="#">
   <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
 </a>
</li>
</ul>
</aside>-->
              <!--<aside class="single_sidebar_widget newsletter_widget">
  <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
  <form action="#">
   <div class="form-group">
    <input type="email" class="form-control" onfocus="this.placeholder = ''"
    onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
  </div>
  <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
</form>
</aside>-->
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