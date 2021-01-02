@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Manage Contact</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contact </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-md-12">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3>
                <a class="btn btn-success float-right" href="{{route('contacts.view')}}"> <i class="fa fa-list"></i>View Contact </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <form action="{{route('contacts.update',$editData->id)}}" id="myform" method="post">
                @csrf
                <div class="form-row">

                  <div class="form-group col-md-4">
                    <label for="address">Address </label>
                    <input type="text" name="address" value="{{$editData->address}}" class="form-control">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="mobile_no">Mobile No </label>
                    <input type="text" name="mobile_no" value="{{$editData->mobile_no}}" class="form-control">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="email">Email </label>
                    <input type="email" name="email" value="{{$editData->email}}"  class="form-control">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="facebook">Facebook </label>
                    <input type="text" name="facebook" value="{{$editData->facebook}}" class="form-control">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="twitter"> Twitter</label>
                    <input type="text" name="twitter" value="{{$editData->twitter}}" class="form-control">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="youtube"> Youtube</label>
                    <input type="text" name="youtube" value="{{$editData->youtube}}" class="form-control">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="google_plus"> Google_plus</label>
                    <input type="text" name="google_plus" value="{{$editData->google_plus}}" class="form-control">
                  </div>

                  <div class="form-group col-md-6" style="padding-top: 30px">
                    <input type="submit" value="Submit" class="btn btn-primary">
                  </div>

                </div>
              </form>

          </div>
          <!-- /.card -->

          <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
