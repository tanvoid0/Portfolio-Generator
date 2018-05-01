@extends('raw-admin.includes.app')
@section('breadcrumb')
  <li><a href="{{ route('user.index') }}"> User</a></li>
@endsection
@section('main-section')
  <div class="container">
    @include('auth/messages')
    <form role="form" action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <input type="hidden" value="{{ csrf_token() }}" name="_token">
      
      <div class="row justify-content-center">
        <div class="col" align="center">
          <div class="card" style="">
            <div class="card-header">
              <label for="image" class="form-control col-sm-4 col-form-label">Upload your image</label>
              <div class="col-sm-8">
                <input type="file" id="image" name="image" class="dropify"
                       @if($user->image != "")
                       data-default-file="{{ asset('img/user/'.$user->image) }}"
                  @endif
                />
              </div>
            </div>
            <div class="card-body">
              
              <div class="form-group">
                <label for="name" class="">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                       value="{{ $user->name }}">
              </div>
              
              <div class="form-group">
                <label for="designation" class="">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation"
                       value="{{ $user->designation }}">
              </div>
              
              <div class="form-group">
                <label for="username" class="">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                       value="{{ $user->username }}">
              </div>
              
              <div class="form-group">
                <label for="dob" class="">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth"
                       value="{{ date('Y-m-d', strtotime($user->dob))  }}">
              </div>
              
              <div class="form-group">
                <label for="phone" class="">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"
                       value="{{ $user->phone }}">
              </div>
              
              <div class="form-group">
                <label for="address" class="">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address"
                       value="{{ $user->address }}">
              </div>
              
              <div class="form-group">
                <label for="email" class="">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                       value="{{ $user->email }}">
              </div>
              
              <div class="form-group">
                <label for="web" class="">Personal Web/Blog</label>
                <input type="text" class="form-control" id="web" name="web" placeholder="Personal Web/Blog"
                       value="{{ $user->web }}">
              </div>
              
              <div class="form-group">
                <label for="fb" class="">FB Username</label>
                <input type="text" class="form-control" id="fb" name="fb" placeholder="Facebook Username"
                       value="{{ $user->fb }}">
              </div>
              <div class="col-sm-12">
                <input type="submit" class="btn btn-primary" value="Update"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

@endsection
