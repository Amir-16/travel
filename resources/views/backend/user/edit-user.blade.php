@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">User Management</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User </li>
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
              <h3>Edit User
                <a class="btn btn-success float-right" href="{{route('users.view')}}"> <i class="fa fa-list"></i>View Users </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <form action="{{route('users.update',$editData->id)}}" id="myform" method="post">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="usertype">User Role</label>
                    <select class="form-control" id="usertype" name="usertype">
                      <option value="">Select Role</option>
                      <option value="Admin" {{($editData->usertype=="Admin")? "selected":"" }}>Admin</option>
                      <option value="User" {{ ($editData->usertype =="User")? "selected": ""}}>User</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{$editData->name}}"  class="form-control">
                      <font style="color:red"> {{($errors->has('name'))?($errors->first('name')):''}}</font>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{$editData->email}}" class="form-control">
                    <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}} </font>
                  </div>


                  <div class="form-group col-md-6">
                    <input type="submit" value="Update" class="btn btn-primary">
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
