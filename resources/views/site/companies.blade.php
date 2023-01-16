@extends('layouts.appPortal')


@section('content')

<!-------------------------------------------------------------------------------->
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumbs-title">المكاتب
                    <span>الافتراضيه</span>
                </h2>
                <ul class="breadcrumb-list">
                    <li><a href="{{ URL :: to ('/')}}">الرئيسية</a></li>
                    <li>المكاتب الافتراضيه
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-------------------------------------------------------------------------------->



<div class="libraries">
    <div class="container">
        <div class="card card-container">
            <div class=" row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title" data-aos="fade-up">
                        <h1> المكاتب الافتراضيه</h1>

                    </div>
                </div>
               
                @foreach($allData as $data)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                    <div class="card">
                        <div class="view overlay">
                            <img class="card-img" src="{{ URL ::to ('public/upload/'.$data->image)}}">
                        </div>

                        <div class="card-body">
                            <h1 class="card-title"> {{ $data->name_ar }}</h1>
                        </div>
                        <div class="button-one ">
                            <a href="{{ URL :: to ('/reception' , $data->id )}}" class=" " 
                            role="button" aria-pressed="true">
                            <i class="fa fa-user"></i>الاقسام والموظفين</a>
                        </div>

                    </div>
                </div>
                @endforeach
                
                

            </div>
        </div>

    </div>
</div>




@endsection