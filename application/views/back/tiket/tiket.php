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
                        <a href="<?= base_url('tiket/add_tiket') ?>" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#form_tiket">Tambah Data</a>
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
                                    <th>Konfirmasi</th>
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
                                    <td><?php 
                                        if ($tkt->status_tiket == '0') {
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
                                        <?php 
                                            if ($tkt->status_tiket == '0') {
                                                echo '<a href="javascript:void(0);" data-toggle="modal" data-target="#modal-tiket" id="select_tiket" 
                                                data-id_tiket     = "' . $tkt->id_tiket . '"
                                                data-status_tiket = "' . $tkt->status_tiket . '"
                                                class="btn btn-success">
                                                    Confirm
                                                </a>';
                                            } else if ($tkt->status_tiket == '1') {
                                                echo '<a href="javascript:void(0);" data-toggle="modal" data-target="#modal-reply" id="reply_message" 
                                                
                                                class="btn btn-warning">
                                                    Reply Message
                                                </a>';
                                            }

                                        ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('tiket/detail_tiket/'.$tkt->no_tiket) ?>" class="btn btn-secondary btn-small">
                                            <i class="fa fa-eye"></i>    
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

<!-- Menampilkan Modal -->
<div class="modal fade" id="form_tiket">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Form Tambah Tiket</h5>
            <button class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                    &times;
                </span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?= base_url('tiket/save_tiket') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Keluhan</label>
                    <input type="hidden" name="no_tiket" value="<?= $no_tiket; ?>" class="form-control" readonly>
                    <input type="text" name="judul_tiket" class="form-control" value="<?= set_value('judul_tiket'); ?>" required>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar_tiket" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary btn-sm"> Save </button>
                <button type="reset" class="btn btn-danger btn-sm"> Reset </button>
            </form>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="modal-tiket">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Yakin confirm tiket ini?</h5>
            <button class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                    &times;
                </span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?= base_url('tiket/save_tiket_waiting') ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_tiket" id="id_tiket" class="form-control">
                    <input type="hidden" name="status_tiket" value="1" class="form-control">
                <button type="submit" class="btn btn-primary btn-sm"> Save </button>
                <button type="reset" class="btn btn-danger btn-sm"> Reset </button>
            </form>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="modal-reply">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Form Tanggapan IT Support</h5>
            <button class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                    &times;
                </span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?= base_url('tiket/save_tiket_reply') ?>" method="POST" enctype="multipart/form-data">
                    <!-- <input type="hidden" name="id_tiket" id="id_tiket" class="form-control">
                    <input type="hidden" name="status_tiket" value="1" class="form-control"> -->
                
                    <div class="form-group">
                        <label for="keluhan">Keluhan / Judul Tiket</label>
                        <input type="text" id="judul_tiket" class="form-control" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm"> Save </button>
                <button type="reset" class="btn btn-danger btn-sm"> Reset </button>
            </form>
        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('click','#select_tiket', function() {
            var id_tiket     = $(this).data('id_tiket')
            var status_tiket = $(this).data('status_tiket')

            $('#id_tiket').val(id_tiket)
            $('#status_tiket').val(status_tiket)
        })
    })
</script>