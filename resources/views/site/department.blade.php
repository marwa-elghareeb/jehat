@extends('layouts.appPortalPages')
@section('content')



<!--title>برج جهات الافتراضي</title>
<style type="text/css">
        .section {
            background-color: #f3f4f5;
        }
    </style>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
<link rel='stylesheet' href='https://demo.themesberg.com/pixel-pro/css/pixel.css'>

<div class="section section-md py-5">
    <div class="container">
      
        <div class="row">
            <div class="col-md-4 text-center mx-auto">
                <div class="mb-5">
                    <a href="#">
                        <img src="{{ URL ::to ('public/upload/'.$cData->image)}}" alt="image" class="mb-4" style="width: 75px;">
                        <h1 class="h3 mb-4" style="text-decoration: underline;">{{ $cData->name_ar }}</h1>
                    </a>

                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10 mx-auto">
             
                <div class="timeline timeline-one">

                @foreach($allData as $data)
                   
                    <div class="timeline-item">
                        <span class="icon icon-info icon-lg"><i class="fab fa-react"></i></span>
                        <h5 class="my-3" style="text-decoration: underline;">
                            <a href="{{ URL :: to ('/employe' , $data->id )}}">
                                {{ $data->name_ar }}</a></h5>
                        <p>يتم عرض الاقسام الخاصه بالشركه وعند اختيار قسم معين يتم الدخول الى صفحه الموظفين الخاصين بالشركه </p>
                    </div>
                    @endforeach

                </div>
                
            </div>
        </div>


        <div class="col-sm">
            
        </div>
    </div>
</div>
</div>
</div>
</div-->

@endsection