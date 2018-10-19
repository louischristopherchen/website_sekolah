<?php 
	include("doConnect.php");
	session_start();
	$siswaID=$_REQUEST['siswaID'];
	$result =mysql_query("SELECT namaLengkap,noIDDD from siswa where siswaID='$siswaID'");
 	$row=mysql_fetch_array($result);
 	$NamaL=$row['namaLengkap'];
 	$IDDD=$row['noIDDD'];
	$namaAwal=explode(" ",$NamaL);
    $password=md5(strtolower($namaAwal[0]).substr($IDDD, -4));
	mysql_query("update siswa set password='$password' where siswaID='$siswaID'");
	header("location:../editdatasiswa.php?siswaID=$siswaID");	
	?>