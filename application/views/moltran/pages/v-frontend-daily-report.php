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
                                        <h3 class="panel-title">Laporan Transaksi T-MONEY</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm" method="post" action="">
                                                <div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Range *</label>
                                                    <div class="col-lg-10">
                                                        <div class="input-group">
						                                    <input required="required" autocomplete="off" name="startDate" type="text" class="form-control" placeholder="Pilih Tanggal Awal" id="datepicker-start" />
						                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						                                    <input required="required" autocomplete="off" name="stopDate" type="text" class="form-control" placeholder="Pilih Tanggal Akhir" id="datepicker-stop" />
						                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						                                </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="transactionType" class="control-label col-lg-2">Transaksi *</label>
                                                    <div class="col-lg-10">
			                                            <select required="required" name="transactionType" class="select2 form-control" data-placeholder="Pilih Tipe Transaksi T-MONEY">
			                                              	<option value="">&nbsp;</option>
			                                              	<option value="ALL">Semua Tipe Transaksi</option>
			                                              	<option value="TOPUP_ACCOUNT">Isi Saldo T-MONEY</option>
			                                              	<option value="SELF_CASHOUT">Tarik Tunai T-MONEY</option>
			                                            </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-danger waves-effect waves-light" type="submit">Lihat Laporan</button>
                                                        <button class="btn btn-default waves-effect" type="reset">Reset</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>  <!-- End panel-body -->
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