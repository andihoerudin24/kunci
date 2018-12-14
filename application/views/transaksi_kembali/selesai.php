<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Kunci Sudah Di Kembalikan</a>
        </li>
        <li class="breadcrumb-item active">Kunci Sudah Di Kembalikan</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-list"></i>Data selesai Kunci
        </div>
        <div class="card-body table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Personal</th>
                            <th>Nama Personal</th>
                            <th>Id Wsid</th>
                            <th>Lokasi Wsid</th>
                            <th>Tanggal Kembali</th>
                        </tr>
                    </thead>
                  <tbody>
                  <?php $no=1; ?>
                  <?php foreach($selesai as $row): ?>
                    <tr>
                            <th><?php echo $no ?></th>
                            <th><?php echo $row->id_personal ?></th>
                            <th><?php echo $row->nama_personal ?></th>
                            <th><?php echo $row->idwsid ?></th>
                            <th><?php echo $row->locationwsid ?></th>
                            <th><?php echo $row->tanggal_kembali ?></th>
                    </tr>
                    <?php $no++ ?>
                    <?php endforeach; ?>
                 </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
