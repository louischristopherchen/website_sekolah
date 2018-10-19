<?php 
	include("doConnect.php");
	session_start();
	$siswaID=$_REQUEST['siswaID'];
	$namaA = $_REQUEST['txtNamaA'];
	$pendidikanA = $_REQUEST['txtPendidikanA'];
	$pekerjaanA =$_REQUEST['txtPekerjaanA'];
	$kantorA =$_REQUEST['txtKantorA'];
	$telpA =$_REQUEST['txtTelpA'];
	$namaI = $_REQUEST['txtNamaI'];
	$pendidikanI = $_REQUEST['txtPendidikanI'];
	$pekerjaanI =$_REQUEST['txtPekerjaanI'];
	$kantorI =$_REQUEST['txtKantorI'];
	$telpI =$_REQUEST['txtTelpI'];

	if ($namaI=="")
	{
		header("location:../editdatasiswa2.php?siswaID=$siswaID&&errorMsg=Silahkan isi nama Ibu");
	}

	else
	{			
		mysql_query("update orangtua set ayah='$namaA',pendidikanA='$pendidikanA', pekerjaanA='$pekerjaanA',namausahaA='$kantorA', telpA='$telpA', ibu='$namaI', pendidikanI='$pendidikanI', pekerjaanI='$pekerjaanI', namausahaI='$kantorI', telpI='$telpI'  where siswaID=$siswaID");	
		header("location:../editdatasiswa3.php?siswaID=$siswaID");			

	}
	
?>