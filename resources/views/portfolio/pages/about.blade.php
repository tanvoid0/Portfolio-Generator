<div id="about">
    <div class="container content-lg">
        <div class="row">
            <div class="col-sm-3 sm-margin-b-30">
                <div class="text-right sm-text-left">
                    <h2 class="margin-b-0">About</h2>
                    <p>What I am all about.</p>
                </div>
            </div>

            <div class="col-sm-8 col-sm-offset-1">
                <div class="row" id="about-detail">
                    <div class="margin-b-60">
                        <p>{{ $user->description }}</p>
                        {{-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> --}}
                        {{--@foreach ($descriptions as $description)--}}
                        {{--<p>{{ $description->description }}</p>--}}
                        {{--@endforeach--}}
                        @if($panel)
                            <button type="button" class="btn btn-default" data-toggle="modal"
                                    data-target="#description-edit"><i
                                        class="glyphicon glyphicon-pencil"></i></button>

                            <div class="modal fade" id="description-edit" tabindex="-1"
                                 role="dialog" aria-labelledby="description-editTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="description-editTitle">Update
                                                Description</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form role="form"
                                                  action="{{ route('user.update', $user->id) }}"
                                                  method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('PUT') }}
                                                <div class="promo-block-divider">
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea class="form-control"
                                                               id="description" name="description"
                                                               placeholder="Write Something About Yourself"
                                                                  minlength="10" maxlength="">{{ $user->description }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="row">
                                                        <div class="col">
                                                            <button class="btn btn-secondary" type="button"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                            <button class="btn btn-primary" type="submit">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                    </div>
                @if(count($skills) > 0)

                    <!-- Progress Box -->
                        @foreach ($skills as $skill)
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="progress-box">
                                        <h5>{{ $skill->name }} <span class="color-heading pull-right">{{ $skill->percentage}}
                                                %</span></h5>

                                        <div class="progress">
                                            <div class="progress-bar bg-color-base" role="progressbar"
                                                 data-width="{{$skill->percentage}}"></div>

                                        </div>
                                    </div>
                                </div>

                                @if($panel)
                                <div class="col-sm-2">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default" data-toggle="modal"
                                                data-target="#skill-edit-{{ $skill->id }}"><i
                                                    class="glyphicon glyphicon-pencil"></i></button>

                                        <div class="modal fade" id="skill-edit-{{ $skill->id }}" tabindex="-1"
                                             role="dialog" aria-labelledby="skill-editTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="skill-editTitle">Update
                                                            Skill</h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form role="form"
                                                              action="{{ route('skill.update', $skill->id) }}"
                                                              method="post">
                                                            {{ csrf_field() }}
                                                            {{ method_field('PUT') }}
                                                            <div class="promo-block-divider">
                                                                            <div class="form-group">
                                                                                <label for="name">Skill Name</label>
                                                                                <input type="text" class="form-control"
                                                                                       id="name" name="name"
                                                                                       placeholder="Skill Name"
                                                                                       value="{{ $skill->name }}">
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="percentage">Percentage</label>
                                                                                <input type="number"
                                                                                       class="form-control"
                                                                                       id="percentage" name="percentage"
                                                                                       placeholder="Percentage" max="100"
                                                                                       value="{{ $skill->percentage }}">
                                                                            </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <button class="btn btn-secondary" type="button"
                                                                                data-dismiss="modal">Close
                                                                        </button>
                                                                        <button class="btn btn-primary" type="submit">
                                                                            Update
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <form id="delete-form-{{ $skill->id }}" method="post"
                                              action="{{ route('skill.destroy', $skill->id) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <a onclick="
                                                    if(confirm('Are you sure, you want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $skill->id }}').submit();
                                                    } else {
                                                    event.preventDefault();
                                                    }
                                                    ">
                                                <button type="button" class="btn btn-default"><i class="icon-trash"></i></button>
                                            </a>
                                        </form>
                                    </div>
                                    {{--<button type="submit"><i class=""></i></button>--}}

                                </div>
                                @endif
                            </div>
                        @endforeach
                    @else
                        <h3>No Skills Added Yet!</h3>
                    @endif
                    <br>

                </div>
                @if($panel)
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#skill-add"><i
                            class="glyphicon glyphicon-plus"></i> Add Skill
                </button>
                {{--Add About--}}
                <div class="modal fade" id="skill-add" tabindex="-1" role="dialog" aria-labelledby="skill-addTitle"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="skill-addTitle">Add Skill</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form role="form" action="{{ route('skill.store') }}" method="post">
                                <div class="modal-body">
                                    {{ csrf_field() }}
                                    <div class="box-body">
                                            <div class="form-group">
                                                <label for="name">Skill Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                       placeholder="Skill Name" value="{{ old('name') }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="percentage">Percentage</label>
                                                <input type="number" class="form-control" id="percentage"
                                                       name="percentage" placeholder="Percentage" max="100"
                                                       value="{{ old('percentage') }}">
                                            </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="submit">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                    @endif
            </div>
        </div>

    </div>
    <!--// end row -->
</div>
</div>
