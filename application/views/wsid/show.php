<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Detail Data Wsid</a>
        </li>
        <li class="breadcrumb-item active">Detail Data Wsid</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Detail Data Wsid
                </div>
               <div class="card-body">
                <div class="form-group">
                        <label for="Nama Trip">ID WSID</label>
                    <input type="text" readonly="" value="<?php echo $wsid['idwsid'] ?>" class="form-control" name="idwsid" required="">
                </div>
                <div class="form-group">
                  <label for="Nama Trip">TYPE WSID</label>
                   <input type="text" readonly value="<?php echo $wsid['typewsid'] ?>" class="form-control">
                </div>
                <div class="form-group">
                <label for="Nama Trip">MERK WSID</label>
                   <input type="text" readonly value="<?php echo $wsid['merkwsid'] ?>" class="form-control">

                </div>
                <div class="form-group">
                  <label for="Nama Trip">LOKASI WSID</label>
                 <input type="text" readonly value="<?php echo $wsid['locationwsid'] ?>" name="locationwsid" class="form-control">
                </div>
                <div class="form-group">
                 <label for="Nama Trip">NAMA BANK</label>
                  <?php echo cmb_dinamis('idbank','tbl_bank','namebank','idbank',$wsid['idbank'],'readonly') ?>
                </div>
                <div class="form-group">
                 <label for="Nama Trip">NAMA TRIP</label>
                  <?php echo cmb_dinamis('idtrip','tbl_trip','nametrip','idtrip',$wsid['idtrip'],'readonly') ?>
                </div>
                <div class="form-group">
                    <label for="foto">Description</label>
                    <textarea name="descwsid" cols="20" rows="10" readonly class="form-control"><?php echo $wsid['descwsid'] ?></textarea>
                 </div>
              </div>
                <div class="card-footer bg-transparent">
                    <a href="<?php echo site_url('Wsid') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>