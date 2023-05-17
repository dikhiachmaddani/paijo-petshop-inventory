<ul id="sidebarnav">
    <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Home</span>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ asset('/dashboard') }}" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ asset('operator/master-data-barang') }}" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Master Data Barang</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ asset('operator/barang-diterima') }}" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Barang Diterima</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ asset('operator/barang-keluar') }}" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Barang Keluar</span>
        </a>
    </li>
    <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Master Data</span>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('category.index') }}" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Category</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('brand.index') }}" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Brand</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('uom.index') }}" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">UoM</span>
        </a>
    </li>
    <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Report</span>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('report-stok.index') }}" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Stok</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('report-terima-barang.index') }}" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Report Terima Barang</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('report-barang-keluar.index') }}" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Report Barang Keluar</span>
        </a>
    </li>
</ul>
