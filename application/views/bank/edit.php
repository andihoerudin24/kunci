<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Bank</a>
        </li>
        <li class="breadcrumb-item active">edit Data Bank</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    edit Data Bank
                </div>
             <?php echo form_open('Bank/edit') ?>
               <div class="card-body">
                    <div class="form-group">
                        <label for="Nama Personal">ID Bank</label>
                    <input type="text" value="<?php echo $bank['idbank']?>" readonly="" class="form-control" name="idbank" required="">
                   </div>
                    <div class="form-group">
                    <label for="foto">Name Bank</label>
                    <input type="text" class="form-control" value="<?php echo $bank['namebank']?>" name="namebank" required="">
                   </div>
                <div class="form-group">
                    <label for="foto">Telpon Bank</label>
                    <input type="number" value="<?php echo $bank['telpbank']?>"  class="form-control"  name="telpbank" required="">

                    <label for="Nama Personal">Addres Bank</label>
                    <input type="text" value="<?php echo $bank['addresbank']?>" class="form-control" name="addresbank" required="">

                 </div>
                <div class="form-group">
                    <label for="foto">Person Bank</label>
                    <input type="text" value="<?php echo $bank['personbank']?>" class="form-control" name="personbank" required="">
                 </div>
             </div>
                <div class="card-footer bg-transparent">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="<?php echo site_url('Bank') ?>" class="btn btn-danger">Kembali</a>
                </div>
            <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>