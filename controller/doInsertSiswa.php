<?php 
	include("doConnect.php");
	session_start();
	$ID=$_REQUEST['txtID'];
	$IDD = $_REQUEST['txtIDD'];
	$IDDD = $_REQUEST['txtIDDD'];
	$NamaL =$_REQUEST['txtNamaL'];
	$NamaP =$_REQUEST['txtNamaP'];
	$kelass =$_REQUEST['kelass'];
	$room=$_REQUEST['room'];
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
    $namaAwal=explode(" ",$NamaL);
    $password=md5($namaAwal[0].substr($IDDD, -4));
	$result =mysql_query("SELECT kelasID from kelas where kelass='$kelass' and room='$room'");
 		$row=mysql_fetch_array($result);
		$kelasID=$row['kelasID'];
	$existIDDD = mysql_query("select siswaID from siswa where noIDDD = '$IDDD'");
	if ($ID=="")
	{
		header("location:../insertdatasiswa.php?errorMsg=Silahkan Pilih TAHUN MASUK");
	}
	else if ($IDD=="")
	{
		header("location:../insertdatasiswa.php?errorMsg=Silahkan Pilih TINGKATAN");
	}
	else if ($IDDD=="")
	{
		header("location:../insertdatasiswa.php?errorMsg=Silahkan isi Nomor Siswa");
	}
	else if (strlen($IDDD) !=6)
	{
		header("location:../insertdatasiswa.php?errorMsg=NO ID harus 6 Digit");
	}
	else if (mysql_num_rows($existIDDD)>0)
	{
		header("location:../insertdatasiswa.php?errorMsg=NIS sudah Ada");
	}
	
	else if ($NamaL=="")
	{
		header("location:../insertdatasiswa.php?errorMsg=Silahkan isi Nama Lengkap Siswa");
	}

    else if(($kelass=="PG"&&$room!="1")&&($kelass=="PG"&&$room!="2")&&($kelass=="PG"&&$room!="3"))
    {
          header("location:../insertdatasiswa.php?errorMsg=Room PG hanya 1,2,3");
    }
     else if(($kelass=="KA"&&$room!="1")&&($kelass=="KA"&&$room!="2")&&($kelass=="KA"&&$room!="3"))
    {
          header("location:../insertdatasiswa.php?errorMsg=Room TK A hanya 1,2,3");
    }
        else if(($kelass=="KB"&&$room!="1")&&($kelass=="KB"&&$room!="2")&&($kelass=="KB"&&$room!="3"))
    {
          header("location:../insertdatasiswa.php?errorMsg=Room TK B hanya 1,2,3");
    }
    else if(($kelass=="P1"&&$room!="A")&&($kelass=="P1"&&$room!="B")&&($kelass=="P1"&&$room!="C")&&($kelass=="P1"&&$room!="D")&&($kelass=="P1"&&$room!="E")&&($kelass=="P1"&&$room!="F"))
    {
          header("location:../insertdatasiswa.php?errorMsg=Room P1 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="P2"&&$room!="A")&&($kelass=="P2"&&$room!="B")&&($kelass=="P2"&&$room!="C")&&($kelass=="P2"&&$room!="D")&&($kelass=="P2"&&$room!="E")&&($kelass=="P2"&&$room!="F"))
    {
          header("location:../insertdatasiswa.php?errorMsg=Room P2 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="P3"&&$room!="A")&&($kelass=="P3"&&$room!="B")&&($kelass=="P3"&&$room!="C")&&($kelass=="P3"&&$room!="D")&&($kelass=="P3"&&$room!="E")&&($kelass=="P3"&&$room!="F"))
    {
          header("location:../insertdatasiswa.php?errorMsg=Room P3 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="P4"&&$room!="A")&&($kelass=="P4"&&$room!="B")&&($kelass=="P4"&&$room!="C")&&($kelass=="P4"&&$room!="D")&&($kelass=="P4"&&$room!="E")&&($kelass=="P4"&&$room!="F"))
    {
          header("location:../insertdatasiswa.php?errorMsg=Room P4 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="P5"&&$room!="A")&&($kelass=="P5"&&$room!="B")&&($kelass=="P5"&&$room!="C")&&($kelass=="P5"&&$room!="D")&&($kelass=="P5"&&$room!="E")&&($kelass=="P5"&&$room!="F"))
    {
          header("location:../insertdatasiswa.php?errorMsg=Room P5 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="P6"&&$room!="A")&&($kelass=="P6"&&$room!="B")&&($kelass=="P6"&&$room!="C")&&($kelass=="P6"&&$room!="D")&&($kelass=="P6"&&$room!="E")&&($kelass=="P6"&&$room!="F"))
    {
          header("location:../insertdatasiswa.php?errorMsg=Room P6 hanya A,B,C,D,E,F");
    }
      else if(($kelass=="J1"&&$room!="A")&&($kelass=="J1"&&$room!="B")&&($kelass=="J1"&&$room!="C")&&($kelass=="J1"&&$room!="D")&&($kelass=="J1"&&$room!="E")&&($kelass=="J1"&&$room!="F"))
    {
          header("location:../insertdatasiswa.php?errorMsg=Room J1 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="J2"&&$room!="A")&&($kelass=="J2"&&$room!="B")&&($kelass=="J2"&&$room!="C")&&($kelass=="J2"&&$room!="D")&&($kelass=="J2"&&$room!="E")&&($kelass=="J2"&&$room!="F"))
    {
          header("location:../insertdatasiswa.php?errorMsg=Room J2 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="J3"&&$room!="A")&&($kelass=="J3"&&$room!="B")&&($kelass=="J3"&&$room!="C")&&($kelass=="J3"&&$room!="D")&&($kelass=="J3"&&$room!="E")&&($kelass=="J3"&&$room!="F"))
    {
          header("location:../insertdatasiswa.php?errorMsg=Room J3 hanya A,B,C,D,E,F");
    }
      else if(($kelass=="S1"&&$room!="A")&&($kelass=="S1"&&$room!="B")&&($kelass=="S1"&&$room!="C")&&($kelass=="S1"&&$room!="D")&&($kelass=="S1"&&$room!="E")&&($kelass=="S1"&&$room!="F"))
    {
          header("location:../insertdatasiswa.php?errorMsg=Room S1 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="S2"&&$room!="A")&&($kelass=="S2"&&$room!="B")&&($kelass=="S2"&&$room!="C")&&($kelass=="S2"&&$room!="D")&&($kelass=="S2"&&$room!="E")&&($kelass=="S2"&&$room!="F"))
    {
          header("location:../insertdatasiswa.php?errorMsg=Room S2 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="S3"&&$room!="A")&&($kelass=="S3"&&$room!="B")&&($kelass=="S3"&&$room!="C")&&($kelass=="S3"&&$room!="D")&&($kelass=="S3"&&$room!="E")&&($kelass=="S3"&&$room!="F"))
    {
          header("location:../insertdatasiswa.php?errorMsg=Room S3 hanya A,B,C,D,E,F");
    }
	else if ($NamaP=="")
	{
		header("location:../insertdatasiswa.php?errorMsg=Silahkan isi KELAS");
	}
	else if ($TTL=="")
	{
		header("location:../insertdatasiswa.php?errorMsg=Silahkan isi TTL");
	}
	else if ($Anakke=="")
	{
		header("location:../insertdatasiswa.php?errorMsg=Silahkan isi Anakke");
	}
	else if ($JlhSdra=="")
	{
		header("location:../insertdatasiswa.php?errorMsg=Silahkan isi Jumlah Saudara");
	}
	else if ($Agama=="")
	{
		header("location:../insertdatasiswa.php?errorMsg=Silahkan isi Agama");
	}
	else if ($GolDrh=="")
	{
		header("location:../insertdatasiswa.php?errorMsg=Silahkan isi Golongan Darah");
	}
	else if ($TinggiBadan=="")
	{
		header("location:../insertdatasiswa.php?errorMsg=Silahkan isi Tinggi Badan");
	}
	else if ($AlmtJln=="")
	{
		header("location:../insertdatasiswa.php?errorMsg=Silahkan isi Jalan");
	}
	else if ($Kel=="")
	{
		header("location:../insertdatasiswa.php?errorMsg=Silahkan isi Kelurahan");
	}
	else if ($Kec=="")
	{
		header("location:../insertdatasiswa.php?errorMsg=Silahkan isi Kecematan");
	}
	else if ($Kabko=="")
	{
		header("location:../insertdatasiswa.php?errorMsg=Silahkan isi Kab/Kota");
	}
	else
	{ 
	mysql_query("insert into siswa values('','$kelasID','$ID','$IDD','$IDDD','$NamaL','ortu','$password','$NamaP','$TTL','','$Anakke','$JlhSdra','$Agama','$GolDrh','$TinggiBadan','$AlmtJln','$Kel','$Kec','$Kabko')");
$siswaID = mysql_insert_id($con);
mysql_query("insert into orangtua values('$siswaID','','','','','','','','','','')");
mysql_query("insert into pendukungs values('$siswaID','','','','','','','','','','','','','','','','','','')");
		header("location:../insertdatasiswa2.php?siswaID=$siswaID");	
	}
	
?>