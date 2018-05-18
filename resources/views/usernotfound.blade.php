@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"><h2>User Not Found!</h2></div>

                <div class="card-body">
                        <div class="alert alert-danger">
                            Please insert a valid Username in your url or go to <a href="{{ url('/') }}">Index</a> page
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
