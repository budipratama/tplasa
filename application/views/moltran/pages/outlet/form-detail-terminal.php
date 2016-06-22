<div class='modal-content'>
    <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
        <h4 class='modal-title t-active'>DAFTAR TERMINAL</h4>
    </div>
    <div class='modal-body'>
        <table width="100%" cellpadding="5" cellspacing="0" border="0">
            <tr>
                <td class="table_default" width="30%">Nama Outlet</td>
                <td class="table_default" width="5%">:</td>
                <td class="table_default" width="65%"><strong><?=$outlet->OU_NAME?></strong></td>
            </tr>
            <tr>
                <td class="table_default">Alamat Email</td>
                <td class="table_default">:</td>
                <td class="table_default"><?=$outlet->OU_EMAIL?></td>
            </tr>
            <tr>
                <td class="table_default">No. Telefon</td>
                <td class="table_default">:</td>
                <td class="table_default"><?=$outlet->OU_PHONE_NUMBER?></td>
            </tr>
            <tr>
                <td class="table_default">Alamat Lengkap</td>
                <td class="table_default">:</td>
                <td class="table_default"><?=$outlet->OU_ADDRESS?></td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
        </table>
        <div style="clear: both;">&nbsp;</div>
        <table width="98%" cellpadding="5" cellspacing="1" border="0" style="margin: 5px;">
            <tr bgcolor="AAAAAA">
                <td class="table_default" style="text-transform: uppercase; font-weight: bold; padding-bottom: 10px; padding-top: 10px; text-align: center;" width="8%">NO</td>
                <td class="table_default" style="text-transform: uppercase; font-weight: bold; padding-bottom: 10px; padding-top: 10px; text-align: center;" width="22%">ID Terminal</td>
                <td class="table_default" style="text-transform: uppercase; font-weight: bold; padding-bottom: 10px; padding-top: 10px; text-align: center;" width="20%">Tanggal</td>
                <td class="table_default" style="text-transform: uppercase; font-weight: bold; padding-bottom: 10px; padding-top: 10px; text-align: center;" width="25%">Aktif / Tidak</td>
                <td class="table_default" style="text-transform: uppercase; font-weight: bold; padding-bottom: 10px; padding-top: 10px; text-align: center;" width="25%">Saldo Maksimum</td>
            </tr>
            <?php
                $no = 1;
                $data = "";
                foreach ($terminal->result() as $row) {
                    $status      = $row->TR_STATUS==1?"ACTIVE":"NOT ACTIVE";
                    $max_balance = number_format($row->TR_MAX_BALANCE, 0, '.', '.');
                    $tgl         = substr($row->CREATED_ON,0,10);
                    $data .= "<tr bgcolor='DFDFDF'>
                                <td class='table_default'>$no</td>
                                <td class='table_default'><strong>{$row->TR_CODE}</strong></td>
                                <td class='table_default'>$tgl</td>
                                <td class='table_default'>$status</td>
                                <td class='table_default'>Rp $max_balance,-</td>
                            </tr>";
                    $no++;
                }
                echo $data;
            ?>
            <!-- <tr bgcolor="DFDFDF">
                <td class="table_default">1</td>
                <td class="table_default"><strong>PLS02104</strong></td>
                <td class="table_default">2013-02-15</td>
                <td class="table_default">AKTIF</td>
                <td class="table_default">Rp 50.000.000,-</td>
            </tr>
            <tr bgcolor="EFEFEF">
                <td class="table_default">2</td>
                <td class="table_default"><strong>PLS02105</strong></td>
                <td class="table_default">2013-02-15</td>
                <td class="table_default">AKTIF</td>
                <td class="table_default">Rp 50.000.000,-</td>
            </tr> -->
        </table>
    </div>
</div>