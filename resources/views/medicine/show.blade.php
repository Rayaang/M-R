@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('Admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
   <section class="content-header">
    <h3>Medicine Table</h3>
    </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box"> 
      <div class="box-header with-border">
        <h3 class="box-title">Medicine</h3>
        <a class='col-lg-offset-10 btn btn-success' href="{{ route('medicine.create') }}">Add New</a>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Medicine List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>id</th>
                          <th>medName</th>
                          <th>medStock</th>
                          <th>medSup</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($meds as $med)
                          <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $med->medName }}</td>
                            <td>{{ $med->medStock }}</td>
                            <td>{{ $med->medSup }}</td>
                              <td><a href="{{ route('medicine.edit',$med->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                              <td>
                                <form id="delete-form-{{ $med->id }}" method="post" action="{{ route('medicine.destroy',$med->id) }}" style="display: none">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick="
                                if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $med->id }}').submit();
                                    }
                                    else{
                                      event.preventDefault();
                                    }" ><span class="glyphicon glyphicon-trash"></span></a>
                              </td>
                            </tr>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('footerSection')
<script src="{{ asset('Admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('Admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endsection