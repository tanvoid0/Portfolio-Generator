<div id="education">
    <div class="bg-color-sky-light" data-auto-height="true">
        <div class="container content-lg">
            <div class="row">
                <div class="col-sm-3 sm-margin-b-30">
                    <div class="text-right sm-text-left">
                        <h2 class="margin-b-0">Education</h2>
                        <p>Academic Background.</p>
                        {{--<button class="btn btn-primary sweet-1" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Try It</button>--}}
                        {{--<button class="btn btn-primary sweet-2" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">Try It</button>--}}
                        {{--<button class="btn btn-primary sweet-3" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-3']);">Try It</button>--}}
                        {{--<button class="btn btn-primary sweet-4" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-4']);">Try It</button>--}}
                        {{--<button class="btn btn-primary sweet-5" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Try It</button>--}}

                        {{--@php($carbon = new Carbon())--}}
                        {{--<p>{{ Carbon::now()}}</p>--}}
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-1">

                    <div class="row row-space-2 margin-b-4">
                        @if(count($educations) > 0)

                            @foreach ($educations as $education)
                                <div class="col-md-4 md-margin-b-4">
                                    <div class="service" data-height="height">
                                        <div class="service-element">
                                            {{--<i class="service-icon icon-chemistry"></i>--}}
                                        </div>
                                        <div class="service-info">
                                            <h2 class="margin-b-5" style="color: #17a2b8">{{ $education->institution}}</h2>
                                            <p>{{$education->start_year}} - {{$education->end_year}}</p>
                                            <h3>{{ $education->degree }}</h3>
                                        </div>

                                    @if($panel)
                                        <!-- Button to Open the Modal -->
                                            {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">--}}
                                            {{--Open modal--}}
                                            {{--</button>--}}
                                            <button type="button" class="btn btn-default" data-toggle="modal"
                                                    data-target="#edu-edit-{{ $education->id }}"><i
                                                        class="glyphicon glyphicon-pencil"></i></button>


                                            <div class="modal fade" id="edu-edit-{{ $education->id }}" tabindex="-1"
                                                 role="dialog" aria-labelledby="edu-edit-{{ $education->id }}Label"
                                                 aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="edu-edit-{{ $education->id }}Label">Edit
                                                                Education</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form role="form"
                                                              action="{{ route('education.update', $education->id) }}"
                                                              method="post">
                                                            {{ csrf_field() }}
                                                            {{ method_field('PUT') }}

                                                            <div class="modal-body">
                                                                <div class="box-body">
                                                                    <div class="form-group">
                                                                        <label for="degree">Degree</label>
                                                                        <input type="text" class="form-control"
                                                                               id="degree" name="degree"
                                                                               placeholder="Degree"
                                                                               value="{{ $education->degree }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="institution">Institution</label>
                                                                        <input type="text" class="form-control"
                                                                               id="institution" name="institution"
                                                                               placeholder="Institution"
                                                                               value="{{ $education->institution }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="gpa">GPA</label>
                                                                        <input type="number" step="any"
                                                                               class="form-control" id="gpa" name="gpa"
                                                                               placeholder="GPA"
                                                                               value="{{ $education->gpa }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="scale">Scale</label>
                                                                        <input type="number" step="any"
                                                                               class="form-control" id="scale"
                                                                               name="scale" placeholder="scale"
                                                                               value="{{ $education->scale }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="institution">Institution</label>
                                                                        <input type="text" class="form-control"
                                                                               id="institution" name="institution"
                                                                               placeholder="Institution"
                                                                               value="{{ $education->institution }}">
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <label for="description">Description</label>
                                                                        <textarea class="form-control" maxlength="300"
                                                                                  id="description" name="description"
                                                                                  placeholder="Description">{{ $education->description }}</textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="start_year">Start Year</label>
                                                                        <select class="form-control" name="start_year"
                                                                                id="start_year">
                                                                            @for($i= (int)date("Y"); $i >=1950; $i--)
                                                                                <option value="{{ $i }}"
                                                                                        @if($i == $education->start_year)
                                                                                        selected
                                                                                        @endif
                                                                                >{{ $i }}</option>
                                                                            @endfor
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="end_year">End Year</label>
                                                                        <select class="form-control" name="end_year"
                                                                                id="end_year">
                                                                            @for($i= (int)date("Y") + 6; $i >=1950; $i--)
                                                                                <option value="{{ $i }}"
                                                                                        @if($i == $education->end_year)
                                                                                        selected
                                                                                        @endif
                                                                                >{{ $i }}</option>
                                                                            @endfor
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <!-- /.box-body -->


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close
                                                                </button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes
                                                                </button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>

                                            <form id="delete-form-{{ $education->id }}" method="post"
                                                  action="{{ route('education.destroy', $education->id) }}"
                                                  style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>

                                            <a onclick="
                                                    if(confirm('Are you sure, you want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $education->id }}').submit();
                                                    } else {
                                                    event.preventDefault();
                                                    }
                                                    ">
                                                <button class="btn btn-default"><i class="icon-trash"></i></button>
                                            </a>

                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h3>No Education Added Yet!</h3>
                        @endif

                    </div>
                    <!--// end row -->
                    @if($panel)
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#edu-add"><i
                                    class="glyphicon glyphicon-plus"></i> Add Education
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="edu-add" tabindex="-1" role="dialog" aria-labelledby="edu-addLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="edu-addLabel">Add Education</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form role="form" action="{{ route('education.store') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="degree">Degree</label>
                                                    <input type="text" class="form-control" id="degree" name="degree"
                                                           placeholder="Degree" value="">
                                                </div>

                                                <div class="form-group">
                                                    <label for="institution">Institution</label>
                                                    <input type="text" class="form-control" id="institution"
                                                           name="institution" placeholder="Institution" value="">
                                                </div>

                                                <div class="form-group">
                                                    <label for="gpa">GPA</label>
                                                    <input type="number" step="any" class="form-control" id="gpa"
                                                           name="gpa" placeholder="GPA" value="">
                                                </div>

                                                <div class="form-group">
                                                    <label for="scale">Scale</label>
                                                    <input type="number" step="any" class="form-control" id="scale"
                                                           name="scale" placeholder="scale" value="">
                                                </div>


                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea class="form-control" maxlength="300" id="description"
                                                              name="description" placeholder="Description"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="start_year">Start Year</label>
                                                    <select class="form-control" name="start_year" id="start_year">
                                                        @for($i= (int)date("Y"); $i >=1950; $i--)
                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="end_year">End Year</label>
                                                    <select class="form-control" name="end_year" id="end_year">
                                                        @for($i= (int)date("Y") + 6; $i >=1950; $i--)
                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- /.box-body -->


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
                {{--<button class="btn btn-info" id="btn-edu-add">Add</button>--}}
                {{--<button class="btn btn-success" id="btn-edu-edit">Edit</button>--}}

                {{--</div>--}}
            </div>
            <!--// end row -->
        </div>
    </div>
</div>
