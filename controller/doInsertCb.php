<?php 
	include("doConnect.php");
	session_start();
	
	$pegawaiID = $_SESSION['pegawaiID'];
	$berita= $_REQUEST['txtBerita'];
	date_default_timezone_set("Asia/Jakarta");
		$date = date("Y-m-d")."";
	$existBerita = mysql_query("select pegawaiID,datecb from commbook where dateCB = '$date'");
	if ($berita=="")
	{
		header("location:../combook.php?errorMsg=Silahkan Isi Berita");
	}
	else if (mysql_num_rows($existBerita)>0)
	{
		header("location:../combook.php?errorMsg=Hanya 1 Combook Sehari");
	}
	else
	{
		
		mysql_query("insert into commbook values('','$pegawaiID','$berita','$date')");
		header("location:../combook.php");	
	}
	
?>