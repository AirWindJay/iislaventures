@extends('layouts.app')

@section('content')
<div class="content-wrapper" style="height: 800px">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Welcome</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control">
                
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname" class="form-control">
                
                <label for="middlename">Middlename</label>
                <input type="text" name="middlename" id="middlename" class="form-control">
                
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control">
                
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection

@section('styles')
 


@endsection