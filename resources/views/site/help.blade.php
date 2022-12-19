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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">مركز المساعدة</h1>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <div class="faq-section section-padding40" >
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-tittle">
                            <h2>منصة مستفيد</h2>
                        </div>
                        <div class="collapse-wrapper">
                            <div class="accordion" id="accordionExample">
                                <!-- single-one -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn-link collapsed"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">طلباتي</a>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <h4><a href="https://jehat.sa/helpCenter/helpCenter/helpcenter/45" target="_self"> عرض طلباتي</a></h4>                                 
                                            
                                           <h4><a href="https://jehat.sa/helpCenter/helpCenter/helpcenter/46" target="_self"> إضافة طلب</a> 
                                            </h4>
                                        </div>

                                    </div>
                                </div>
                                <!-- single-two -->
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">خطاباتي</a>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <h4><a href="https://jehat.sa/helpCenter/helpCenter/helpcenter/33" target="_self"> شرح خطاباتي</a></h4>
                                            <h3><a href="https://jehat.sa/helpCenter/helpCenter/helpcenter/42" target="_self"> إضافة موعد</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-three -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn-link collapsed"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Automated process starts.</a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            The automated process starts as soon as 
                                            your clothes go into the machine. Duis cursus, mi 
                                            quis viverra ornare.
                                        </div>
                                    </div>
                                </div>
                                <!-- single-four -->
                                <div class="card">
                                    <div class="card-header" id="headingfouree">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFoure" aria-expanded="false" aria-controls="collapseFoure">Process the automated magic.</a>
                                        </h2>
                                    </div>
                                    <div id="collapseFoure" class="collapse" aria-labelledby="headingfouree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            The automated process starts as soon as 
                                            your clothes go into the machine. Duis cursus, mi 
                                            quis viverra ornare.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--? Want To work 01-->
        
        <!-- Want To work End -->

    </main>
    @endsection
   