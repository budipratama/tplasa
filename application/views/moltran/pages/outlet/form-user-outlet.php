<div class='modal-content'>
    <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
        <h4 class='modal-title t-active'>DAFTAR USER</h4>
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
                <td class="table_default" style="text-transform: uppercase; font-weight: bold; padding-bottom: 10px; padding-top: 10px; text-align: center;" width="70%">Daftar User</td>
            </tr>
            <?php
                $users = "";
                $no = 1;
                foreach ($user->result() as $row) {
                    $query = $this->db->get_where('f_terminal',array('TR_ID'=>$row->TR_ID));
                    $rw = $query->row();
                    $status = $rw->TR_STATUS==1?"ACTIVE":"NON ACTIVE";
                    $users .= "<tr bgcolor='DFDFDF'>
                                    <td class='table_default'>$no</td>
                                    <td class='table_default'><strong>{$rw->TR_CODE}</strong></td>
                                    <td class='table_default'>
                                        <table width='98%' cellpadding='5' cellspacing='0' border='0' style='margin: 5px;'>
                                            <tr>
                                                <td width='75%'>
                                                    &nbsp;
                                                    {$row->EM_NAME}  
                                                </td>
                                                <td width='25%'><em>$status</em></td>
                                            </tr>
                                        </table>
                                    </td>
                            </tr>";
                    $no++;
                }
            ?>
            <?=$users?>
            <!-- <tr bgcolor="EFEFEF">
                <td class="table_default">2</td>
                <td class="table_default"><strong>PLS02105</strong></td>
                <td class="table_default">
                    <table width="98%" cellpadding="5" cellspacing="0" border="0" style="margin: 5px;">
                        <tr>
                            <td width="75%">
                            &bull;&nbsp;
                            <strong><em>710189</em></strong>
                            -
                            PEPIH SUPRIATNA                                            </td>
                            <td width="25%"><em>ACTIVE</em></td>
                        </tr>
                    </table>
                </td>
            </tr> -->
        </table>
    </div>
</div>
