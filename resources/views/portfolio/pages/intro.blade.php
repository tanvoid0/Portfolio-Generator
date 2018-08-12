<!--========== SLIDER ==========-->
<div class="promo-block parallax-window" data-parallax="scroll" data-image-src="
    @if($user->image == "")
        {{ asset('img/1920x1080/01.jpg')}}
    @else
        {{ asset('img/user/'.$user->image) }}
    @endif
        ">
		<div class="container">
            @if(session('msg'))
            <div id="notify" class="alert alert-{{ session('type') }} alert-dismissible fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{session('msg')}} <strong>{{ session('action') }}!</strong>
            </div>
            @php(session (['msg' => "", "action" => "", "type" => ""]))
            @endif
				<div class="row" id="intro">
						<div class="col-sm-6">
								<div class="promo-block-divider">
										<h1 class="promo-block-title">{{ $user->name }}</h1>
										<p class="promo-block-text">{{ $user->designation }}</p>
								</div>
								<ul class="list-inline">
										<li><a href="{{ $user->web }}" target="_blank" class="social-icons"><i class="icon-globe"></i></a></li>
										<li><a href="https://facebook.com/{{ $user->fb }}" target="_blank" class="social-icons"><i class="icon-social-facebook"></i></a></li>
                                        <li><a href="{{ route('cv.show', $user->username) }}" target="_blank" class="social-icons"><i class="icon-doc"></i></a></li>
								</ul>
						</div>
				</div>

            @if($panel)
            <div class="row">
                <div class="col-sm-6 btn-group">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#intro-update"><i class="glyphicon glyphicon-pencil"></i>  Edit Intro</button>
                    <a href="{{route('index', $user->name)}}" target="_blank">
                        <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-eye"></i> Public profile</button>
                    </a>
                </div>

            </div>

            <!-- Modal -->
            <div class="modal fade" id="intro-update" tabindex="-1" role="dialog" aria-labelledby="intro-updateLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="intro-updateLabel">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form role="form" id="intro-edit-form" action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">

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
                                        <label for="fb" class="">Facebook Account</label>
                                        <input type="text" class="form-control" id="fb" name="fb" placeholder="Facebook Account"
                                               value="{{ $user->fb }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="web" class="">Web</label>
                                        <input type="text" class="form-control" id="web" name="web" placeholder="Web"
                                               value="{{ $user->web }}">
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
            @endif
				<!--// end row -->
		</div>
</div>
<!--========== SLIDER ==========-->
