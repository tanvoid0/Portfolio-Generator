@extends('admin.includes.app')
@section('main-section')
    <div class="page-body">
        <!-- Basic table card start -->
        <div class="card">
            <div class="card-header">
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
            <div class="card-body">
                <div class="row justify-content-md-center text-center">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="promo-block-divider">
                            <h2 class="">Admin Profile</h2>

                            <img src="{{ asset('img/user/'.$user->image) }}" class="img-thumbnail"/>
                            <br>
                            <h3 class="text-info">Name: {{ $user->name }}</h3>
                            <h3 class="text-info">Designation: {{ $user->designation }}</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-4 btn-group">
                        <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#profile-update">
                            <i class="fa fa-pencil"></i> Edit Profile
                        </button>
                    </div>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="profile-update" tabindex="-1" role="dialog"
                     aria-labelledby="profile-updateLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="profile-updateLabel">Update</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form role="form" id="profile-edit-form" action="{{ route('user.update', $user->id) }}"
                                  method="post" enctype="multipart/form-data">

                                <div class="modal-body">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                    <div class="promo-block-divider">
                                        <label for="image" class="">Update Image</label>

                                        <input type="file" id="image" name="image" class="dropify"
                                               @if($user->image != "")
                                               data-default-file="{{ asset('img/user/'.$user->image) }}"
                                                @endif
                                        />

                                        <div class="form-group">
                                            <label for="name" class="">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                   placeholder="Name"
                                                   value="{{ $user->name }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="designation" class="">Designation</label>
                                            <input type="text" class="form-control" id="designation" name="designation"
                                                   placeholder="Designation"
                                                   value="{{ $user->designation }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection