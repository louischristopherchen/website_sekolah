<?php 
	include("doConnect.php");
	session_start();
$bID= $_REQUEST['bID'];
$cID= $_REQUEST['cID'];
$a= $_REQUEST['a'];




for ($i = 0; $i <count($cID); $i++)
{
	$tempcID=$cID[$i];
	$tempa=$a[$i];

   
	mysql_query("update dpayment set tanggaldpay='$tempa' where dpaymentID='$tempcID'");
		header("location:../viewpayment.php?siswaID=$bID&&err=Success");
}
    mysql_query("update dpayment set statusdpay='lunas' where tanggaldpay!='0000-00-00'");

?>