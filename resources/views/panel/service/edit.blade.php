@extends('panel.includes.app')
@section('breadcrumb')
    <li><a href="{{ route('service.index') }}"> Service</a></li>
@endsection
@section('main-section')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              Text Editors
              <small>Advanced form element</small>
          </h1>
          <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Forms</a></li>
              <li class="active">Editors</li>
          </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="box box-primary">
                      <div class="box-header with-border">
                          <h3 class="box-title">Titles</h3>
                      </div>
                  {{-- @include('includes/messages') --}}
                  <!-- /.box-header -->
                      <!-- form start -->
                      @include('auth.messages')
                      <form role="form" action="{{ route('service.update', $service->id) }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('PUT') }}
                          <div class="box-body">
                            <div class="form-group">
                                <label for="icon">Icon</label>
                                <img src="" alt="No image" name="icon" id="icon">
                            </div>

                              <div class="col-lg-offset-6 col-lg-6">
                                  <div class="form-group">
                                      <label for="name">Name</label>
                                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $service->name }}">
                                  </div>

                                  <div class="form-group">
                                      <label for="description">Description</label>
                                      <textarea class="form-control" id="description" name="description" placeholder="Description">{{ $service->description }}</textarea>
                                  </div>



                                  <div class="form-group">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                      <a type="button" href="{{ route('service.index') }}" class="btn btn-warning">Back</a>
                                  </div>
                              </div>
                          </div>

                          <!-- /.box-body -->



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
