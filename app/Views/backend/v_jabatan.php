<div class="col-md-12">
    <div class="card card-primary card-outline shadow-lg">
        <div class="card-header">
            <h3 class="card-title">Data Jabatan</h3>
            <div class="card-tools">
                 <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#add"> <i class="fas fa-plus"></i> Tambah </button>
        </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <?php
            if (session()->get('pesan')) {
             echo '<div class="alert alert-success alert-dismissible">';
             echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
             echo '<h5><i class="icon fas fa-check"></i></h5>';
             echo session()->get('pesan');
             echo '</div>';} ?>
            <div class="table-responsive">
                <table class="table table-sm table-bordered">
                    <tr class="text-center">
                        <th width="50px">No</th>
                        <th>Jabatan</th>
                        <th style="width:150px">Aksi</th>
                    </tr>
                    <?php $no = 1;
                    foreach ($jabatan as $key => $value) { ?>
                    <tr>
                        <td class="text-center"><?= $no++ ?></td>
                        <td><?= $value['nama_jabatan'] ?></td>
                        <td class="text-center" style="white-space: nowrap;">
                            <button class="btn btn-sm btn-warning" style="margin-right: 5px;">Edit</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->

<!-- modal tambah -->
<div class="modal" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Jabatan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('Jabatan/insertData') ?>
            <div class="modal-body">
             <div class="form-group">
                 <label>Nama jabatan</label>
                <input name="nama_jabatan" placeholder="Nama Jabatan"  class="form-control" required>
                 </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<!-- close tambah -->