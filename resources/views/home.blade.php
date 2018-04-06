@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello Guest!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Welcome To CV Generator! <br>Please Login or register to get started!</h3>
                    <p class="text-green">Alternatively see your portfolio after registration like this : <a href="{{ route('index', 'yourname') }}">{{ route('index', 'yourname') }}</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
