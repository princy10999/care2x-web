<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        
        <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        
      
        <li class="nav-item {{ request()->is('order.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('order.index') }}">
                <i class="icon-open menu-icon"></i>
                <span class="menu-title">Order</span>
            </a>
        </li>

        <li class="nav-item {{ request()->is('brand.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('brand.index') }}">
                <i class="icon-cog menu-icon"></i>
                <span class="menu-title">Device Brand</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('deviceModel.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('deviceModel.index') }}">
                <i class="icon-esc menu-icon"></i>
                <span class="menu-title">Device Model</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('deviceIssueCategory.index') }}">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Device Issue Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('city.index') }}">
                <i class="icon-loader menu-icon"></i>
                <span class="menu-title">City</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contactUs.index') }}">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Contact Us</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">User Management</span>
            </a>
        </li>
        <li class="nav-item">
            {{-- <a class="nav-link" href="{{ route('logout') }}"> --}}
                <form action="/logout" method="POST" class="nav-link">
                    @csrf
                    <i class="icon-contract menu-icon"></i>
                    <button type="submit" class="menu-title nav-link border border-white" style="background: none;">logout</button>
                </form>
            {{-- </a> --}}
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Icons</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                <i class="icon-map menu-icon"></i>
                <span class="menu-title">Maps</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="maps">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/mapael.html">Mapael</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <i class="icon-ban menu-icon"></i>
                <span class="menu-title">Error pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <i class="icon-book menu-icon"></i>
                <span class="menu-title">General Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                <i class="icon-tag menu-icon"></i>
                <span class="menu-title">E-commerce</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="e-commerce">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/apps/email.html">
                <i class="icon-mail menu-icon"></i>
                <span class="menu-title">E-mail</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/apps/calendar.html">
                <i class="icon-watch menu-icon"></i>
                <span class="menu-title">Calendar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/apps/todo.html">
                <i class="icon-align-right menu-icon"></i>
                <span class="menu-title">Todo List</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/apps/gallery.html">
                <i class="icon-image menu-icon"></i>
                <span class="menu-title">Gallery</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li> -->
    </ul>
</nav>
<div class="main-panel">
<div class="content-wrapper">