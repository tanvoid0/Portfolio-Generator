@extends('panel.includes.app')
@section('title', 'User')
@section('main-section')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-sm-8">
      <div class="card" style="">
        <div class="card-header">
          <img class="card-img-top" src="{{ asset('img/user/'.$user->image) }}" alt="No Image">
        </div>
        <div class="card-body" align="center">
          {{--<div class="card-header">--}}
            {{--Featured--}}
          {{--</div>--}}
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <h1>Name: {{ Auth::user()->name}}</h1>
              <p>{{ $user->designation}}</p>
            </li>
            <li class="list-group-item">
              <p>Username: {{ $user->username }}</p>
              <p>Date of Birth: {{ date('d-m-Y', strtotime($user->dob)) }}</p>
              <p>Phone Number: {{ $user->phone }}</p>
              <p>Address: {{ $user->address }}</p>
              <p>Email: {{ $user->email }}</p>
            <li class="list-group-item">
              <div style="margin: 24px 0;">
              <a href="https://facebook.com/{{ $user->fb }}" target="_blank"><i class="fa fa-globe"></i></a>
              <a href="{{ $user->fb }}"><i class="fa fa-facebook"></i></a>
              </div>
            </li>
          </ul>
          <a href="{{ route('user.edit', Auth::id())}}" class="btn btn-primary">Edit</a>
        </div>
      </div>
    </div>
  </div>
</div>


  @endsection
