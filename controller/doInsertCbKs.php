<?php 
	include("doConnect.php");
	session_start();
	
	$pegawaiID = $_REQUEST['pegawaiID'];
	$berita= $_REQUEST['txtBerita'];
	$siswaID= $_SESSION['siswaID'];
	date_default_timezone_set("Asia/Jakarta");
		$date = date("Y-m-d")."";
	$result = mysql_query("select cbID from commbook where dateCB = '$date' and pegawaiID='$pegawaiID'");
	$row=mysql_fetch_array($result);
	$cbID=$row['cbID'];
	if ($berita=="")
	{
		header("location:../combookk.php?siswaID=$siswaID&errorMsg=Silahkan Isi Berita");
	}
	else
	{
	  date_default_timezone_set("Asia/Jakarta");
		$time= date("h:ia");
		mysql_query("insert into detailcb values('$cbID','$siswaID','$berita','ortu','$time')");
	header("location:../combook.php");
	}
	
?>