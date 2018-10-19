<?php 
	include("doConnect.php");
	session_start();

 $kelass=$_REQUEST['kelass'];
 $room=$_REQUEST['room'];
    if($kelass==""||$room=="")
    {
    header("location:../kelas.php?errorMsg=silahkan pilih kelas");
    }
    else if(($kelass=="PG"&&$room!="1")&&($kelass=="PG"&&$room!="2")&&($kelass=="PG"&&$room!="3"))
    {
          header("location:../kelas.php?errorMsg=Room PG hanya 1,2,3");
    }
     else if(($kelass=="KA"&&$room!="1")&&($kelass=="KA"&&$room!="2")&&($kelass=="KA"&&$room!="3"))
    {
          header("location:../kelas.php?errorMsg=Room TK A hanya 1,2,3");
    }
        else if(($kelass=="KB"&&$room!="1")&&($kelass=="KB"&&$room!="2")&&($kelass=="KB"&&$room!="3"))
    {
          header("location:../kelas.php?errorMsg=Room TK B hanya 1,2,3");
    }
    else if(($kelass=="P1"&&$room!="A")&&($kelass=="P1"&&$room!="B")&&($kelass=="P1"&&$room!="C")&&($kelass=="P1"&&$room!="D")&&($kelass=="P1"&&$room!="E")&&($kelass=="P1"&&$room!="F"))
    {
          header("location:../kelas.php?errorMsg=Room P1 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="P2"&&$room!="A")&&($kelass=="P2"&&$room!="B")&&($kelass=="P2"&&$room!="C")&&($kelass=="P2"&&$room!="D")&&($kelass=="P2"&&$room!="E")&&($kelass=="P2"&&$room!="F"))
    {
          header("location:../kelas.php?errorMsg=Room P2 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="P3"&&$room!="A")&&($kelass=="P3"&&$room!="B")&&($kelass=="P3"&&$room!="C")&&($kelass=="P3"&&$room!="D")&&($kelass=="P3"&&$room!="E")&&($kelass=="P3"&&$room!="F"))
    {
          header("location:../kelas.php?errorMsg=Room P3 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="P4"&&$room!="A")&&($kelass=="P4"&&$room!="B")&&($kelass=="P4"&&$room!="C")&&($kelass=="P4"&&$room!="D")&&($kelass=="P4"&&$room!="E")&&($kelass=="P4"&&$room!="F"))
    {
          header("location:../kelas.php?errorMsg=Room P4 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="P5"&&$room!="A")&&($kelass=="P5"&&$room!="B")&&($kelass=="P5"&&$room!="C")&&($kelass=="P5"&&$room!="D")&&($kelass=="P5"&&$room!="E")&&($kelass=="P5"&&$room!="F"))
    {
          header("location:../kelas.php?errorMsg=Room P5 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="P6"&&$room!="A")&&($kelass=="P6"&&$room!="B")&&($kelass=="P6"&&$room!="C")&&($kelass=="P6"&&$room!="D")&&($kelass=="P6"&&$room!="E")&&($kelass=="P6"&&$room!="F"))
    {
          header("location:../kelas.php?errorMsg=Room P6 hanya A,B,C,D,E,F");
    }
      else if(($kelass=="J1"&&$room!="A")&&($kelass=="J1"&&$room!="B")&&($kelass=="J1"&&$room!="C")&&($kelass=="J1"&&$room!="D")&&($kelass=="J1"&&$room!="E")&&($kelass=="J1"&&$room!="F"))
    {
          header("location:../kelas.php?errorMsg=Room J1 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="J2"&&$room!="A")&&($kelass=="J2"&&$room!="B")&&($kelass=="J2"&&$room!="C")&&($kelass=="J2"&&$room!="D")&&($kelass=="J2"&&$room!="E")&&($kelass=="J2"&&$room!="F"))
    {
          header("location:../kelas.php?errorMsg=Room J2 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="J3"&&$room!="A")&&($kelass=="J3"&&$room!="B")&&($kelass=="J3"&&$room!="C")&&($kelass=="J3"&&$room!="D")&&($kelass=="J3"&&$room!="E")&&($kelass=="J3"&&$room!="F"))
    {
          header("location:../kelas.php?errorMsg=Room J3 hanya A,B,C,D,E,F");
    }
      else if(($kelass=="S1"&&$room!="A")&&($kelass=="S1"&&$room!="B")&&($kelass=="S1"&&$room!="C")&&($kelass=="S1"&&$room!="D")&&($kelass=="S1"&&$room!="E")&&($kelass=="S1"&&$room!="F"))
    {
          header("location:../kelas.php?errorMsg=Room S1 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="S2"&&$room!="A")&&($kelass=="S2"&&$room!="B")&&($kelass=="S2"&&$room!="C")&&($kelass=="S2"&&$room!="D")&&($kelass=="S2"&&$room!="E")&&($kelass=="S2"&&$room!="F"))
    {
          header("location:../kelas.php?errorMsg=Room S2 hanya A,B,C,D,E,F");
    }
        else if(($kelass=="S3"&&$room!="A")&&($kelass=="S3"&&$room!="B")&&($kelass=="S3"&&$room!="C")&&($kelass=="S3"&&$room!="D")&&($kelass=="S3"&&$room!="E")&&($kelass=="S3"&&$room!="F"))
    {
          header("location:../kelas.php?errorMsg=Room S3 hanya A,B,C,D,E,F");
    }
    else
    {
      header("location:../kelas.php?kelass=$kelass&&room=$room");
    }
?>