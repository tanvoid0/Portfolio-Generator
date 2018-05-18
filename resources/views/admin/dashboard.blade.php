@extends('admin.includes.app')
@section('main-section')
    <div class="page-body">
        <!-- Basic table card start -->
        <div class="card">
            <div class="card-header">
                <h5>AirCV Users</h5>
                <p>Details regarding Users</p>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-times close-card"></i></li>
                    </ul>
                </div>

            </div>
            <div class="card-block table-border-style">
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
                        <th class="col">Remove</th>

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
                            <td><a href="https://facebook.com/{{$user->fb}}"target="_blank"><i class="fa fa-facebook-f"></i></a> {{ $user->fb }}</td>
                            <td><a href="{{$user->web}}" target="_blank"><i class="fa fa-globe"></i></a> {{ $user->web }}</td>
                            <td><a href="id/{{ $user->name }}"><i class="fa fa-eye"></i></a></td>
                            <td>
                                <form id="delete-form-{{ $user->id }}" method="post" action="{{ route('user.destroy', $user->id) }}" style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>

                                <a  onclick="
                                        if(confirm('Are you sure, you want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $user->id }}').submit();
                                        } else {
                                        event.preventDefault();
                                        }
                                        "><i class="fa fa-trash"></i>
                                </a>
                            </td>
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
@endsection