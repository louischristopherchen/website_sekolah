<?php 
include("controller/doConnect.php");
  session_start();
 
    if(isset($_REQUEST['page']))
	{
		$page=$_REQUEST['page'];
	}	
	else
	{
		$page=1;
	}
	$start=($page-1)*10;
	$list="";
	$index=0;
	
  ?>
        
        <?php
		include ("header.php")
		?>
		 <?php if(!isset($_SESSION['userRole'])){ ?>
           <?php }else if(($_SESSION['userRole'] == "ortu")){?>
		  <?php 
	$date=$_REQUEST['date'];
	$kelasID = $_SESSION['kelasID'];
  	 $siswaID=$_SESSION['siswaID'];
  
	
   ?>
   
    <div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3" >
   <div class="well">
 
 

	
	<table width="80%" align="center">
		
    <table  align="center">
	<tr>
        <td  align="center" colspan="10"><h2>Tanggal</h2></td>
    	</tr>
	
    </table>
    <table  align="center"BORDER=1>
	
<form action="controller/doCBdate.php" method="post" enctype="multipart/form-data">
	 <tr><td>
<select name = "tanggal"/>
<option value="" selected>-Tanggal-</option>
<?php

		$result =mysql_query("SELECT cb.cbID,cb.cbutama,cb.datecb, k.kelasID, g.pegawaiID, s.siswaID
FROM commbook AS cb, pegawai AS g, siswa as s, kelas as k
WHERE  g.pegawaiID = cb.pegawaiID
AND s.kelasID='$kelasID'
AND g.kelasID=s.kelasID
AND s.kelasID=k.kelasID
AND s.siswaID='$siswaID'
 order by datecb DESC limit $start,10");
		while($row=mysql_fetch_array($result))
		{	
			$cbID=$row['cbID'];
			$cbutama=$row['cbutama'];	
			$datecb=$row['datecb'];
			$arr=explode("-",$datecb);
			$pegawaiID=$row['pegawaiID'];
			
			$ealist='<option value="'.$datecb.'">'.$arr[2].'-'.$arr[1].'-'.$arr[0].'</option>' ;
              echo $ealist;
		
		} 
	 
?>
</td>
<td><input type ="submit" value="GO" /></td>
</tr></form>
</table>
   </div>
    </div>



  <div class="col-lg-9 col-md-9 col-sm-9" >
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <div class="well">
  <?php
  
		
		$list.='<table width="80%" align="center">';
	
$list.=' <table  align="center">
	<tr>
        <td  align="center" colspan="10"><h2>Commbook</h2></td>
    	</tr>
    </table>';
    
    
    
	
	if(!isset($_REQUEST['date']))
	{
		date_default_timezone_set("Asia/Jakarta");
		$date = date("Y-m-d");
		$time= date("h:ia");
		
			
		$result=mysql_query("select cbID, pegawaiID, cbutama, datecb
		 from commbook 
		 where pegawaiID='$pegawaiID' and datecb='$date'");
		 
		   $list.=' <table  class="table" align="center"BORDER=0>
	<tr>
	<td align="center"><b>Catatan Umum</b></td>
	</tr>';
		 		 
		while($row=mysql_fetch_array($result))
		{	
			$cbID=$row['cbID'];
			$cbutama=$row['cbutama'];	
			$datecb=$row['datecb'];
			$pegawaiID=$row['pegawaiID'];
			$list.='
    
			<tr>
			<td>'.$cbutama.'</td>' ;
			
				
			
			$index++;
			
		}$list.='</tr></table><br>'; //while 
		 
		 	date_default_timezone_set("Asia/Jakarta");
		$date = date("Y-m-d");
		$time= date("h:ia");
		$count=mysql_query("select cb.cbID, cb.pegawaiID, cb.cbutama, cb.datecb, dcb.siswaID, dcb.cbkhusus,  dcb.cbkfrom, dcb.timecbk
		 from commbook as cb , detailcb as dcb 
		 where cb.cbID=dcb.cbID 
		 AND dcb.siswaID='$siswaID' and cb.pegawaiID='$pegawaiID' and cb.datecb='$date'");
		$pages = ceil(mysql_num_rows($count)/10);
		$result =mysql_query("select cb.cbID, cb.pegawaiID, cb.cbutama, cb.datecb, dcb.siswaID, dcb.cbkhusus, dcb.cbkfrom, dcb.timecbk
		 from commbook as cb , detailcb as dcb 
		 where cb.cbID=dcb.cbID 
		 AND dcb.siswaID='$siswaID' and cb.pegawaiID='$pegawaiID'  and cb.datecb='$date' order by timecbk ASC limit $start,10");	 
	$list.=' <table  align="center"BORDER=0>
	<tr>

	<td colspan="2" align="center"><b>Catatan Khusus</b></td>
	</tr>';
		while($row=mysql_fetch_array($result))
		{	
			$cbID=$row['cbID'];
			$cbutama=$row['cbutama'];	
			$datecb=$row['datecb'];
			$pegawaiID=$row['pegawaiID'];
			$cbkhusus=$row['cbkhusus'];
			$cbkfrom=$row['cbkfrom'];
		    $timecbk=$row['timecbk'];
			
			if($cbkfrom=="guru")
				{
				$list.='
				<tr><div class="media">
  <div class="media-left">
    <td><img src="img/avatar1.png" class="media-object" style="width:60px"></td>
  </div>
  <td><div class="media-body">
    <h4 class="media-heading">'.$cbkfrom.'<small><i> Posted on  '. $timecbk.'</i></small></h4>
    <p>'.$cbkhusus.'</p><hr>
  </div>
</div><font color="blue"></td>';
				}
				else if($cbkfrom=="ortu")
				{
				$list.='<tr><td align="right"><div class="media">
<td><div class="media-body">
    <h4 class="media-heading">'.$cbkfrom.'<small><i> Posted on  '. $timecbk.'</i></small></h4>
    <p>'.$cbkhusus.'</p><hr>
  </div></td>
  <div class="media-right">
    <td><img src="img/avatar2.png" class="media-object" style="width:60px"></td>
  </div>
</div>';
				}
				
			$index++;
			
		}$list.='</tr></table>'; //while 
 	}
 	
 	else if($_REQUEST['date'])
 	{
 		$date=$_REQUEST['date'];	
		$result=mysql_query("select cbID, pegawaiID, cbutama, datecb
		 from commbook 
		 where pegawaiID='$pegawaiID' and datecb='$date'");
	
		 	 
		    $list.=' <table  class="table" align="center">
	<tr>
	<td align="center" ><b>Catatan Umum</b></td>
	</tr>';
		while($row=mysql_fetch_array($result))
		{	
			$cbID=$row['cbID'];
			$cbutama=$row['cbutama'];	
			$datecb=$row['datecb'];
			$pegawaiID=$row['pegawaiID'];
			$cbkhusus=$row['cbkhusus'];
			$cbkfrom=$row['cbkfrom'];
			$list.='
			
   
			<tr>
			<td>'.$cbutama.'</td>' ;
			
			
			
			$index++;
			
		}$list.='</tr></table><br>'; //while 
		
		
		$date=$_REQUEST['date'];	
		$count=mysql_query("select cb.cbID, cb.pegawaiID, cb.cbutama, cb.datecb, dcb.siswaID, dcb.cbkhusus ,  dcb.cbkfrom, dcb.timecbk
		 from commbook as cb , detailcb as dcb 
		 where cb.cbID=dcb.cbID 
		 AND dcb.siswaID='$siswaID' and cb.pegawaiID='$pegawaiID' and cb.datecb='$date'");
		$pages = ceil(mysql_num_rows($count)/10);
		$result =mysql_query("select cb.cbID, cb.pegawaiID, cb.cbutama, cb.datecb, dcb.siswaID, dcb.cbkhusus, dcb.cbkfrom , dcb.timecbk
		 from commbook as cb , detailcb as dcb 
		 where cb.cbID=dcb.cbID 
		 AND dcb.siswaID='$siswaID' and cb.pegawaiID='$pegawaiID'  and cb.datecb='$date' order by timecbk ASC limit $start,10");
		 	 
		    $list.=' <table  align="center"BORDER=0>
	<tr>

	<td colspan="2" align="center"><b>Catatan Khusus</b></td>
	</tr>';
		while($row=mysql_fetch_array($result))
		{	
			$cbID=$row['cbID'];
			$cbutama=$row['cbutama'];	
			$datecb=$row['datecb'];
			$pegawaiID=$row['pegawaiID'];
			$cbkhusus=$row['cbkhusus'];
			$cbkfrom=$row['cbkfrom'];
			$timecbk=$row['timecbk'];
			
			
				if($cbkfrom=="guru")
				{
				$list.='
				<tr><div class="media">
  <div class="media-left">
    <td><img src="img/avatar1.png" class="media-object" style="width:60px"></td>
  </div>
  <td><div class="media-body">
    <h4 class="media-heading">'.$cbkfrom.'<small><i> Posted on  '. $timecbk.'</i></small></h4>
    <p>'.$cbkhusus.'</p><hr>
  </div>
</div><font color="blue"></td>';
				}
				else if($cbkfrom=="ortu")
				{
				$list.='<tr><td align="right"><div class="media">
<td><div class="media-body">
    <h4 class="media-heading">'.$cbkfrom.'<small><i> Posted on  '. $timecbk.'</i></small></h4>
    <p>'.$cbkhusus.'</p><hr>
  </div></td>
  <div class="media-right">
    <td><img src="img/avatar2.png" class="media-object" style="width:60px"></td>
  </div>
</div>';
				}
			
			$index++;
			
		}$list.='</tr></table><br>'; //while 
		
		
 	}
 	
 	
	?>
    <?php
	echo $list;
	echo '<br/>';
	?> 
	

	</div></div>
	
	 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
	 <div class="well">
	 
	    <?php 
	    date_default_timezone_set("Asia/Jakarta");
		$date2 = date("Y-m-d");
	    
	    $result =mysql_query("select cbID, datecb from commbook
		 where datecb='$date2' and pegawaiID='$pegawaiID' ");
		
		
	    if(mysql_num_rows($result)<1){ ?>
	     <form action="controller/doInsertCbKs.php" method="post" enctype="multipart/form-data">
    <table  class="table" align="center">
    	<tr>
        <td align="center" colspan="8"><b>Masukkan Tanggapan Bapak/Ibu Dibawah Ini :</b></td>
	</tr>
	<tr>
	<td colspan="8" align ="center"><label color="red"> <font color="red">Silahkan Menunggu Commbook dari Wali Guru</td>
	</tr>
	<tr><td>Tanggal</td><td></td>
   	 	<td colspan="6"><?php date_default_timezone_set("Asia/Jakarta");
		$date = date("Y-m-d").""; 
		echo $date;?>
    		</td>
    	</tr>
	<tr><td>Kepada</td><td></td>
   	 	<td colspan="6"><?php 
   	 	$result =mysql_query("select namaLengkap from siswa where siswaID='$siswaID'");
   	 	while($row=mysql_fetch_array($result))
		{
			$namaLengkap=$row['namaLengkap'];
		
		echo $namaLengkap;}
		?>
    		</td>
    	</tr>
    
    	
    	<tr>
        <td>Berita</td><td> </td>
        <td colspan="6"><textarea name = "txtBerita"class="form-control" rows="5" disabled></textarea> </td>
    	</tr>

    <tr>
        <td colspan="8">

         <?php 
        
         if(isset($_REQUEST['errorMsg']))
         {
          echo $_REQUEST['errorMsg'];
         }
         
         ?></font></label></td>
    </tr>
    <tr>

    	<input type="hidden" name="siswaID" value="<?php echo $siswaID;?>"/>
        <td colspan="8"><input type ="submit" value="Simpan" disabled/></td>    </tr>
   </table> </form>
	    
	 <?php }else{ ?>
  <form action="controller/doInsertCbKs.php" method="post" enctype="multipart/form-data">
    <table  class="table" align="center">
    	<tr>
        <td colspan="8"><h3>Masukkan Tanggapan Bapak/Ibu Dibawah Ini :</h3></td>
	</tr>
		<tr>
        <td align ="center"colspan="8"><h5>[BAGI YANG MENDAPATKAN CATATAN KHUSUS]</h5></td>
	</tr>
	<tr><td>Tanggal</td><td></td>
   	 	<td colspan="6"><?php date_default_timezone_set("Asia/Jakarta");
		$date = date("d-m-Y").""; 
		echo $date;?>
    		</td>
    	</tr>
	<tr><td>Kepada</td><td></td>
   	 	<td colspan="6"><?php 
   	 	$result =mysql_query("select p.pegawaiID,p.namaGuru,k.kelasID,s.siswaID from siswa as s, pegawai as p, kelas as k where 
   	 	k.kelasID=p.kelasID
   	 AND p.kelasID=s.kelasID
   	 And s.kelasID=k.kelasID
   	 	AND
   	 	
   	 	siswaID='$siswaID'");
   	 	while($row=mysql_fetch_array($result))
		{
			$namaGuru=$row['namaGuru'];
		    $pegawaiID=$row['pegawaiID'];
		echo $namaGuru;}
		?>
    		</td>
    	</tr>
    
    	
    	<tr>
        <td>Berita</td><td> </td>
        <td colspan="6"><textarea name = "txtBerita" class="form-control" rows="5""></textarea> </td>
    	</tr>

    <tr>
        <td colspan="8"><label color="red"> <font color="red">
         <?php 
        
         if(isset($_REQUEST['errorMsg']))
         {
          echo $_REQUEST['errorMsg'];
         }
         
         ?></font></label></td>
    </tr>
    <tr>

    	<input type="hidden" name="pegawaiID" value="<?php echo $pegawaiID;?>"/>
        <td colspan="8"><input type ="submit" value="Simpan " /></td>
    </tr>
   </table> </form>
    <?php } ?>
   
   <br>
      </div>
      </div>
      </div>
      </div>
      </div>
 <?php }else if(($_SESSION['userRole'] == "guru")){?>
  <?php $kelasID = $_SESSION['kelasID'];
  	$pegawaiID = $_SESSION['pegawaiID'];
   ?>
 <?php
    
	  if(!isset($_REQUEST['txtSearch'])||$search=="")
	{
		
		$list.='<table width="80%" align="center">';
	

		$list.='
    <table  align="center">
	<tr>
        <td  align="center" colspan="10"><h2>Combook</h2></td>
    	</tr>
    </table>
    <div class="row">
  <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">  
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <table  align="center"BORDER=1>
	<tr>
	<td>Date</td>
	<td>Note</td>
	
	</tr>
	';

		$count=mysql_query("SELECT cb.cbID,cb.cbutama, g.kelasID, g.pegawaiID
FROM commbook AS cb, pegawai AS g
WHERE  g.pegawaiID = cb.pegawaiID
AND g.kelasID='$kelasID'AND g.pegawaiID='$pegawaiID'");
		$pages = ceil(mysql_num_rows($count)/10);
		$result =mysql_query("SELECT cb.cbID,cb.cbutama,cb.datecb,g.pegawaiID
FROM commbook AS cb, pegawai AS g
WHERE g.pegawaiID = cb.pegawaiID
AND g.kelasID='$kelasID' AND g.pegawaiID='$pegawaiID'
 order by cb.datecb DESC limit $start,10");
		while($row=mysql_fetch_array($result))
		{	
			$cbID=$row['cbID'];
			$cbutama=$row['cbutama'];	
			$datecb=$row['datecb'];
			$pegawaiID=$row['pegawaiID'];
			$arr=explode("-",$datecb);
			$list.='<tr>
			<td >'.$arr[2].'-'.$arr[1].'-'.$arr[0].'</td>
			<td width="250"><b>'.$cbutama.'</b></td>
			' ;
			
			$index++;
		}$list.='</table>'; //while 
	}//if 
	?>
    <?php
	echo $list;
	echo '<br/><br/><div class="pages">';
							for($i=1;$i<=$pages;$i++)
							{
							
								echo '<div  class="page"><a href = "combook.php?page='.$i.'">'.$i.'</a></div>';
							
							
						}
						echo '</div><br/><br/>';
	?>  
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
  <form action="controller/doInsertCb.php" method="post" enctype="multipart/form-data">
    <table  align="center">
    
    
    	<tr>
        <td colspan="8"><h2>Insert Combook</h2></td>
    	
	</tr>
	<tr><td>Tanggal</td><td></td>
   	 	<td colspan="6"><?php date_default_timezone_set("Asia/Jakarta");
		$date = date("d-m-Y").""; 
		echo $date;?>
    		</td>
    	</tr>

    </tr>
    	
    	<tr>
        <td>Berita</td><td> </td>
        <td colspan="6"><textarea name = "txtBerita"   style="width: 300px; height: 75px;"></textarea> </td>
    	</tr>

    <tr>
        <td colspan="8"><label color="red"> <font color="red">
         <?php 
        
         if(isset($_REQUEST['errorMsg']))
         {
          echo $_REQUEST['errorMsg'];
         }
         
         ?></font></label></td>
    </tr>
    <tr>

    
        <td colspan="8"><input type ="submit" value="Simpan" /></td>
    </tr>
   </table> </form><br>
	</div>
	 </div>
	 
  <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
    <div class="well well-sm">
    <table class="table table-hover">
      <tr class="default">
      <td align="center"><b>No.</b></td>
      <td align="center"><b>Nama</b>
      </td>
	<td align="center"><b>Catatan Khusus</b></td>
      </tr>
      <?php
		$result = mysql_query("SELECT s.namaLengkap, s.siswaID, s.noID,s.noIDD, s.noIDDD,  s.ttl,ot.ibu,ot.telpI, k.kelass, g.namaGuru,g.pegawaiID, g.IDG,g.IDDG, g.IDDDG, g.IDDDDG,  g.username, g.ttlG,g.agamaG, g.hpG, g.statusP, g.tinggiG, g.beratG, g.alamatG, g.emailG, g.hpG, g.noktpG from orangtua as ot, siswa as s, pegawai as g, kelas as k where k.kelasID=g.kelasID
AND s.kelasID=g.kelasID
AND s.siswaID=ot.siswaID
AND g.kelasID='$kelasID' AND g.pegawaiID='$pegawaiID' order by namaLengkap asc");
$index=1;
	  while($row = mysql_fetch_array($result))
			{
				$namaLengkap=$row['namaLengkap'];
				$ID=$row['noID'];
			$IDD=$row['noIDD'];
			$IDDD=$row['noIDDD'];
			$namaL=$row['namaLengkap'];
			$TTL=$row['ttl'];
			$ibu=$row['ibu'];
			$telpI=$row['telpI'];
				$IDG=$row['IDG'];
			$IDDG=$row['IDDG'];
			$IDDDG=$row['IDDDG'];
			$IDDDDG=$row['IDDDDG'];
			$namaL=$row['namaGuru'];
			$username=$row['username'];
			$TTLG=$row['ttlG'];
			$agama=$row['agamaG'];
			$tinggiG=$row['tinggiG'];
			$beratG=$row['beratG'];
			$alamatG=$row['alamatG']; 
			$emailG=$row['emailG'];
			$noktpG=$row['noktpG'];
			$hp=$row['hpG'];
			$statusP=$row['statusP'];	
			$kelas=$row['kelass'];
			$guruID=$row['guruID'];	
			$siswaID=$row['siswaID'];	
			$list='<tr>
			<td class="default" align="left">'.$index.'</td>
			<td  class="warning">'.$namaLengkap.'</td>
			<td  class="warning"><a href = "combookk.php?siswaID='.$siswaID.'"/>Tambahkan Catatan</a></td>			
			</tr>';
			echo $list;
			$index++;
			}
			
      ?>
      
      
      </table>
</div>
  </div>
</div>
<div class="col-md-1 col-lg-1 col-sm-12 col-xs-12"></div>
<div><br></div>
<?php } ?>
		        <?php
		include ("footer.php")
		?>