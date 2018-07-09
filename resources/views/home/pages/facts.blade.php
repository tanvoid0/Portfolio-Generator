<!--==========================
  Facts Section
============================-->
<section id="facts">
    <div class="container wow fadeIn">
        <div class="section-header">
            <h3 class="section-title">Facts</h3>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">{{ Count($users) }}</span>
                <p>Users</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">{{ Count($works) }}</span>
                <p>Projects</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">{{ Count($skills) }}</span>
                <p>Distinct skills</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">15</span>
                <p>Hard Workers</p>
            </div>

        </div>

    </div>
</section><!-- #facts -->