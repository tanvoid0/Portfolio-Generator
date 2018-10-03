<script type="text/javascript">
    var gaJsHost = (("https:" === document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
    var pageTracker = _gat._getTracker("UA-3753241-1");
    pageTracker._initData();
    pageTracker._trackPageview();

    function download() {
        var download_btn = document.getElementById('download_btn');
        download_btn.parentNode.removeChild(download_btn);
        window.print();
        window.onafterprint = function() {
            window.location.reload(true);
        };
    }
</script>