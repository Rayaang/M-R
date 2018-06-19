@extends('admin.layouts.app')

@section('main-content')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	  <!-- Content Header (Page header) -->
	 <section class="content-header">
    <h3>Supplier</h3>
  	</section>
	  <!-- Main content -->
	  <section class="content">
	    <div class="row">
	      <div class="col-md-12">
	        <!-- general form elements -->
	        <div class="box box-primary">
	          <div class="box-header with-border">
	            <h3 class="box-title">Create New Supplier</h3>
	          </div>

	          @include('includes.messages')
	          <!-- /.box-header -->
	          <!-- form start -->
	          <form role="form" action="{{ route('supplier.update',$sups->id) }}" method="post">
	          {{ csrf_field() }}
	          {{ method_field('PATCH') }}
	            <div class="box-body">
	            <div class="col-lg-offset-3 col-lg-6">
	              <div class="form-group">
	                <label for="supName">Supplier Name</label>
	                <input type="text" class="form-control" id="supName" name="supName" maxlength="20"  placeholder="Supplier Name" value="{{ $sups->supName }}">
	              </div>


	              <div class="form-group">
	                <label for="supAddr">Supplier Address</label>
	                <input type="text" type="text"  min="0"  class="form-control" id="supAddr" name="supAddr" placeholder="Supplier Address" value="{{ $sups->supAddr }}">
	              </div>
	              
	              
	                <div class="form-group">
	                <label for="supContact">Supllier Contact</label>
	                <input type="number" type="number"  min="999999991" max="999999999" class="form-control" id="supContact" name="supContact" placeholder="Supplier Contact" value="{{ $sups->supContact}}">
	              </div>

	             

	            <div class="form-group">
	              <button type="submit" class="btn btn-primary">Submit</button>
	              <a href='{{ route('supplier.index') }}' class="btn btn-warning">Back</a>
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