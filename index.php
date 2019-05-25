<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Wulan Dari</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/wulan.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/fancybox/fancybox.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <link rel="prefetch" href="img/zoom.png">

  <!-- =======================================================
    Template Name: Munter
    Template URL: https://templatemag.com/munter-bootstrap-one-page-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="58" data-target="#navigation">

  <!-- Fixed navbar -->
  <div id="navigation" class="navbar navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#intro" class="smoothscroll">Home</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <!-- === MAIN Background === -->
  <div class="slide story" id="intro" data-slide="1">
    <div class="container">
      <div id="home-row-1" class="row clearfix">
        <div class="col-12">
          <h1 class="font-semibold">Aplikasi <span class="font-thin">Pengelolaan Database Programmers</span></h1>
          <br>
          <br>
        </div>
        <!-- /col-12 -->
      </div>
      <!-- /row -->
      <div id="home-row-2" class="row clearfix">

        <div class="col-12 col-sm-4">
          <a href="" class="smoothscroll navigation-slide-a"><div class="home-hover navigation-slide"><img src="img/wa.png"></div><span>082176138414</span></a>
        </div>

        <div class="col-12 col-sm-4">
          <a href="#process" class="smoothscroll navigation-slide-a"><div class="home-hover navigation-slide"><img src="img/email.png"></div><span>wulanco4@gmail.com</span></a>
        </div>

        <div class="col-12 col-sm-4">
          <a href="#clients" class="smoothscroll navigation-slide-a"><div class="home-hover navigation-slide"><img src="img/github.png"></div><span>wulandaaari</span></a>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /slide1 -->
  <div class="slide story" id="contact" data-slide="6">
    <div class="container">

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <?php

  echo"<h2> Data Programmers </h2> <hr>";
  echo"<a href=tambah.php> <h4> Tambah Data </h4> </a>";
include "koneksi.php";

echo "<form name=form1 method=post action=tambah.php>";

echo "<table width='750' border='1'  align=center>";

echo "<tr bgcolor=#2f4f4f> 
          <th>No</th>
          <th>Name</th>
          <th>Skills</th> 
          <th> Aksi </th>
      </tr>";

$no = 1;
$tampil = mysql_query("select * from skilss order by id asc");
while($data = mysql_fetch_array($tampil)){
   echo "<tr> 
          <td>$no</td>
          <td>$data[name]</td>
          <td>$data[skills]</td> 
          <td>
              <a href=updateskills.php?id=$data[id]>Update</a>
          </td>
      </tr>"; 
    $no++;  

}
echo "</table></form>";

?>

        </div>
      </div>
    </div>
    <!-- /container -->
  </div>
  <div id="copyrights">
    <div class="container">
      <p>
        &copy; WulanDari
      </p>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/fancybox/fancybox.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
