<?php 
	include("doConnect.php");
	session_start();
	$aID=$_REQUEST['aID'];
	$a = $_REQUEST['a'];
	$b = $_REQUEST['b'];
	$c = $_REQUEST['c'];
	$d = abs($_REQUEST['d']);

	
	if ($a=="")
	{
		header("location:../viewpayment.php?siswaID=$aID&&errorMsg=Silahkan Pilih Tahun Ajaran");
	}
    else if ($b=="")
	{
		header("location:../viewpayment.php?siswaID=$aID&&errorMsg=Silahkan Pilih Bulan Mulai");
	}
	else if ($c=="")
	{
		header("location:../viewpayment.php?siswaID=$aID&&errorMsg=Silahkan Pilih Jenis Payment");
	}
    
	else
	{	
	    $result =mysql_query("SELECT * from jenispayment where jpaymentID='$c'");
 		$row=mysql_fetch_array($result);
		$g=$row['namaJP'];
		$e=$row['nominalJP'];
	    if($d=="")
	    {
	        $d=0;
	    }
	    $f=0;
	    $f=$e-$d;
		mysql_query("insert into payment values('','$aID','$a','$b','$g','$e','$d','$f')");	
		if($b=="JUL")
		{
		    $bID = mysql_insert_id($con);
            mysql_query("insert into dpayment values('','$bID','JUL','','$f','')");
            mysql_query("insert into dpayment values('','$bID','AUG','','$f','')");
            mysql_query("insert into dpayment values('','$bID','SEP','','$f','')");
            mysql_query("insert into dpayment values('','$bID','OCT','','$f','')");
            mysql_query("insert into dpayment values('','$bID','NOV','','$f','')");
            mysql_query("insert into dpayment values('','$bID','DEC','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JAN','','$f','')");
            mysql_query("insert into dpayment values('','$bID','FEB','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','APR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAY','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JUN','','$f','')");
		}
		else if($b=="AUG")
		{
		    $bID = mysql_insert_id($con);
            mysql_query("insert into dpayment values('','$bID','AUG','','$f','')");
            mysql_query("insert into dpayment values('','$bID','SEP','','$f','')");
            mysql_query("insert into dpayment values('','$bID','OCT','','$f','')");
            mysql_query("insert into dpayment values('','$bID','NOV','','$f','')");
            mysql_query("insert into dpayment values('','$bID','DEC','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JAN','','$f','')");
            mysql_query("insert into dpayment values('','$bID','FEB','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','APR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAY','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JUN','','$f','')");
		}
		else if($b=="SEP")
		{
		    $bID = mysql_insert_id($con);
            mysql_query("insert into dpayment values('','$bID','SEP','','$f','')");
            mysql_query("insert into dpayment values('','$bID','OCT','','$f','')");
            mysql_query("insert into dpayment values('','$bID','NOV','','$f','')");
            mysql_query("insert into dpayment values('','$bID','DEC','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JAN','','$f','')");
            mysql_query("insert into dpayment values('','$bID','FEB','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','APR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAY','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JUN','','$f','')");
		}
		else if($b=="OCT")
		{
		    $bID = mysql_insert_id($con);
            mysql_query("insert into dpayment values('','$bID','OCT','','$f','')");
            mysql_query("insert into dpayment values('','$bID','NOV','','$f','')");
            mysql_query("insert into dpayment values('','$bID','DEC','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JAN','','$f','')");
            mysql_query("insert into dpayment values('','$bID','FEB','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','APR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAY','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JUN','','$f','')");
		}
		else if($b=="NOV")
		{
		    $bID = mysql_insert_id($con);
            mysql_query("insert into dpayment values('','$bID','NOV','','$f','')");
            mysql_query("insert into dpayment values('','$bID','DEC','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JAN','','$f','')");
            mysql_query("insert into dpayment values('','$bID','FEB','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','APR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAY','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JUN','','$f','')");
		}
		else if($b=="DEC")
		{
		    $bID = mysql_insert_id($con);
            mysql_query("insert into dpayment values('','$bID','DEC','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JAN','','$f','')");
            mysql_query("insert into dpayment values('','$bID','FEB','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','APR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAY','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JUN','','$f','')");
		}
		else if($b=="JAN")
		{
		    $bID = mysql_insert_id($con);
            mysql_query("insert into dpayment values('','$bID','JAN','','$f','')");
            mysql_query("insert into dpayment values('','$bID','FEB','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','APR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAY','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JUN','','$f','')");
		}
		else if($b=="FEB")
		{
		    $bID = mysql_insert_id($con);
            mysql_query("insert into dpayment values('','$bID','FEB','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','APR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAY','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JUN','','$f','')");
		}
		else if($b=="MAR")
		{
		    $bID = mysql_insert_id($con);
            mysql_query("insert into dpayment values('','$bID','MAR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','APR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAY','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JUN','','$f','')");
		}
		else if($b=="APR")
		{
		    $bID = mysql_insert_id($con);
            mysql_query("insert into dpayment values('','$bID','APR','','$f','')");
            mysql_query("insert into dpayment values('','$bID','MAY','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JUN','','$f','')");
		}
		else if($b=="MAY")
		{
		    $bID = mysql_insert_id($con);
            mysql_query("insert into dpayment values('','$bID','MAY','','$f','')");
            mysql_query("insert into dpayment values('','$bID','JUN','','$f','')");
		}
		else if($b=="JUN")
		{
		    $bID = mysql_insert_id($con);
            mysql_query("insert into dpayment values('','$bID','JUN','','$f','')");
		}
		
		header("location:../viewpayment.php?siswaID=$aID");			

	}
	
?>