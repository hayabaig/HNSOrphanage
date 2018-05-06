<!DOCTYPE html>
<html lang="en">
<title>{{config('app.name','HNS Orphanage')}}</title>
<meta charset="utf-8">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery-1.6.js"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-replace.js"></script>
    <script type="text/javascript" src="js/Vegur_700.font.js"></script>
    <script type="text/javascript" src="js/Vegur_400.font.js"></script>
    <script type="text/javascript" src="js/Vegur_300.font.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/tms-0.3.js"></script>
    <script type="text/javascript" src="js/tms_presets.js"></script>
    <script type="text/javascript" src="js/backgroundPosition.js"></script>
    <script type="text/javascript" src="js/atooltip.jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <style type="text/css">.box1 figure{behavior:url("js/PIE.htc");}</style>
    <![endif]-->
</head>
<body>
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>
</body>
</html>