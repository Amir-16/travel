@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Doner Management</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Doner </li>
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
              <h3>Doner List
                <a class="btn btn-success float-right" href="{{route('doners.view')}}"> <i class="fa fa-list"></i>View Doners </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <form action="{{route('doners.store')}}" id="myform" method="post">
                @csrf
                <div class="form-row">

                  <div class="form-group col-md-4">
                    <label for="name">Name</label>
                    <input type="text" name="name"  class="form-control">
                      <font style="color:red"> {{($errors->has('name'))?($errors->first('name')):''}}</font>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                    <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}} </font>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile" value="" class="form-control">
                    <font style="color:red"> {{($errors->has('mobile'))?($errors->first('mobile')):''}}</font>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="address">Address</label>
                    <input type="text" name="address" value="" class="form-control">
                    <font style="color:red"> {{($errors->has('address'))?($errors->first('address')):''}}</font>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender">
                      <option value="">Select Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="blood_group">Blood group</label>
                    <select class="form-control"id="blood_group" name="blood_group">
                      <option value="">Select blood group</option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="O+">O+ </option>
                      <option value="O-">O- </option>
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <input type="submit" name="submit" class="btn btn-primary">
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

<script type="text/javascript">
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#myform').validate({
    rules: {
      name: {
        required: true,
      },
      usertype: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 6
      },
      password2: {
        required: true,
        equalTo:'#password'
      }
    },
    messages: {
      name: {
        required: "Please enter name",
      },
      usertype: {
        required: "Please select userrow",
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long"
      },
      password2: {
        required: "Please provide a password",
        equalTo: "Your password didnot match"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>




@endsection
