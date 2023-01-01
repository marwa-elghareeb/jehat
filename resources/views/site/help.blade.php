@extends('layouts.appPortal')

@section('content')
<style>
    .screen-img {
        display: flex !important;
        justify-content: flex-end !important;
        margin-left: auto !important;
        margin-right: 0 !important;
    }
    .slider-area.slider-area2,
.slider-area2.slider-area2 {
    background-image: url('public/web-assets/img/hero/jehatp90.png')
}


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
     padding-right: 100px; 
     padding-bottom: 0px; 
    padding-left: 100px;

    }

  
    h7{
    font-family: 'Cairo';
    color: #1D2547;
	font-size: 30px;
    margin-top: 0px;
    font-style: normal;
    font-weight: 400;}

.section-tittle h2 {
     font-family: 'Cairo';
    font-size: 30px;
    display: block;
    font-weight: 600;
    line-height: 1.3;
    margin-bottom: 21px}


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
                                <h7 data-animation="bounceIn" data-delay="0.2s">مركز المساعدة</h7>
                                <!--div class="screen-img ">
                                    <img src="{{ asset('public/web-assets/img/gallery/screen.png' ) }}" alt="" class=" w-50">
                                </div-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <div class="inner-page pb-5 ">
	<div class="inner-page-container">
        <div class="container4">
        <div class="row justify-content-center">
            <div class="card col-9 col-md-10 col-lg-15">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                      <br>
                      <div class="hero__caption hero__caption2 text-center">
                                <h7 data-animation="bounceIn" data-delay="0.2s">مركز المساعدة</h7>
                                <!--div class="screen-img ">
                                    <img src="{{ asset('public/web-assets/img/gallery/screen.png' ) }}" alt="" class=" w-50">
                                </div-->
                            </div>
                            <br>
    <div class="faq-section section-padding40">
            <div class="row justify-content-center">
                @foreach($allCat as $data)
                <div class="col-lg-10">
                    <div class="section-tittle">
                        <h2> {{ $data->name_ar}}</h2>
                    </div>
                    <div class="collapse-wrapper">
                        <div class="accordion" id="accordionExample{{ $data->id}}">

                            @foreach($data->child as $child)
                            
                            <div class="card">
                                <div class="card-header" id="headingOne_{{ $child->id}}">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn-link collapsed"
                                         data-toggle="collapse" data-target="#collapseOne_{{ $child->id}}" 
                                         aria-expanded="false" aria-controls="collapseOne_{{ $child->id}}">
                                            {{ $child->name_ar }}</a>
                                    </h2>
                                </div>

                                <div id="collapseOne_{{ $child->id}}" class="collapse" aria-labelledby="headingOne_{{ $child->id}}" data-parent="#accordionExample{{ $data->id}}">


                                    <div class="card-body">
                                        @foreach ($child->subSub as $ss)
                                        <h4 style="text-decoration: underline;"> {{ $ss->name_ar }}</h4>
                                            <br>
                                            <h4>
                                            <?php echo strip_tags($ss->pageData); ?>

                                        </h4>
                                        <hr/>
                                        @endforeach

                                    </div>



                                </div>
                            </div>
                          
                            @endforeach

                        </div>
                     </div>
                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
</main>
@endsection