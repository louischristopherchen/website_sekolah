<?php 
	include("doConnect.php");
	session_start();
	$ID=$_REQUEST['txtID'];
	$IDD = $_REQUEST['txtIDD'];
	$IDDD = $_REQUEST['txtIDDD'];
	$IDDDD = $_REQUEST['txtIDDDD'];
	$NamaL =$_REQUEST['txtNamaL'];
	$kelass =$_REQUEST['kelass'];
	$room=$_REQUEST['room'];
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
	setcookie('cookieIDDD',$IDDD,time()+1,'/');
	setcookie('cookieIDDDD',$IDDDD,time()+1,'/');
	setcookie('cookieNamaL',$NamaL,time()+1,'/');
	setcookie('cookieKelas',$Kelas,time()+1,'/');
	setcookie('cookieUsername',$Username,time()+1,'/');
	setcookie('cookieTTL',$TTL,time()+1,'/');
	setcookie('cookieStatusK',$StatusK,time()+1,'/');
	setcookie('cookieJlhAnk',$JlhAnk,time()+1,'/');
	setcookie('cookieAgama',$Agama,time()+1,'/');
	setcookie('cookieTinggiBadan',$TinggiBadan,time()+1,'/');
	setcookie('cookieBeratBadan',$BeratBadan,time()+1,'/');
	setcookie('cookieAlmt',$Almt,time()+1,'/');
	setcookie('cookieNoHP',$NoHP,time()+1,'/');
	setcookie('cookieNoKTP',$NoKTP,time()+1,'/');
	setcookie('cookieEmail',$Email,time()+1,'/');
	setcookie('cookiePendidikanT',$PendidikanT,time()+1,'/');
	setcookie('cookieStudi',$Studi,time()+1,'/');
	setcookie('cookieBertugas',$Bertugas,time()+1,'/');
	setcookie('cookieJabatan',$Jabatan,time()+1,'/');
	setcookie('cookieBAsing',$BAsing,time()+1,'/');
	setcookie('cookieJP',$JP,time()+1,'/');
	setcookie('cookieGP',$GP,time()+1,'/');
	setcookie('cookieUM',$UM,time()+1,'/');
	setcookie('cookieTJ',$TJ,time()+1,'/');
	setcookie('cookieTL',$TL,time()+1,'/');
	setcookie('cookieKel',$Kel,time()+30,'/');
	setcookie('cookieKec',$Kec,time()+30,'/');
	setcookie('cookieKabko',$Kabko,time()+30,'/');
	 $namaAwal=explode(" ",$NamaL);
    $password=md5($namaAwal[0].substr($IDDDD, -4));
	$existIDDDD = mysql_query("select pegawaiID from pegawai where IDDDDG = '$IDDDD'");
		$result =mysql_query("SELECT kelasID from kelas where kelass='$kelass' and room='$room'");
 		$row=mysql_fetch_array($result);
		$kelasID=$row['kelasID'];
	
	if ($ID=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan Pilih TAHUN MASUK");
	}
	else if ($IDD=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan Pilih Bulan Masuk");
	}
	else if ($IDDD=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi Bulan lahir guru");
	}
	else if (strlen($IDDD) !=2)
	{
		header("location:../insertdataguru.php?errorMsg=Bulan Lahir Guru harus 2 Digit");
	}
	else if ($IDDDD=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi Nomor guru");
	}
	else if (strlen($IDDDD) !=4)
	{
		header("location:../insertdataguru.php?errorMsg=NO ID harus 4 Digit");
	}
	else if (mysql_num_rows($existIDDDD)>0)
	{
		header("location:../insertdataguru.php?errorMsg=NIS sudah Ada");
	}
	else if ($NamaL=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi Nama Lengkap guru");
	}
    else if(($kelass=="PG"&&$room!="1")&&($kelass=="PG"&&$room!="2")&&($kelass=="PG"&&$room!="3"))
    {
          header("location:../insertdataguru.php?errorMsg=Room PG hanya 1,2,3");
    }
     else if(($kelass=="KA"&&$room!="1")&&($kelass=="KA"&&$room!="2")&&($kelass=="KA"&&$room!="3"))
    {
          header("location:../insertdataguru.php?errorMsg=Room TK A hanya 1,2,3");
    }
        else if(($kelass=="KB"&&$room!="1")&&($kelass=="KB"&&$room!="2")&&($kelass=="KB"&&$room!="3"))
    {
          header("location:../insertdataguru.php?errorMsg=Room TK B hanya 1,2,3");
    }
    else if(($kelass=="P1"&&$room!="A")&&($kelass=="P1"&&$room!="B")&&($kelass=="P1"&&$room!="C")&&($kelass=="P1"&&$room!="D")&&($kelass=="P1"&&$room!="E")&&($kelass=="P1"&&$room!="F"))
    {
          header("location:../insertdataguru.php?errorMsg=Room P1 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="P2"&&$room!="A")&&($kelass=="P2"&&$room!="B")&&($kelass=="P2"&&$room!="C")&&($kelass=="P2"&&$room!="D")&&($kelass=="P2"&&$room!="E")&&($kelass=="P2"&&$room!="F"))
    {
          header("location:../insertdataguru.php?errorMsg=Room P2 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="P3"&&$room!="A")&&($kelass=="P3"&&$room!="B")&&($kelass=="P3"&&$room!="C")&&($kelass=="P3"&&$room!="D")&&($kelass=="P3"&&$room!="E")&&($kelass=="P3"&&$room!="F"))
    {
          header("location:../insertdataguru.php?errorMsg=Room P3 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="P4"&&$room!="A")&&($kelass=="P4"&&$room!="B")&&($kelass=="P4"&&$room!="C")&&($kelass=="P4"&&$room!="D")&&($kelass=="P4"&&$room!="E")&&($kelass=="P4"&&$room!="F"))
    {
          header("location:../insertdataguru.php?errorMsg=Room P4 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="P5"&&$room!="A")&&($kelass=="P5"&&$room!="B")&&($kelass=="P5"&&$room!="C")&&($kelass=="P5"&&$room!="D")&&($kelass=="P5"&&$room!="E")&&($kelass=="P5"&&$room!="F"))
    {
          header("location:../insertdataguru.php?errorMsg=Room P5 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="P6"&&$room!="A")&&($kelass=="P6"&&$room!="B")&&($kelass=="P6"&&$room!="C")&&($kelass=="P6"&&$room!="D")&&($kelass=="P6"&&$room!="E")&&($kelass=="P6"&&$room!="F"))
    {
          header("location:../insertdataguru.php?errorMsg=Room P6 hanya A,B,C,D,E,F");
    }
      else if(($kelass=="J1"&&$room!="A")&&($kelass=="J1"&&$room!="B")&&($kelass=="J1"&&$room!="C")&&($kelass=="J1"&&$room!="D")&&($kelass=="J1"&&$room!="E")&&($kelass=="J1"&&$room!="F"))
    {
          header("location:../insertdataguru.php?errorMsg=Room J1 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="J2"&&$room!="A")&&($kelass=="J2"&&$room!="B")&&($kelass=="J2"&&$room!="C")&&($kelass=="J2"&&$room!="D")&&($kelass=="J2"&&$room!="E")&&($kelass=="J2"&&$room!="F"))
    {
          header("location:../insertdataguru.php?errorMsg=Room J2 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="J3"&&$room!="A")&&($kelass=="J3"&&$room!="B")&&($kelass=="J3"&&$room!="C")&&($kelass=="J3"&&$room!="D")&&($kelass=="J3"&&$room!="E")&&($kelass=="J3"&&$room!="F"))
    {
          header("location:../insertdataguru.php?errorMsg=Room J3 hanya A,B,C,D,E,F");
    }
      else if(($kelass=="S1"&&$room!="A")&&($kelass=="S1"&&$room!="B")&&($kelass=="S1"&&$room!="C")&&($kelass=="S1"&&$room!="D")&&($kelass=="S1"&&$room!="E")&&($kelass=="S1"&&$room!="F"))
    {
          header("location:../insertdataguru.php?errorMsg=Room S1 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="S2"&&$room!="A")&&($kelass=="S2"&&$room!="B")&&($kelass=="S2"&&$room!="C")&&($kelass=="S2"&&$room!="D")&&($kelass=="S2"&&$room!="E")&&($kelass=="S2"&&$room!="F"))
    {
          header("location:../insertdataguru.php?errorMsg=Room S2 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="S3"&&$room!="A")&&($kelass=="S3"&&$room!="B")&&($kelass=="S3"&&$room!="C")&&($kelass=="S3"&&$room!="D")&&($kelass=="S3"&&$room!="E")&&($kelass=="S3"&&$room!="F"))
    {
          header("location:../insertdataguru.php?errorMsg=Room S3 hanya A,B,C,D,E,F");
    }
		else if ($Username=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi Username");
	}
	else if ($TTL=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi TTL");
	}
	else if ($Agama=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi Agama");
	}
	else if ($StatusK=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi Status Kawin");
	}
	else if ($JlhAnk=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi Jumlah Anak");
	}
	else if ($TinggiBadan=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi Tinggi Badan");
	}
	else if ($BeratBadan=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi Berat Badan");
	}
	else if ($Almt=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi alamat");
	}
	else if ($NoHP=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi No HP");
	}
	else if ($NoKTP=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi No KTP");
	}
	else if ($Email=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi Email");
	}
	else if ($PendidikanT=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi Pendidikan Terakhir");
	}
	else if ($Studi=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi Bidang Studi");
	}
	else if ($Bertugas=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi Bertugas di sekolah sejak");
	}
	else if ($Jabatan=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi Jabatan");
	}
	else if ($BAsing=="")
	{
		header("location:../insertdataguru.php?errorMsg=Silahkan isi Bahasa Asing");
	}

	else
	{ 
	mysql_query("insert into pegawai values('','$kelasID', '$ID', '$IDD', '$IDDD', '$IDDDD', '$Username', '$password', '$NamaL', 'guru', '$TTL','', '$Agama', '$StatusK', '$JlhAnk', '$TinggiBadan', '$BeratBadan', '$Almt','$Kel','$Kec','$Kabko','$NoHP','$NoKTP','$Email', '$PendidikanT', '$Studi', '$Bertugas', '$Jabatan', '$BAsing', '$JP', '$GP','$UM','$TJ','$TL')");

		header("location:../insertdataguru.php?errorMsg=Success");
	}
	
?>