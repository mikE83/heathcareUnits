<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="es">
    <!--<![endif]-->
    <!-- start: HEAD -->
        <head>
        <title>IMSS</title>
        <!-- start: META -->
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <!-- end: META -->
        <!-- start: GOOGLE FONTS -->
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <!-- CORE CSS-->
         <link href="{{asset('/materialize/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
         <link href="{{asset('/materialize/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
        <link href="{{asset('/materialize/css/custom/custom.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="{{asset('/materialize/css/layouts/page-center.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href="{{asset('/materialize/js/plugins/prism/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="{{asset('/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    </head>
   <!-- @yield('header')-->
    <!-- end: HEAD -->

    <script type="text/javascript" src="{{ asset('/materialize/js/plugins/jquery-1.11.2.min.js')}}"></script>
    
    <body class="cyan">
        <!-- sidebar -->
            @yield('content')
        
      
    </body>
	<!-- start: MAIN JAVASCRIPTS -->
    @include('layouts/footer')
        <!-- end: CLIP-TWO JAVASCRIPTS -->
</html>