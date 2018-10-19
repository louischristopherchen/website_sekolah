<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SEKOLAH TUNAS BANGSA</title>
  
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favico.ico" />

    <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body> 
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
         
         <!-- header Start
         ================================================= -->

<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?4ZZSrGr7Mss9E5NxgnECMvnIs4FFcW52";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
  <?php if(!isset($_SESSION['userRole'])){ ?>
<style>


li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
    
}

</style>

 <!-- header Start
         ================================================= -->
        
        <section id="header" >
            <nav class="navbar  navbar-default navbar-fixed-top" style="background-color:white"  role="navigation">
            <div class="container" >
                <div class="row"> 
                    <div class="col-md-8">
                        <div class="block-left">
						
							  <div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								  <div class="nav-logo">
									<a href="index.php"><img src="img/logo.png" alt="logo"> SEKOLAH TUNAS BANGSA</a>
								  </div>
								</div>
							
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								  <ul class="nav navbar-nav">
									<li class="<?php if ($first_part=="") {echo "active"; } else  {echo "noactive";}?>"><a href="index.php">Home</a></li>
									<li><a href="partner.php">Partner</a></li>
									<li><a href="ach.php">Achievement</a></li>
									<li><a href="news.php">News</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									 <li class="dropdown">
     									   <a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us
   									     <span></span></a>
   									     <ul class="dropdown-menu">
  									<li> <a href="#">Pengurus Yayasan</a></li>
    								      	<li><a href="#">Struktur Sekolah</a></li>
        								</ul>
      									</li>			
									<li><a href="login.php">Sign-in</a></li>
								  </ul>
								</div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
						
                        </div>
                    </div><!-- .col-md-5 -->

                    <div class="col-md-4">
                        <div class="block-right">
                            <div class="contact-area">
                                <ul>
								
								</ul>								
									<ul>
                                    <li><i class="fa fa-phone-square"></i>0761-25289
<p>Call Center : 0812-7063-6633</p>
</li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col-md-5 close -->
                </div><!-- .row close -->
            </div><!-- .container close --></nav>
        </section><!-- #heder close -->
        <br><br><br><br>
      
 
 <?php }else if(($_SESSION['userRole'] == "spv")){?>
		 	<style>


li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
 <!-- header Start
         ================================================= -->
        
        <section id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block-left">
							<nav class="navbar navbar-default" role="navigation">
							  <div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								  <div class="nav-logo">
									<a href="index.php"><img src="img/logo.png" alt="logo"> SEKOLAH TUNAS BANGSA</a>
								  </div>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								  <ul class="nav navbar-nav">
                                  <li><a href="#">Home <span class="sr-only">(current)</span></a></li>
								
									
	<li class="dropdown">
    <a href="#" class="dropbtn">Edit</a>
    <div class="dropdown-content">
      <a href="#">Data Siswa</a>
      </div>
  </li>
  <li class="dropdown">
    <a href="#" class="dropbtn">View</a>
    <div class="dropdown-content">
      <a href="#">Data Siswa</a>
  
          </div>
  </li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Edit</a>
    <div class="dropdown-content">
      <a href="#">Data Siswa</a>
      <a href="#">Data Guru</a>
          </div>
  </li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Delete</a>
    <div class="dropdown-content">
      <a href="#">Data Siswa</a>
      <a href="#">Data Guru</a>
    </div>
  </li>
<li><a href="login.php">Sign-Oout</a></li>
								  </ul>
								</div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
                        </div>
                    </div><!-- .col-md-6 -->

                    <div class="col-md-6">
                        <div class="block-right">
                            <div class="contact-area">
                                <ul>
								
								</ul>								
									<ul>
                                    <li><i class="fa fa-phone-square"></i>0761-25289
<p>Call Center : 0812-7063-6633</p>
</li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col-md-6 close -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #heder close -->
        
        <?php }else if(($_SESSION['userRole'] == "dentry")||($_SESSION['userRole'] == "admin")){?>
		 	<style>


li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
 <!-- header Start
         ================================================= -->
        
        <section id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block-left">
							<nav class="navbar navbar-default" role="navigation">
							  <div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								  <div class="nav-logo">
									<a href="index.php"><img src="img/logo.png" alt="logo"> SEKOLAH TUNAS BANGSA</a>
								  </div>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								  <ul class="nav navbar-nav">
                                 <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>

				 <li><a href="news.php">News</a></li>
				  <li><a href="payment.php">Payment</a></li>
				 
				 
				 <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Input
        <span></span></a>
        <ul class="dropdown-menu">
          <li> <a href="insertdatasiswa.php">Data Siswa</a></li>
          <li><a href="insertdataguru.php">Data Pegawai</a></li>
        </ul>
      </li><li></li>	
      
				 <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">View
        <span></span></a>
        <ul class="dropdown-menu">
             <li class="dropdown-header">Data Siswa</li>
          <li> <a href="views.php">All Data</a></li>
          <li> <a href="viewsr.php">Data Real</a></li>
          <li> <a href="viewso.php">Data Out</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Data Pegawai</li>
          <li><a href="viewg.php">All Data</a></li>
        </ul>
      </li>		
<li><a href="kelas.php">Kelas</a></li>
<li><a href="controller/doLogout.php">Sign-Out</a></li>
								  </ul>
								</div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
                        </div>
                    </div><!-- .col-md-6 -->

                    <div class="col-md-6">
                        <div class="block-right">
                            <div class="contact-area">
                                <ul>
								
								</ul>								
									<ul>
                                    <li><i class="fa fa-phone-square"></i>0761-25289
<p>Call Center : 0812-7063-6633</p>
</li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col-md-6 close -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #heder close -->
        
        <?php }else if(($_SESSION['userRole'] == "guru")){?>
		 <style>


li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
 <!-- header Start
         ================================================= -->
        
        <section id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block-left">
							<nav class="navbar navbar-default" role="navigation">
							  <div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								  <div class="nav-logo">
									<a href="index.php"><img src="img/logo.png" alt="logo"> SEKOLAH TUNAS BANGSA</a>
								  </div>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								  <ul class="nav navbar-nav">
								<li><a href="index.php">Dashboard</a></li>
<li><a href="combook.php">Combook</a></li>
<li><a href="#">Nilai Siswa</a></li>


<li><a href="controller/doLogout.php">Sign-Out</a></li>
								  </ul>
								</div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
                        </div>
                    </div><!-- .col-md-6 -->

                    <div class="col-md-6">
                        <div class="block-right">
                            <div class="contact-area">
                                <ul>
								
								</ul>								
									<ul>
                                    <li><i class="fa fa-phone-square"></i>0761-25289
<p>Call Center : 0812-7063-6633</p>
</li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col-md-6 close -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #heder close -->
        
        <?php }else if(($_SESSION['userRole'] == "ortu")){?>
		 	<style>


li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
 <!-- header Start
         ================================================= -->
        
        <section id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block-left">
							<nav class="navbar navbar-default" role="navigation">
							  <div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								  <div class="nav-logo">
									<a href="index.php"><img src="img/logo.png" alt="logo"> SEKOLAH TUNAS BANGSA</a>
								  </div>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								  <ul class="nav navbar-nav">
								<li><a href="index.php">Dashboard</a></li>
<li><a href="combook.php">Combook</a></li>
<li><a href="viewpayment.php">Payment</a></li>
<li><a href="cpass.php">Change Password</a></li>


<li><a href="controller/doLogout.php">Sign-Out</a></li>
								  </ul>
								</div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
                        </div>
                    </div><!-- .col-md-6 -->

                    <div class="col-md-6">
                        <div class="block-right">
                            <div class="contact-area">
                                <ul>
								
								</ul>								
									<ul>
                                    <li><i class="fa fa-phone-square"></i>0761-25289
<p>Call Center : 0812-7063-6633</p>

</li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col-md-6 close -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #heder close -->
  
        <?php } ?>