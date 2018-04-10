<!DOCTYPE html>
<html>
<head>
	@include('panel.includes.header')
</head>
<body class="hold-transition skin-blue sidebar-mini" onload="Loader()" style="margin:0;">
<div class="wrapper">
  <div id="loader"></div>
  @include('panel.includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div  id="loader-body" style="display:none;">

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
  </div>



@include('panel.includes.footer');
</div>
@include('panel.includes.script');
</body>
</html>
