<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('Admin/dist/img/avatar3.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
           <li class=""><a href="{{route('supplier.index')}}"><i class="fa fa-circle-o"></i>Supplier</a></li> 
            <li class=""><a href="{{route('vaccine.index')}}"><i class="fa fa-circle-o"></i>Vaccine</a></li>
           <li class=""><a href="{{route('patient.index')}}"><i class="fa fa-circle-o"></i>Patients</a></li>
           <li class=""><a href="{{route('medicine.index')}}"><i class="fa fa-circle-o"></i>Medicine</a></li>
           <li class=""><a href="{{route('admin.index')}}"><i class="fa fa-circle-o"></i>Admin Register</a></li>
           <li class=""><a href="{{route('doctor.index')}}"><i class="fa fa-circle-o"></i>Doctor Register</a></li>
           <li class=""><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i>User Register</a></li>
            <li class=""><a href="#"><i class="fa fa-circle-o"></i>Reports</a></li> 
        </li>
        
      </ul>
     
    </section>
    <!-- /.sidebar -->
  </aside>