<?php 
	include("doConnect.php");
	session_start();
	$username = $_REQUEST['txtUsername'];
	$password = $_REQUEST['txtPassword'];
	$captcha = $_REQUEST['txtCaptcha'];
	$code = $_SESSION["code"];
	if ($username =="")
	{
		header("location:../login.php?errorMsg=Silahkan isi NO ID");
	}
	else if (strlen($username) !=6)
	{
		header("location:../login.php?errorMsg=NO ID harus 6 Digit");
	}
	else if ($password =="")
	{
		header("location:../login.php?errorMsg=Silahkan isi Password");
	}
	else if($captcha=="")
	{
		header("location:../login.php?errorMsg=Captcha must be filled");
	}
	else if($captcha != $code)
	{
		header("location:../login.php?errorMsg=Captcha invalid");
	}
	else
	{
	$password = md5($password);
	$result = mysql_query("SELECT * FROM siswa WHERE noIDDD = '$username' AND password = '$password'");
	$rows = mysql_num_rows($result);
		if(mysql_num_rows($result)<1)
		{
			header("location:../login.php?errorMsg=Username or Password invalid");

		}
		else
		{
			$result = mysql_fetch_array($result);
			$_SESSION['userRole']= $result['role'];
			$_SESSION['kelasID']= $result['kelasID'];
			$_SESSION['siswaID']= $result['siswaID'];
			$_SESSION['noIDDD']= $result['noIDDD'];
			$_SESSION['username']= $result['username'];
			header("location:../index.php");
		}	
	}

?>