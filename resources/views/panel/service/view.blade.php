@extends('panel.includes.app')
@section('main-section')

          <div class="col-xs-12">
            @include('auth.messages')
            <a href="{{ route('service.create') }}"><span class="btn btn-success">Add New Service</span></a>
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Responsive Hover Table</h3>

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
                    <th>Icon</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  @foreach($services as $service)

                    <tr>
                      <td>{{ $service->icon }}</td>
                      <td>{{ $service->name }}</td>
                      <td>{{ $service->description }}</td>
                      <td>
                          <a href="{{ route('service.edit', $service->id) }}"><span class="glyphicon glyphicon-edit"></span></a>
                      </td>
                      <td>
                        <form id="delete-form-{{ $service->id }}" method="post" action="{{ route('service.destroy', $service->id) }}" style="display: none;">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                        <a href=""  onclick="
                                if(confirm('Are you sure, you want to delete this?')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $service->id }}').submit();
                                } else {
                                event.preventDefault();
                                }
                                "><span class="glyphicon glyphicon-trash"></span>
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
