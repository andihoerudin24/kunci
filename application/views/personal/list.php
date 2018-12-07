<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Personal</a>
        </li>
        <li class="breadcrumb-item active">Data Personal</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-list"></i>Personal
            <?php echo anchor('Personal/tambah','Tambah Personal',array('class'=>'btn btn-primary')) ?>
        </div>
        <div class="card-body table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Personal</th>
                            <th>Departemen</th>
                            <th>Unit Kerja</th>
                            <th>Deskripsi</th>
                            <th>Nama Trip</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>No</th>
                            <th>Nama Personal</th>
                            <th>Departemen</th>
                            <th>Unit Kerja</th>
                            <th>Deskripsi</th>
                            <th>Nama Trip</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php $no=1 ?>
                    <?php foreach ($personal as $item) : ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $item->nama_personal ?></td>
                            <td><?php echo $item->dept ?></td>
                            <td><?php echo $item->unitkerja ?></td>
                            <td><?php echo $item->descperson ?></td>
                            <td><?php echo $item->nametrip ?></td>
                            <td>
                                <a href="<?php echo site_url('Personal/edit/'.$item->id_personal) ?>" class="btn btn-sm btn-outline-secondary"
                                    style="padding-bottom: 0px; padding-top: 0px;">
                                    Edit
                                    <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                                </a>
                                <a href="<?php echo site_url('Personal/show/'.$item->id_personal) ?>" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                                       Detail
                                    <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                                </a>

                                <?php echo form_open('Personal/hapus/'.$item->id_personal) ?>
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
