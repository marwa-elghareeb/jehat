@extends('layouts.appPortal')
@section('content')

<!-------------------------------------------------------------------------------->
<div class="breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="breadcrumbs-title"> تسجيل <span> الدخول</span></h2>
        <ul class="breadcrumb-list">
          <li><a href="{{ URL :: to ('/')}}">الرئيسية</a></li>
          <li> تسجيل الدخول </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<section id="services" class="services jehat-stage">
  <div class="container">
    <div class="card">
      <div class="row">
        <div class="col-12">
          <div class="section-title" data-aos="fade-up">
            <h1 data-animation="bounceIn" data-delay="0.2s"> تسجيل الدخول</h1>

          </div>
        </div>
      </div>


      <form class="text-center">
        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form2Example1">Email address</label>
          <input type="email" id="form2Example1" class="form-control" />

        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form2Example2">Password</label>
          <input type="password" id="form2Example2" class="form-control" />

        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->

          </div>

          <div class="col">
            <!-- Simple link -->

          </div>
        </div>

        <!-- Submit button -->
        <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

        <!-- Register buttons -->
        <div class="text-center">

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>

          <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div>
      </form>



    </div>
  </div>

</section>


@endsection