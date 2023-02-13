<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TAGCODE');
    </script>
    <!-- End Google Tag Manager -->
    <title>تسجيل مستخدم جديد</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{ asset('public/login-style/assets/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('public/login-style/assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('public/login-style/assets/fonts/flaticon/font/flaticon.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('public/web-assets/img/favicon.png')}}" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200;300;400&family=Cairo:wght@600;800&family=Tajawal:wght@700&display=swap" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('public/login-style/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('public/login-style/assets/css/skins/default.css')}}">

</head>

<body id="top">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="page_loader"></div>

    <!-- Login 2 start -->
    <div class="login-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="form-section">
                        <div class="logo-2">
                            <a href="#">
                                <img src="{{ asset('public/login-style/assets/img/logos/logo-2.png')}}" alt="logo">
                            </a>
                        </div>
                        <h3>تسجيل مستخدم جديد</h3>
                        <form enctype="multipart/form-data" method="post"
                            action="{{ URL :: to ('/user-register-form')}}">
                        {{ csrf_field() }}
                            <div class="form-group form-box">
                                <input type="text" name="fullname_ar" class="input-text" placeholder=" الإسم الثلاثي بالعربية ">
                                @if($errors->has('fullname_ar'))
                                        <div class="error" style="color:red">{{ $errors->first('fullname_ar') }}</div>
                                        @endif
                            
                            </div>
                            <div class="form-group form-box">
                                <input type="text" name="fullname_en" class="input-text" placeholder=" الإسم الثلاثي بالإنجليزي ">
                                @if($errors->has('fullname_en'))
                                        <div class="error" style="color:red">{{ $errors->first('fullname_en') }}</div>
                                        @endif
                            </div>
                            <div class="form-group form-box">
                                <input type="number" name="identity_number" class="input-text" placeholder=" الهوية (هوية وطنية / إقامة / جواز سفر)">
                                @if($errors->has('identity_number'))
                                        <div class="error" style="color:red">{{ $errors->first('identity_number') }}</div>
                                        @endif
                            </div>
                            <div class="form-group form-box">
                                <input type="text" name="gender_type" class="input-text" placeholder=" النوع">
                                @if($errors->has('gender_type'))
                                        <div class="error" style="color:red">{{ $errors->first('gender_type') }}</div>
                                        @endif
                            </div>
                            <div class="form-group form-box">
                                <input type="text" name="nationality" class="input-text" placeholder=" الجنسية">
                                @if($errors->has('nationality'))
                                        <div class="error" style="color:red">{{ $errors->first('nationality') }}</div>
                                        @endif
                            </div>
                            <div class="form-group form-box">
                                <input type="number" name="fullname" class="input-text" placeholder=" رقم الجوال">
                            </div>

                            <div class="form-group form-box">
                                <input type="email" name="email" class="input-text" placeholder="البريد الإلكتروني">
                            </div>
                            <div class="form-group form-box">
                                <input type="password" name="Password" class="input-text" placeholder="الرقم السري">
                            </div>

                            <div class="form-group form-box">
                                <input type="password" name="Password" class="input-text" placeholder=" Caption">
                            </div>


                            <div class="form-group mb-0 clearfix">
                                <button type="submit" class="btn-md btn-theme btn-block">تسجيل</button>
                            </div>
                            <div class="extra-login clearfix">
                            </div>

                        </form>
                        <p>لديك حساب؟<a href="{{ URL :: to ('/')}}" class="thembo"> تسجيل الدخول من هنا </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login 2 end -->

    <!-- External JS libraries -->
    <script src="{{ asset('public/login-style/assets/js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{ asset('public/login-style/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('public/login-style/assets/js/bootstrap.min.js')}}"></script>
    <!-- Custom JS Script -->
</body>

</html>