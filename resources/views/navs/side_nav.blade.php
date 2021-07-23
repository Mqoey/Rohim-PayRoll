<div class="leftside-menu leftside-menu-detached">

    <div class="leftbar-user">
        <a href="users">
            <img src="assets/images/users/user1.png" alt="user-image" height="42" class="rounded-circle shadow-sm">
            <span class="leftbar-user-name">Administrator</span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="side-nav">

        <li class="side-nav-title side-nav-item">Navigation</li>

        <li class="side-nav-item">
            <a href="{{ url('/dashboard') }}" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                <i class="uil-home-alt"></i>
                <span> Dashboard</span>
            </a>
        </li>

        <li class="side-nav-title side-nav-item">PayRoll</li>

        <li class="side-nav-item">
            <a href="{{ url('/salary_manage') }}" class="side-nav-link">
                <i class="uil-dollar-sign"></i>
                <span> Manage Salary </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="{{ url('/salary_list') }}" class="side-nav-link">
                <i class="uil-usd-square"></i>
                <span> Salary List </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="{{ url('/report') }}" class="side-nav-link">
                <i class="uil-invoice"></i>
                <span> Generate Report </span>
            </a>
        </li>

        <li class="side-nav-title side-nav-item">Employee</li>

        <li class="side-nav-item">
            <a href="{{ url('employee_new') }}" class="side-nav-link">
                <i class="uil-user-plus"></i>
                <span> New Employee </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="{{ url('employee_manange') }}" class="side-nav-link">
                <i class="uil-user"></i>
                <span> Manage Employee </span>
            </a>
        </li>

        <li class="side-nav-title side-nav-item">Accessories</li>

        <li class="side-nav-item">
            <a href="{{ url('profile') }}" class="side-nav-link">
                <i class="uil-user-circle"></i>
                <span> Profile </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="{{ url('settings') }}" class="side-nav-link">
                <i class="uil-cog"></i>
                <span> Settings </span>
            </a>
        </li>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="route('logout')" onclick="event.preventDefault();
                    this.closest('form').submit();" class="dropdown-item notify-item">
                
                    <i class="uil-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </form>
        
        <div class="clearfix"></div>
        <!-- Sidebar -left -->

</div>
