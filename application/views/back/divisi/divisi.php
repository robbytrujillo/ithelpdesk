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
                        <h3 class="card-title">Tambah Divisi</h3>
                    </div>
                    
                    <div class="card-body">
                    <?= $this->session->flashdata('message') ?>
                    <?= validation_errors() ?>
                        <form action="<?= base_url('divisi/save_divisi') ?>" method="POST">
                            <div class="form-group">
                                <label>Divisi</label>
                                <input type="text" name="divisi" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm"> Save </button>
                            <button type="reset" class="btn btn-danger btn-sm"> Reset </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <?php $this->load->view('back/divisi/data_divisi') ?>
            </div>
        </div>
    </section>
</div>