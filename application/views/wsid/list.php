<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Wsid</a>
        </li>
        <li class="breadcrumb-item active">Data Wsid</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-list"></i>Wsid
            <?php echo anchor('Wsid/tambah','Tambah Wsid',array('class'=>'btn btn-primary')) ?>
        </div>
        <div class="card-body table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th>No</th>
                            <th>TYPE WSID</th>
                            <th>LOCATION WSID</th>
                            <th>MERK WSID</th>
                            <th>NAMA BANK</th>
                            <th>NAMA TRIP</th>
                            <th>DESKRIPSI</th>
                            <th>Aksi</th>
                         </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>TYPE WSID</th>
                            <th>LOCATION WSID</th>
                            <th>MERK WSID</th>
                            <th>NAMA BANK</th>
                            <th>NAMA TRIP</th>
                            <th>DESKRIPSI</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php $no=1 ?>
                    <?php foreach ($wsid as $item) : ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $item->typewsid?> </td>
                            <td><?php echo $item->locationwsid ?></td>
                            <td><?php echo $item->merkwsid ?></td>
                            <td><?php echo $item->namebank ?></td>
                            <td><?php echo $item->nametrip ?></td>
                            <td><?php echo $item->descwsid ?></td>
                            <td>
                            <a href="<?php echo site_url('Wsid/edit/'.$item->idwsid) ?>" class="btn btn-sm btn-outline-secondary"
                                    style="padding-bottom: 0px; padding-top: 0px;">
                                    Edit
                                    <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                                </a>
                                <a href="<?php echo site_url('Wsid/show/'.$item->idwsid) ?>" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                                       Detail
                                    <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                                </a>

                                <?php echo form_open('Wsid/hapus/'.$item->idwsid) ?>
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
