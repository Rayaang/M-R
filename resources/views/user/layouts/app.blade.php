<!DOCTYPE html>
<html>
<head>
	@include('doctor.layouts.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	@include('doctor.layouts.header')
	@include('doctor.layouts.sidebar')
  	@section('main-content')
  	@show
	
	@include('doctor.layouts.footer')
</div>
</body>
</html>