<!DOCTYPE html>
<html>
<head>
	@include('panel.includes.header')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	@include('panel.includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('panel.includes.breadcumb')

    <!-- Main content -->
    <section class="content">
      @section('main-section')
				@show
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@include('panel.includes.footer');

</body>
</html>
