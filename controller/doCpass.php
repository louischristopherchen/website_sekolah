<?php 
	include("doConnect.php");
	session_start();
	$password=$_REQUEST['password'];
	$confirmpass=$_REQUEST['confirmpass'];
	$siswaID=$_SESSION['siswaID'];
	if($password=="")
	{
	   	header("location:../cpass.php?errorMsg=Silahkan isi PASSWORD");
	}
	else if($confirmpass=="")
	{
	    header("location:../cpass.php?errorMsg=Silahkan isi CONFIRM PASSWORD");
	}
	else if($password!==$confirmpass)
	{
	    header("location:../cpass.php?errorMsg=PASSWORD & CONFIRM PASSWORD TIDAK SAMA");
	}
	else{
	    $password= md5($password);
	    mysql_query("update siswa set password ='$password' where siswaID='$siswaID'");
	    header("location:../cpass.php?errorMsg=SUCCESS GANTI PASSWORD");
	}

?>