<ul id="sidebarnav">
    <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Home</span>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('dashboard.index') }}" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ asset('admin/manage-user') }}" aria-expanded="false">
            <span>
                <i class="ti ti-users"></i>
            </span>
            <span class="hide-menu">Manage User</span>
        </a>
    </li>
</ul>
