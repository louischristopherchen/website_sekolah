<?php 
	include("doConnect.php");
	session_start();
	$pegawaiID=$_REQUEST['pegawaiID'];
	$NamaL =$_REQUEST['txtNamaL'];
	$Kelas =$_REQUEST['txtKelas'];
	$Room=$_REQUEST['txtRoom'];
	$Username =$_REQUEST['txtUsername'];
	$TTL =$_REQUEST['txtTTL'];
	$Agama =$_REQUEST['txtAgama'];
	$StatusK =$_REQUEST['txtStatusK'];
	$JlhAnk =$_REQUEST['txtJlhAnk'];
	$TinggiBadan =$_REQUEST['txtTinggiBadan'];
	$BeratBadan =$_REQUEST['txtBeratBadan'];
	$Almt =$_REQUEST['txtAlmt'];
	$Kel =$_REQUEST['txtKel'];
	$Kec =$_REQUEST['txtKec'];
	$Kabko =$_REQUEST['txtKabKo'];
	$NoHP =$_REQUEST['txtNoHP'];
	$NoKTP =$_REQUEST['txtNoKTP'];
	$Email=$_REQUEST['txtEmail'];
	$PendidikanT=$_REQUEST['txtPendidikanT'];
	$Studi=$_REQUEST['txtStudi'];
	$Bertugas=$_REQUEST['txtBertugas'];
	$Jabatan=$_REQUEST['txtJabatan'];
	$BAsing=$_REQUEST['txtBAsing'];
	$JP=$_REQUEST['txtJP'];
	$GP=$_REQUEST['txtGP'];
	$UM=$_REQUEST['txtUM'];
	$TJ=$_REQUEST['txtTJ'];
	$TL=$_REQUEST['txtTL'];
	setcookie('cookieNamaL',$NamaL,time()+30,'/');
	setcookie('cookieKelas',$Kelas,time()+30,'/');
	setcookie('cookieUsername',$Username,time()+30,'/');
	setcookie('cookieTTL',$TTL,time()+30,'/');
	setcookie('cookieStatusK',$StatusK,time()+30,'/');
	setcookie('cookieJlhAnk',$JlhAnk,time()+30,'/');
	setcookie('cookieAgama',$Agama,time()+30,'/');
	setcookie('cookieTinggiBadan',$TinggiBadan,time()+30,'/');
	setcookie('cookieBeratBadan',$BeratBadan,time()+30,'/');
	setcookie('cookieAlmt',$Almt,time()+30,'/');
	setcookie('cookieNoHP',$NoHP,time()+30,'/');
	setcookie('cookieNoKTP',$NoKTP,time()+30,'/');
	setcookie('cookieEmail',$Email,time()+30,'/');
	setcookie('cookiePendidikanT',$PendidikanT,time()+30,'/');
	setcookie('cookieStudi',$Studi,time()+30,'/');
	setcookie('cookieBertugas',$Bertugas,time()+30,'/');
	setcookie('cookieJabatan',$Jabatan,time()+30,'/');
	setcookie('cookieBAsing',$BAsing,time()+30,'/');
	setcookie('cookieJP',$JP,time()+30,'/');
	setcookie('cookieGP',$GP,time()+30,'/');
	setcookie('cookieUM',$UM,time()+30,'/');
	setcookie('cookieTJ',$TJ,time()+30,'/');
	setcookie('cookieTL',$TL,time()+30,'/');
	setcookie('cookieKel',$Kel,time()+30,'/');
	setcookie('cookieKec',$Kec,time()+30,'/');
	setcookie('cookieKabko',$Kabko,time()+30,'/');
	$result =mysql_query("SELECT kelasID from kelas where kelass='$Kelas' and room='$Room'");
 	$row=mysql_fetch_array($result);
	$kelasID=$row['kelasID'];
	if ($NamaL=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&pegawaiID=$pegawaiID&&errorMsg=Silahkan isi Nama Lengkap guru");
	}
	
		else if ($Username=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi Username");
	}
	else if ($TTL=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi TTL");
	}
	else if ($Agama=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi Agama");
	}
	else if ($StatusK=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi Status Kawin");
	}
	else if ($JlhAnk=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi Jumlah Anak");
	}
	
	else if ($TinggiBadan=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi Tinggi Badan");
	}
	else if ($BeratBadan=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi Berat Badan");
	}
	else if ($Almt=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi alamat");
	}
	else if ($NoHP=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi No HP");
	}
	else if ($NoKTP=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi No KTP");
	}
	else if ($Email=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi Email");
	}
	else if ($PendidikanT=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi Pendidikan Terakhir");
	}
	else if ($Studi=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi Bidang Studi");
	}
	else if ($Bertugas=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi Bertugas di sekolah sejak");
	}
	else if ($Jabatan=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi Jabatan");
	}
	else if ($BAsing=="")
	{
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Silahkan isi Bahasa Asing");
	}

	else
	{ 
	mysql_query("update pegawai set
	namaGuru='$NamaL',
	username='$Username',
	ttlG='$TTL',
	agamaG='$Agama',
    statusP='$StatusK',
	jlhAG='$JlhAnk',
	tinggiG='$TinggiBadan',
	beratG='$BeratBadan',
	alamatG='$Almt',
	kelurahanG='$Kel',
	kecamatanG='$Kec',
	kabkotG='$Kabko',
	hpG='$NoHP',
	noktpG='$NoKTP',
	emailG='$Email',
	pendidikanG='$PendidikanT',
	bidangstudiG='$Studi',
	tglbertugasG='$Bertugas',
	jabatanG='$Jabatan',
	bAsing='$BAsing',
	jpG='$JP',
	gpG='$GP',
	umG='$UM',
	tjG='$TJ',
	tlG='$TL'
	where pegawaiID=$pegawaiID
	");
	mysql_query("update pegawai set kelasID='$kelasID'where pegawaiID='$pegawaiID'");
		header("location:../editdataguru.php?pegawaiID=$pegawaiID&&errorMsg=Success");
	}

	
?>