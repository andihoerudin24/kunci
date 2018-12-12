<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Kendaraan</a>
        </li>
        <li class="breadcrumb-item active">Data Kendaraan</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-list"></i>Data Kendaraan
            <?php echo anchor('Kendaraan/tambah','Tambah Kendaraan',array('class'=>'btn btn-primary')) ?>
        </div>
        <div class="card-body table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Polisi</th>
                            <th>No Lambung</th>
                            <th>Jenis</th>
                            <th>Merk</th>
                            <th>Descvehicle</th>
                            <th>Nama Trip</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nomor Polisi</th>
                            <th>No Lambung</th>
                            <th>Jenis</th>
                            <th>Merk</th>
                            <th>Descvehicle</th>
                            <th>Nama Trip</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php $no=1 ?>
                    <?php foreach ($kendaraan as $item) : ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $item->nopol ?></td>
                            <td><?php echo $item->nolambung ?></td>
                            <td><?php echo $item->jenis ?></td>
                            <td><?php echo $item->merk ?></td>
                            <td><?php echo $item->descvehicle ?></td>
                            <td><?php echo $item->nametrip ?></td>
                            <td>
                                <a href="<?php echo site_url('Kendaraan/edit/'.$item->nopol) ?>" class="btn btn-sm btn-outline-secondary"
                                    style="padding-bottom: 0px; padding-top: 0px;">
                                    Edit
                                    <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                                </a>
                                <a href="<?php echo site_url('Kendaraan/show/'.$item->nopol) ?>" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                                       Detail
                                    <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                                </a>

                                <?php echo form_open('Kendaraan/hapus/'.$item->nopol) ?>
                                <button type="submit" class="btn btn-sm btn-outline-danger" style="padding-bottom: 0px; padding-top: 0px;"
                                    onclick="return confirm('Anda Yakin Ingin Menghapus?');">
                                    Delete
                                    <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                                </button>
                                <?php echo form_close() ?>
                            </td>
                        </tr>
                        <?php $no++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
