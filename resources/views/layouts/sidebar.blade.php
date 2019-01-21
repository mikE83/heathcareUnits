<!-- <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a> -->


<!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav hide-on-large-only">
    <ul id="slide-out" class="side-nav leftside-navigation ">
        <li class="purple">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        
                        
                        <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" >
                        <i class="mdi-maps-directions-walk"></i>Bienvenido</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">IMSS<i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">nombre corto</p>
                </div>
            </div>
        </li>


           
        <li class="">
            
            <i class="mdi-maps-directions-walk"></i>Salir
            
          </li>
        
        
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only purple"><i class="mdi-navigation-menu"></i></a>
</aside>
<!-- END LEFT SIDEBAR NAV-->