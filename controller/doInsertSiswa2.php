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
	setcookie('cookieNamaA',$namaA,time()+30,'/');
	setcookie('cookiePendidikanA',$pendidikanA,time()+30,'/');
	setcookie('cookiePekerjaanA',$pekerjaanA,time()+30,'/');
	setcookie('cookieKantorA',$kantorA,time()+30,'/');
	setcookie('cookieTelpA',$telpA,time()+30,'/');
	setcookie('cookieNamaI',$namaI,time()+30,'/');
	setcookie('cookiePendidikanI',$pendidikanI,time()+30,'/');
	setcookie('cookiePekerjaanI',$pekerjaanI,time()+30,'/');
	setcookie('cookieKantorI',$kantorI,time()+30,'/');
	setcookie('cookieTelpI',$telpI,time()+30,'/');
	if ($namaI=="")
	{
		header("location:../insertdatasiswa2.php?siswaID=$siswaID&&errorMsg=Silahkan isi nama Ibu");
	}

	else
	{			
		mysql_query("update orangtua set ayah='$namaA',pendidikanA='$pendidikanA', pekerjaanA='$pekerjaanA',namausahaA='$kantorA', telpA='$telpA', ibu='$namaI', pendidikanI='$pendidikanI', pekerjaanI='$pekerjaanI', namausahaI='$kantorI', telpI='$telpI'  where siswaID=$siswaID");	
		header("location:../insertdatasiswa3.php?siswaID=$siswaID");			

	}
	
?>