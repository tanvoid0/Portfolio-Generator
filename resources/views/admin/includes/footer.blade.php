
<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('assets/admin/js/jquery/jquery.min.js')  }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/jquery-ui/jquery-ui.min.js')  }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/popper.js/popper.min.js')  }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/bootstrap/js/bootstrap.min.js')  }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('assets/admin/js/jquery-slimscroll/jquery.slimscroll.js')  }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('assets/admin/js/modernizr/modernizr.j')  }}s"></script>
<!-- am chart -->
<script src="{{ asset('assets/admin/pages/widget/amchart/amcharts.min.js')  }}"></script>
<script src="{{ asset('assets/admin/pages/widget/amchart/serial.min.js')  }}"></script>
<!-- Chart js -->
<script type="text/javascript" src="{{ asset('assets/admin/js/chart.js/Chart.js')  }}"></script>
<!-- Todo js -->
<script type="text/javascript " src="{{ asset('assets/admin/pages/todo/todo.js ')  }}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ asset('assets/admin/pages/dashboard/custom-dashboard.min.js')  }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/script.js') }}"></script>
<script type="text/javascript " src="{{ asset('assets/admin/js/SmoothScroll.js')  }}"></script>
<script src="{{ asset('assets/admin/js/pcoded.min.js')  }}"></script>
<script src="{{ asset('assets/admin/js/vartical-demo.js')  }}"></script>
<script src="{{ asset('assets/admin/js/jquery.mCustomScrollbar.concat.min.js') }} "></script>
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