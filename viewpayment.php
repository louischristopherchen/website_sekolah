<?php 
include("controller/doConnect.php");
  session_start();


?>
        <?php
		include ("header.php")
		?>
        
         <?php if(!isset($_SESSION['userRole'])){ ?>
          <?php }else if(($_SESSION['userRole'] == "admin")||($_SESSION['userRole'] == "dentry")){
          $siswaID=$_REQUEST['siswaID'];
          ?>
  <table style="margin-left:10%;">
	<tr>
        <td><ul class="pager">
  <li><a href="payment.php">Back</a></li></ul></td>
    	</tr></table>
 <div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3" >
   
       

    	<div class="well">
    <table align="center" border="1">
	<tr>
        <td colspan="3"><h4><b>Data Siswa</b></h4></td>
    	</tr>
	<?php
	$result =mysql_query("select s.siswaID, s.noID,s.noIDD, s.noIDDD, s.namaLengkap, s.ttl, k.kelass,k.room,s.agama, ot.ibu,ot.telpI 
	from siswa as s, orangtua as ot, kelas as k 
	where s.siswaID=ot.siswaID 
	AND s.KelasID=k.KelasID 
	AND s.siswaID='$siswaID' 
	");
	while($row=mysql_fetch_array($result))
	{	$ID=$row['noID'];
		$IDD=$row['noIDD'];
		$IDDD=$row['noIDDD'];
		$namaL=$row['namaLengkap'];
		$TTL=$row['ttl'];
		$agama=$row['agama'];
		$ibu=$row['ibu'];
		$telpI=$row['telpI'];	
		$kelas=$row['kelass'];
		$room=$row['room'];
		$siswaID=$row['siswaID'];
		
	$list='
		<td>Nomor ID</td><td>'.$ID.''.$IDD.''.$IDDD.'</td></tr><tr>
		<td>Nama Lengkap</td><td>'.$namaL.'</td></tr><tr>
		<td>Kelas</td><td>'.$kelas.''.$room.'</td></tr><tr>
		<td>TTL</td><td>'.$TTL.'</td></tr><tr>
		<td>Nama Ibu</td><td>'.$ibu.'</td></tr>
		</table><br><br>' ;
	echo $list;
	}

	?>
 
	</div></div>
	
	
	<div class="col-lg-9 col-md-9 col-sm-9" >
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <div class="well">
      
      
        <?php 
	    $result =mysql_query("select * from payment where siswaID='$siswaID'");
		
		
	    if(mysql_num_rows($result)<1){ ?>
	    
        <?php } else{ ?>
        Payment
        <label><font color="red">
         <?php 
         if(isset($_REQUEST['err']))
         {
          echo $_REQUEST['err'];
         }
         ?></font></label>
   
	<?php
	$result =mysql_query("SELECT * 	FROM payment 
	WHERE siswaID='$siswaID' order by tahunPay ASC
	");
	

	
	
	
	while($row=mysql_fetch_array($result)){
	    $aID=$row['paymentID'];
		$bID=$row['siswaID'];
		$a=$row['tahunPay'];
		$b=$row['bulanPay'];
		$c=$row['jenisPay'];
		$d=$row['nominalPay'];
		$e=$row['potPay'];
		$f=$row['totalPay'];
		$j=0;
		$j=$a+1;
		?>
		<div style="overflow-x:auto;">
		<form action="controller/doUpdatePayment.php" method="post">
		   <table class="table" >
        <tr>
        <td align="center"><b>Tahun Ajaran</b></td>
        <td align="center"><b>Bulan Mulai</b></td>
        <td align="center"><b>Jenis Payment</b></td>
        <td align="center"><b>Nominal Payment</b></td>
        <td align="center"><b>-</b></td>
        <td align="center"><b>Potongan</b></td>
        <td align="center"><b>Total</b></td>
        </tr>
	    <tr>
		<td align="center"><?php echo $a."-".$j; ?></td>
		<td align="center"><?php echo $b; ?></td>
		<td align="center"><?php echo $c; ?></td>
		<td align="center"><?php echo $d; ?></td>
		<td>-</td>
		<td align="center"><?php echo $e; ?></td>
		<td align="center"><?php echo $f; ?></td></tr>
	    	</table></div><br>
	    	<div style="overflow-x:auto;">
	    	<table class="table" >
	    	    <tr><td align="center">BULAN</td>
	    	    <td align="center">TANGGAL</td>
	    	    <td align="center">NOMINAL</td>
	    	    <td align="center">STATUS</td></tr>
	    	
	    <?php
	    $result2 =mysql_query("SELECT p.paymentID,p.siswaID,p.tahunPay,p.bulanPay,p.jenisPay,p.nominalPay,p.potPay,p.totalPay,
	    dp.dpaymentID,dp.bulandpay,dp.tanggaldpay,dp.nominaldpay,dp.statusdpay
	    FROM payment as p, dpayment as dp 
	    WHERE p.paymentID=dp.paymentID 
	    and p.siswaID='$siswaID'  AND p.paymentID='$aID'
	    ");
	    $result3 =mysql_query("SELECT p.paymentID,p.siswaID,p.tahunPay,p.bulanPay,p.jenisPay,p.nominalPay,p.potPay,p.totalPay,
	    dp.dpaymentID,dp.bulandpay,dp.tanggaldpay,dp.nominaldpay,dp.statusdpay
	    FROM payment as p, dpayment as dp 
	    WHERE p.paymentID=dp.paymentID 
	    and p.siswaID='$siswaID'  AND p.paymentID='$aID' AND dp.statusdpay='lunas'
	    ");
        $l=0;
        $m=0;
	    while($row=mysql_fetch_array($result2)){
    	    $aID=$row['paymentID'];
		    $bID=$row['siswaID'];
		    $cID=$row['dpaymentID'];
		    $a=$row['tahunPay'];
		    $b=$row['bulanPay'];
	    	$c=$row['jenisPay'];
	    	$d=$row['nominalPay'];
	    	$e=$row['potPay'];
	    	$f=$row['totalPay'];
	    	$g=$row['bulandpay'];
	    	$h=$row['tanggaldpay'];
	    	$i=$row['nominaldpay'];
	    	$j=$row['statusdpay'];
	    	$k=0;
	    	$k=$a+1;
	        $l+=$i;
	        $m=mysql_num_rows($result3)*$i;
	        $th=date("d-M-Y",strtotime($h));
	        
	    ?>
	        <input type="hidden" name="cID[]" value="<?php echo $cID;?>">
	    	<tr><td align="center"><?php echo $g; ?></td>
	    	<td align="center">
	    	<?php if($h=='0000-00-00'){ ?>
	    	<input type="date" name="a[]"/>
	    	
	    	<!--<input type="hidden" name="b[]" value="">-->
	    	
	    	</td>
            <?php }else { ?> 
            <?php echo $th; ?>
            <input type="hidden" name="a[]" value="<?php echo $h;?>">
            
            <!--<input type="hidden" name="b[]" value="lunas">-->
            
            </td><?php } ?>
	    	<td align="center"><?php echo $english_format_number = number_format($i); ?></td>
	    	<td align="center"><font color="blue"><?php echo $j;?></font></td></tr>
	    	
        <?php }
        
        $n=0;
        $n=$l-$m;
        echo "<tr><td colspan ='4' align='center'>
        <input type='hidden' name='bID' value='".$bID."'/>
        <input type='submit' value='submit'></td></tr>
        </table>
        </div>
       
        <br>
        <div style='overflow-x:auto;'><table class='table'>
        <tr>
        <td align='center'>TOTAL</td>
        <td align='center'>-</td>
        <td align='center'>PEMBAYARAN</td>
        <td align='center'>SISA PEMBAYARAN</td>
        </tr>
        <tr>
        <td align='center'>".$english_format_number = number_format($l)."</td>
        <td align='center'>-</td>
        <td align='center'>".$english_format_number = number_format($m)."</td>
        <td align='center'>".$english_format_number = number_format($n)."</td></tr>";
        ?>
        </table></div><b><hr/></b>
        <?php
        }}?> 
        <!-- else-->
      
      </form>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
       <div style="overflow-x:auto;">
       <form action="controller/doAddPayment.php" method="post" enctype="multipart/form-data">
       <table class="table" >
    <tr>
    <td>Tahun Ajaran</td>
    <td>Bulan Mulai</td>
    <td>Jenis Payment</td>
    <td>Potongan</td>
    <td><label><font color="red">
         <?php 
         if(isset($_REQUEST['errorMsg']))
         {
          echo $_REQUEST['errorMsg'];
         }
         ?></font></label></td>
    </tr>
    <tr>
    <td> <select name = "a"/>
                <option value="" selected>----------</option>
				<option value="2018">2018-2019</option>
				<option value="2019">2019-2020</option>
				<option value="2020">2020-2021</option>
				<option value="2021">2021-2022</option>
				<option value="2022">2022-2023</option>
				<option value="2023">2023-2024</option>
				<option value="2024">2024-2025</option>
				<option value="2025">2025-2026</option>
				<option value="2026">2026-2027</option>
				<option value="2027">2027-2028</option>
				
        	</select></td>    
    <td> <select name = "b"/>
                <option value="" selected>----------</option>
				<option value="JUL">JULY</option>
				<option value="AUG">AUGUST</option>
				<option value="SEP">SEPTEMBER</option>
				<option value="OCT">OCTOBER</option>
				<option value="NOV">NOVEMBER</option>
				<option value="DEC">DECEMBER</option>
				<option value="JAN">JANUARY</option>
				<option value="FEB">FEBRUARY</option>
				<option value="MAR">MARCH</option>
				<option value="APR">APRIL</option>
				<option value="MAY">MAY</option>
				<option value="JUN">JUNE</option>
        	</select></td>
    <td> 
    <select name = "c">
<option value="" selected>----------</option>
<?php

		$result =mysql_query("SELECT * from jenispayment
 ORDER BY jpaymentID");
		while($row=mysql_fetch_array($result))
		{	
		    $jpaymentID=$row['jpaymentID'];
			$namaJP=$row['namaJP'];
			$nominalJP=$row['nominalJP'];
			
			$ealist='<option value="'.$jpaymentID.'">'.$namaJP.'('.substr($nominalJP,0,-3).')</option>' ;
              echo $ealist;
		
		} 
	 
?>

    <td><input type="text" name="d" placeholder="kalau ada"></td>
    <td><input type="hidden" name="aID" value="<?php echo $siswaID;?>"/><input class="btn btn-info" type="submit" value="ADD"></td>
    </tr>
    </table></form></div>
       </div></div></div>
	</div></div>
	<!--row container-->
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
     <?php }else if(($_SESSION['userRole'] == "ortu")){
     $siswaID=$_SESSION['siswaID'];
     ?>
   
 <div class="container">

<div class="col-xs-12 col-sm-2" >
    
    </div>
    
	
	
	<div class="col-xs-12 col-sm-8 well" style="overflow-x:auto;" >

   
      
      
        <?php 
	    $result =mysql_query("select * from payment where siswaID='$siswaID'");
		
		
	    if(mysql_num_rows($result)<1){ ?>
	    
        <?php } else{ ?>
        Payment
        <label><font color="red">
         <?php 
         if(isset($_REQUEST['err']))
         {
          echo $_REQUEST['err'];
         }
         ?></font></label>
   
	<?php
	$result =mysql_query("SELECT * 	FROM payment 
	WHERE siswaID='$siswaID' order by tahunPay ASC
	");
	

	
	while($row=mysql_fetch_array($result)){
	    $aID=$row['paymentID'];
		$bID=$row['siswaID'];
		$a=$row['tahunPay'];
		$b=$row['bulanPay'];
		$c=$row['jenisPay'];
		$d=$row['nominalPay'];
		$e=$row['potPay'];
		$f=$row['totalPay'];
		$j=0;
		$j=$a+1;
		?>
		
		   <table class="table" >
        <tr>
        <td align="center"><b>Tahun Ajaran</b></td>
        <td align="center"><b>Bulan Mulai</b></td>
        <td align="center"><b>Jenis Payment</b></td>
        <td align="center"><b>Nominal Payment</b></td>
        <td align="center"><b>-</b></td>
        <td align="center"><b>Potongan</b></td>
        <td align="center"><b>Total</b></td>
        </tr>
	    <tr>
		<td align="center"><?php echo $a."-".$j; ?></td>
		<td align="center"><?php echo $b; ?></td>
		<td align="center"><?php echo $c; ?></td>
		<td align="center"><?php echo $d; ?></td>
		<td>-</td>
		<td align="center"><?php echo $e; ?></td>
		<td align="center"><?php echo $f; ?></td></tr>
	    	</table><br>
	    	<table class="table" >
	    	    <tr><td align="center">BULAN</td>
	    	    <td align="center">TANGGAL</td>
	    	    <td align="center">NOMINAL</td>
	    	    <td align="center">STATUS</td></tr>
	    	
	    <?php
	    $result2 =mysql_query("SELECT p.paymentID,p.siswaID,p.tahunPay,p.bulanPay,p.jenisPay,p.nominalPay,p.potPay,p.totalPay,
	    dp.dpaymentID,dp.bulandpay,dp.tanggaldpay,dp.nominaldpay,dp.statusdpay
	    FROM payment as p, dpayment as dp 
	    WHERE p.paymentID=dp.paymentID 
	    and p.siswaID='$siswaID'  AND p.paymentID='$aID'
	    ");
	    $result3 =mysql_query("SELECT p.paymentID,p.siswaID,p.tahunPay,p.bulanPay,p.jenisPay,p.nominalPay,p.potPay,p.totalPay,
	    dp.dpaymentID,dp.bulandpay,dp.tanggaldpay,dp.nominaldpay,dp.statusdpay
	    FROM payment as p, dpayment as dp 
	    WHERE p.paymentID=dp.paymentID 
	    and p.siswaID='$siswaID'  AND p.paymentID='$aID' AND dp.statusdpay='lunas'
	    ");
        $l=0;
        $m=0;
	    while($row=mysql_fetch_array($result2)){
    	    $aID=$row['paymentID'];
		    $bID=$row['siswaID'];
		    $cID=$row['dpaymentID'];
		    $a=$row['tahunPay'];
		    $b=$row['bulanPay'];
	    	$c=$row['jenisPay'];
	    	$d=$row['nominalPay'];
	    	$e=$row['potPay'];
	    	$f=$row['totalPay'];
	    	$g=$row['bulandpay'];
	    	$h=$row['tanggaldpay'];
	    	$i=$row['nominaldpay'];
	    	$j=$row['statusdpay'];
	    	$k=0;
	    	$k=$a+1;
	        $l+=$i;
	        $m=mysql_num_rows($result3)*$i;
	        $th=date("d-M-Y",strtotime($h));
	        
	    ?>
	        <input type="hidden" name="cID[]" value="<?php echo $cID;?>">
	    	<tr><td align="center"><?php echo $g; ?></td>
	    	<td align="center">
	    	<?php if($h=='0000-00-00'){ ?>
	    	
	    	
	    	<!--<input type="hidden" name="b[]" value="">-->
	    	
	    	</td>
            <?php }else { ?> 
            <?php echo $th; ?>
            <input type="hidden" name="a[]" value="<?php echo $h;?>">
            
            <!--<input type="hidden" name="b[]" value="lunas">-->
            
            </td><?php } ?>
	    	<td align="center"><?php echo $english_format_number = number_format($i); ?></td>
	    	<td align="center"><font color="blue"><?php echo $j;?></font></td></tr>
	    	
        <?php }
        
        $n=0;
        $n=$l-$m;
        echo "
        </table>
        
        <br><table class='table'>
        <tr>
        <td align='center'>TOTAL</td>
        <td align='center'>-</td>
        <td align='center'>PEMBAYARAN</td>
        <td align='center'>SISA PEMBAYARAN</td>
        </tr>
        <tr>
        <td align='center'>".$english_format_number = number_format($l)."</td>
        <td align='center'>-</td>
        <td align='center'>".$english_format_number = number_format($m)."</td>
        <td align='center'>".$english_format_number = number_format($n)."</td></tr>";
        ?>
        </table><b><hr/></b>
        <?php
        }}?> 
        <!-- else-->
      
     
      
      
       
       </div>
       <div class="col-xs-12 col-sm-2" >
           
    </div>
       </div>

<?php } ?>

    <?php
	include ("footer.php")
	?>
