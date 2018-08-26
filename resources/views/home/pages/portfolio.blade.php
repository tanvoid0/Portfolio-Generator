<!--==========================
  Portfolio Section
============================-->
<section id="portfolio">
    <div class="container wow fadeInUp">
        <div class="section-header">
            <h3 class="section-title">Portfolio</h3>
            <p class="section-description">Show case of some random projects</p>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    {{--<li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>--}}
                    {{--<li data-filter="--}}
                        {{--@foreach($categories as $category)--}}
                            {{--{{ ".filter-".$category }}--}}
                            {{--@if( !next( $categories ) )--}}
                                {{--{{", "}}--}}
                            {{--@endif--}}
                        {{--@endforeach--}}
                            {{--" class="filter-active">All</li>--}}
                    {{--@foreach($categories as $category)--}}
                        {{--<li data-filter=".filter-{{$category}}">{{$category}}</li>--}}
                    {{--@endforeach--}}


                    {{--<li data-filter=".filter-app">App</li>--}}
                    {{--<li data-filter=".filter-card">Card</li>--}}
                    {{--<li data-filter=".filter-logo">Logo</li>--}}
                    {{--<li data-filter=".filter-web">Web</li>--}}
                </ul>
            </div>
        </div>

        <div class="row" id="portfolio-wrapper">
            @foreach($projects as $project)
            <div class="col-lg-3 col-md-6"  style="padding: 20px;">
                {{--<a href="">--}}
                    <img src="{{ asset('img/work/'.$project->image) }}" alt="" style="width:100%; height: 230px;">
                    <div class="details" >
                        <h4>{{ $project->title }}</h4>
                        <span>{{ $project->category }}</span>
                    </div>
                {{--</a>--}}
            </div>
            @endforeach
            {{----}}
            {{--<div class="col-lg-3 col-md-6 portfolio-item filter-app">--}}
                {{--<a href="">--}}
                    {{--<img src="{{ asset('assets/home/img/portfolio/app1.jpg') }}" alt="">--}}
                    {{--<div class="details">--}}
                        {{--<h4>App 1</h4>--}}
                        {{--<span>Alored dono par</span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="col-lg-3 col-md-6 portfolio-item filter-web">--}}
                {{--<a href="">--}}
                    {{--<img src="{{ asset('assets/home/img/portfolio/web2.jpg') }}" alt="">--}}
                    {{--<div class="details">--}}
                        {{--<h4>Web 2</h4>--}}
                        {{--<span>Alored dono par</span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="col-lg-3 col-md-6 portfolio-item filter-app">--}}
                {{--<a href="">--}}
                    {{--<img src="{{ asset('assets/home/img/portfolio/app3.jpg') }}" alt="">--}}
                    {{--<div class="details">--}}
                        {{--<h4>App 3</h4>--}}
                        {{--<span>Alored dono par</span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="col-lg-3 col-md-6 portfolio-item filter-card">--}}
                {{--<a href="">--}}
                    {{--<img src="{{ asset('assets/home/img/portfolio/card1.jpg') }}" alt="">--}}
                    {{--<div class="details">--}}
                        {{--<h4>Card 1</h4>--}}
                        {{--<span>Alored dono par</span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="col-lg-3 col-md-6 portfolio-item filter-card">--}}
                {{--<a href="">--}}
                    {{--<img src="{{ asset('assets/home/img/portfolio/card2.jpg') }}" alt="">--}}
                    {{--<div class="details">--}}
                        {{--<h4>Card 2</h4>--}}
                        {{--<span>Alored dono par</span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="col-lg-3 col-md-6 portfolio-item filter-web">--}}
                {{--<a href="">--}}
                    {{--<img src="{{ asset('assets/home/img/portfolio/web3.jpg') }}" alt="">--}}
                    {{--<div class="details">--}}
                        {{--<h4>Web 3</h4>--}}
                        {{--<span>Alored dono par</span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="col-lg-3 col-md-6 portfolio-item filter-card">--}}
                {{--<a href="">--}}
                    {{--<img src="{{ asset('assets/home/img/portfolio/card3.jpg') }}" alt="">--}}
                    {{--<div class="details">--}}
                        {{--<h4>Card 3</h4>--}}
                        {{--<span>Alored dono par</span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="col-lg-3 col-md-6 portfolio-item filter-app">--}}
                {{--<a href="">--}}
                    {{--<img src="{{ asset('assets/home/img/portfolio/app2.jpg') }}" alt="">--}}
                    {{--<div class="details">--}}
                        {{--<h4>App 2</h4>--}}
                        {{--<span>Alored dono par</span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="col-lg-3 col-md-6 portfolio-item filter-logo">--}}
                {{--<a href="">--}}
                    {{--<img src="{{ asset('assets/home/img/portfolio/logo1.jpg') }}" alt="">--}}
                    {{--<div class="details">--}}
                        {{--<h4>Logo 1</h4>--}}
                        {{--<span>Alored dono par</span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="col-lg-3 col-md-6 portfolio-item filter-logo">--}}
                {{--<a href="">--}}
                    {{--<img src="{{ asset('assets/home/img/portfolio/logo3.jpg') }}" alt="">--}}
                    {{--<div class="details">--}}
                        {{--<h4>Logo 3</h4>--}}
                        {{--<span>Alored dono par</span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="col-lg-3 col-md-6 portfolio-item filter-web">--}}
                {{--<a href="">--}}
                    {{--<img src="{{ asset('assets/home/img/portfolio/web1.jpg') }}" alt="">--}}
                    {{--<div class="details">--}}
                        {{--<h4>Web 1</h4>--}}
                        {{--<span>Alored dono par</span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="col-lg-3 col-md-6 portfolio-item filter-logo">--}}
                {{--<a href="">--}}
                    {{--<img src="{{ asset('assets/home/img/portfolio/logo2.jpg') }}" alt="">--}}
                    {{--<div class="details">--}}
                        {{--<h4>Logo 2</h4>--}}
                        {{--<span>Alored dono par</span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}

        </div>

    </div>
</section><!-- #portfolio -->