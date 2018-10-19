<?php 
	include("doConnect.php");
	session_start();
	$siswaID=$_REQUEST['siswaID'];
	$sekolahA = $_REQUEST['txtSekolahA'];
	$alamatS = $_REQUEST['txtAlamatS'];
	$sttb = $_REQUEST['txtSTTB'];
	$drkls = $_REQUEST['txtDrKls'];
	$alsnP = $_REQUEST['txtAlsnP'];
	$namaE = $_REQUEST['txtNamaE'];
	$hubE = $_REQUEST['txtHubE'];
	$HPE = $_REQUEST['txtHPE'];
	$namaEE = $_REQUEST['txtNamaEE'];
	$hubEE = $_REQUEST['txtHubEE'];
	$HPEE = $_REQUEST['txtHPEE'];
	$mslhK = $_REQUEST['txtMslhK'];
	$hobi = $_REQUEST['txtHobby'];
	$prestasi = $_REQUEST['txtPrestasi'];
	$prestasii = $_REQUEST['txtPrestasii'];
	$penjemput = $_REQUEST['txtPenjemput'];
	$tlpPenjemput = $_REQUEST['txtTlpPenjemput'];
	$harapan = $_REQUEST['txtHarapan'];

	if ($hobi=="")
	{
		header("location:../edittdatasiswa3.php?siswaID=$siswaID&&errorMsg=Silahkan isi Hobbi Anak");
	}

	else
	{			
		mysql_query("update pendukungs set sklhA='$sekolahA', jalanS='$alamatS', sttb='$sttb', darikls='$drkls', alasanpdh='$alsnP', namakes='$namaE', hubkes='$hubE', telpkes='$HPE', namakess='$namaEE', hubkess='$hubEE', telpkess='$HPEE', masalahkes='$mslhK', hobby='$hobi', prestasi='$prestasi', prestasii='$prestasii', harapan='$harapan', penjemput='$penjemput', telppenjemput='$tlpPenjemput' where siswaID=$siswaID");	
		header("location:../editdatasiswa3.php?siswaID=$siswaID&&errorMsg=Success");			

	}
	
?>