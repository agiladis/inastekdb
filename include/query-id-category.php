<?php 
    include('../koneksi.php');

    $id_kategori = $_POST['id_kategori'];
    $kode_batch = $_POST['kode_batch'];

    // GET LAST KODE NOMOR FOR INCREMENT
    $query_kode = mysql_query("SELECT * FROM serial_number WHERE id_kategori = $id_kategori AND id_batch = $kode_batch ORDER BY id DESC LIMIT 1");
    if (mysql_num_rows($query_kode) > 0) {
        // if any data get last digit increment
        $row_kode = mysql_fetch_assoc($query_kode);
        $last_digit_kode_nomor = intval(substr($row_kode["serial_number"], -4));
        $number = sprintf('%04d', $last_digit_kode_nomor + 1);
    } else {
        // if no data exist
        $last_digit_kode_nomor = 0001;   
        $number = sprintf('%04d', $last_digit_kode_nomor);
    }
?>
<input name="kode_nomor" class="form-control" type="text" value="<?= $number ?>" readonly>
