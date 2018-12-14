<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Transaksi Kembali Kunci</a>
        </li>
        <li class="breadcrumb-item active">Transaksi Kembali Kunci</li>
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
            <div class="col-md-6">
                <div class="card-body">
                <table class="table table-bordered">
                <label>Deskripsi</label>
                        <textarea class="form-control" placeholder="deskripsi" name="deskripsi"></textarea>
                 </table>
              </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                <table class="table table-bordered">
                   <label>ID Personal</label>
                     <input type="number" class="form-control" placeholder="id_personal" name="id_person">
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
