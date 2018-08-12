<!--==========================
  Hero Section
============================-->
<section id="hero">
    <div class="hero-container">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <h1>Welcome to AirCV</h1>
        <h2>Our Motive is to connect Talents with Talent Hunters</h2>
        <a href="#about" class="btn-get-started">Get Started</a>
    </div>
</section><!-- #hero -->