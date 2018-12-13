<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Kunci Kembali</a>
        </li>
        <li class="breadcrumb-item active">Kunci Kembali</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-list"></i>Kunci Kembali
        </div>
        <div class="card-body table-responsive">
            <div class="row">
              <div class="col-md-6">
              <?php echo anchor('Transaksi_kembali','Reset',array('class'=>'btn btn-danger')) ?>
               </div>
             </div>
            </div>
        </div>
        <div class="car-body">
          <div class="col-md-12">
            <table class="table table-bordered">
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
                            <th>Kembali</th>
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
                            <?php if($item->status==1):?>
                                 <a href="<?php echo site_url('Transaksi_kembali/back/'.$item->id_transaksi_out) ?>" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                                       chek kelengkapan kunci
                                    <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                                </a>
                            <?php endif; ?>
                          </td>
                        </tr>
                   <?php endforeach; ?>
                </tbody>
            </table>
          </div>

        </div>
    </div>
</div>
