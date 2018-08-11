<div id="works">
    <div class="bg-color-sky-light" data-auto-height="true">
        <div class="container content-lg">
            <div class="row">
                <div class="col-sm-3 sm-margin-b-30">
                    <div class="text-right sm-text-left">
                        <h2 class="margin-b-0">Works</h2>
                        <p>I build the real value.</p>

                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-1">

                    <div class="row row-space-2 margin-b-4">
                        @if(count($works) > 0)

                            @foreach ($works as $work)
                                <div class="col-md-4 md-margin-b-4" style="padding: 20px;">
                                    <div class="work work-popup-trigger" data-toggle="tooltip" title="Click for details!">
                                        <div class="work-overlay">
                                            <!-- Card -->
                                            <div class="card" style="padding: 5px;">

                                                <!-- Card image -->
                                                <img class="card-img-top"
                                                     src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg"
                                                     alt="No Image!" style="width:100%; height: 230px;">

                                                <!-- Card content -->
                                                <div class="card-body">

                                                    <!-- Title -->
                                                    <h4 class="card-title"><a>{{ $work->title }}</a></h4>
                                                    <!-- Text -->
                                                    <p class="card-text">{{ $work->category }}</p>
                                                    {{--<br>--}}
                                                    <!-- Button -->
                                                    {{--<a href="#" class="btn btn-primary">Details</a>--}}

                                                </div>

                                            </div>
                                            <!-- Card -->
                                        </div>

                                        <div class="work-popup-overlay">
                                            <div class="work-popup-content">
                                                <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                                <div class="margin-b-30">
                                                    <h3 class="margin-b-5">{{ $work->tiltle }}</h3>
                                                    <span>{{$work->tiltle}}</span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                        <div class="margin-t-10 sm-margin-t-0">
                                                            <p>{{$work->description}}</p>
                                                            {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
                                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>--}}
                                                            <ul class="list-inline work-popup-tag">
                                                            {{--<li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>--}}
                                                            {{--<li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>--}}
                                                            {{--<li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">work</a></li>--}}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="work-popup-close">

                                                    </a>

                                                    <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Title:</strong>{{$work->title}}</p>
                                                    <p class="margin-b-5"><strong>Category:</strong>{{ $work->category }}</p>
                                                    @if($work->link != "")
                                                        <p class="margin-b-5"><strong><a href="{{$work->link}}" class="btn btn-default" target="_blank">Project link</a> </strong></p>
                                                    @endif
                                                    {{--<p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>--}}
                                                    {{--<p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>--}}
                                                    {{--<p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>--}}
                                                    {{--<p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>--}}
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if($panel)
                                        <button type="button" class="btn btn-default"   data-toggle="modal" data-target="#work-edit-{{ $work->id }}"><i class="glyphicon glyphicon-pencil"></i></button>
                                        <div class="modal fade" id="work-edit-{{ $work->id }}" tabindex="-1" role="dialog" aria-labelledby="work-edit-{{ $work->id }}Label" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="work-edit-{{ $work->id }}Label">Update Works</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form role="form" action="{{ route('work.update', $work->id) }}" method="post"  enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                        {{ method_field('PUT') }}

                                                        <div class="modal-body">

                                                            <div class="box-body">
                                                                <div class="form-group">
                                                                    <label for="title">Title</label>
                                                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $work->title }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="image" class="form-control col-sm-4 col-form-label">Upload Project Image</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="file" id="image" name="image" class="dropify" data-default-file="{{ asset('img/work/'.$work->image) }}" />
                                                                    </div>
                                                                </div>
                                                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                                                                <div class="form-group">
                                                                    <label for="category">Category</label>
                                                                    <input type="text" class="form-control" id="category" name="category" placeholder="Category" value="{{ $work->category }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="description">Description</label>
                                                                    <textarea class="form-control" id="description" name="description" placeholder="Description">{{ $work->description }}</textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="link">Link</label>
                                                                    <input type="url" class="form-control" id="link" name="link" placeholder="Link" value="{{ $work->link }}">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>



                                        <form id="delete-form-{{ $work->id }}" method="post" action="{{ route('work.destroy', $work->id) }}" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>

                                        <a  onclick="
                                                if(confirm('Are you sure, you want to delete this?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $work->id }}').submit();
                                                } else {
                                                event.preventDefault();
                                                }
                                                "><button type="button" class="btn btn-default"><i class="icon-trash"></i></button>
                                        </a>
                                    @endif
                                </div>

                            @endforeach
                        @else
                            <h3>No Experience Added Yet!</h3>
                        @endif

                        <br>
                    </div>
                    <!--// end row -->
                    @if($panel)
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exp-add"><i
                                    class="glyphicon glyphicon-plus"></i> Add Experience
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exp-add" tabindex="-1" role="dialog" aria-labelledby="exp-addLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exp-addLabel">Add Experience</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form role="form" action="{{ route('experience.store') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="role">Role</label>
                                                    <input type="text" class="form-control" id="role" name="role"
                                                           placeholder="Role" value="{{ old('role') }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="company">Company</label>
                                                    <input type="text" class="form-control" id="company" name="company"
                                                           placeholder="Company" value="{{ old('company') }}">
                                                </div>


                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea class="form-control" id="description" maxlength="30"
                                                              name="description"
                                                              placeholder="Description">{{ old('description') }}</textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="start_year">Start Year</label>
                                                    <select class="form-control" name="start_year" id="start_year">
                                                        @for($i= 2018; $i >=1950; $i--)
                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="end_year">End Year</label>
                                                    <select class="form-control" name="end_year" id="end_year">
                                                        @for($i= 2018; $i >=1950; $i--)
                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select></div>
                                            </div>

                                            <!-- /.box-body -->


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endif

                </div>
                {{--<div class="row">--}}
                {{--<button class="btn btn-info" id="btn-exp-add">Add</button>--}}
                {{--<button class="btn btn-success" id="btn-exp-edit">Edit</button>--}}

                {{--</div>--}}
            </div>
            <!--// end row -->
        </div>
    </div>
</div>
