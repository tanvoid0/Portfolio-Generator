<meta charset="utf-8"/>
<title>{{ $user->name }}</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<!-- GLOBAL MANDATORY STYLES -->
{{--<link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">--}}
<link rel="stylesheet" href="{{ asset('assets/portfolio/fonts/google-fonts.css') }}">
<link href="{{ asset('assets/portfolio/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/portfolio/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

<!-- PAGE LEVEL PLUGIN STYLES -->
<link href="{{ asset('assets/portfolio/css/animate.css')}}" rel="stylesheet">

<!-- THEME STYLES -->
<link href="{{ asset('assets/portfolio/css/layout.min.css')}}" rel="stylesheet" type="text/css"/>

{{--Dropify start--}}
{{--<link rel="stylesheet" href="dist/css/demo.css">--}}
<link rel="stylesheet" href="{{ asset('assets/portfolio/css/dropify.min.css') }}">
{{--Dropify End--}}

{{--slider--}}
{{--<link rel="stylesheet" href="{{ asset('assets/portfolio/css/normalize.css') }}">--}}
{{--<link rel="stylesheet" href="{{ asset('assets/portfolio/css/ion.rangeSlider.skinHTML5.css') }}">--}}
{{--End slider--}}


{{--Sweet Alert--}}
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="{{ asset('assets/portfolio/js/sweetalert.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/portfolio/css/sweetalert.css') }}">
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-42119746-3', 'auto');
    ga('send', 'pageview');
</script>
{{--End Sweet Alert--}}


{{--Loader--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


<link rel="stylesheet" href="{{ asset('assets/portfolio/css/loader.css') }}">
<style>

</style>
{{--End Loader--}}

<style>

</style>
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('favicon.ico')}}"/>
