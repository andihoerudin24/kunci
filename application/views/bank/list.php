<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Bank</a>
        </li>
        <li class="breadcrumb-item active">Data Bank</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-list"></i>Data Bank
            <?php echo anchor('Bank/tambah','Tambah Bank',array('class'=>'btn btn-primary')) ?>
        </div>
        <div class="card-body table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Bank</th>
                            <th>Addres Bank</th>
                            <th>No Telpon</th>
                            <th>Person Bank</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Bank</th>
                            <th>Addres Bank</th>
                            <th>No Telpon</th>
                            <th>Person Bank</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php $no=1 ?>
                    <?php foreach ($bank as $item) : ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $item->namebank ?></td>
                            <td><?php echo $item->addresbank ?></td>
                            <td><?php echo $item->telpbank ?></td>
                            <td><?php echo $item->personbank ?></td>
                            <td>
                                <a href="<?php echo site_url('Bank/edit/'.$item->idbank) ?>" class="btn btn-sm btn-outline-secondary"
                                    style="padding-bottom: 0px; padding-top: 0px;">
                                    Edit
                                    <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                                </a>
                                <a href="<?php echo site_url('Bank/show/'.$item->idbank) ?>" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                                       Detail
                                    <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                                </a>

                                <?php echo form_open('Bank/hapus/'.$item->idbank) ?>
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
