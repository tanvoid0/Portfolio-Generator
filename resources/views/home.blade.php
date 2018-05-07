@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Hello Guest!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Welcome To CV Generator! <br>Please Login or register to get started!</h3>
                    <h3>List of the Users:</h3>
                        <table class="table table-hover table-responsive" >
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation</th>
                                <th class="col">Email</th>
                                <th class="col">Facebook</th>
                                <th class="col">Web</th>
                                <th class="col">AirCV</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td><img class="img-thumbnail" src="{{ asset('img/user/'. $user->image) }}" alt="No Image" style="width: 100px;"></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->designation }}</td>
                                <td><a href="mailto:{{ $user->email }}"><i class="fa fa-envelope"></i></a> {{ $user->email }}</td>
                                <td><a href="https://facebook.com/{{$user->fb}}"target="_blank"><i class="fab fa-facebook-f"></i></a> {{ $user->fb }}</td>
                                <td><a href="{{$user->web}}" target="_blank"><i class="fa fa-globe"></i></a> {{ $user->web }}</td>
                                <td><a href="id/{{ $user->name }}"><i class="far fa-eye"></i></a></td>
                                @php($i++)
                            </tr>
                            @endforeach
                            {{--<tr>--}}
                                {{--<th scope="row">2</th>--}}
                                {{--<td>Jacob</td>--}}
                                {{--<td>Thornton</td>--}}
                                {{--<td>@fat</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<th scope="row">3</th>--}}
                                {{--<td colspan="2">Larry the Bird</td>--}}
                                {{--<td>@twitter</td>--}}
                            {{--</tr>--}}
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
