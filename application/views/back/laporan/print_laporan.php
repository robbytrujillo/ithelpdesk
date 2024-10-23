<div class="container mt-3">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="display-4 text-center">
                Laporan IT Helpdesk
            </h3>
        </div>
    </div>


    <div class="table-responsive">
        <div class="table table-bordered">
            <tr>
                <th>No</th>
                <th>No Tiket</th>
                <th>Keluhan</th>
                <th>Waktu Daftar</th>
                <th>Waktu Selesai</th>
                <th>Status</th>
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
                <td>
                    <?php 
                        if ($gl->status_tiket == 0) {
                            echo 'Waiting...';
                        } else if ($gl->status_tiket == 1) {
                            echo 'Response...';
                        } else if ($gl->status_tiket == 2) {
                            echo 'Process...';
                        } else {
                            echo 'Solved';
                        }
                    ?>
                </td>
            </tr>
            <?php } ?>
        </div>
    </div>
</div>

<script type="text/javascript">
    window.print()
</script>