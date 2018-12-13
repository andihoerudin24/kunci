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


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Mater">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-pencil"></i>
            <span class="nav-link-text">Data Mater</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMulti">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Barang">
                    <a class="nav-link" href="<?php echo site_url('Trip') ?>">
                    <i class="fa fa-fw fa-comments"></i>
                    <span class="nav-link-text">Data Trip</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bank">
                    <a class="nav-link" href="<?php echo site_url('Bank') ?>">
                    <i class="fa fa-fw fa-users"></i>
                    <span class="nav-link-text">Bank</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Persiapan Penjadwalan">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-address-book" ></i>
            <span class="nav-link-text">Persiapan Penjadwalan</span>
            </a>
             <ul class="sidenav-second-level collapse" id="collapseMulti2">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Wsid">
                    <a class="nav-link" href="<?php echo site_url('Wsid') ?>">
                    <i class="fa fa-fw fa-location-arrow"></i>
                    <span class="nav-link-text">Wsid</span>
                    </a>
                </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Kendaraan">
                        <a class="nav-link" href="<?php echo site_url('Kendaraan') ?>">
                        <i class="fa fa-fw fa fa-motorcycle"></i>
                        <span class="nav-link-text">KENDARAAN</span>
                        </a>
                    </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Personal">
                    <a class="nav-link" href="<?php echo site_url('Personal') ?>">
                    <i class="fa fa-fw fa-users"></i>
                    <span class="nav-link-text">Personal</span>
                    </a>
                </li>
            </ul>
        </li>


         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Transaksi Kunci Keluar">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti3" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa fa-rocket" ></i>
            <span class="nav-link-text">Transaksi Kunci Keluar</span>
            </a>
             <ul class="sidenav-second-level collapse" id="collapseMulti3">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Keyset">
                    <a class="nav-link" href="<?php echo site_url('Keyset') ?>">
                    <i class="fa fa-fw fa fa-lock"></i>
                    <span class="nav-link-text">Kunci Set</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Penjadwalan Trip">
                    <a class="nav-link" href="<?php echo site_url('Transaksi_keluar') ?>">
                    <i class="fa fa-fw fa fa-book"></i>
                    <span class="nav-link-text">jadwal Keluar Kunci</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Keyset">
                    <a class="nav-link" href="<?php echo site_url('Transaksi_keluar/keluar') ?>">
                    <i class="fa fa-fw fa fa-lock"></i>
                    <span class="nav-link-text">Kunci Sedang Di Pinjam</span>
                    </a>
                </li>
              </ul>

   <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Transaksi Pengembalian Kunci">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti5" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-check-square"></i>
            <span class="nav-link-text">Transaksi Kunci Kembali</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMulti5">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pengembalian Kunci">
                    <a class="nav-link" href="<?php echo site_url('Transaksi_kembali') ?>">
                    <i class="fa fa-fw fa-undo"></i>
                    <span class="nav-link-text">Pengembalian Kunci</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Kunci Sudah Di Kembalikan">
                    <a class="nav-link" href="<?php echo site_url('Transaksi_kembali/selesai') ?>">
                    <i class="fa fa-fw fa-undo"></i>
                    <span class="nav-link-text">Kunci Sudah Di Kembalikan</span>
                    </a>
                </li>
            </ul>
          </li>
     </ul>
 </li>




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