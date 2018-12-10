<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">Sistem Kontrol Kunci</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="<?php echo site_url('Dashboard') ?>">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Dashboard</span>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Barang">
            <a class="nav-link" href="<?php echo site_url('Trip') ?>">
            <i class="fa fa-fw fa-comments"></i>
            <span class="nav-link-text">Data Trip</span>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Personal">
            <a class="nav-link" href="<?php echo site_url('Personal') ?>">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Personal</span>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bank">
            <a class="nav-link" href="<?php echo site_url('Bank') ?>">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Bank</span>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Wsid">
            <a class="nav-link" href="<?php echo site_url('Wsid') ?>">
            <i class="fa fa-fw fa-print"></i>
            <span class="nav-link-text">Wsid</span>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Keyset">
            <a class="nav-link" href="<?php echo site_url('Keyset') ?>">
            <i class="fa fa-fw fa-print"></i>
            <span class="nav-link-text">KUNCI SET</span>
            </a>
        </li>
     </ul>
        <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
            </a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
        </ul>
    </div>
</nav>