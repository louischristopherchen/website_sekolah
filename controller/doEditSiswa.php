<?php 
	include("doConnect.php");
	session_start();
	$siswaID=$_REQUEST['siswaID'];
	$NamaL =$_REQUEST['txtNamaL'];
	$NamaP =$_REQUEST['txtNamaP'];
	$Kelas =$_REQUEST['txtKelas'];
	$Room=$_REQUEST['txtRoom'];
	$TTL =$_REQUEST['txtTTL'];
	$Anakke =$_REQUEST['txtAnakke'];
	$JlhSdra =$_REQUEST['txtJlhSdra'];
	$Agama =$_REQUEST['txtAgama'];
	$GolDrh =$_REQUEST['txtGolDrh'];
	$TinggiBadan =$_REQUEST['txtTinggiBadan'];
	$AlmtJln =$_REQUEST['txtAlmt'];
	$Kel =$_REQUEST['txtKel'];
	$Kec =$_REQUEST['txtKec'];
	$Kabko =$_REQUEST['txtKabKo'];
	setcookie('cookieIDDD',$IDDD,time()+30,'/');
	setcookie('cookieNamaL',$NamaL,time()+30,'/');
	setcookie('cookieNamaP',$NamaP,time()+30,'/');
	setcookie('cookieKelas',$Kelas,time()+30,'/');
	setcookie('cookieTTL',$TTL,time()+30,'/');
	setcookie('cookieAnakke',$Anakke,time()+30,'/');
	setcookie('cookieJlhSdra',$JlhSdra,time()+30,'/');
	setcookie('cookieAgama',$Agama,time()+30,'/');
	setcookie('cookieGolDrh',$GolDrh,time()+30,'/');
	setcookie('cookieTinggiBadan',$TinggiBadan,time()+30,'/');
	setcookie('cookieAlmtJln',$AlmtJln,time()+30,'/');
	setcookie('cookieKel',$Kel,time()+30,'/');
	setcookie('cookieKec',$Kec,time()+30,'/');
	setcookie('cookieKabko',$Kabko,time()+30,'/');
    $result =mysql_query("SELECT kelasID from kelas where kelass='$Kelas' and room='$Room'");
 	$row=mysql_fetch_array($result);
	$kelasID=$row['kelasID'];
	
	if ($NamaL=="")
	{
		header("location:../editdatasiswa.php?siswaID=$siswaID&&errorMsg=Silahkan isi Nama Lengkap Siswa");
	}
	else if ($NamaP=="")
	{
		header("location:../editdatasiswa.php?siswaID=$siswaID&&errorMsg=Silahkan isi KELAS");
	}
	else if ($TTL=="")
	{
		header("location:../editdatasiswa.php?siswaID=$siswaID&&errorMsg=Silahkan isi TTL");
	}
	else if ($Anakke=="")
	{
		header("location:../editdatasiswa.php?siswaID=$siswaID&&errorMsg=Silahkan isi Anakke");
	}
	else if ($JlhSdra=="")
	{
		header("location:../editdatasiswa.php?siswaID=$siswaID&&errorMsg=Silahkan isi Jumlah Saudara");
	}
	else if ($Agama=="")
	{
		header("location:../editdatasiswa.php?siswaID=$siswaID&&errorMsg=Silahkan isi Agama");
	}
	else if ($GolDrh=="")
	{
		header("location:../editdatasiswa.php?siswaID=$siswaID&&errorMsg=Silahkan isi Golongan Darah");
	}
	else if ($TinggiBadan=="")
	{
		header("location:../editdatasiswa.php?siswaID=$siswaID&&errorMsg=Silahkan isi Tinggi Badan");
	}
	else if ($AlmtJln=="")
	{
		header("location:../editdatasiswa.php?siswaID=$siswaID&&errorMsg=Silahkan isi Jalan");
	}
	else if ($Kel=="")
	{
		header("location:../editdatasiswa.php?siswaID=$siswaID&&errorMsg=Silahkan isi Kelurahan");
	}
	else if ($Kec=="")
	{
		header("location:../editdatasiswa.php?siswaID=$siswaID&&errorMsg=Silahkan isi Kecematan");
	}
	else if ($Kabko=="")
	{
		header("location:../editdatasiswa.php?siswaID=$siswaID&&errorMsg=Silahkan isi Kab/Kota");
	}
	else
	{ 
	mysql_query("update siswa set
		namaLengkap='$NamaL',
	namaPanggilan='$NamaP',
	kelasID='$kelasID',
	ttl='$TTL',
	anakke='$Anakke',
	jlhsaudara='$JlhSdra',
	agama='$Agama',
	goldarah='$GolDrh',
	tinggibadan='$TinggiBadan',
	jalan='$AlmtJln',
	kelurahan='$Kel',
	kecamatan='$Kec',
	kabkot='$Kabko'  where siswaID=$siswaID
	");
		header("location:../editdatasiswa2.php?siswaID=$siswaID");	
	}
	
?>