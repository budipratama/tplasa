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
                                        <h3 class="panel-title">Tarik Tunai T-MONEY</h3>
                                    </div>
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

                                            <form class="cmxform form-horizontal tasi-form" id="tariktunaiForm" method="post" action="<?php echo @ site_url('frontend/transaction/self-cashout/confirm'); ?>">
                                            	<div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Kode Transfer *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" readonly="readonly" class="form-control" id="transfer_code" name="transfer_code" type="text" value="<?php echo (isset($transaction['receiverCode'])) ? trim($transaction['receiverCode']) : ''; ?>" />
                                                    </div>
                                                </div>
												<hr />
                                                <div class="form-group">
                                                    <label for="cemail" class="control-label col-lg-2">Nama Pengirim *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" readonly="readonly" class="form-control" id="sender_name" name="sender_name" type="text" value="<?php echo (isset($transaction['senderName'])) ? trim(ucwords(strtolower($transaction['senderName']))) : ''; ?>" />
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Alamat Pengirim *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" readonly="readonly" class="form-control" id="sender_address" name="sender_address" type="text" value="<?php echo (isset($transaction['senderAddress'])) ? trim($transaction['senderAddress']) : ''; ?>" />
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Kota Pengirim *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" readonly="readonly" class="form-control" id="sender_city" name="sender_city" type="text" value="<?php echo (isset($transaction['senderCity'])) ? trim($transaction['senderCity']) : ''; ?>" />
                                                    </div>
                                                </div>
												<hr />
                                                <div class="form-group">
                                                    <label for="cemail" class="control-label col-lg-2">Nama Penerima *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" class="form-control" id="recipient_name" name="recipient_name" type="text" value="<?php echo (isset($transaction['recipientName'])) ? trim(ucwords(strtolower($transaction['recipientName']))) : ''; ?>" />
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Nomor ID Penerima *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" class="form-control" id="recipient_address" name="recipient_address" type="number" value="<?php echo (isset($transaction['recipientID'])) ? trim($transaction['recipientID']) : ''; ?>" />
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Telepon Penerima *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" class="form-control" id="recipient_phone" name="recipient_phone" type="text" value="<?php echo (isset($transaction['recipientPhone'])) ? trim($transaction['recipientPhone']) : ''; ?>" />
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Alamat Penerima *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" class="form-control" id="recipient_address" name="recipient_address" type="text" value="<?php echo (isset($transaction['recipientAddress'])) ? trim($transaction['recipientAddress']) : ''; ?>" />
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Provinsi Penerima *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" class="form-control" id="recipient_province" name="recipient_province" type="text" value="<?php echo (isset($transaction['recipientProvince'])) ? trim($transaction['recipientProvince']) : ''; ?>" />
                                                    </div>
                                                </div>
                                            	<div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Kota Penerima *</label>
                                                    <div class="col-lg-10">
                                                        <input required="required" autocomplete="off" placeholder="" class="form-control" id="recipient_city" name="recipient_city" type="text" value="<?php echo (isset($transaction['recipientCity'])) ? trim($transaction['recipientCity']) : ''; ?>" />
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
                                                        <button class="btn btn-danger waves-effect waves-light" type="submit">Tarik Tunai</button>
                                                        <button class="btn btn-default waves-effect" type="reset">Reset</button>
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