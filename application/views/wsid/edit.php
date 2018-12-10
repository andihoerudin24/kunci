<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Wsid</a>
        </li>
        <li class="breadcrumb-item active">Update Data Wsid</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Update Data Wsid
                </div>
             <?php echo form_open('Wsid/edit') ?>
               <div class="card-body">
                <div class="form-group">
                        <label for="Nama Trip">ID WSID</label>
                    <input type="text" readonly value="<?php echo $wsid['idwsid'] ?>" class="form-control" name="idwsid" required="">
                </div>
                <div class="form-group">
                  <label for="Nama Trip">TYPE WSID</label>
                  <?php
                  $options=array('ATM' => 'ATM', 'ATS' => 'ATS', 'ANT' =>'ANT','STAR' => 'STAR');
                  $batch = $wsid['typewsid'];
                  echo form_dropdown('typewsid', $options, $batch,['class'=>'form-control']);
                  ?>
                </div>
                <div class="form-group">
                  <label for="Nama Trip">MERK WSID</label>
                  <?php
                  $options=array('WINCOR' => 'WINCOR', 'HYOSUNG' => 'HYOSUNG', 'DIEBLOD' =>'DIEBLOD');
                  $batch = $wsid['typewsid'];
                  echo form_dropdown('merkwsid', $options, $batch,['class'=>'form-control']);
                  ?>
                </div>
                <div class="form-group">
                  <label for="Nama Trip">LOKASI WSID</label>
                 <input type="text" value="<?php echo $wsid['locationwsid'] ?>" name="locationwsid" class="form-control">
                </div>
                <div class="form-group">
                 <label for="Nama Trip">NAMA BANK</label>
                  <?php echo cmb_dinamis('idbank','tbl_bank','namebank','idbank',$wsid['idbank']) ?>
                </div>
                <div class="form-group">
                 <label for="Nama Trip">NAMA TRIP</label>
                  <?php echo cmb_dinamis('idtrip','tbl_trip','nametrip','idtrip',$wsid['idtrip']) ?>
                </div>
                <div class="form-group">
                    <label for="foto">Description</label>
                    <textarea name="descwsid" cols="20" rows="10" class="form-control"><?php echo $wsid['descwsid'] ?></textarea>
                 </div>
              </div>
                <div class="card-footer bg-transparent">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="<?php echo site_url('Wsid') ?>" class="btn btn-danger">Kembali</a>
                </div>
            <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>