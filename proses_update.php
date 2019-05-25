<?php
include "koneksi.php";

$update = mysql_query("update skilss set name = '$_POST[name]',
                                      skills = '$_POST[skills]'
                        where id='$_POST[id]'");

if($update) {
   header('location:index.php');
}     
else {
  echo "update gagal";
}
                                     

?>