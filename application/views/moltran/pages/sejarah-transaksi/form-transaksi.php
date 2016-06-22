<?php 
if ($report->TRANS_CODE == 'TrxPpobCashInDelima') 
    $tr_code = "Remittance - Cashin";  
if ($report->TRANS_CODE == 'TrxPpobCashOutDelima') 
	$tr_code = "Remittance - Cashout";
if ($report->TRANS_CODE == 'TrxPpobRefundDelima') 
	$tr_code = "Remittance - Refund";
if ($report->TRANS_CODE == 'TrxPpobTopUpEmoney') 
	$tr_code = "Remittance - Topup";
if ($report->TRANS_CODE == 'TrxPpobTransferOther') 
    $tr_code = "PPOB - Transfer ke Bank";
if ($report->TRANS_CODE == 'TrxPpobBillPayment') 
    $tr_code = "PPOB - Pembayaran Tagihan";
if ($report->TRANS_CODE == 'TrxPpobAirtimeRefill-Airtime') 
    $tr_code = "PPOB - Top Up Pulsa";
if ($report->TRANS_CODE == 'TrxPpobAirtimeRefill-PLN') 
    $tr_code = "PPOB - PLN Prepaid";
if ($report->TRANS_CODE == 'TrxPpobDonation') 
    $tr_code = "PPOB - Donasi";

?>
<div class='modal-content'>
    <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
        <h4 class='modal-title t-active'>DETAIL TRANSAKSI</h4>
    </div>
    <div class='modal-body'>
        <table width="100%" cellpadding="5" cellspacing="0" border="0">
            <tr>
                <td class="table_default" width="30%">No. Syslog</td>
                <td class="table_default" width="5%">:</td>
                <td class="table_default" width="65%"><?=$report->TRANS_SYSLOGNO?></td>
            </tr>
            <tr>
                <td class="table_default">Kode Transaksi</td>
                <td class="table_default">:</td>
                <td class="table_default"><strong><?=$tr_code?></strong></td>
            </tr>
            <tr>
                <td class="table_default">ID Terminal</td>
                <td class="table_default">:</td>
                <td class="table_default"><?=$terminal?></td>
            </tr>
            <tr>
                <td class="table_default">Nominal EUP</td>
                <td class="table_default">:</td>
                <td class="table_default"><?=$report->TRANS_VALUE?></td>
            </tr>
            <!-- <tr>
                <td class="table_default">Response Code</td>
                <td class="table_default">:</td>
                <td class="table_default"><?=$report->OU_PHONE_NUMBER?></td>
            </tr> -->
            <tr>
                <td class="table_default">Tanggal Transaksi</td>
                <td class="table_default">:</td>
                <td class="table_default"><?=$report->TRANS_CURRENTTIME?></td>
            </tr>            
        </table>
    </div>
</div>
