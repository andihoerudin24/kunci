<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Penjadwalan Trip</a>
        </li>
        <li class="breadcrumb-item active">Penjadwalan Trip</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-list"></i>Transaksi
        </div>
        <div class="card-body table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Personal</th>
                            <th>Id Wsid</th>
                            <th>Id Kunci</th>
                            <th>Lokasi Wsid</th>
                            <th>Nama Bank</th>
                            <th>Nama Trip</th>
                            <th>Nama Personal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; ?>
                    <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $item->id_personal ?></td>
                            <td><?php echo $item->idwsid ?></td>
                            <td><?php echo $item->idkeyset ?></td>
                            <td><?php echo $item->locationwsid ?></td>
                            <td><?php echo $item->namebank ?></td>
                            <td><?php echo $item->nametrip ?></td>
                            <td><?php echo $item->nama_personal ?></td>
                            <td>
                                <a href="<?php echo site_url('Transaksi_keluar/detail/'.$item->idkeyset)  ?>" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                                       Detail
                                    <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                                </a>
                           </td>
                        </tr>
                   <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
