<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Detail Personal</a>
        </li>
        <li class="breadcrumb-item active">Detail Personal</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Detail Personal
                </div>
               <div class="card-body">
                    <div class="form-group">
                        <label for="Nama Personal">ID Personal</label>
                    <input type="text" value="<?php echo $personal['id_personal'] ?>"  class="form-control" readonly name="id_personal" required="">
                   </div>
                    <div class="form-group">
                        <label for="Nama Personal">Nama Personal</label>
                    <input type="text" value="<?php echo $personal['nama_personal'] ?>"  readonly class="form-control" name="nama_personal" required="">
                   </div>
                <div class="form-group">
                    <label for="foto">Departemen</label>
                    <input type="text" value="<?php echo $personal['dept'] ?>" readonly class="form-control" name="dept" required="">
                 </div>
                <div class="form-group">
                    <label for="foto">Unit Kerja</label>
                    <input type="text"  value="<?php echo $personal['unitkerja'] ?>" readonly class="form-control" name="unitkerja" required="">
                 </div>
                <div class="form-group">
                    <label for="foto">Descperson</label>
                    <input type="text" value="<?php echo $personal['descperson'] ?>" readonly class="form-control" name="descperson" required="">
                 </div>
                <div class="form-group">
                    <label for="foto">Nama Trip</label>
                   <?php echo cmb_dinamis('idtrip','tbl_trip','nametrip','idtrip',$personal['idtrip'],'readonly') ?>
                 </div>
              </div>
                <div class="card-footer bg-transparent">
                    <a href="<?php echo site_url('Personal') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>