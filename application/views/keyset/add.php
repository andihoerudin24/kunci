<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Keyset</a>
        </li>
        <li class="breadcrumb-item active">Tambah Data Keyset</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Tambah Data Keyset
                </div>
             <?php echo form_open('Keyset/tambah') ?>
               <div class="card-body">
             <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                        <label for="Nama Trip">ID KEYSET</label>
                      <input type="number" class="form-control" name="idkeyset">
                   </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                        <label for="Nama Trip">Jenis Key</label>
                        <select name="jeniskey" class="form-control">
                            <option value="ATM">ATM</option>
                            <option value="ATS">ATS</option>
                            <option value="START">START</option>
                        </select>
                  </div>
                </div>
               <div class="col-md-4">
                 <div class="form-group">
                        <label for="Nama Trip">ID Wsid</label>
                     <select name="idwsid" class="form-control">
                        <?php foreach($keyset as $row):  ?>
                            <option value="<?php echo $row->idwsid?>"><?php echo $row->idwsid ,'-'.$row->locationwsid  ?></option>
                        <?php endforeach; ?>
                     </select>
                   </div>
                </div>
              </div>
             <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="Nama Trip">CKEY 1</label>
                    <input type="text" class="form-control" name="ckey1" >
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                        <label for="Nama Trip">NKEY 1</label>
                    <input type="text" class="form-control" name="nckey1" >
                  </div>
                </div>
              </div>
             <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="Nama Trip">CKEY 2</label>
                    <input type="text" class="form-control" name="ckey2" >
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                        <label for="Nama Trip">NCKEY 2</label>
                    <input type="text" class="form-control" name="nckey2" >
                  </div>
                </div>
              </div>
             <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="Nama Trip">CKEY 3</label>
                    <input type="text" class="form-control" name="ckey3" >
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                        <label for="Nama Trip">NCKEY 3</label>
                    <input type="text" class="form-control" name="nckey3" >
                  </div>
                </div>
              </div>
             <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="Nama Trip">CKEY 4</label>
                    <input type="text" class="form-control" name="ckey4" >
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                        <label for="Nama Trip">NCKEY 4</label>
                    <input type="text" class="form-control" name="nckey4" >
                  </div>
                </div>
              </div>

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="Nama Trip">CKEY 5</label>
                    <input type="text" class="form-control" name="ckey5" >
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                        <label for="Nama Trip">NCKEY 5</label>
                    <input type="text" class="form-control" name="nckey5" >
                  </div>
                </div>
              </div>

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="Nama Trip">CKEY 6</label>
                    <input type="text" class="form-control" name="ckey6" >
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                        <label for="Nama Trip">NCKEY 6</label>
                    <input type="text" class="form-control" name="nckey6" >
                  </div>
                </div>
              </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="Nama Trip">CKEY 7</label>
                    <input type="text" class="form-control" name="ckey7" >
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                        <label for="Nama Trip">NCKEY 7</label>
                    <input type="text" class="form-control" name="nckey7" >
                  </div>
                </div>
              </div>

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="Nama Trip">CKEY 8</label>
                    <input type="text" class="form-control" name="ckey8" >
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                        <label for="Nama Trip">NCKEY 8</label>
                    <input type="text" class="form-control" name="nckey8" >
                  </div>
                </div>
              </div>

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="Nama Trip">CKEY 9</label>
                    <input type="text" class="form-control" name="ckey9" >
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                        <label for="Nama Trip">NCKEY 9</label>
                    <input type="text" class="form-control" name="nckey9" >
                  </div>
                </div>
              </div>

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="Nama Trip">CKEY 10</label>
                    <input type="text" class="form-control" name="ckey10" >
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                        <label for="Nama Trip">NCKEY 10</label>
                    <input type="text" class="form-control" name="nckey10" >
                  </div>
                </div>
              </div>

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="Nama Trip">CKEY 11</label>
                    <input type="text" class="form-control" name="ckey11" >
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                        <label for="Nama Trip">NCKEY 11</label>
                    <input type="text" class="form-control" name="nckey11" >
                  </div>
                </div>
              </div>

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="Nama Trip">CKEY 12</label>
                    <input type="text" class="form-control" name="ckey12" >
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                        <label for="Nama Trip">NCKEY 12</label>
                    <input type="text" class="form-control" name="nckey12" >
                  </div>
                </div>
              </div>

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="Nama Trip">CKEY 13</label>
                    <input type="text" class="form-control" name="ckey13" >
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                        <label for="Nama Trip">NCKEY 13</label>
                    <input type="text" class="form-control" name="nckey13" >
                  </div>
                </div>
              </div>

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="Nama Trip">CKEY 14</label>
                    <input type="text" class="form-control" name="ckey14" >
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                        <label for="Nama Trip">NCKEY 14</label>
                    <input type="text" class="form-control" name="nckey14" >
                  </div>
                </div>
              </div>

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="Nama Trip">CKEY 15</label>
                    <input type="text" class="form-control" name="ckey15" >
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                        <label for="Nama Trip">NCKEY 15</label>
                    <input type="text" class="form-control" name="nckey15" >
                  </div>
                </div>
              </div>

            <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                        <label for="Nama Trip">DESC KEY</label>
                    <input type="text" class="form-control" name="desckey" class="form-control" >
                  </div>
               </div>


            <div class="card-footer bg-transparent">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="<?php echo site_url('Keyset') ?>" class="btn btn-danger">Kembali</a>
                </div>
            <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>