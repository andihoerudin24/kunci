<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Personal</a>
        </li>
        <li class="breadcrumb-item active">Tambah Data Personal</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Tambah Data Personal
                </div>
             <?php echo form_open('Personal/tambah') ?>
               <div class="card-body">
                    <div class="form-group">
                        <label for="Nama Personal">ID Personal</label>
                    <input type="text" class="form-control" name="id_personal" required="">
                   </div>
                    <div class="form-group">
                        <label for="Nama Personal">Nama Personal</label>
                    <input type="text" class="form-control" name="nama_personal" required="">
                   </div>
                <div class="form-group">
                    <label for="foto">Departemen</label>
                    <input type="text" class="form-control" name="dept" required="">
                 </div>
                <div class="form-group">
                    <label for="foto">Unit Kerja</label>
                    <input type="text" class="form-control" name="unitkerja" required="">
                 </div>
                <div class="form-group">
                    <label for="foto">Descperson</label>
                    <input type="text" class="form-control" name="descperson" required="">
                 </div>
                <div class="form-group">
                    <label for="foto">Nama Trip</label>
                   <?php echo cmb_dinamis('idtrip','tbl_trip','nametrip','idtrip') ?>
                 </div>
              </div>
                <div class="card-footer bg-transparent">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="<?php echo site_url('Personal') ?>" class="btn btn-danger">Kembali</a>
                </div>
            <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>