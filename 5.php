<?php
$text = "Purwokerto";
$cari_huruf = array('u', 'o', 'e');
$huruf_baru = array('i', 'a', 'u');
echo str_replace($cari_huruf, $huruf_baru, $text);
?>