<?php 
	include("doConnect.php");
	session_start();
$tanggal =$_REQUEST['tanggal'];
 $siswaID=$_SESSION['siswaID'];
if($tanggal=="")
{
header("location:../combook.php"); 
}
else
{
header("location:../combook.php?siswaID=$siswaID&&date=$tanggal");

}
?>