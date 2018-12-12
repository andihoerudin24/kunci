<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Kendaraan</a>
        </li>
        <li class="breadcrumb-item active">Tambah Data Kendaraan</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Tambah Data Kendaraan
                </div>
             <?php echo form_open('Kendaraan/tambah') ?>
               <div class="card-body">
                    <div class="form-group">
                        <label for="Nama Personal">No Polisi</label>
                    <input type="text" class="form-control" name="nopol" required="">
                   </div>
               <div class="form-group">
                    <label for="foto">No Lambung</label>
                    <input type="text" class="form-control"  name="nolambung" required="">
               </div>
               <div class="form-group">
                    <label for="foto">Jenis</label>
                    <input type="text" class="form-control"  name="jenis" required="">
               </div>
               <div class="form-group">
                    <label for="foto">Merk</label>
                    <input type="text" class="form-control"  name="merk" required="">
               </div>
              <div class="form-group">
                    <label for="foto">Descvihicle</label>
                    <input type="text" class="form-control" name="descvehicle" required="">
                    <label for="foto">Nama Trip</label>
                    <?php echo cmb_dinamis('idtrip','tbl_trip','nametrip','idtrip') ?>
              </div>
        </div>
                <div class="card-footer bg-transparent">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="<?php echo site_url('Kendaraan') ?>" class="btn btn-danger">Kembali</a>
                </div>
            <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>