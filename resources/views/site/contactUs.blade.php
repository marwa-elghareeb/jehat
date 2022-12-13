@extends('layouts.appPortalPages')

@section('content')


<section class="page-banner-contact banner banner-two">
    <div class="vector-bg"><img src="{{ asset('public\portal-assets\media\banner\top shape.png')}}" alt="circle"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="page-title-wrapper">
                    <div class="page-title-inner">
                        <h1 class="page-title" style="font-family: Cairo">تواصل معنا نحن هنا لمساعدتك
                        </h1>
                        <p style="font-family: cairo; color: #000000;">بحاجة الى التحدث معنا؟ <br />نحن
                            نستمع إليك. يرجى اختيار وسيلة الاتصال المفضلة لديك<br /> وسيقوم أحد موظفينا
                            بالتواصل معك قريبًا. ... سوف يسعدنا أن نسمع صوتكِ</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="animate-element-contact"><img src="{{ asset('public\portal-assets\media\animated\001.png')}}" alt="" class="wow pixFadeDown" data-wow-duration="1s"> <img src="{{ asset('public\portal-assets\media\animated\002.png')}}" alt="" class="wow pixFadeUp" data-wow-duration="2s"> <img src="{{ asset('portal-assets\media\animated\003.png')}}" alt="" class="wow pixFadeLeft" data-wow-delay="0.3s" data-wow-duration="2s"> <img src="{{ asset('public\portal-assets\media\animated\004.png')}}" alt="man" class="wow pixFadeUp" data-wow-duration="2s"></div>
            </div>
        </div>
    </div><svg class="circle" data-parallax='{"y" : 250}' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
        <path fill-rule="evenodd" stroke="rgb(250, 112, 112)" stroke-width="100px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.051" fill="none" d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z">
        </path>
    </svg>
    <ul class="animate-ball">
        <li class="ball" style="left: 10%; top: 37%"></li>
        <li class="ball"></li>
        <li class="ball"></li>
        <li class="ball"></li>
    </ul>
</section>
<section class="auto-style3" style="background-position: right top; background-size: 100% 100%; background-color: #FFFFFF; background-image: url('media/background/down-bg.png'); background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-4" style="left: 0px; top: 0px; height: 346px; visibility: visible;">
                <div class="contact-infos">
                    <div class="contact-info" style="text-align: center !important">
                        <h3 class="title" style="overflow: hidden; font-family: cairo"></h3><br />
                        <p class="description" style="font-family: cairo">السعودية - الرياض<br>مخرج 24</p>
                        <img alt="" height="50" src="{{ asset('public/portal-assets/media/Whatsapp.png')}}" width="52"><span style="color: #80858F">+966553777769</span>
                        <div class="info phone">
                            <img alt="" height="50" src="{{ asset('public/ortal-assets/media/Whatsapp.png')}}" width="52"><span style="color: #80858F">+966 5555 4418</span>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="info"><i class="ei ei-icon_mail_alt"></i>
                            <span>info@jehat.sa<br />
                            </span>
                        </div>
                    </div>
                </div>
            </div><br />
            <div class="col-md-8" style="float: right">
                <div class="contact-froms">
                    <div class="contact-form">
                        <div class="well">
                            <div class="auto-style2">
                                <div data-form-type="formoid" class="contact-froms" style="right: 0px">
                                    <!---Formbuilder Form--->
                                    <form action="contact.html" method="post" class="mbr-form form-with-styler" data-form-title="Mobirise Form" dir="rtl"><input type="hidden" name="email" data-form-email="true" value="n0q1J8Zm3PR50O1bqo3e6DkZuIVA2UtphDJAImDAQXSKO/vI/5egZ78YxJExCdSr1UxMLItQ1IeaFddOTFk1dwM8VDXujC3jVPOL3hRY/7xRBKBTtfcq17+uEqGZbdib">
                                        <div class="row">
                                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">تم الإرسال بنجاح شكرا
                                                لتواصلك معنا</div>
                                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                            </div>
                                        </div>
                                        <div class="dragArea row">
                                            <div class="col-md-6  form-group" data-for="name" style="text-align: right">
                                                <input type="text" name="name" placeholder="الاسم" data-form-field="Name" required="required" class="form-control input display-7" id="name-form4-g" dir="rtl" style="font-family: cairo">
                                                <div class="auto-style1">
                                                </div>

                                                &nbsp;
                                            </div>
                                            <div class="col-md-6  form-group" data-for="phone">
                                                <input type="text" name="phone" placeholder="التليفون" data-form-field="Phone" required="required" class="form-control input display-7" id="phone-form4-g" dir="rtl" style="font-family: cairo">
                                            </div>
                                            <div data-for="email" class="col-md-12  form-group">
                                                <input type="text" name="email" placeholder="الاميل" data-form-field="Email" class="form-control input display-7" required="required" id="email-form4-g" dir="rtl" style="font-family: cairo">
                                            </div>
                                            <div data-for="message" class="col-md-12  form-group">
                                                <textarea name="message" placeholder="الرسالة" data-form-field="Message" class="form-control input display-7" id="message-form4-g" dir="rtl" style="height: 115px; font-family: cairo;"></textarea>
                                            </div>
                                            <div class="col-md-12 input-group-btn  mt-2 align-center">
                                                <button type="submit" class="app-btn btn-active" style="font-family: cairo">إرسال</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!---Formbuilder Form--->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br />
</section>
<div class="content">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724462.302321135!2d48.42137161748818!3d24.27078448817087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2z2KfZhNix2YrYp9i2INin2YTYs9i52YjYr9mK2Kk!5e0!3m2!1sar!2seg!4v1514645079905" border="0" frameborder="0" marginheight="200" marginwidth="200" name="google" scrolling="no" style="float: center; height: 400px;" width="100%"></iframe>
</div>





@endsection