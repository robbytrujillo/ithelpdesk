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
                        <h3 class="card-title"><b style="color: #0069D9">Data Karyawan</b></h3>
                    </div>
                    <div class="card-body">
                        <!-- <?= $this->session->flashdata('message') ?> -->
                        <?= $this->session->flashdata('hapus') ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no = 1;
                                foreach($karyawan as $kry) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $kry->nik ?></td>
                                    <td><?= $kry->username ?></td>
                                    <td><?= $kry->status_user ?></td>
                                    <td>
                                        <a href="<?= base_url('karyawan/edit_karyawan/'.$kry->id_users) ?>" class="btn btn-warning btn-small">
                                        <i class="fa fa-edit"></i>    
                                        </a> 
                                        <a onclick="return confirm('Yakin Akan Dihapus?');" href="<?= base_url('karyawan/delete_karyawan/'.$kry->id_users) ?>" class="btn btn-danger btn-small">
                                        <i class="fa fa-trash"></i>    
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