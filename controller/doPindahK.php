<?php 
	include("doConnect.php");
	session_start();
	$siswaID=$_REQUEST['siswaID'];
$kelass=$_REQUEST['kelass'];
 $room=$_REQUEST['room'];
 $pkelass=$_REQUEST['pkelass'];
 $proom=$_REQUEST['proom'];
 	$result =mysql_query("SELECT kelasID from kelas where kelass='$pkelass' and room='$proom'");
 		$row=mysql_fetch_array($result);
		$kelasID=$row['kelasID'];
   if(($pkelass=="PG"&&$proom!="1")&&($pkelass=="PG"&&$proom!="2")&&($pkelass=="PG"&&$proom!="3"))
    {
          header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Room PG hanya 1,2,3");
    }
     else if(($pkelass=="KA"&&$proom!="1")&&($pkelass=="KA"&&$proom!="2")&&($pkelass=="KA"&&$proom!="3"))
    {
          header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Room TK A hanya 1,2,3");
    }
        else if(($pkelass=="KB"&&$proom!="1")&&($pkelass=="KB"&&$proom!="2")&&($pkelass=="KB"&&$proom!="3"))
    {
          header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Room TK B hanya 1,2,3");
    }
    else if(($pkelass=="P1"&&$proom!="A")&&($pkelass=="P1"&&$proom!="B")&&($pkelass=="P1"&&$proom!="C")&&($pkelass=="P1"&&$proom!="D")&&($pkelass=="P1"&&$proom!="E")&&($pkelass=="P1"&&$proom!="F"))
    {
          header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Room P1 hanya A,B,C,D,E,F");
    }
        else if(($pkelass=="P2"&&$proom!="A")&&($pkelass=="P2"&&$proom!="B")&&($pkelass=="P2"&&$proom!="C")&&($pkelass=="P2"&&$proom!="D")&&($pkelass=="P2"&&$proom!="E")&&($pkelass=="P2"&&$proom!="F"))
    {
          header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Room P2 hanya A,B,C,D,E,F");
    }
        else if(($pkelass=="P3"&&$proom!="A")&&($pkelass=="P3"&&$proom!="B")&&($pkelass=="P3"&&$proom!="C")&&($pkelass=="P3"&&$proom!="D")&&($pkelass=="P3"&&$proom!="E")&&($pkelass=="P3"&&$proom!="F"))
    {
          header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Room P3 hanya A,B,C,D,E,F");
    }
        else if(($pkelass=="P4"&&$proom!="A")&&($pkelass=="P4"&&$proom!="B")&&($pkelass=="P4"&&$proom!="C")&&($pkelass=="P4"&&$proom!="D")&&($pkelass=="P4"&&$proom!="E")&&($pkelass=="P4"&&$proom!="F"))
    {
          header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Room P4 hanya A,B,C,D,E,F");
    }
        else if(($pkelass=="P5"&&$proom!="A")&&($pkelass=="P5"&&$proom!="B")&&($pkelass=="P5"&&$proom!="C")&&($pkelass=="P5"&&$proom!="D")&&($pkelass=="P5"&&$proom!="E")&&($pkelass=="P5"&&$proom!="F"))
    {
          header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Room P5 hanya A,B,C,D,E,F");
    }
        else if(($pkelass=="P6"&&$proom!="A")&&($pkelass=="P6"&&$proom!="B")&&($pkelass=="P6"&&$proom!="C")&&($pkelass=="P6"&&$proom!="D")&&($pkelass=="P6"&&$proom!="E")&&($pkelass=="P6"&&$proom!="F"))
    {
          header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Room P6 hanya A,B,C,D,E,F");
    }
      else if(($pkelass=="J1"&&$proom!="A")&&($pkelass=="J1"&&$proom!="B")&&($pkelass=="J1"&&$proom!="C")&&($pkelass=="J1"&&$proom!="D")&&($pkelass=="J1"&&$proom!="E")&&($pkelass=="J1"&&$proom!="F"))
    {
          header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Room J1 hanya A,B,C,D,E,F");
    }
        else if(($pkelass=="J2"&&$proom!="A")&&($pkelass=="J2"&&$proom!="B")&&($pkelass=="J2"&&$proom!="C")&&($pkelass=="J2"&&$proom!="D")&&($pkelass=="J2"&&$proom!="E")&&($pkelass=="J2"&&$proom!="F"))
    {
          header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Room J2 hanya A,B,C,D,E,F");
    }
        else if(($pkelass=="J3"&&$proom!="A")&&($pkelass=="J3"&&$proom!="B")&&($pkelass=="J3"&&$proom!="C")&&($pkelass=="J3"&&$proom!="D")&&($pkelass=="J3"&&$proom!="E")&&($pkelass=="J3"&&$proom!="F"))
    {
          header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Room J3 hanya A,B,C,D,E,F");
    }
      else if(($pkelass=="S1"&&$proom!="A")&&($pkelass=="S1"&&$proom!="B")&&($pkelass=="S1"&&$proom!="C")&&($pkelass=="S1"&&$proom!="D")&&($pkelass=="S1"&&$proom!="E")&&($pkelass=="S1"&&$proom!="F"))
    {
          header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Room S1 hanya A,B,C,D,E,F");
    }
        else if(($pkelass=="S2"&&$proom!="A")&&($pkelass=="S2"&&$proom!="B")&&($pkelass=="S2"&&$proom!="C")&&($pkelass=="S2"&&$proom!="D")&&($pkelass=="S2"&&$proom!="E")&&($pkelass=="S2"&&$proom!="F"))
    {
          header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Room S2 hanya A,B,C,D,E,F");
    }
        else if(($pkelass=="S3"&&$proom!="A")&&($pkelass=="S3"&&$proom!="B")&&($pkelass=="S3"&&$proom!="C")&&($pkelass=="S3"&&$proom!="D")&&($pkelass=="S3"&&$proom!="E")&&($pkelass=="S3"&&$proom!="F"))
    {
          header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Room S3 hanya A,B,C,D,E,F");
    }
    else
    {
     	mysql_query("update siswa set kelasID='$kelasID'where siswaID='$siswaID'");
      header("location:../kelas.php?kelass=$kelass&&room=$room&&errMsg=Success");
    }
  
?>