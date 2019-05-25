<?php
include "koneksi.php";

$id = $_POST['id'];
$name = $_POST['name'];
$user_id= $_POST['user_id'];
$skills = $_POST['skills'];

$tambah = mysql_query("insert into skilss (id, name, user_id, skills)
                            values
                       ('$id','$name','$user_id','$skills')");

if($tambah) {
 echo "
  <script language='javascript'>
  alert('Proses Pendaftaran Telah Berhasil');
  location.href='index.php';
  </script>
  ";
}
else {
  echo "
  <script language='javascript'>
  alert('Pendafatarn gagal, silahkan input lagi data pendafatarn');
  location.href='tambah.php';
  </script>
  ";
}
?>