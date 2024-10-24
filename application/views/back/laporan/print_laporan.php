<link rel="stylesheet" href="<?= base_url() ?>assets/back/dist/css/adminlte.min.css">
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="display-4 text-center">
                Laporan IT Helpdesk
            </h3>
        </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>No Tiket</th>
                <th>Keluhan</th>
                <th>Waktu Daftar</th>
                <th>Waktu Selesai</th>
            </tr>
            <?php 
                $no = 1;
                foreach ($get_laporan as $gl) {
            ?>
            <tr>
                <td><?= $no++                 ?></td>
                <td><?= $gl->no_tiket         ?></td>
                <td><?= $gl->judul_tiket      ?></td>
                <td><?= $gl->tgl_daftar       ?></td>
                <td><?= $gl->waktu_tanggapan  ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>

<script type="text/javascript">
    window.print()
</script>