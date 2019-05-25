<?php 
// tanggal awal
$tanggal_awal = '2019-11-01';
// tanggal akhir
$tanggal_akhir = '2019-11-05';

while (strtotime($tanggal_awal) <= strtotime($tanggal_akhir)) {
            echo "$tanggal_awal<BR>";
            $tanggal_awal = date ("Y-m-d", strtotime("+1 day", strtotime($tanggal_awal)));
}
?>