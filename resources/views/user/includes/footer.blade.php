
        <!--========== FOOTER ==========-->
        <footer class="footer">
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="{{ asset('img/logo-dark.png') }}" alt="Aircv Logo">
                    </div>
                    <div class="col-xs-6 text-right sm-text-left">
                        <p class="margin-b-0"><a class="fweight-700" href="http://keenthemes.com/preview/aircv/">Aircv</a> Developed by: <a class="fweight-700" href="http://tanveer.cf/" target="_blank">Tanveer.cf</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="{{ asset('assets/portfolio/vendor/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/portfolio/vendor/jquery-migrate.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/portfolio/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="{{ asset('assets/portfolio/vendor/jquery.easing.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/portfolio/vendor/jquery.back-to-top.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/portfolio/vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/portfolio/vendor/jquery.wow.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/portfolio/vendor/jquery.parallax.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/portfolio/vendor/jquery.appear.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/portfolio/vendor/masonry/jquery.masonry.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/portfolio/vendor/masonry/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('assets/portfolio/js/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/portfolio/js/components/progress-bar.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/portfolio/js/components/masonry.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/portfolio/js/components/wow.min.js')}}" type="text/javascript"></script>


        {{--Dropify Start  --}}
        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>--}}
        <script src="{{ asset('assets/portfolio/js/dropify.min.js') }}"></script>
        <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Drag and drop a file here or click',
                        replace: 'Drag and drop a file or click to replace',
                        remove:  'Remove',
                        error:   'Sorry, the file is too large'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        </script>
        {{--Dropify End--}}

        {{--Slider Start--}}
{{--        <script src="{{ asset('assets/portfolio/js/ion.rangeSlider.min.js') }}"></script>--}}
        {{--Slider End--}}

        {{--JQuery--}}
        <script>
            $(document).ready(function(){
                // Intro
                $("#intro-edit").hide();
                $("#intro-btn").click(function(){
                    $("#intro").hide();
                    $("#intro-edit").show();
                    $("#intro-btn").hide();
                });

                // About
                $("#about-edit").hide();
                $("#about-btn").click(function(){
                    $("#about-detail").hide();
                    $("#about-edit").show();
                    $("#about-btn").hide();
                });

                            });

        </script>
        {{--End of Jquery--}}