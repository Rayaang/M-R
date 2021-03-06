@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('Admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
   <section class="content-header">
    <h3>Doctor</h3>
    </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Doctor</h3>
        <a class='col-lg-offset-10 btn btn-success' href="{{ route('doctor.create') }}">Create Doctor</a>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Doctor List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>id</th>
                          <th>Name</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($userDocs as $userDoc)
                          <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $userDoc->name }}</td>
                            <td>{{ $userDoc->email }}</td>
                            <td>{{ $userDoc->password }}</td>
                              <td><a href="{{ route('doctor.edit',$userDoc->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                              <td>
                                <form id="delete-form-{{ $userDoc->id }}" method="post" action="{{ route('doctor.destroy',$userDoc->id) }}" style="display: none">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick="
                                if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $userDoc->id }}').submit();
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