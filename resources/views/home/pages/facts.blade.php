<!--==========================
  Facts Section
============================-->
<section id="facts">
    <div class="container wow fadeIn">
        <div class="section-header">
            <h3 class="section-title">Facts</h3>
            <p class="section-description">Details that matters a lot!!</p>
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
                <span data-toggle="counter-up">5</span>
                <p>Developers & Moderators</p>
            </div>

        </div>

    </div>
</section><!-- #facts -->