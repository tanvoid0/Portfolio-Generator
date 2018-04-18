@extends('raw-admin.includes.app')
@section('header')
  <script>
      function resizeIframe(obj) {
          obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
      }
  </script>
  @endsection
@section('main-section')
  <div class="container-fluid">
      <div class="row">
        <div class="col">
            @if(Auth::user()->username)
            <a href="{{ route('index', Auth::user()->username ) }}" target="_blank">
                <button class="btn btn-primary">View your portfolio</button>
            </a>
                @endif
        </div>
      </div>
      <br>
      {{--<div class="row">--}}

          {{--<div class="col-lg-3 col-xs-6">--}}
              {{--<div class="small-box bg-aqua">--}}
                  {{--<div class="inner">--}}
                      {{--<h3>{{ $skills->count() }}</h3>--}}

                      {{--<p>New Orders</p>--}}
                  {{--</div>--}}
                  {{--<div class="icon">--}}
                      {{--<i class="ion ion-bag"></i>--}}
                  {{--</div>--}}
                  {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
              {{--</div>--}}
          {{--</div>--}}

          {{--<div class="col-lg-3 col-xs-6">--}}
              {{--<div class="small-box bg-aqua">--}}
                  {{--<div class="inner">--}}
                      {{--<h3>150</h3>--}}

                      {{--<p>New Orders</p>--}}
                  {{--</div>--}}
                  {{--<div class="icon">--}}
                      {{--<i class="ion ion-bag"></i>--}}
                  {{--</div>--}}
                  {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
              {{--</div>--}}
          {{--</div>--}}
      {{--</div>--}}
  </div>
@endsection

@section('footer')

  @endsection