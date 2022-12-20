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
                            <h2>منصة المستفيد</h2>
                        </div>
                        <div class="collapse-wrapper">
                            <div class="accordion" id="accordionExample">
                                <!-- single-one -->
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn-link collapsed"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">طلباتي</a>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
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
                                 
                                <div class="card">
                                    <div class="card-header" id="headingtwo">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo"> خطاباتي </a>
                                        </h2>
                                    </div>
                                    <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                           <h3> 
                                            شرح خطاباتي
                                            <br>
                                            خانة تعرض لك جميع الخطابات المعروضة بصفحتك 
                                               مرفق فيها رقم و عنوان و وقت و تاريخ وحالة
                                                     (معتمد او مرفوض ) الخطاب ويوجد خانة تحكم يوجد بها
                                                             (تفاصيل- حذف-طباعة) الخطاب وايضاً يمكن البحث عن
                                                   الخطاب عن طريق التواريخ بتحديدها من و إلى تاريخ هجري او ميلادي  ثم عرضه
                                            </h3>
                                            <h4>
                                            اضافة خطاب 
                                            <br>
                                                    من خانة إضافة خطاب يمكنك انشاء خطابك عن طريق كتابة عنوان ونص الخطاب بعد
                                                     ذلك يمكنك معاينة الخطاب قبل حفظه عن طريق زر معاينه ثم نقوم بالضغط على حفظ.



                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-three -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn-link collapsed"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> المفوضين </a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                         <h4> شرح المفوضين
                                         <br> 
                                         المفوضين هي خانه تمكنك من تفويض شخص ينوب عنك في المنصة</h4>
                                         
                            
                                            <h3> إضافة مفوض
                                            <br>
                                            بالضغط على المفوضين ثم تعديل ثم 
                                             تقوم بتعبئة البيانات ..  تضيف اسم المفوض باللغة العربية
                                             والانجليزية ورقم الجوال والبريد الالكتروني ومن ثم حفظ عند
                                             المفوضين سيظهر البيانات التي قمت باضافتها للمفوض اسمه 
                                            ورقمه وبريدة الالكتروني وحالة تحكم ( تفاصيل - حذف - طباعة)
                                            </h3>

                                        </div>
                                    </div>
                                </div>
                                <!-- single-four -->
                                <div class="card">
                                    <div class="card-header" id="headingfouree">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFoure" aria-expanded="false" aria-controls="collapseFoure">انشاء جهة </a>
                                        </h2>
                                    </div>
                                    <div id="collapseFoure" class="collapse" aria-labelledby="headingfouree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <h4> شرح انشاء جهة
                                            <br> 
                                            هي خانة تستطيع من خلالها انشاء الجهة الخاصة بك عن طريق الدخول
                                             الى منصة جهات ومن ثم التسجيل فتفتح الصفحة الرئسية  بعد الدخول مباشرة على المنصة 
                                             يتم اختيار خانة انشاء جهة من ايقونة انشاء جهه على الشريط يمين الصفحة
                                              هذه الايقونة تحتوى على خانة اسم الشركة الخاصة بكم باللغة العربية
                                              والانجليزية ، وخانة الرقم الضريبي للشركة الخاصة بكم باللغة العربية
                                              والانجليزية ، وبها معلومات الاتصال الخاصة بالمالك او المدير التنفيذى
                                              الخاص بالشركة باللغة العربية والانجليزية ايضا وتظهر اسفل الشاشة
                                              خانة اضافة المعاملات او المنتجات الخاصة بكم تستطيع من خلالها
                                              اضافة ماتريد ومن ثم الضغط على حفظ وهكذا تكون قد تمت الاضافة </h4>


                    
                                        </div>
                                    </div>
                                </div>

                                 
                                 <!-- single-five -->
                                <div class="card">
                                    <div class="card-header" id="headingfive">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> مواعيدي </a>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <h3> شرح مواعيدي
                                            <br> خدمة مواعيدي هي خدمة تتيح لك  ترتيب المواعيد وتنسيقها وتنظيمها </h3>

                                            <h4> اضافة موعد
                                            <br> بالضغط على خانة اضافة موعد يمكنك تسجيل تفاصيل موعدك وتاريخه
                                             و العنوان الذى تريد كما يمكنك اختيار طريقة التنبيه المناسبة لك سواء كانت عبر المنصة او من خلال البريد الالكترونى او كلاهما .. كما يمكنك ارفاق اى تفاصيل اضافية وللاطلاع على اى موعد خاص بك تم اضافته من قبل ،
                                              فقط اضغط على خانة مواعيدى
                                               .. ستظهر امامك جميع المواعيد المسجلة
                                            </h4>
                                            


                    
                                        </div>
                                    </div>
                                      <!-- single-six -->
                                <div class="card">
                                    <div class="card-header" id="headingsix">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> البيانات الشخصية </a>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingsixSix" data-parent="#accordionExample">
                                        <div class="card-body">
                                           <h3>عرض البيانات الشخصية
                                            <br> في منصة المستفيد نقوم بالضغط على أيقونة البيانات الشخصية ومن ثم ستظهر البيانات الخاصة بالمستفيد تحتوي على : الاسم - العنوان - الدولة - النوع - البريد الالكتروني - رقم الهاتف . ويمكنك التعديل عليها من خلال الضغط على أيقونة تعديل أسفل الصفحة وستظهر لك صفحة أيقونة حفظ لحفظ البيانات التي تم تعديلها. </h3>

                                           
                                        </div>
                                    </div>
                                </div>
                                         <!-- single-seven -->
                                <div class="card">
                                    <div class="card-header" id="headingseven">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">اجتماعاتي </a>
                                        </h2>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                        <div class="card-body">
                                           <h3> حضور الاجتماع 
                                            <br> 
                                                تستطيع الاطلاع على ما يخص الاجتماعات التي تمت دعوتك إليها
                                                من خلال النقر على أيقونة (اجتماعاتي) الخاصة بك  ومن ايقونة (كل الحالات) يمكنك الاطلاع على
                                               جميع الاجتماعات التي تم حضورها سوءا كان الاجتماع ( جديد - منعقد - تم - ملغي) تستطيع أيضا 
                                               عرض جميع المعلومات عن الاجتماع ( رئيس الاجتماع وكوده وعنوانه وتاريخه ووقته ونوعه وحالته) .
                                                وتستطيع معرفة عدد الأعضاء المدعوين من خلال النقر على أيقونة (أعضاء الاجتماع) ويوجد أسفلها عدد 
                                              الحاضرين والغائبين ونسبة الحضور . ويمكنك الاطلاع على منسوبي الجهات الذين تمت دعوتهم .
                                               ويتاح لك طباعة التقرير الخاص بالاجتماع من خلال النقر على أيقونة (طباعة التقرير)  .
                                              وفي الأسفل توجد بنود الاجتماع ويتم التصويت عليها من خلال النقر على أيقونة تصويت على كل بند
                                                 ومن ثم اختيار (موافق أو غير موافق ) ثم النقر على (تصويت) . 
											</h3>

                                        </div>
                                    </div>
                                </div> 
                                                     <!-- single-eight -->
                                <div class="card">
                                    <div class="card-header" id="headingeight">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">المستندات</a>
                                        </h2>
                                    </div>
                                    <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                                        <div class="card-body">
                                           <h3> اضافة مستند 
                                            <br> 
                                            هي خانة تمكنك من ادراج او تعديل المستندات في منصة جهات وهي من خلال الذهاب الى الصفحة الرئيسية للمستفيد ثم إختيار أيقونة المستندات من أعلى الصفحة ثم بعد ذلك الضغط على تعديل وملئ البيانات المطلوبة عن طريق كتابة (الاسم باللغة الإنجليزية - الاسم باللغة العربية - الرقم - وتاريخ الانتهاء) ومن ثم اختيار خانة مستند واضافته .
											</h3>

                                        </div>
                                    </div>
                                </div>
                                        <!-- single-nine -->
                                <div class="card">
                                    <div class="card-header" id="headingnine">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">خطابات واردة بغرض الاعتماد</a>
                                        </h2>
                                    </div>
                                    <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                                        <div class="card-body">
                                           <h3>  معرفة حالة الخطابات الواردة
                                            <br> 
                                                هي خانة تمكنك من معرفة حالة الخطابات الواردة في منصة المستفيد الشخصية ويمكنك معرفة حالتها عن طريق التوجه إلى الصفحة الرئيسية للمستفيد  ومن بعد ذلك إختيار أيقونة خطابات واردة بغرض الإعتماد من يسار الصفحة ومن ثم ستظهر لك جميع الخطابات الواردة الجديدة أو التي تحتاج إلى اعتماد أو رفض من قبل المستفيد. 
											</h3>

                                        </div>
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
   