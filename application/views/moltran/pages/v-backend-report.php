<?php
$tr = "<option value=''>Pilih Terminal</option>";
    foreach ($terminal->result() as $row) {
        $tr .= "<option value='{$row->TR_ID}'>{$row->TR_CODE}</option>";
    }
?>
<div class="container">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">                        
            <ul class="breadcrumb">
                <li><a href="#">Laporan</a></li>
                <!-- <li><a href="#">Terminal PLASA TELKOM</a></li> -->
                <li class="active">Sejarah Transaksi</li>
            </ul>
        </div>
    </div>

    <div class="panel"> 
        <div class="panel-body">
            <form id="form-sejarah-transaksi" method="POST" action="<?php echo @ site_url('backend/laporan/manage');?>">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="FullName">ID Terminal</label>
                            <select class="form-control" name="id_terminal" id="id_terminal">
                                <?=$tr?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="FullName">Pilih Status Transaksi</label>
                            <select name="status" id="status" class="form-control">
                                <option value="ALL">SEMUA STATUS TRANSAKSI</option>
                                <option value="SUKSES">Transaksi SUKSES</option>
                                <option value="GAGAL">Transaksi GAGAL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Sejarah Transaksi</button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="FullName">Pilih Tipe Transaksi</label>
                            <select name="trx_type" id="trx_type" class="form-control">
                                <option value="ALL">SEMUA TIPE TRANSAKSI</option>
                                <optgroup label="REMITTANCE">
                                    <option value="TrxPpobCashInDelima">Remittance - Cashin</option>
                                    <option value="TrxPpobCashOutDelima">Remittance - Cashout</option>
                                    <option value="TrxPpobRefundDelima">Remittance - Refund</option>
                                    <option value="TrxPpobTopUpEmoney">Remittance - Topup</option>
                                </optgroup>
                                <optgroup label="PPOB">
                                    <option value="TrxPpobTransferOther">PPOB - Transfer ke Bank</option>
                                    <option value="TrxPpobBillPayment">PPOB - Pembayaran Tagihan</option>
                                    <option value="TrxPpobAirtimeRefill-Airtime">PPOB - Top Up Pulsa</option>
                                    <option value="TrxPpobAirtimeRefill-PLN">PPOB - PLN Prepaid</option>
                                    <option value="TrxPpobDonation">PPOB - Donasi</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="FullName">Tanggal Transaksi</label>
                            <div style="clear:both"></div>
                            <input type="text" id="start_date" placeholder="dd-mm-yyyy" name="start_date" class="form-control" data-mask="99-99-9999" style="width:45% !important;float:left;"  /> 
                            <span style="float:left;margin-top:5px;padding:3px"> s/d </span>
                            <input type="text" id="end_date" placeholder="dd-mm-yyyy" name="end_date" class="form-control" data-mask="99-99-9999" style="width:45% !important;float:left;" />
                        </div>
                    </div>
                </div>
            </form>
            <?php if(isset($data_report)):?>
            <table id="report" class="display table table-bordered table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO. SYSLOG</th>
                        <th>TIPE TRANSAKSI</th>
                        <th>ID TERMINAL</th>
                        <th>TOTAL NOMINAL.</th>
                        <th>WAKTU TRANSAKSI</th>
                        <th>STATUS</th>
                        <!-- <th>RC</th> -->
                        <th>AKSI</th>
                    </tr>
                </thead> 
                <tbody>
                    <?php
                        $tr = "";

                        foreach ($data_report->result() as $row) 
                        {
                            $query  = $this->db->get_where('f_terminal',array('TR_ID'=>$row->TR_ID));
                            $t      = $query->row();

                            if ($row->TRANS_CODE=='TrxPpobCashInDelima') 
                                $tr_code = "Remittance - Cashin";  
                            if ($row->TRANS_CODE=='TrxPpobCashOutDelima') 
                                $tr_code = "Remittance - Cashout";
                            if ($row->TRANS_CODE=='TrxPpobRefundDelima') 
                                $tr_code = "Remittance - Refund";
                            if ($row->TRANS_CODE=='TrxPpobTopUpEmoney') 
                                $tr_code = "Remittance - Topup";
                            if ($row->TRANS_CODE=='TrxPpobTransferOther') 
                                $tr_code = "PPOB - Transfer ke Bank";
                            if ($row->TRANS_CODE=='TrxPpobBillPayment') 
                                $tr_code = "PPOB - Pembayaran Tagihan";
                            if ($row->TRANS_CODE=='TrxPpobAirtimeRefill-Airtime') 
                                $tr_code = "PPOB - Top Up Pulsa";
                            if ($row->TRANS_CODE=='TrxPpobAirtimeRefill-PLN') 
                                $tr_code = "PPOB - PLN Prepaid";
                            if ($row->TRANS_CODE=='TrxPpobDonation') 
                                $tr_code = "PPOB - Donasi";
                            $trans_charge = number_format($row->TRANS_CHARGE, 0, '.', '.');
                            
                            $tr .= "<tr><td>{$row->TRANS_SYSLOGNO}</td><td>$tr_code</td><td>{$t->TR_CODE}</td><td>IDR $trans_charge,-</td><td>{$row->TRANS_CURRENTTIME}</td><td>{$row->TRANS_LASTRC}</td><td><i class='md md-folder pointer' title='View User Outlet' id='view-detail-report' onclick='viewDetailReport($row->TRANS_ID)'></i></td></tr>";
                        }
                        echo $tr;
                    ?>   
                </tbody>        
            </table>
            <?php endif;?>
        </div>
        
        <!-- end: page -->
    </div> <!-- end Panel -->                
</div>
<!-- end container -->

<?php $this->load->view($params['base_comp'] . 'v-backend-footer'); ?>
<!-- End Footer -->