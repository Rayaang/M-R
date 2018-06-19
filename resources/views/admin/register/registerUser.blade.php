@extends('admin.layouts.app')

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
     <section class="content-header">
    <h3>Create User</h3>
    </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Create User Account</h3>
              </div>

              @include('includes.messages')
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="{{ route('user.store') }}" method="post">
              {{ csrf_field() }}
                <div class="box-body">
                <div class="col-lg-offset-3 col-lg-6">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" maxlength="255"  placeholder=" Name">
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" maxlength="255"  placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="slug">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">   
                  </div>

                <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                          
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href='{{ route('user.index') }}' class="btn btn-warning">Back</a>
                </div>
                    
                </div>
                    
                </div>

              </form>
            </div>
            <!-- /.box -->

            
          </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection