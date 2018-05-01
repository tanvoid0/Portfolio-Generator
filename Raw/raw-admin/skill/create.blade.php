@extends('raw-admin.includes.app')
@section('breadcrumb')
    <li><a href="{{ route('skill.index') }}"> Skill</a></li>
@endsection
@section('main-section')

    <!-- Main content -->
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
                    <form role="form" action="{{ route('skill.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="col-lg-offset-3 col-lg-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                                </div>

                                <div class="form-group">
                                    <label for="percentage">Percentage</label>
                                    <input type="number" class="form-control" id="percentage" name="percentage" placeholder="Percentage" value="{{ old('percentage') }}">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a type="button" href="{{ route('skill.index') }}" class="btn btn-warning">Back</a>
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

