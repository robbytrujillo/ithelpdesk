<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

            </div>
        </div>
    </section>
    <section class="content">
        <div class="row mt-2">
            <div class="col-6">
            <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Jabatan</h3>
                    </div>
                    
                    <div class="card-body">
                    <?= $this->session->flashdata('message') ?>
                    <?= validation_errors() ?>
                        <form action="<?= base_url('jabatan/save_jabatan') ?>" method="POST">
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" name="jabatan" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm"> Save </button>
                            <button type="reset" class="btn btn-danger btn-sm"> Reset </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b style="color: #0069D9">Data Jabatan</b></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Jabatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no = 1;
                                foreach($jabatan as $row) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->jabatan ?></td>
                                    <td>
                                        <a href="<?= base_url('jabatan/edit_jabatan/'.$row->id_jabatan) ?>" class="btn btn-warning btn-small">
                                        <i class="fa fa-edit"> Edit</i>    
                                        </a> 
                                        <a href="<?= base_url('jabatan/delete_jabatan/'.$row->id_jabatan) ?>" class="btn btn-danger btn-small">
                                        <i class="fa fa-trash"> Delete</i>    
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>