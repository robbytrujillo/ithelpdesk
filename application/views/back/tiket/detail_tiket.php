<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

            </div>
        </div>
    </section>
    <!-- <h3 class="card-title"><b style="color: #0069D9">Detail Tiket </b> - <span style="color: orange"><b><?= $tiket->no_tiket ?></b></span></h3> -->
    
                       
                       
                    
                    
                    <!-- Navbar -->
                    
                    <!-- /.navbar -->

                    <!-- Main Sidebar Container -->
                    

                    <!-- Content Wrapper. Contains page content -->
                    
                        <!-- Content Header (Page header) -->
                        

                        <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                            <div class="col-12">
                                <div class="callout callout-info">
                                <h5>Detail Tiket - Nomor : <span style="color: #007BFF"><?= $tiket->no_tiket; ?></span></h5>
                                </div>


                                <!-- Main content -->
                                <div class="invoice p-3 mb-3">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-12">
                                    <h4>
                                        <i class="fas fa-ticket-alt"> </i> IT Helpdesk.
                                        <small class="float-right">Date: <?= $tiket->tgl_daftar; ?></small>
                                    </h4>
                                    </div>
                                    
                                </div>
                                
                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                    From
                                    <address>
                                        <strong style="color: orangered"><?= $tiket->username; ?></strong><br>
                                        Divisi: <?= $tiket->divisi; ?><br>
                                        Jabatan: <?= $tiket->jabatan; ?><br>
                                        Email: <?= $tiket->email; ?>
                                    </address>
                                    </div>
                                 
                                    <div class="col-sm-4 invoice-col">
                                        <b>Status Tiket</b>:
                                        <?php if($tiket->status_tiket == '0') {
                                            echo '<span class="badge badge-warning"> Waiting....</span>';
                                        } else if ($tiket->status_tiket == '1') {
                                            echo '<span class="badge badge-info"> Response...</span>';
                                        } else if ($tiket->status_tiket == '2') {
                                            echo '<span class="badge badge-success"> Process...</span>';
                                        } else {
                                            echo '<span class="badge badge-danger"> Solved</span>';
                                        }
                                        ?>
                                        <br>
                                        <br>
                                        <b>No Tiket: </b><span style="color: #007BFF"><?= $tiket->no_tiket; ?></span>
                                        <br>
                                        <br>
                                        <b>Selesai: </b> 
                                        <?php 
                                            if ($tiket->status_tiket == '3') {
                                                echo $tiket->waktu_tanggapan;
                                            } else {
                                                echo 'Belum Selesai';
                                            }
                                        ?>
                                    </div>
                                    <!-- /.col -->
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- Table row -->
                                <div class="row">
                                    <div class="col-6 table-responsive">
                                        <label for="">Keluhan</label>
                                        <input type="text" value="<?= $tiket->judul_tiket; ?>" readonly class="form-control">
                                        <label for="">Deskripsi</label>
                                        <textarea rows="7" readonly class="form-control"><?= $tiket->deskripsi; ?></textarea>
                                    <!-- <table class="table table-striped">
                                        <thead>
                                        <tr>
                                        <th>Qty</th>
                                        <th>Product</th>
                                        <th>Serial #</th>
                                        <th>Description</th>
                                        <th>Subtotal</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        <td>1</td>
                                        <td>Call of Duty</td>
                                        <td>455-981-221</td>
                                        <td>El snort testosterone trophy driving gloves handsome</td>
                                        <td>$64.50</td>
                                        </tr>
                                        <tr>
                                        <td>1</td>
                                        <td>Need for Speed IV</td>
                                        <td>247-925-726</td>
                                        <td>Wes Anderson umami biodiesel</td>
                                        <td>$50.00</td>
                                        </tr>
                                        <tr>
                                        <td>1</td>
                                        <td>Monsters DVD</td>
                                        <td>735-845-642</td>
                                        <td>Terry Richardson helvetica tousled street art master</td>
                                        <td>$10.70</td>
                                        </tr>
                                        <tr>
                                        <td>1</td>
                                        <td>Grown Ups Blue Ray</td>
                                        <td>422-568-642</td>
                                        <td>Tousled lomo letterpress</td>
                                        <td>$25.99</td>
                                        </tr>
                                        </tbody>
                                    </table> -->
                                    </div>
                                    <div class="col-6 table-responsive">
                                        <label for="">Tanggapan dari IT</label>
                                        <textarea rows="10" readonly class="form-control"></textarea>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <!-- accepted payments column -->
                                    <div class="col-6">
                                        <p class="lead">Foto Keluhan:</p>
                                        <img src="<?= base_url('assets/image/tiket/' . $tiket->gambar_tiket); ?>" width="250px">
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-6">
                                        <p class="lead">Foto Tanggapan</p>
                                        <img src="<?= base_url('assets/image/tanggapan/' . $tiket->gambar_tiket); ?>" width="250px">
                                    </div>
                                    <!-- /.col -->
                                </div>
                                
                                <br>
                                
                                </div>
                                <!-- /.invoice -->
                            </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                        </section>
                        <!-- /.content -->
                    
                    <!-- /.content-wrapper -->
                   

                    <!-- Control Sidebar -->
                   
                    <!-- /.control-sidebar -->
                   
                    <!-- ./wrapper -->

                    <!-- jQuery -->
                    


</div>