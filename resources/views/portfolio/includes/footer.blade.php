
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

{{--Sweet Alert--}}
        <script>
            document.querySelector('.sweet-1').onclick = function(){
                swal("Here's a message!");
            };

            document.querySelector('.sweet-2').onclick = function(){
                swal("Here's a message!", "It's pretty, isn't it?")
            };

            document.querySelector('.sweet-3').onclick = function(){
                swal("Good job!", "You clicked the button!", "success");
            };

            document.querySelector('.sweet-4').onclick = function(){
                swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: 'btn-danger',
                        confirmButtonText: 'Yes, delete it!',
                        closeOnConfirm: false,
                        //closeOnCancel: false
                    },
                    function(){
                        swal("Deleted!", "Your imaginary file has been deleted!", "success");
                    });
            };

            document.querySelector('.sweet-5').onclick = function(){
                swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: 'btn-danger',
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: "No, cancel plx!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function(isConfirm){
                        if (isConfirm){
                            swal("Deleted!", "Your imaginary file has been deleted!", "success");
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
            };

            document.querySelector('.sweet-6').onclick = function(){
                swal({
                    title: "Sweet!",
                    text: "Here's a custom image.",
                    imageUrl: 'assets/thumbs-up.jpg'
                });
            };

            document.querySelector('.sweet-7').onclick = function () {
                swal({
                    title: "An input!",
                    text: "Write something interesting:",
                    type: "input",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    animation: "slide-from-top",
                    inputPlaceholder: "Write something"
                }, function (inputValue) {
                    if (inputValue === false) return false;
                    if (inputValue === "") {
                        swal.showInputError("You need to write something!");
                        return false
                    }
                    swal("Nice!", "You wrote: " + inputValue, "success");
                });
            };

            document.querySelector('.sweet-8').onclick = function () {
                swal({
                    title: "Ajax request example",
                    text: "Submit to run ajax request",
                    type: "info",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                    setTimeout(function () {
                        swal("Ajax request finished!");
                    }, 2000);
                });
            };

            document.querySelector('.sweet-10').onclick = function(){
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-primary',
                    confirmButtonText: 'Primary!'
                });
            };

            document.querySelector('.sweet-11').onclick = function(){
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-info',
                    confirmButtonText: 'Info!'
                });
            };

            document.querySelector('.sweet-12').onclick = function(){
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "success",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-success',
                    confirmButtonText: 'Success!'
                });
            };

            document.querySelector('.sweet-13').onclick = function(){
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-warning',
                    confirmButtonText: 'Warning!'
                });
            };

            document.querySelector('.sweet-14').onclick = function(){
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "error",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-danger',
                    confirmButtonText: 'Danger!'
                });
            };
        </script>
        <script>
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
        </script>
{{--End Sweet Alert--}}

        <script>
            $(document).ready(function () {

            });
            function loaderHide(){
                    $('#loader').fadeOut("slow", function(){
                        $("#notify").delay(5000).fadeOut();
                    });
            }

        </script>