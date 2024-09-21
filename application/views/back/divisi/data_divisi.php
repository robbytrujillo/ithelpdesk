<div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b style="color: #0069D9">Data Jabatan</b></h3>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('hapus') ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Divisi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no = 1;
                                foreach($divisi as $row) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->divisi ?></td>
                                    <td>
                                        <a href="<?= base_url('divisi/edit_divisi/'.$row->id_divisi) ?>" class="btn btn-warning btn-small">
                                        <i class="fa fa-edit"></i>    
                                        </a> 
                                        <a onclick="return confirm('Yakin Akan Dihapus?');" href="<?= base_url('divisi/delete_jabatan/'.$row->id_jabatan) ?>" class="btn btn-danger btn-small">
                                        <i class="fa fa-trash"></i>    
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>