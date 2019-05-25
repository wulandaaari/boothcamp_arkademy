<h2> Form Update Data Programmers </h2>
<hr>
<?php
include "koneksi.php";

$no = $_GET['id'];

$tampil = mysql_query("select * from skilss where id='$no'");
$data = mysql_fetch_array($tampil);
 
echo "<form name=tambah method=post action=proses_update.php>";

echo "<table border=1>";

echo "<tr>
         <td>Nim</td>
         <td>:</td>
         <td><input type=text name=id size=15 readonly value='$data[id]'> </td>";

echo "<tr>
         <td>Nama</td>
         <td>:</td>
         <td><input type=text name=name size=15 value='$data[name]'> </td>";

echo "<tr>
         <td>Skills</td>
         <td>:</td>
         <td><input type=text name=skills size=100 value='$data[skills]'> </td>";

echo "<tr>
         <td></td>
         <td></td>
         <td><input type=submit name=tambah value=Update> </td>";
echo "<form>";
?>