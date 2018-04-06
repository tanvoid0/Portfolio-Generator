@extends('panel.includes.app')
@section('main-section')

          <div class="col-xs-12">
            @include('auth.messages')
            <a href="{{ route('work.create') }}"><span class="btn btn-success">Add New Work</span></a>
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Your Works</h3>

                <div class="box-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input name="table_search" class="form-control pull-right" placeholder="Search" type="text">

                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Link</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  @foreach($works as $work)

                    <tr>
                      <td>{{ $work->title }}</td>
                      <td>
                        <img src="{{ asset('img/work/'.$work->image) }}" alt="No Image" style="height : 100px; width: 100px;">
                      </td>
                      <td>{{ $work->category }}</td>
                      <td>{{ $work->description }}</td>
                      <td>
                        <a href="{{ $work->link }}" target="_blank"><i class="fa fa-link"></i></a>
                      </td>
                      <td>
                        <a href="{{ route('work.edit', $work->id) }}"><i class="fa fa-edit"></i></a>
                      </td>
                      <td>
                        <form id="delete-form-{{ $work->id }}" method="post" action="{{ route('work.destroy', $work->id) }}" style="display: none;">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                        </form>
                        <a href=""  onclick="
                                if(confirm('Are you sure, you want to delete this?')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $work->id }}').submit();
                                } else {
                                event.preventDefault();
                                }
                                "><span class="fa fa-trash"></span>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody></table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>


  @endsection
