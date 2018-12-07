<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Detail Bank</a>
        </li>
        <li class="breadcrumb-item active">Detail Data Bank</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Detail Data Bank
                </div>
               <div class="card-body">
                    <div class="form-group">
                        <label for="Nama Personal">ID Bank</label>
                    <input type="text" readonly="" value="<?php echo $bank['idbank']?>" class="form-control" name="idbank" required="">
                   </div>
                    <div class="form-group">
                    <label for="foto">Name Bank</label>
                    <input type="text" value="<?php echo $bank['namebank']?>" readonly=""  class="form-control"  name="namebank" required="">
                   </div>
                <div class="form-group">
                    <label for="foto">Telpon Bank</label>
                    <input type="number" value="<?php echo $bank['telpbank']?>" readonly="" class="form-control"  name="telpbank" required="">
                    <label for="Nama Personal">Addres Bank</label>
                    <input type="text" value="<?php echo $bank['addresbank']?>" readonly="" class="form-control" name="addresbank" required="">

                 </div>
                <div class="form-group">
                    <label for="foto">Person Bank</label>
                    <input type="text" value="<?php echo $bank['personbank']?>" readonly="" class="form-control" name="personbank" required="">
                 </div>
             </div>
                <div class="card-footer bg-transparent">
                    <a href="<?php echo site_url('Bank') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>