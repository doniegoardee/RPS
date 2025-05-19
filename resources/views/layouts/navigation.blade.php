<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <img src="{{ asset('images/penro_cag.png') }}" width="40px" height="40px" alt=""
            style="background-color: white; border-radius:50%;">
        <div class="sidebar-brand-text mx-3">PENRO <sup>CAGAYAN RPS </sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fa-solid fa-house"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Lands Section -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLands"
            aria-expanded="false" aria-controls="collapseLands">
            <i class="fa-solid fa-mountain-sun"></i>
            <span>Lands</span>
        </a>
        <div id="collapseLands" class="collapse" aria-labelledby="headingLands" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Documents:</h6>
                <a class="collapse-item" href="#">FPA (Agri.
                    Lands)</a>
                <a class="collapse-item" href="#">RFPA
                    (Residential)</a>
                <a class="collapse-item" href="#">SP (School
                    Sites)</a>
                <a class="collapse-item" href="#">Foreshore</a>
            </div>
        </div>
    </li>

    <!-- Forestry Section -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForestry"
            aria-expanded="false" aria-controls="collapseForestry">
            <i class="fa-solid fa-tree"></i>
            <span>Forestry</span>
        </a>
        <div id="collapseForestry" class="collapse" aria-labelledby="headingForestry" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Documents:</h6>
                <a class="collapse-item" href="#">Tenurial Instrument (TI)</a>
                <a class="collapse-item" href="#">Permits</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="false" aria-controls="collapseUtilities">
            <i class="fa-solid fa-list-check"></i>
            <span>Manage Documents</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage:</h6>
                <a class="collapse-item" href="#">All Documents</a>
                <a class="collapse-item" href="#">Archive Documents</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
