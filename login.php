<?php 
include("controller/doConnect.php");
  session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SEKOLAH TUNAS BANGSA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,700,600,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' rel='stylesheet' type='text/css'>
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
         

       <br>
       <br>
       <br>
       <br>
       <br>
       <br>

             <table align="center"> 
	<form action="controller/doLogin.php" method="post">
                <tr>
                <td align="center" colspan="3"><img  src="img/logo2.png" alt="logo"  height="200" width="200">
                </td>
                </tr>
                <tr><td colspan="3"><br><br></td>
                </tr>
                
                <tr><td align="center"><a href="login2.php"><u>Officer</u></a></td>
                <td align="center"><u><b>Orang Tua Murid<b></u></td>
                <td><a href="index.php"><u>Homepage</u></a></td></tr>
                <tr>
                </tr>
			<tr><td colspan="3"><br></td>
                </tr>
                <td>Nomor induk Siswa</td><td colspan="2"><input type ="text" placeholder="Masukkan NIS" name = "txtUsername"/></td>
                </tr>
                <tr>
                <td>Password</td><td colspan="2"><input type ="password" placeholder="Masukkan Password" name = "txtPassword" /></td>
                </tr>
                <tr>
                            
                            <td >
                                Security Code </td>
                                <td><input  name="txtCaptcha" type="text"></td>
                                <td><img  src="../controller/doCaptcha.php"/> 
                            </td>
                        </tr>
                <tr>
                     <td></td>   <td colspan ="2"><input type ="submit" value="Login" /><label>
                     	<font color="red">
                             <?php 
                            if(isset($_REQUEST['errorMsg']))
                            {
                                echo $_REQUEST['errorMsg'];
                            }
                            ?></font>
                            </label></td>
			</tr>
			<tr><td colspan="3"><br></td>
                </tr>
			<tr><td></td><td><a href="forgotpass.php"><u>Forgot Password ?</u></td>
			<td></td></tr>
			<tr><td colspan="3"><br></td>
                </tr>
			<tr><td align="center" colspan="3"><img  src="img/secure.png" alt="logo"></td>
                </tr>
			</table></form><br><br><br><br><br>
 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
