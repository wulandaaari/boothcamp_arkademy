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
          <li class="active"><a href="index.php">Home</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
  <div class="slide story" id="contact" data-slide="6">
    <div class="container">

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h2> Tambah Data Programmers </h2> <hr>
          <form  role="form" action="proses_tambah.php" method="post">
            <div class="form-group">
              <input type="hidden" name="id" class="form-control">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-name">Nama</label>
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Nama" data-rule="minlen:4">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-subject">Skills</label>
              <input type="text" name="skills" class="form-control" id="contact-subject" placeholder="Skills" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="hidden" name="user_id" class="form-control">
              <div class="validate"></div>
            </div>
            <div class="form-send">
               <button type="submit" class="btn btn-large">SIMPAN</button>
            </div>

          </form>

        </div>
      </div>
    </div>
    <!-- /container -->
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
