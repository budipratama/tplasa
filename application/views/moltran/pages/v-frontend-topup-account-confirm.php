			<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Wizard with Validation -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Isi Saldo T-MONEY</h3>
                                    </div>

                                    <?php # $transaction 	= $this->session->tempdata('transaction'); ?>

                                    <div class="panel-body">
                                        <div class="form">
                                        	<div class="wizard">
                                        		<div class="steps clearfix">
                                        			<ul role="tablist">
                                        				<li class="first disabled" role="tab">
                                        					<a>
	                                        					<span class="number">1.</span> Tahap Konfirmasi
	                                        				</a>
                                        				</li>
                                        				<li class="current" role="tab">
                                        					<a>
                                        						<span class="number">2.</span> Tahap Pembayaran
                                        					</a>
                                        				</li>
                                        				<li class="disabled" role="tab">
                                        					<a>
                                        						<span class="number">3.</span> Tahap Print-out
                                        					</a>
                                        				</li>
													</ul>
												</div>
                                        	</div>
                                        	<div class="clearfix">&nbsp;</div>

											<?php $this->load->view($params['base_widget'] . 'v-widget-alert'); ?>

                                        	<div class="clearfix">&nbsp;</div>

                                            <form class="cmxform form-horizontal tasi-form" id="commentForm" method="post" action="<?php echo @ site_url('frontend/transaction/topup-account/confirm'); ?>">
                                            	<div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">ID / Email *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" readonly="readonly" class="form-control" id="dest_code" name="dest_code" type="text" value="<?php echo (isset($transaction['destAccount'])) ? trim(strtolower($transaction['destAccount'])) : ''; ?>" />
                                                        <input required="required" autocomplete="off" placeholder="" readonly="readonly" class="form-control" id="id_tmoney" name="id_tmoney" type="hidden" value="<?php echo (isset($transaction['destCode'])) ? trim(strtolower($transaction['destCode'])) : ''; ?>" />
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Nama Pengguna *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" readonly="readonly" class="form-control" id="full_name" name="full_name" type="text" value="<?php echo (isset($transaction['destName'])) ? trim(ucwords(strtolower($transaction['destName']))) : ''; ?>" />
                                                    </div>
                                                </div>
												<hr />
                                                <div class="form-group">
                                                    <label for="cemail" class="control-label col-lg-2">Nominal *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" readonly="readonly" id="nominal" name="nominal" type="number" min="1" max="10000000" class="required form-control" value="<?php echo (isset($transaction['amount'])) ? floatval($transaction['amount']) : ''; ?>" />
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Biaya Transaksi *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" readonly="readonly" class="form-control" id="fee_amount" name="fee_amount" min="1" max="10000000" type="number" value="<?php echo (isset($transaction['feeAmount'])) ? floatval($transaction['feeAmount']) : ''; ?>" />
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Total Bayar *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" readonly="readonly" class="form-control" id="total_amount" name="total_amount" min="1" max="10000000" type="number" value="<?php echo (isset($transaction['totalAmount'])) ? floatval($transaction['totalAmount']) : ''; ?>" />
                                                    </div>
                                                </div>
												<hr />
                                            	<div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">ID Transaksi *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" readonly="readonly" class="form-control" id="transaction_id" name="transaction_id" type="text" value="<?php echo (isset($transaction['transactionID'])) ? trim($transaction['transactionID']) : ''; ?>" />
                                                        <input required="required" autocomplete="off" placeholder="" readonly="readonly" class="form-control" id="ref_code" name="ref_code" type="hidden" value="<?php echo (isset($transaction['refNo'])) ? trim($transaction['refNo']) : ''; ?>" />
                                                    </div>
                                                </div>
												<hr />
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-danger waves-effect waves-light" type="submit">Isi Saldo</button>
                                                        <a href="<?php echo @ site_url('frontend/transaction/topup-account'); ?>">
                                                        	<button class="btn btn-default waves-effect" type="button">Kembali</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- .form -->
                                    </div> <!-- panel-body -->
                                </div> <!-- End panel -->

                            </div> <!-- end col -->

                        </div> <!-- End row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 &copy; by PT Telkom Indonesia. Developed by <em>DANRA Team</em>
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->