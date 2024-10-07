<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

            </div>
        </div>
    </section>
    <section class="content">
        <div class="row mt-2">
           
            <div class="col-12">
            <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b style="color: #0069D9">Data Tiket</b></h3>
                        <a href="<?= base_url('tiket/add_tiket') ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message') ?> 
                        <?= $this->session->flashdata('hapus') ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Tiket</th>
                                    <th>Judul Tiket</th>
                                    <th>Status Tiket</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                            <?php 
                                $no = 1;
                                foreach($tiket as $tkt) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $tkt->no_tiket ?></td>
                                    <td><?= $tkt->judul_tiket ?></td>
                                    <td><?php if($tkt->status_tiket == '0') {
                                            echo '<span class="badge badge-warning"> Waiting....</span>';
                                        } else if ($tkt->status_tiket == '1') {
                                            echo '<span class="badge badge-info"> Response...</span>';
                                        } else if ($tkt->status_tiket == '2') {
                                            echo '<span class="badge badge-success"> Process...</span>';
                                        } else {
                                            echo '<span class="badge badge-danger"> Solved</span>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('tiket/edit_tiket/'.$tkt->id_tiket) ?>" class="btn btn-warning btn-small">
                                        <i class="fa fa-edit"></i>    
                                        </a> 
                                        <a onclick="return confirm('Yakin Akan Dihapus?');" href="<?= base_url('tiket/delete_tiket/'.$tkt->id_tiket) ?>" class="btn btn-danger btn-small">
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