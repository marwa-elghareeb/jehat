@extends('layouts.appPortal')

@section('content')
<style>
    .screen-img {
        display: flex !important;
        justify-content: flex-end !important;
        margin-left: auto !important;
        margin-right: 0 !important;
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
                                <h1 data-animation="bounceIn" data-delay="0.2s">مركز المساعدة</h1>
                                <div class="screen-img ">
                                    <img src="{{ asset('public/web-assets/img/gallery/screen.png' ) }}" alt="" class=" w-50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="faq-section section-padding40">
        <div class="container">

            <div class="row justify-content-center">
                @foreach($allCat as $data)
                <div class="col-lg-10">
                    <div class="section-tittle">
                        <h2> {{ $data->name_ar}}</h2>
                    </div>
                    <div class="collapse-wrapper">
                        <div class="accordion" id="accordionExample">
                            <!-- single-one -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn-link collapsed" 
                                        data-toggle="collapse" data-target="#collapseOne" 
                                        aria-expanded="false" aria-controls="collapseOne">طلباتي</a>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">


                                    <div class="card-body">
                                        <h4> عرض طلباتي
                                            <br>
                                            بالنقر على أيقونة (طلباتي) ستظهر صفحة تستطيع من خلالها تحديد الخصوصية
                                            وذلك باختيار ( مفتوحه - مغلقة ) وأيضا يمكنك عرض جميع الطلبات التي قمت
                                            برفعها من خلال قائمة تحتوي على بيانات الطلب مثل
                                            ( الموضوع - الموظف - نوع المعامله - التاريخ - الحالة والكود)
                                        </h4>



                                        <h4> إضافة طلب
                                            <br>
                                            بالنقر على ايقونة (إضافة طلب ) ستظهر لك صفحة بها (بيانات الطلب)
                                            ومنها يتم اختيار الجهة المراد ارسال الطلب إليها ثم اختيار
                                            (نوع الطلب - وكتابة الموضوع) ومن ثم إضافة جميع التفاصيل
                                            التي تختص بالطلب. حيث يمكنك تحديد أولوية الطلب
                                            ( طوارئ - عادية - مهمة - منخفضة ) وبالنقر على (اختيار الملفات)
                                            يمكنك ارفاق جميع المهمات الخاصة بالطلب ثم النقر على ايقونة حفظ أسفل الصفحة
                                        </h4>
                                    </div>

                                    

                                </div>
                            </div>
                            <!-- single-two -->
                            @endforeach
                        </div>
                    </div>
                </div>
</main>
@endsection