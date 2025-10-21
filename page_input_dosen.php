<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profile Kecamatan Tinanggea</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
  if (! isset($_GET['submit'])) $_GET['submit']="";
	  
?>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" class="">Home</a></li>
        <li><a href="page.php?id=4" class="">Topografi</a></li>
        <li><a href="page.php?id=5" class="">Batas Wilayah</a></li>
        <li><a href="page.php?id=6" class="">Pertumbuhan Penduduk</a></li>
        <li><a href="page_input.php" class="">Kontak</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Profile Kecamatan Tinanggea</h1>
            <p>Kabupaten Konawe Selatan</p>
            </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title text-center">
      <h2>Data Kontak</h2>
      <hr>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
		<div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="organisasi" name="organisasi" class="form-control" placeholder="Organisasi/Perusahaan" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="pesan" id="pesan" class="form-control" rows="4" placeholder="Komentar/Pesan/Saran" required="required"></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" name="submit" value='Submit' class="btn btn-custom btn-lg">Send Message</button>
		<a class="btn btn-custom btn-lg" href="index.php">&nbsp;&nbsp;Cancel&nbsp;&nbsp;</a>
		<?php
	$data=$_GET["submit"];
	if ($data=="Submit"){
		if ($_GET["nama"]=="" OR $_GET["alamat"]=="" OR $_GET["email"]=="" OR
			$_GET["organisasi"]=="" OR $_GET["pesan"]=="")
			{
			$pesan = "Data tidak boleh kosong";
			echo "<script type='text/javascript'>alert('$pesan');</script>";
			}
		else
		{
			include "config.php";
			$sql="INSERT INTO Tamu (id_tamu,nama,alamat,email,organisasi,pesan) VALUES (NULL, 
			'".$_GET['nama']."','".$_GET['alamat']."','".$_GET['email']."', 
			'".$_GET['organisasi']."','".$_GET['pesan']."')";
			mysqli_query($connect,$sql);
			/*
			echo "<script type='text/javascript'>alert('Terima Kasih atas kerjasamanya');</script>";
			echo '<script type="text/javascript">window.location = "index.php"</script>';*/
		}
	}
?>
      </form>
    </div>
  </div>
</div>

<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Hubungi Kami</h2>
      <hr>
    </div>
  </div>
    <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">        
          <div class="menu-section-title">
		    <i class="fa fa-phone fa-2x"></i>
			<p>0812-4553-0549</p>
		  </div>		          
      </div>
      <div class="col-xs-12 col-sm-6">        
          <div class="menu-section-title">
			<i class="fa fa-envelope-o fa-2x fa_custom"></i>
			<p>Inefausayana@ymail.com</p>
		  </div>          
      </div>
    </div>
  </div>
</div>

<div id="footer">
  <div class="container-fluid text-center copyrights">
    <div class="col-md-8 col-md-offset-2">
      <p>Develop by q-benks Production</p>
	  <p>Kendari 2018</p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
