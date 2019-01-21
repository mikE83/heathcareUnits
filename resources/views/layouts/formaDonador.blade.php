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
                <!-- start: TOP NAVBAR -->
            <header id="header" class="page-topbar">
                    <!-- start: NAVBAR HEADER -->
            {{-- 
            <div class="navbar-fixed">
                <nav class="purple">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><img src="{{ asset('/images/logo_ss.svg') }}" alt="SEDESA"></a> <span class="logo-text">SEDESA</span></h1></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                      <li>
                        <a href="javascript:void(0)"><i class="mdi-action-account-circle left"></i>Desconocido</a>
                      </li>
                      <li>
                        <a href="{{ url('/login') }}">Login</a>
                      </li>
                    </ul>
                 </div>
               </nav>

            <!-- HORIZONTL NAV START-->
             

                <!-- CSSdropdown -->
               
                <!-- Usersdropdown -->
                <ul id="Usersdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="user-profile-page.html"  class="cyan-text">User Profile</a></li>
                    <li><a href="user-login.html"  class="cyan-text">Login</a></li>
                    <li><a href="user-register.html" class="cyan-text">Register</a></li>
                    <li><a href="user-forgot-password.html" class="cyan-text">Forgot Password</a></li>                    
                    <li><a href="user-lock-screen.html" class="cyan-text">Lock Screen</a></li>
                    <li><a href="{{ url('/auth/logout') }}" class="cyan-text">Cerrar</a></li>
                </ul>

             
            

        </div>


        --}}

            </header>




                <!-- end: TOP NAVBAR -->
      <section id="content">
        <!-- START WRAPPER -->
        <div class="wrapper">
                    <div class="container" id="container">
                        @yield('content')
                        </div>
            
                </div>
 </section>
    
            <!-- start: FOOTER -->
      <footer class="page-footer">
    <div class="white-text  pink darken-1">
        <span>Copyright © 2017 <a class="grey-text text-lighten-4" href="http://salud.cdmx.gob.mx" target="_blank">Secretaría de Salud de la CDMX</a> Derechos Reservados.</span>
        <span class="center"> Dirección General de Planeación y Coordinación Sectorial</span>
         <span class="center"> Dirección de Sistemas Institucionales y Comunicaciones</span>
         <span class="center"> Jefatura Departamental de Desarrollo de Sistemas y Capacitación.</span>
    </div>
	<div class="white-text  pink darken-1 ">
	Los datos personales recabados serán protegidos, incorporados y tratados en el Sistema de Datos Personales denominado “Expresión de la voluntad respecto a la donación de órganos y tejidos con fines de trasplante después de la muerte”.

Identificación del responsable y la ubicación de su domicilio:

El Responsable del Sistema de Datos Personales es la Secretaría de Salud de la Ciudad de México, a través del Responsable de Donación y Trasplantes de Órganos y Tejidos, mismo que se encuentra ubicado en calle Altadena número 23, piso 1, colonia Nápoles, Alcaldía Benito Juárez, código postal 03810, Ciudad de México.

Fundamento legal que faculta al responsable para llevar a cabo el tratamiento:

Constitución Política de los Estados Unidos Mexicanos, artículos 6 y 16; Ley General de Salud, artículos 313, 314 Bis, 314 Bis 1, 321, 322, 323, fracción I, 325, 333 fracciones I, II, III, IV y V y 334, fracción II; Ley de Salud del Distrito Federal, artículo 17, fracción I, inciso U); Ley de Voluntad Anticipada para el Distrito Federal, artículo 29 fracción II; Ley de Protección de Datos Personales en posesión de sujetos obligados de la Ciudad de México, artículos 4, 9, 10, 12, 20, 21, 36 y 37.

Datos personales que serán sometidos a tratamiento:

Clave del Registro Federal de Contribuyentes (RFC), Domicilio, Estado civil, Fecha de nacimiento, Género, Lugar de nacimiento, Nombre, Teléfono particular, Trayectoria educativa y Convicciones religiosas.

Todos datos indicados en el formato de captura son obligatorios y sin ellos no podrá completar el trámite de registro de la Voluntad Respecto a la Donación de Órganos y Tejidos con Fines de Trasplante después de la Muerte. Asimismo, se le informa que sus datos no podrán ser difundidos sin su consentimiento expreso, salvo las excepciones previstas en la Ley de Protección de Datos Personales en posesión de sujetos obligados de la Ciudad de México.

Finalidad:

Registrar, procesar, controlar y proteger los datos de las personas que forman parte del registro de donantes y de receptores de órganos y tejidos.



 
	</div>
  </footer>

        <!-- start: MAIN JAVASCRIPTS -->
    @include('layouts/footer')
        <!-- end: CLIP-TWO JAVASCRIPTS -->
      

        </div>

    </body>
</html>