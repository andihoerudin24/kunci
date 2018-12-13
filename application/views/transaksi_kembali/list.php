<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Kunci Kembali</a>
        </li>
        <li class="breadcrumb-item active">Kunci Kembali</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-list"></i>Kunci Kembali
        </div>
        <div class="card-body table-responsive">
            <div class="row">
              <div class="col-md-6">
                  <label for="Id keyset"><b>ID KEYSET</b></label>
               </div>
              <div class="col-md-6">
              <?php echo form_open('Transaksi_kembali/Kembali') ?>
                 <input type="text" name="idkeyset" placeholder="MASUKAN ID KEYSET" class="form-control">
              <?php echo form_close(); ?>
               </div>
             </div>
            </div>
        </div>
    </div>
</div>
