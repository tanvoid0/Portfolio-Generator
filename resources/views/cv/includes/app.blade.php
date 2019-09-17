<!DOCTYPE html>
<html>
<head>
    @include('cv.includes.head')
</head>
<body id="top">
    <div id="cv" class="instaFade">
        <div class="mainDetails">
            <div id="headshot" class="quickFade">
                {{--<img src="{{ asset('assets/cv/headshot.jpg') }}" alt="Alan Smith"/>--}}
                <img src="{{ substr($user->image, 0,4) != "http"? asset($user->image) : $user->image  }}" alt="No Image"/>
            </div>

            <div id="name">
                {{--<h1 class="quickFade delayTwo">Joe Bloggs</h1>--}}
                <h1 class="quickFade delayTwo">{{ $user->name }}</h1>

                {{--<h2 class="quickFade delayThree">Job Title</h2>--}}
                <h2 class="quickFade delayThree">{{ $user->designation }}</h2>
            </div>

            <div id="contactDetails" class="quickFade delayFour">
                <ul>
                    {{--<li>e: <a href="mailto:joe@bloggs.com" target="_blank">joe@bloggs.com</a></li>--}}
                    {{--<li>w: <a href="http://www.bloggs.com">www.bloggs.com</a></li>--}}
                    {{--<li>m: 01234567890</li>--}}
                    <button onclick="download()" id="download_btn">Download CV</button>
                    @if($user->email)
                        <li>email: <a href="mailto:{{ $user->email }}" target="_blank">{{ $user->email }}</a></li>
                    @endif
                    @if($user->web)
                        <li>web: <a href="{{ $user->web }}">{{ $user->web }}</a></li>
                    @endif
                    @if($user->phone)
                        <li>phone: {{ $user->phone }}</li>
                    @endif
                </ul>
            </div>
            <div class="clear"></div>
        </div>

        <div id="mainArea" class="quickFade delayFive">
            <section>
                <article>
                    <div class="sectionTitle">
                        <h1>Personal Profile</h1>
                    </div>

                    <div class="sectionContent">
                        {{ $user->description }}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor metus, interdum at--}}
                            {{--scelerisque in, porta at lacus. Maecenas dapibus luctus cursus. Lorem ipsum dolor sit amet,--}}
                            {{--consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non--}}
                            {{--consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum--}}
                            {{--porttitor.</p>--}}

                    </div>
                </article>
                <div class="clear"></div>
            </section>


            <section>
                <div class="sectionTitle">
                    <h1>Work Experience</h1>
                </div>

                <div class="sectionContent">
                    @foreach($experiences as $experience)
                        <article>
                            <h2>{{ $experience->role }} at {{ $experience->company }}</h2>
                            <p class="subDetails">{{ $experience->start_year }} - {{ $experience->end_year }}</p>
                            <p> {{ $experience->description }}</p>
                        </article>
                    @endforeach
                    {{--<article>--}}
                        {{--<h2>Job Title at Company</h2>--}}
                        {{--<p class="subDetails">April 2011 - Present</p>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus--}}
                            {{--hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien--}}
                            {{--quis libero interdum porttitor.</p>--}}
                    {{--</article>--}}

                    {{--<article>--}}
                        {{--<h2>Job Title at Company</h2>--}}
                        {{--<p class="subDetails">Janruary 2007 - March 2011</p>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus--}}
                            {{--hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien--}}
                            {{--quis libero interdum porttitor.</p>--}}
                    {{--</article>--}}

                    {{--<article>--}}
                        {{--<h2>Job Title at Company</h2>--}}
                        {{--<p class="subDetails">October 2004 - December 2006</p>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus--}}
                            {{--hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien--}}
                            {{--quis libero interdum porttitor.</p>--}}
                    {{--</article>--}}
                </div>
                <div class="clear"></div>
            </section>


            <section>
                <div class="sectionTitle">
                    <h1>Key Skills</h1>
                </div>

                <div class="sectionContent">
                    <ul class="keySkills">
                        @foreach($skills as $skill)
                            <li> {{$skill->name}}</li>
                        @endforeach
                        {{--<li>A Key Skill</li>--}}

                    </ul>
                </div>
                <div class="clear"></div>
            </section>


            <section>
                <div class="sectionTitle">
                    <h1>Education</h1>
                </div>

                <div class="sectionContent">
                    @foreach($educations as $education)
                        <article>
                            <h2>{{ $education->institution }}</h2>
                            <p class="subDetails">{{ $education->degree }}</p>
                            <p class="subDetails">{{ $education->start_year }} - {{ $education->end_year }}</p>
                            <p>{{ $education->description }}</p>
                        </article>
                    @endforeach

                    {{--<article>--}}
                        {{--<h2>College/University</h2>--}}
                        {{--<p class="subDetails">Qualification</p>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus--}}
                            {{--hendrerit. Curabitur non consequat enim.</p>--}}
                    {{--</article>--}}

                    {{--<article>--}}
                        {{--<h2>College/University</h2>--}}
                        {{--<p class="subDetails">Qualification</p>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus--}}
                            {{--hendrerit. Curabitur non consequat enim.</p>--}}
                    {{--</article>--}}
                </div>
                <div class="clear"></div>
            </section>

        </div>
    </div>
    @include('cv.includes.script')
</body>
</html>