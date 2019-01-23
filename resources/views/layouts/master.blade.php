<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="es">
    <!--<![endif]-->
    <!-- start: HEAD -->
   <!-- @yield('header')-->
    <!-- end: HEAD -->
    @include('layouts/head')
    <body>
        <div  id="layouts-horizontal">
      
          <div id="loader-wrapper">
            <div id="loader"></div>        
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
          </div>
           


          <!-- start: TOP NAVBAR -->
          <header id="header" class="page-topbar">
            <!-- start: NAVBAR HEADER -->
            <div class="navbar-fixed">
              <nav class="light-green darken-3">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a class="brand-logo darken-1"><img src="{{ asset('/image/logo_ss.svg') }}" alt="IMSS"/></a><span class="logo-text">IMSS</span></h1></li>
                    </ul>

                   


                    <ul class="right hide-on-med-and-down">
                     <li><a href="javascript:void(0)"><i class="mdi-social-domain left"></i></a>
                      </li>
                      <li><a href="javascript:void(0)"><i class="mdi-action-account-circle left"></i>{{' Bienvenido)' }}</a>
                      </li>
                      <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" >
                        <i class="mdi-maps-directions-walk right"></i>Salir</a>
                        
                        
                      </li>
                    </ul>
                </div>
              </nav>
            @include('layouts/menu')              
       

                <!-- CSSdropdown -->
               
                <!-- Usersdropdown -->
                
            </div>
			    </header>


                <!-- end: TOP NAVBAR -->
    <section id="content">
        <!-- START WRAPPER -->
        <div class="wrapper">
            <!-- START LEFT SIDEBAR NAV-->
            @include('layouts/sidebar')           
            <!-- END LEFT SIDEBAR NAV-->
			<div class="container" id="container">
				@yield('content')
				</div>
        </div>
        <!-- END WRAPPER -->
	</section>
    
            <!-- start: FOOTER -->
      <footer class="page-footer  light-green darken-3">
    <div class="footer-copyright">
        <span>Copyright © 2019 <a class="grey-text text-lighten-4" href="http://salud.cdmx.gob.mx" target="_blank">Instituto Mexicano del Seguro Social</a> Derechos reservados.</span>
        
  </footer>

        <!-- start: MAIN JAVASCRIPTS -->
    @include('layouts/footer')
        <!-- end: CLIP-TWO JAVASCRIPTS -->
      



    </body>
</html>