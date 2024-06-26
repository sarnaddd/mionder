<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="/images/mionder.png" alt=""
            width="60px" height="60px">
        </div>
        <div class="sidebar-brand-text mx-2">Mionder</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fa-solid fa-house"></i>
            <span>Home</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item {{ (request()->is('user')) ? 'active' : '' }}">
        <a class="nav-link" href="/user">
            <i class="fa-solid fa-user"></i>
            <span>User</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item {{ (request()->is('keluhan')) ? 'active' : '' }}">
        <a class="nav-link" href="/keluhan">
            <i class="fa-solid fa-comments"></i>
            <span>Symptom</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('actionlogout') }}">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Log out</span>
        </a>
    </li>
</ul>