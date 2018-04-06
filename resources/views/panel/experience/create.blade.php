@extends('panel.includes.app')
@section('breadcrumb')
  <li><a href="{{ route('experience.index') }}"> Experience</a></li>
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
            <h3 class="box-title">Add Experience</h3>
          </div>
        {{-- @include('includes/messages') --}}
        <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ route('experience.store') }}" method="post">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                  <label for="role">Role</label>
                  <input type="text" class="form-control" id="role" name="role" placeholder="Role" value="{{ old('role') }}">
                </div>
  
                <div class="form-group">
                  <label for="company">Company</label>
                  <input type="text" class="form-control" id="company" name="company" placeholder="Company" value="{{ old('company') }}">
                </div>
                
                
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" name="description" placeholder="Description">{{ old('description') }}</textarea>
                </div>
  
                <div class="form-group">
                  <label for="start_year">Start Year</label>
                  <input type="date" class="form-control" id="start_year" name="start_year" placeholder="Start Year" value="{{ old('start_year') }}">
                </div>
  
                <div class="form-group">
                  <label for="end_year">End Year</label>
                  <input type="date" class="form-control" id="end_year" name="end_year" placeholder="End Year" value="{{ old('end_year') }}">
                </div>
  
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a type="button" href="{{ route('experience.index') }}" class="btn btn-warning">Back</a>
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

