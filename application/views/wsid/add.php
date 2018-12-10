<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Wsid</a>
        </li>
        <li class="breadcrumb-item active">Tambah Data Wsid</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Tambah Data Wsid
                </div>
             <?php echo form_open('Wsid/tambah') ?>
               <div class="card-body">
                <div class="form-group">
                        <label for="Nama Trip">ID WSID</label>
                    <input type="text" class="form-control" name="idwsid" required="">
                </div>
                <div class="form-group">
                  <label for="Nama Trip">TYPEWSID</label>
                  <select name="typewsid" class="form-control">
                     <option value="ATM">ATM</option>
                     <option value="ATS">ATS</option>
                     <option value="ANT">ANT</option>
                     <option value="STAR">STAR</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="Nama Trip">MERK WSID</label>
                  <select name="merkwsid" class="form-control">
                     <option value="WINCOR">WINCOR</option>
                     <option value="HYOSUNG">HYOSUNG</option>
                     <option value="DIEBLOD">DIEBLOD</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="Nama Trip">LOKASI WSID</label>
                 <input type="text" name="locationwsid" class="form-control">
                </div>
                <div class="form-group">
                 <label for="Nama Trip">NAMA BANK</label>
                  <?php echo cmb_dinamis('idbank','tbl_bank','namebank','idbank') ?>
                </div>
                <div class="form-group">
                 <label for="Nama Trip">NAMA TRIP</label>
                  <?php echo cmb_dinamis('idtrip','tbl_trip','nametrip','idtrip',null,'id="idtrip" onchange="show()"') ?>
                </div>
                <div class="form-group">
                 <label for="Nama Trip">DESC TRIP</label>
                   <input type="text" id="deskripsi" readonly class="form-control">
                </div>
                <div class="form-group">
                    <label for="foto">Description</label>
                    <textarea name="descwsid" cols="20" rows="10" class="form-control"></textarea>
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
<script src
<script type="text/javascript">
   function show() {
       var idtrip =$("#idtrip").val()
       $.ajax({
           'type':'GET',
            'url': '<?php echo base_url() ?>/Wsid/show_by_id',
            'data': 'id=' + idtrip,
            success: function (data) {
                var json = data,
                obj = JSON.parse(json);
                $("#deskripsi").val(obj.deskripsi);
            }

       });
   }
</script>