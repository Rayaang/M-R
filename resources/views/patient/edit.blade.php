@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('Admin/plugins/select2/select2.min.css') }}">
@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h3>Patient Table</h3>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Patient</h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
          </div>
          @include('includes.messages')
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ route('patient.update',$patients->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box-body">
              <div class="col-lg-6">
                
                <div class="form-group">
                  <label for="pxLast" class="col-sm-2 control-label">LastName:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="pxLast" name="pxLast" maxlength="20" placeholder="Last Name" value="{{ $patients->pxLast }}">
                  </div>
                </div>
                  <br>
                  <br>
                 <div class="form-group">
                  <label for="pxFirst" class="col-sm-2 control-label">FirstName:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="pxFirst" name="pxFirst" maxlength="20" placeholder="Last Name" value="{{ $patients->pxFirst }}">
                  </div>
                </div>
                  <br>
                  <br>

                 <div class="form-group">
                  <label for="pxAddr" class="col-sm-2 control-label">Address:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="pxAddr" name="pxAddr" maxlength="20" placeholder="Address" value="{{ $patients->pxAddr }}">
                  </div>
                </div>
                  <br>
                  <br>

                 <div class="form-group">
                  <label for="pxContact" class="col-sm-2 control-label">Contact:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="pxContact" name="pxContact" maxlength="20" placeholder="Contact" value="{{ $patients->pxContact }}">
                  </div>
                </div>
                  <br>
                  <br>

                 <div class="form-group">
                  <label for="pxFather" class="col-sm-2 control-label">Father:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="pxFather" name="pxFather" maxlength="20" placeholder="Father" value="{{ $patients->pxFather }}">
                  </div>
                </div>
                    <br>
                  <br>
                    <div class="form-group">
                  <label for="pxMother" class="col-sm-2 control-label">Mother:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="pxMother" name="pxMother" maxlength="20" placeholder="Mother" value="{{ $patients->pxMother }}">
                  </div>
                </div>
                <br>
                  <br>

              
                  <div class="form-group">
                  <label for="birthWeight" class="col-sm-2 control-label">Weight:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="birthWeight" name="birthWeight" maxlength="20" placeholder="Weight in pounds" value="{{ $patients->birthWeight }}">
                  </div>
                </div>
                <br>
                  <br>

                    <div class="form-group">
                  <label for="birthLength" class="col-sm-2 control-label">Length:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="birthLength" name="birthLength" maxlength="20" placeholder="Lenght in cm" value="{{ $patients->birthLength }}">
                  </div>
                </div>
                <br>
                  <br>

                    <div class="form-group">
                  <label for="headCircumference" class="col-sm-2 control-label">Circumference:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="headCircumference" name="headCircumference" maxlength="20" placeholder="Head Circumference in cm" value="{{ $patients->headCircumference }}">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                

                  <div class="form-group" style="margin-top:9px;">
                                <label>Gender</label>
                                <select id="pxGender" type="pxGender" class="form-control" name="pxGender" placeholder="Gender">
                                  <option value="{{ $patients->pxGender }}">{{ $patients->pxGender }}</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                  </div>
                   <br>
                
                   <div class="form-group" style="margin-top:9px;">
                                <label>Delivery Type</label>
                               <select id="typeDelivery" type="typeDelivery" class="form-control" name="typeDelivery" placeholder="Type Of Delivery" value="{{ $patients->typeDelivery }}">
                                <option value="{{ $patients->typeDelivery}}">{{$patients->typeDelivery}}</option>
                                  <option value="Normal">Normal</option>
                                  <option value="Cessarian">Cessarian</option>
                                </select>
                  </div>
                  <br>  <br>  <br>
                  

                         <div class="input-group date">
                     <div class="input-group-addon">
                      <label>Birthday</label>
                       <i class="fa fa-calendar"></i>
                      </div>
                      <input type="date" class="form-control pull-right" id="pxBday" name="pxBday" value="{{ $patients->pxBday }}">
                </div>

                <br>
                <br>  <br>


                      <div class="form-group">
                  <label for="timeBirth" class="col-sm-2 control-label">Time:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="timeBirth" name="timeBirth" maxlength="20" placeholder="Time of Birth" value="{{ $patients->timeBirth }}">
                  </div>
                </div>

              </div>
            </div>
            <!-- /.box-body -->
            
    <div class="box">
             <div class="box-header">
               <h3 class="box-title">Write Post Body Here
                 <small>Simple and fast</small>
               </h3>
               <!-- tools box -->
               <div class="pull-right box-tools">
                 <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                   <i class="fa fa-minus"></i></button>
                 </div>
                 <!-- /. tools -->
               </div>
               <!-- /.box-header -->
               <div class="box-body pad">
                 <textarea name="comBirth" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1">{{ $patients->comBirth }}</textarea>
               </div>
             </div>

             <div class="box-footer">
              <input type="submit" class="btn btn-primary">
              <a href='{{ route('patient.index') }}' class="btn btn-warning">Back</a>
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
@section('footerSection')
<script src="{{ asset('Admin/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{  asset('Admin/ckeditor/ckeditor.js') }}"></script>
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
    });
</script>
<script>
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>
@endsection

