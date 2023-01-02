@extends('layouts.appPortal')

@section('content')



<style> .slider-area.slider-area2,
.slider-area2.slider-area2 {
    background-image: url('public/web-assets/img/hero/jehatp90.png')
}
.panel .panel-heading{
    padding: 0;
    border-radius:10px;
    border: none;
}
.panel-heading a{
    display: block;
    border:none;
    padding:20px 35px 20px;
    font-size: 20px;
    background-color:#fff;
    font-weight:600;
    position: relative;
    color:#fff;
    box-shadow:none;
    transition:all 0.1s ease 0;
}

.panel-heading:hover a:after,
.panel-heading:hover a.collapsed:after{
    transform:rotate(360deg);
}
.panel-heading a.collapsed:after{
    content: "\f067";}


.container4 {
    max-width: 1500px;
    margin-top: -300px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
    padding-top: 0px;
    padding-right: 30px;
    padding-bottom: 0px;
    padding-left: 30px;
}
.card{
border-radius:4rem
}

.card {
    text-align: center;
    box-shadow: rgb(0 0 0 / 5%) 0px 4px 20px 7px;
    display: flex;
    padding-top: 0px; 
     padding-right: 400px; 
     padding-bottom: 0px; 
    padding-left: 400px;

    }

.slider-area .hero__caption h1, .slider-area2 .hero__caption h1 {
  font-family: 'Cairo';
    font-size: 54px;
    font-weight: 600;
    color: #fff;
    line-height: 1.3;
    margin-bottom: 22px;

}

</style>
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
                <h1 data-animation="bounceIn" data-delay="0.2s"> الاسئلة الشائعة</h1>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--? Our Services Start -->
  
  
  <div class=" ">
 
          <div class="inner-page pb-5 ">
	<div class="inner-page-container">
        <div class="container4">
        <div class="row justify-content-center">
            <div class="card col-9 col-md-10 col-lg-15">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                      <br>
                      <div class="section-tittle">
<h2> الاسئلة الشائعة </h2>
          </div>
      <div class="row justify-content-center">

        <div class="col-md-offset-1 col-md-10 ">
      
          <div class="collapse-wrapper">
          @foreach($allData as $data)
            <div class="accordion" id="accordionExample_{{ $data->id}}">
              <div class="card ">
                <div class="card-header panel-heading" id="heading_{{ $data->id}}">
                  <h2 class="mb-0">
                    <a href="#" class="btn-link collapsed" data-toggle="collapse"
                     data-target="#collapse_{{ $data->id}}" aria-expanded="false" 
                     aria-controls="collapse_{{ $data->id}}"> {{$data->category_id}} </a>
                  </h2>
                </div>
                <div id="collapse_{{ $data->id}}" class="collapse" aria-labelledby="heading_{{ $data->id}}" 
                data-parent="#accordionExample_{{ $data->id}}">
                  <div class="card-body  "  >
                    <h3>
                    {{$data->question_ar}}
                      <br>
                      {{ $data->answer_ar}}
                    </h3>  
                  </div>
                </div>
              </div>
            </div>
            <br>
            @endforeach
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
  
  
</main>





@endsection