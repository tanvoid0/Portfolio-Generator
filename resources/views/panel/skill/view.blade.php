 @extends('panel.includes.app')
@section('main-section')

          <div class="col-xs-12">
            @include('auth.messages')
            <a href="{{ route('skill.create') }}"><span class="btn btn-success">Add New Skill</span></a>
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Skills</h3>

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
                    <th>Name</th>
                    <th>Percentage</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  @foreach($skills as $skill)

                    <tr>
                      <td>{{ $skill->name }}</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: {{ $skill->percentage }}%;" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100">{{ $skill->percentage }}%</div>
                        </div>
                      </td>
                      <td>
                        <a href="{{ route('skill.edit', $skill->id) }}"><i class="fa fa-edit"></i></a>
                      </td>
                      <td>
                        <form id="delete-form-{{ $skill->id }}" method="post" action="{{ route('skill.destroy', $skill->id) }}" style="display: none;">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                        </form>
                        <a href=""  onclick="
                                if(confirm('Are you sure, you want to delete this?')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $skill->id }}').submit();
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
