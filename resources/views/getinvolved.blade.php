@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Get Involved</h1>
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
            <div class="card backkground">
              <div class="card-body">
                <h1 class="card-title">Travel4Impact</h1>

                <p class="card-text">
                    In partnership with <b>Inspired Escapes,</b> we offer group adventures and challenges to an exceptional selection of global destinations, carefully chosen to put social and environmental responsibility at the very heart of the journey. Our travellers immerse themselves in local cultures, have truly amazing experiences, and make positive contributions to the places they visit. From trekking through ancient rainforests to actively engaging in wildlife conservation, we have travel experiences that make a difference for everyone.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
              <hr>
          </div>
          
          <div class="col-lg-12">
            <div class="card backkground">
              <div class="card-body">
                <h1 class="card-title">Partner with Us</h1>

                <p class="card-text">
                    By partnering with us, you will have access to our extensive global network of high level events, global changemakers and decision makers both in industries, governments and global agencies.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
              <hr>
          </div>
          
          <div class="col-lg-12">
            <div class="card backkground">
              <div class="card-body">
                <h1 class="card-title">Work for Us</h1>

                <p class="card-text">
                    We believe that talented, passionate and creative people are key to a successful business and whilst there are no immediate vacancies we are always looking for people with passion to help solve world problems, and the creativity to think outside the box.
                    <br><br>

Please submit your CV to info@iislaventures.com with no more than 500 words outlining why you would like to work with IISLA.
                </p>
              </div>
            </div>
          </div>

          

          <div class="col-lg-12">
            <hr>
        </div>
        
        <div class="col-lg-12">
          <div class="card backkground">
            <div class="card-body">
              <h1 class="card-title">Contact Us</h1>

              <p class="card-text">
                IISLA Ventures (UK) Ltd <br>
                Kemp House <br>
                152 City Road <br>
                London EC1V 2NX <br>
                <a href="#">info@IISLAVentures.com</a> 
                  <br><br>

                    <form action="">
                        <label for="inp1">First Name (Required)</label>
                        <input type="text" name="inp1" id="inp1" class="form-control">
                        <label for="inp2">Last Name (Required)</label>
                        <input type="text" name="inp2" id="inp2" class="form-control">
                        <label for="inp3">Email (Required)</label>
                        <input type="text" name="inp3" id="inp3" class="form-control">
                        <label for="inp4">Phone (Required)</label>
                        <input type="text" name="inp4" id="inp4" class="form-control">
                        <label for="inp5">Message (Required)</label>
                        <input type="text" name="inp5" id="inp5" class="form-control">
                        <input type="checkbox" name="inp6" id="inp6">
                        <label for="inp6">I have read and accepted the Terms & Conditions</label>
                        <input type="checkbox" name="inp7" id="inp7">
                        <label for="inp7">	I am over 18 years old</label>
                        <br>
                        <button class="btn btn-primary">SUBMIT</button>
                        
                    </form>
              </p>
            </div>
          </div>
        </div>

        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
@endsection

@section('styles')
 


@endsection