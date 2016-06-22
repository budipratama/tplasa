<div class='modal-content'>
    <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
        <h4 class='modal-title t-active'>DETAIL OUTLET</h4>
    </div>
    <div class='modal-body'>
        <table width="100%" cellpadding="5" cellspacing="0" border="0">
            <tr>
                <td class="table_default" width="30%">Cabang</td>
                <td class="table_default" width="5%">:</td>
                <td class="table_default" width="65%"><?=$cabang?></td>
            </tr>
            <tr>
                <td class="table_default">Nama Outlet</td>
                <td class="table_default">:</td>
                <td class="table_default"><strong><?=$outlet->OU_NAME?></strong></td>
            </tr>
            <tr>
                <td class="table_default">Alamat Email</td>
                <td class="table_default">:</td>
                <td class="table_default"><?=$outlet->OU_EMAIL?></td>
            </tr>
            <tr>
                <td class="table_default">No. Identitas</td>
                <td class="table_default">:</td>
                <td class="table_default"><?=$outlet->OU_IDENTITYCODE?></td>
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
            <tr>
                <td class="table_default">Kota / Kabupaten</td>
                <td class="table_default">:</td>
                <td class="table_default"><?=$kabupaten?> </td>
            </tr>
            <tr>
                <td class="table_default">Provinsi</td>
                <td class="table_default">:</td>
                <td class="table_default"><?=$provinsi?></td>
            </tr>
            <tr>
                <td class="table_default">Nama Bank</td>
                <td class="table_default">:</td>
                <td class="table_default"><?=$bank?></td>
            </tr>
            <tr>
                <td class="table_default">Nomor Rekening</td>
                <td class="table_default">:</td>
                <td class="table_default"><?= $outlet->OU_BANKACCOUNT?></td>
            </tr>
            <tr>
                <td class="table_default">Pemilik Rekening</td>
                <td class="table_default">:</td>
                <td class="table_default"><?=$outlet->OU_BANKHOLDER?></td>
            </tr>
            <tr>
                <td class="table_default">Koordinat Lintang</td>
                <td class="table_default">:</td>
                <td class="table_default"><?=$outlet->OU_LATITUDE?></td>
            </tr>
            <tr>
                <td class="table_default">Koordinat Bujur</td>
                <td class="table_default">:</td>
                <td class="table_default"><?=$outlet->OU_LONGITUDE?></td>
            </tr>
        </table>
    </div>
</div>
