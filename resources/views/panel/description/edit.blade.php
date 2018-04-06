@extends('panel.includes.app')
@section('breadcrumb')
    <li><a href="{{ route('description.index') }}"> Description</a></li>
  @endsection
@section('main-section')
  
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          @include('auth/messages')
          
          <div class="box-header with-border">
            <h3 class="box-title">Edit Descriptions</h3>
          </div>
        {{-- @include('includes/messages') --}}
        <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ route('description.update', $description->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="box-body">
              <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $description->title }}">
                </div>
                
                
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" name="description" placeholder="Description">{{ $description->description }}</textarea>
                  {{-- <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="{{ $description->description }}"> --}}
                </div>
                
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a type="button" href="{{ route('description.index') }}" class="btn btn-warning">Back</a>
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
