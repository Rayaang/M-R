@extends('admin.layouts.app')

@section('main-content')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	  <!-- Content Header (Page header) -->
	 <section class="content-header">
    <h3>Medicine</h3>
  	</section>
	  <!-- Main content -->
	  <section class="content">
	    <div class="row">
	      <div class="col-md-12">
	        <!-- general form elements -->
	        <div class="box box-primary">
	          <div class="box-header with-border">
	            <h3 class="box-title">Create New Medicine</h3>
	          </div>

	          @include('includes.messages')
	          <!-- /.box-header -->
	          <!-- form start -->
	          <form role="form" action="{{ route('medicine.store') }}" method="post">
	          {{ csrf_field() }}
	            <div class="box-body">
	            <div class="col-lg-offset-3 col-lg-6">
	              <div class="form-group">
	                <label for="medName">Medicine Name</label>
	                <input type="text" class="form-control" id="medName" name="medName" maxlength="20"  placeholder="Medecine Name">
	              </div>


	              <div class="form-group">
	                <label for="medStock">Medicine Stock</label>
	                <input type="number" type="number"  min="0" max="100" class="form-control" id="medStock" name="medStock" placeholder="Medecine Stock">
	              </div>

	                <div class="form-group">
                	  <label>Supplier Name</label>
                                <select id="supID" type="medSup" class="form-control" name="medSup">
                                	<option value="">Select Supplier</option>
                                @if(count($sups)>0)
                                @foreach($sups->all() as $sup)
                                <option value="{{$sup->supName}}">{{$sup->supName}}</option>
                                @endforeach
                                @endif
                                </select>
		            </div>

	            <div class="form-group">
	              <button type="submit" class="btn btn-primary">Submit</button>
	              <a href='{{ route('medicine.index') }}' class="btn btn-warning">Back</a>
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