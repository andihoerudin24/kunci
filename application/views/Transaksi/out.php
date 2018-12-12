<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Transaksi Keluar</a>
        </li>
        <li class="breadcrumb-item active">Transaksi Keluar</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-list"></i>Transaksi
        </div>
        <div class="card-body table-responsive">
        <div class="row">
           <div class="col-md-9">
            <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Jenis Kunci</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                 <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $item->nckey1 ?></td>
                            <td><?php echo $item->ckey1;  ?></td>
                        </tr>
                 <?php endforeach; ?>
                 <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $item->nckey2 ?></td>
                            <td><?php echo $item->ckey2;  ?></td>
                        </tr>
                 <?php endforeach; ?>
                 <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $item->nckey3 ?></td>
                            <td><?php echo $item->ckey3;  ?></td>
                        </tr>
                 <?php endforeach; ?>
                 <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $item->nckey4 ?></td>
                            <td><?php echo $item->ckey4;  ?></td>
                        </tr>
                 <?php endforeach; ?>
                 <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $item->nckey5 ?></td>
                            <td><?php echo $item->ckey5;  ?></td>
                        </tr>
                 <?php endforeach; ?>
                 <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $item->nckey6 ?></td>
                            <td><?php echo $item->ckey6;  ?></td>
                        </tr>
                 <?php endforeach; ?>
                 <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $item->nckey7; ?></td>
                            <td><?php echo $item->ckey7;  ?></td>
                        </tr>
                 <?php endforeach; ?>
                 <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $item->nckey8; ?></td>
                            <td><?php echo $item->ckey8;  ?></td>
                        </tr>
                 <?php endforeach; ?>
                 <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $item->nckey9; ?></td>
                            <td><?php echo $item->ckey9;  ?></td>
                        </tr>
                 <?php endforeach; ?>
                 <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $item->nckey10; ?></td>
                            <td><?php echo $item->ckey10;  ?></td>
                        </tr>
                 <?php endforeach; ?>
                 <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $item->nckey11; ?></td>
                            <td><?php echo $item->ckey11;  ?></td>
                        </tr>
                 <?php endforeach; ?>
                 <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $item->nckey12; ?></td>
                            <td><?php echo $item->ckey12;  ?></td>
                        </tr>
                 <?php endforeach; ?>
                 <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $item->nckey13; ?></td>
                            <td><?php echo $item->ckey13;  ?></td>
                        </tr>
                 <?php endforeach; ?>
                 <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $item->nckey14; ?></td>
                            <td><?php echo $item->ckey14;  ?></td>
                        </tr>
                 <?php endforeach; ?>
                 <?php foreach($transaksi as $item): ?>
                        <tr>
                            <td><?php echo $item->nckey15; ?></td>
                            <td><?php echo $item->ckey15;  ?></td>
                        </tr>
                 <?php endforeach; ?>
                    </tbody>
                </table>
                <hr>
            </div>
            <div class="col-md-3">
                <div class="card-body">
                <table class="table table-bordered">
                 <tr>
                    <th>Chek Out</th>
                    <th>Chek in</th>
                 </tr>
                 <?php echo form_open('Transaksi_keluar/insert') ?>
                 <?php echo form_hidden('id_keyset',$this->uri->segment(3)) ?>
                 <?php for($i=1;$i<16;$i++): ?>
                    <tr>
                     <td>
                       <input type="checkbox" value="1" checked name="<?php echo "statekeyout".$i; ?>">
                     </td>
                     <td>
                       <input type="checkbox" value="1" disabled name="<?php echo "statekeyin".$i; ?>">
                     </td>
                    </tr>
                 <?php endfor; ?>
                 </table>
                 <button type="submit" name="submit" class="btn btn-info">Submit</button>
                 <button type="submit" class="btn btn-info">Kembali</button>
                 <?php echo form_close() ?>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
