
</div>
<!-- END Page Content -->

<!-- Footer -->

<!-- END Footer -->
</div>
<!-- END Main Container -->
</div>
<!-- END Page Container -->
<!-- logout form -->

<form method="GET" id="logout" action="{{route('staff.logout')}}">
    @csrf
</form>

<!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Bootstrap.js, Jquery plugins and Custom JS code -->
<script src="{{url('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{url('js/plugins.js')}}"></script>
<script src="{{url('js/app.js')}}"></script>

<!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="{{url('js/pages/index.js')}}"></script>
<script>$(function () {
    Index.init();
});</script>

        <script src="{{url('js/pages/tablesDatatables.js')}}"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>
<script>
    $(document).ready(function () {
        $(".logout").on('click', function () {
            event.preventDefault();
            var a = confirm("are you sure want to logout ?");
            if (a)
                $("#logout").submit();
            else
                return false;
        });
    })

</script>
</body>
</html>