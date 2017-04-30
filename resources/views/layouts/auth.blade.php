<!DOCTYPE html>
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>MarketApp | Identification</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    {{--START AUTH LINK--}}
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{asset('admin/pages/css/login.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="{{asset('global/css/components-md.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="{{asset('global/css/plugins-md.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/layout/css/layout.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/layout/css/themes/default.css')}}" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{{asset('admin/layout/css/custom.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
    {{--END AUTH LINK--}}

</head>
<!-- END HEAD -->
<html>
<!-- BEGIN BODY -->
<body class="page-md login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
    <h2><span style="color:#fff;">Sun</span><span style="color: #ff3f3f;">Shine</span></h2>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">



    <!-- BEGIN LOGIN FORM -->
        @yield('form')
    <!-- END LOGIN FORM -->


</div>
<div class="copyright">
    2017 Copyright MarketApp.
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="{{asset('global/plugins/respond.min.js')}}"></script>
<script src="{{asset('global/plugins/excanvas.min.js')}}"></script>

<script src="{{asset('global/plugins/jquery.min.js" type="text/javascript')}}"></script>
<script src="{{asset('global/plugins/jquery-migrate.min.js" type="text/javascript')}}"></script>
<script src="{{asset('global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{asset('global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/layout/scripts/demo.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/pages/scripts/login.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
    });
</script>
<!-- END JAVASCRIPTS -->

</body>
<!-- END BODY -->
</html>


