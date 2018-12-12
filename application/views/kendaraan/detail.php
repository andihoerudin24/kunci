<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Kendaraan Detail</a>
        </li>
        <li class="breadcrumb-item active">Detail Data Kendaraan</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Detail Data Kendaraan
                </div>
               <div class="card-body">
                    <div class="form-group">
                        <label for="Nama Personal">No Polisi</label>
                    <input type="text" readonly value="<?php echo $kendaraan['nopol'] ?>" class="form-control" name="nopol" required="">
                   </div>
               <div class="form-group">
                    <label for="foto">No Lambung</label>
                    <input type="text" readonly value="<?php echo $kendaraan['nolambung'] ?>" class="form-control"  name="nolambung" required="">
               </div>
               <div class="form-group">
                    <label for="foto">Jenis</label>
                    <input type="text" readonly  value="<?php echo $kendaraan['jenis'] ?>" class="form-control"  name="jenis" required="">
               </div>
               <div class="form-group">
                    <label for="foto">Merk</label>
                    <input type="text" readonly value="<?php echo $kendaraan['merk'] ?>" class="form-control"  name="merk" required="">
               </div>
              <div class="form-group">
                    <label for="foto">Descvihicle</label>
                    <input type="text" readonly class="form-control"  value="<?php echo $kendaraan['descvehicle'] ?>" name="descvehicle" required="">

                    <label for="foto">Nama Trip</label>
                    <?php echo cmb_dinamis('idtrip','tbl_trip','nametrip','idtrip',$kendaraan['idtrip'],'readonly') ?>
              </div>
        </div>
                <div class="card-footer bg-transparent">
                    <a href="<?php echo site_url('Kendaraan') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>