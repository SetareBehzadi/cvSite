<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>

                           <div style="width:70px; height: 70px; background-size: cover; border-radius: 50px;{{(Auth::user()->userImage)?"background-image: url('/uploads/users/usersImage/".Auth::user()->userImage."');":"background-image: url('/img/admin/userImg.jpg');"}}; "></div>

                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->first_name.' '.Auth::user()->last_name}}</strong>
                             </span>
                                <span class="text-muted text-xs block"> <b class="caret"></b></span>
                            </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{{route('home')}}">پروفایل</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('logout')}}">خروج</a></li>
                    </ul>
                </div>
                <div class="logo-element">

                </div>
            </li>





        </ul>

    </div>
</nav>
