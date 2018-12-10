<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Keyset</a>
        </li>
        <li class="breadcrumb-item active">Data Keyset</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-list"></i>Keyset
            <?php echo anchor('Keyset/tambah','Tambah Keyset',array('class'=>'btn btn-primary')) ?>
        </div>
        <div class="card-body table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id wsid</th>
                            <th>Jenis Key</th>
                            <th>ckey-1</th>
                            <th>nkey-1</th>
                            <th>ckey-2</th>
                            <th>nkey-2</th>
                            <th>ckey-3</th>
                            <th>nkey-3</th>
                            <th>ckey-4</th>
                            <th>nkey-4</th>
                            <th>ckey-5</th>
                            <th>nkey-5</th>
                            <th>ckey-6</th>
                            <th>nkey-6</th>
                            <th>ckey-7</th>
                            <th>nkey-7</th>
                            <th>ckey-8</th>
                            <th>nkey-8</th>
                            <th>ckey-9</th>
                            <th>nkey-9</th>
                            <th>ckey-10</th>
                            <th>nkey-10</th>
                            <th>ckey-11</th>
                            <th>nkey-11</th>
                            <th>ckey-12</th>
                            <th>nkey-12</th>
                            <th>ckey-13</th>
                            <th>nkey-13</th>
                            <th>ckey-14</th>
                            <th>nkey-14</th>
                            <th>ckey-15</th>
                            <th>nkey-15</th>
                            <th>Descripsi key</th>
                            <th>Total c-key</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1 ?>
                    <?php foreach ($data as $item) : ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $item->idwsid ?></td>
                            <td><?php echo $item->jeniskey ?></td>
                            <td><?php echo $item->ckey1 ?></td>
                            <td><?php echo $item->nckey1 ?></td>
                            <td><?php echo $item->ckey2 ?></td>
                            <td><?php echo $item->nckey2 ?></td>
                            <td><?php echo $item->ckey3  ?></td>
                            <td><?php echo $item->nckey3  ?></td>
                            <td><?php echo $item->ckey4   ?></td>
                            <td><?php echo $item->nckey4 ?></td>
                            <td><?php echo $item->ckey5 ?></td>
                            <td><?php echo $item->nckey5 ?></td>
                            <td><?php echo $item->ckey6 ?></td>
                            <td><?php echo $item->nckey6 ?></td>
                            <td><?php echo $item->ckey7 ?></td>
                            <td><?php echo $item->nckey7 ?></td>
                            <td><?php echo $item->ckey8 ?></td>
                            <td><?php echo $item->nckey8 ?></td>
                            <td><?php echo $item->ckey9 ?></td>
                            <td><?php echo $item->nckey9 ?></td>
                            <td><?php echo $item->ckey10 ?></td>
                            <td><?php echo $item->nckey10 ?></td>
                            <td><?php echo $item->ckey11 ?></td>
                            <td><?php echo $item->nckey11 ?></td>
                            <td><?php echo $item->ckey12 ?></td>
                            <td><?php echo $item->nckey12 ?></td>
                            <td><?php echo $item->ckey13 ?></td>
                            <td><?php echo $item->nckey13 ?></td>
                            <td><?php echo $item->ckey14 ?></td>
                            <td><?php echo $item->nckey14 ?></td>
                            <td><?php echo $item->ckey15 ?></td>
                            <td><?php echo $item->nckey15 ?></td>
                            <td><?php echo $item->desckey ?></td>
                            <td><?php echo $item->total ?></td>
                            <td>
                                <a href="<?php echo site_url('Keyset/edit/'.$item->idkeyset) ?>" class="btn btn-sm btn-outline-secondary"
                                    style="padding-bottom: 0px; padding-top: 0px;">
                                    Edit
                                    <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                                </a>
                                <a href="<?php echo site_url('Keyset/show/'.$item->idkeyset) ?>" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                                       Detail
                                    <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                                </a>
                                <?php echo form_open('Keyset/hapus/'.$item->idkeyset) ?>
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
