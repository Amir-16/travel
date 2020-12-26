@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Password</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">password </li>
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
              <h3> Change password
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <form action="{{route('profiles.password.update')}}" id="myform" method="post">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="password">Curent Password</label>
                    <input type="password" name="current_password" id="current_password" class="form-control" autocomplete="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="password">New Password</label>
                    <input type="password" name="new_password" id="new_password" class="form-control" autocomplete="">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="password"> Confirm New Password</label>
                    <input type="password" name="confirm_new_password" class="form-control" autocomplete="">
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
$(document).ready(function () {
  $('#myform').validate({
    rules: {
      current_password: {
        required: true,
      },
      new_password: {
        required: true,
      },
      confirm_new_password: {
        required: true,
        equalTo:'#new_password'
      }
    },
    messages: {
      current_password: {
        required: "Please enter Current password",
      },
      new_password: {
        required: "Please provide a new password",
        minlength: "Your password must be at least 6 characters long"
      },
      confirm_new_password: {
        required: "Please provide confirm password",
        equalTo: "Your password didnot match with new password"
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
