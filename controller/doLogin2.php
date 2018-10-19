<?php 
	include("doConnect.php");
	session_start();
	$username = $_REQUEST['txtUsername'];
	$password = $_REQUEST['txtPassword'];
	$captcha = $_REQUEST['txtCaptcha'];
	$code = $_SESSION["code"];
	if ($username =="")
	{
		header("location:../login2.php?errorMsg=Username Must be Filled");
	}
	else if ($password =="")
	{
		header("location:../login2.php?errorMsg=Password Must be Filled");
	}
	else if($captcha=="")
	{
		header("location:../login2.php?errorMsg=Captcha must be filled");
	}
	else if($captcha != $code)
	{
		header("location:../login2.php?errorMsg=Captcha invalid");
	}
	else
	{
	$password = md5($password);
	$result = mysql_query("SELECT * FROM pegawai WHERE username = '$username' AND password = '$password'");
	$rows = mysql_num_rows($result);
		if(mysql_num_rows($result)<1)
		{
			header("location:../login2.php?errorMsg=Username or Password invalid");

		}
		else
		{
			$result = mysql_fetch_array($result);
			$_SESSION['userRole']= $result['role'];
			$_SESSION['kelasID']= $result['kelasID'];
			$_SESSION['pegawaiID']= $result['pegawaiID'];
			$_SESSION['username']= $result['username'];
			header("location:../index.php");
		}	
	}

?>