@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit visions</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">visions </li>
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
                <a class="btn btn-success float-right" href="{{route('visions.view')}}"> <i class="fa fa-list"></i>View Mission </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <form action="{{route('visions.update',$editData->id)}}" id="myform" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">

                  <div class="form-group col-md-5">
                    <label for="short_title"> Title</label>
                    <input type="text" name="title" value="{{$editData->title}}" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                  </div>
                  <div class="form-group col-md-2" >
                  <img id="showImage" src="{{(!empty($editData->image))?url('public/upload/vision_images/'.$editData->image):url('public/upload/no-image.jpg')}}"
                  style="width: 150px;height: 160px; border:1px solid #000000">
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
