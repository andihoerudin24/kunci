<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Trip</a>
        </li>
        <li class="breadcrumb-item active">Tambah Data Trip</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Tambah Data Trip
                </div>
             <?php echo form_open('Trip/tambah') ?>
               <div class="card-body">
                    <div class="form-group">
                        <label for="Nama Trip">Nama trip</label>
                    <input type="text" class="form-control" name="nametrip" required="">
                </div>
                <div class="form-group">
                    <label for="foto">Description</label>
                    <textarea name="deskripsi" cols="30" rows="10" class="form-control"></textarea>
                 </div>
              </div>
                <div class="card-footer bg-transparent">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="<?php echo site_url('Trip') ?>" class="btn btn-danger">Kembali</a>
                </div>
            <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>