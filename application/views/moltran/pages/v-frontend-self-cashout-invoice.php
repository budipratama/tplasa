			<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">INVOICE TARIK TUNAI T-MONEY</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="<?php echo @ site_url('frontend/dashboard'); ?>">Plasa Telkom</a></li>
                                    <li><a href="<?php echo @ site_url('frontend/transaction/self-cashout'); ?>">Tarik Tunai</a></li>
                                    <li class="active">Invoice</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                                    <div class="panel-body">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4 class="text-right"><img src="<?php echo $params['base_image'] . 'favicon.png'; ?>" alt="velonic"></h4>

                                            </div>
                                            <div class="pull-right">
                                                <h4>Invoice # <br>
                                                    <strong><?php echo (isset($transaction['transactionID'])) ? trim(splitter_vars($transaction['transactionID'])) : splitter_vars('201605311234567890', 6, '-'); ?></strong>
                                                </h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="pull-left m-t-30">
                                                    <address>
                                                      <strong>T-MONEY by PT Telkom Indonesia</strong><br>
                                                      Gd. Menara Multimedia Lt. 15<br>
                                                      Jakarta Pusat<br>
                                                      </address>
                                                </div>
                                                <?php
                                                	if(isset($transaction['resultCode']) && $transaction['resultCode'] == '0')
                                                	{
                                                		$label 			= 'label-success';
                                                		$info 			= 'Sukses';
                                                	}
                                                	else
                                                	{
                                                		$label 			= 'label-danger';
                                                		$info 			= 'Gagal';
                                                	}
                                                ?>
                                                <div class="pull-right m-t-30">
                                                    <p><strong>Tanggal Transaksi : </strong> <?php echo @ formatter_date(date($this->config->item('log_date_format'))); ?></p>
                                                    <p class="m-t-10"><strong>Status Transaksi : </strong> <span class="label <?php echo $label; ?>"><?php echo $info; ?></span></p>
                                                    <p class="m-t-10"><strong>ID Transaksi : </strong> # <?php echo (isset($transaction['transactionID'])) ? trim(splitter_vars($transaction['transactionID'])) : splitter_vars('201605311234567890', 6, '-'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-h-50"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            	<div class="col-md-4">ID / Email</div>
                                            	<div class="col-md-8"><?php echo (isset($transaction['destCode'])) ? trim($transaction['destCode']) : '-'; ?></div>
                                            </div>
                                            <div class="clearfix">&nbsp;</div>
                                            <div class="col-md-12">
                                            	<div class="col-md-4">Nama Pengguna</div>
                                            	<div class="col-md-8"><strong><?php echo (isset($transaction['destName'])) ? trim(ucwords(strtolower($transaction['destName']))) : '-'; ?></strong></div>
                                            </div>
                                            <div class="clearfix">&nbsp;</div>
                                            <div class="col-md-12">
                                            	<div class="col-md-4">Nilai Tarik Tunai</div>
                                            	<div class="col-md-8"><?php echo (isset($transaction['amount'])) ? @ formatter_currency($transaction['amount']) : @ formatter_currency(0); ?></div>
                                            </div>
                                        </div>
                                        <div class="m-h-50"></div>
                                        <div class="row" style="border-radius: 0px">
                                            <div class="col-md-3 col-md-offset-9">
                                                <p class="text-right"><b>Nilai Tarik Tunai :</b> <?php echo (isset($transaction['amount'])) ? @ formatter_currency($transaction['amount']) : @ formatter_currency(0); ?></p>
                                                <p class="text-right">Biaya Transaksi : <?php echo (isset($transaction['feeAmount'])) ? @ formatter_currency($transaction['feeAmount']) : @ formatter_currency(0); ?></p>
                                                <hr>
                                                <h3 class="text-right"><?php echo (isset($transaction['totalAmount'])) ? @ formatter_currency($transaction['totalAmount']) : @ formatter_currency(0); ?></h3>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                <a href="<?php echo @site_url('frontend/transaction/self-cashout'); ?>" class="btn btn-danger waves-effect waves-light">Kembali</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 &copy; by PT Telkom Indonesia. Developed by <em>DANRA Team</em>
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->