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
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
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
                                    <!-- /.col -->
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
                                    <div class="col-sm-4 invoice-col">
                                    <b>Invoice #007612</b><br>
                                    <br>
                                    <b>Order ID:</b> 4F3S8J<br>
                                    <b>Payment Due:</b> 2/22/2014<br>
                                    <b>Account:</b> 968-34567
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- Table row -->
                                <div class="row">
                                    <div class="col-12 table-responsive">
                                    <table class="table table-striped">
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
                                    </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <!-- accepted payments column -->
                                    <div class="col-6">
                                    <p class="lead">Payment Methods:</p>
                                    <img src="../../dist/img/credit/visa.png" alt="Visa">
                                    <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                                    <img src="../../dist/img/credit/american-express.png" alt="American Express">
                                    <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                                        plugg
                                        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                    </p>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-6">
                                    <p class="lead">Amount Due 2/22/2014</p>

                                    <div class="table-responsive">
                                        <table class="table">
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>$250.30</td>
                                        </tr>
                                        <tr>
                                            <th>Tax (9.3%)</th>
                                            <td>$10.34</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping:</th>
                                            <td>$5.80</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>$265.24</td>
                                        </tr>
                                        </table>
                                    </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- this row will not appear when printing -->
                                <div class="row no-print">
                                    <div class="col-12">
                                    <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                    <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                                        Payment
                                    </button>
                                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                        <i class="fas fa-download"></i> Generate PDF
                                    </button>
                                    </div>
                                </div>
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