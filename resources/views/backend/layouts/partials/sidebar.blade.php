<nav class="pcoded-navbar pt-2 ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">

                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Product Pages</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-box"></i></span><span class="pcoded-mtext">Product</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('product.index') }}">Product Manage</a></li>
                        <li><a href="{{ route('product.create') }}">Add Product</a></li>
                    </ul>
                </li>

                <li class="nav-item pcoded-menu-caption">
                    <label>Pages</label>
                </li>

            </ul>

        </div>
    </div>
</nav>
