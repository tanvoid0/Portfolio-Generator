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

