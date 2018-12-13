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
           <div class="col-md-12">
            <table class="table table-bordered"  width="100%" cellspacing="0">
            <tr>
                    <th>No</th>
                    <th>Chek Out</th>
                    <th>Chek in</th>
                 </tr>
                 <?php echo form_open('Transaksi_kembali/insert_kembali') ?>
                 <?php echo form_hidden('id_transaksi_out',$this->uri->segment(3)) ?>
                 <?php echo form_hidden('id_personal',$transaksi['id_personal']) ?>
                 <?php for($i=1;$i<16;$i++): ?>
                    <tr>
                    <td><?php echo $i ?></td>
                     <td>
                       <input type="checkbox" value="1" disabled  name="<?php echo "statekeyout".$i; ?>">
                     </td>
                     <td>
                         <label><?php echo "statekeyin".$i  ?></label>
                       <input type="checkbox" value="1" checked name="<?php echo "statekeyin".$i; ?>">
                     </td>
                    </tr>
                 <?php endfor; ?>
                 </table>
             </div>
            <div class="col-md-12">
                <div class="card-body">
                <table class="table table-bordered">
                        <textarea class="form-control" name="deskripsi"></textarea>
                 </table>
              </div>
                 <button type="submit" name="submit" class="btn btn-info">Submit</button>
                 <?php echo anchor('Transaksi_kembali','Kembali',array('class'=>'btn btn-danger')) ?>
                 <?php echo form_close() ?>
            </div>
          </div>
        </div>
    </div>
</div>
