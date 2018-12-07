<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Trip</a>
        </li>
        <li class="breadcrumb-item active">Edit Data Trip</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Edit Data Trip
                </div>
             <?php echo form_open('Trip/edit') ?>
             <?php  echo form_hidden('idtrip',$trip['idtrip']) ?>
               <div class="card-body">
                    <div class="form-group">
                        <label for="Nama Trip">Nama trip</label>
                    <input type="text" maxlength="20" placeholder="masukan nama trip" value="<?php echo $trip['nametrip'] ?>" class="form-control" name="nametrip" required="">
                </div>
                <div class="form-group">
                    <label for="foto">Description</label>
                    <textarea name="deskripsi" placeholder="masukan deskripsi kunci"  maxlength="30"  cols="30" rows="10" class="form-control"><?php echo $trip['deskripsi'] ?></textarea>
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