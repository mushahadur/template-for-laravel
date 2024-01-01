<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="#" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img  class="logo py-3" src="{{ asset('/') }}backend/assets/images/logo.png" height="90" width="100" alt="">
            <img src="{{ asset('/') }}backend/assets/images/logo.png" alt="" class="logo-thumb">
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        
        <ul class="navbar-nav ml-auto">
            
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('/') }}backend/assets/images/user/avatar.png" class="img-radius" alt="User-Profile-Image" height="40" width="40">
                            <span class="px-3">{{Auth::user()->name}}<i class="fa fa-chevron-down m-l-5"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        
                        <ul class="pro-body">
                            <li><a href="#" class="dropdown-item"><i class="feather icon-user"></i>View Profile</a></li>
                            <li><a href="#" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                            <li><a href="#" class="dropdown-item text-danger" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                <i class="feather icon-log-out"></i>  Logout</a></li>
                                
                            <form action="{{route('logout')}}" method="POST" id="logoutForm">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    

</header>