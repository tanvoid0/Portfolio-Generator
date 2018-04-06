@extends('panel.includes.app')
@section('breadcrumb')
    <li><a href="{{ route('work.index') }}"> Work</a></li>
@endsection
@section('main-section')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    @include('auth/messages')

                    <div class="box-header with-border">
                        <h3 class="box-title">Add Skill</h3>
                    </div>
                {{-- @include('includes/messages') --}}
                <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('work.update', $work->id) }}" method="post"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="box-body">
                            <div class="col-lg-offset-3 col-lg-6">
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

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a type="button" href="{{ route('work.index') }}" class="btn btn-warning">Back</a>
                                </div>
                            </div>
                        </div>

                        <!-- /.box-body -->



                    </form>
                </div>
                <!-- /.box -->


            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->


@endsection
