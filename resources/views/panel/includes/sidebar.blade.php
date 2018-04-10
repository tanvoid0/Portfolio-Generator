<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>User</b>Biography</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="{{ route('user.index') }}"  data-toggle="dropdown">
            <img src="{{ asset('img/user/'.Auth::user()->image )}}" class="user-image" alt="">
            <span class="hidden-xs">{{ Auth::user()->name}}</span>
          </a>

        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
            <a href="{{ url('/logout') }}" class="btn btn-primary btn-flat">Sign out</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('img/user/'.Auth::user()->image )}}" class="img-circle" alt="">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="{{ route('dashboard')}}">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right"></span>
          </span>
        </a>
      </li>

      <li class="treeview">
        <a href="{{ route('user.index')}}">
          <i class="fa fa-user"></i>
          <span>User</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right"></span>
          </span>
        </a>
      </li>

      <li class="treeview">
        <a href="{{ route('description.index')}}">
          <i class="fa fa-files-o"></i>
          <span>Descriptions</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right"></span>
          </span>
        </a>
      </li>

      <li class="treeview">
        <a href="{{route('experience.index')}}">
          <i class="fa fa-briefcase"></i>
          <span>Experience</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right"></span>
          </span>
        </a>
      </li>
      
      <li class="treeview">
        <a href="{{ route('skill.index')}}">
          <i class="fa fa-laptop"></i>
          <span>Skills</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right"></span>
          </span>
        </a>
      </li>
      
      <li class="treeview">
        <a href="{{route('work.index')}}">
          <i class="fa fa-wrench"></i>
          <span>Works</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right"></span>
          </span>
        </a>
      </li>


    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
