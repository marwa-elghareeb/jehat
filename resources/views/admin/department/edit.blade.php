@extends('layouts.appAdmin')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col p-md-0">
                <h4>Departments</h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('departments.index') }}">Departments</a>
                    </li>

                    <li class="breadcrumb-item active">Edit Department
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-12">


                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Item</h4>
                        <div class="basic-form">
                            <form role="form" enctype="multipart/form-data" method="post" action="{{ route('departments.update' , $editData->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}

                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label">Select Company Name </label>
                                    <div class="col-lg-9">
                                        <select class="form-control" name="company_id">

                                            <option class="text-muted" value="0"> Select Company</option>
                                            @foreach($allData as $data)
                                            <option @if($editData->company_id == $data->id) selected @endif
                                                value="{{ $data->id }}">{{ $data->name_ar }}</option>
                                            @endforeach

                                        </select>
                                        @if($errors->has('company_id'))
                                        <div class="error">{{ $errors->first('company_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                                

                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label"> Name (Ar)</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="{{ $editData->name_ar}}" name="name_ar" onkeyup="myFunction()" id="fname" aria-describedby="validationDefaultUsername1">
                                        </div>
                                        @if($errors->has('name_ar'))
                                        <div class="error">{{ $errors->first('name_ar') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label"> Name (En)</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="{{ $editData->name_en}}" name="name_en" id="validationDefaultUsername1" aria-describedby="validationDefaultUsername1">
                                        </div>
                                        @if($errors->has('name_en'))
                                        <div class="error">{{ $errors->first('name_en') }}</div>
                                        @endif
                                    </div>
                                </div>


                                


                                <div style="float: right;">
                                    <button type="submit" class="btn btn-primary btn-form">Submit</button>
                                    <button type="reset"  class="btn btn-light btn-form"><a href="{{ route('departments.index') }}">Cancel</a></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
</div>
<!-- #/ container -->
</div>

@endsection