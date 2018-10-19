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
	if(isset($_REQUEST['txtSearch']))
	{
		$search=$_REQUEST['txtSearch'];
	}
	else
	{
		$search="";
	}
	$siswaID=$_REQUEST['siswaID'];
	$date=$_REQUEST['date'];

  ?>

        <?php
		include ("header.php")
		?>
        
         <?php if(!isset($_SESSION['userRole'])){ ?>
          <?php }else if(($_SESSION['userRole'] == "dentry")){?>
          
          
 <?php }else if(($_SESSION['userRole'] == "guru")){?>
       <?php $kelasID = $_SESSION['kelasID'];
  	$pegawaiID = $_SESSION['pegawaiID'];
  	 $siswaID=$_REQUEST['siswaID'];
   ?>
   
    <div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3" >
   <div class="well">
 
 
<?php	
		$elist.='<table width="80%" align="center">';
		$elist.='
    <table  align="center">
	<tr>
        <td  align="center" colspan="10"><h2>Tanggal</h2></td>
    	</tr>
	
    </table>
    <table  align="center"BORDER=1>
	
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
 order by datecb DESC limit $start,10");
		while($row=mysql_fetch_array($result))
		{	
			$cbID=$row['cbID'];
			$cbutama=$row['cbutama'];	
			$datecb=$row['datecb'];
			$pegawaiID=$row['pegawaiID'];
			
			$elist.='<tr>
			<td><a href = "combookk.php?siswaID='.$siswaID.'&&date='.$datecb.'"/>'.$datecb.'</a></td>
			' ;
			
			$index++;
		}$elist.='</table>'; //while 
	 
		?>
    <?php
	echo $elist;
	echo '<br/><br/><div class="pages">';
							for($i=1;$i<=$pages;$i++)
							{
							
								echo '<div  class="page"><a href = "combook.php?page='.$i.'">'.$i.'</a></div>';
							
							
						}
						echo '</div><br/><br/>';
	?>  
   </div>
    </div>



  <div class="col-lg-9 col-md-9 col-sm-9" >
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <div class="well">
  <?php
  
		
		$list.='<table width="80%" align="center">';
	

		$list.='
    <table  align="center">
	<tr>
        <td  align="center" colspan="10"><h2>Commbook Khusus</h2></td>
    	</tr>
	
    </table>
    <table  align="center"BORDER=1>
	<tr>
	<td>From</td>
	<td>Catatan Khusus</td>
	</tr>
	';
	
	if(!isset($_REQUEST['date']))
	{
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
		while($row=mysql_fetch_array($result))
		{	
			$cbID=$row['cbID'];
			$cbutama=$row['cbutama'];	
			$datecb=$row['datecb'];
			$pegawaiID=$row['pegawaiID'];
			$cbkhusus=$row['cbkhusus'];
			$cbkfrom=$row['cbkfrom'];
			$list.='<tr>
			<td>'.$cbkfrom.'</td>' ;
			
				if($cbkfrom=="guru")
				{
				$list.='<td><font color="blue">'.$cbkhusus.'</td>';
				}
				else if($cbkfrom=="ortu")
				{
				$list.='<td align="right">'.$cbkhusus.'</td>';
				}
			
			$index++;
			
		}$list.='</table>'; //while 
 	}
 	
 	else if($_REQUEST['date'])
 	{
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
		while($row=mysql_fetch_array($result))
		{	
			$cbID=$row['cbID'];
			$cbutama=$row['cbutama'];	
			$datecb=$row['datecb'];
			$pegawaiID=$row['pegawaiID'];
			$cbkhusus=$row['cbkhusus'];
			$cbkfrom=$row['cbkfrom'];
			$list.='<tr>
			<td>'.$cbkfrom.'</td>' ;
			
				if($cbkfrom=="guru")
				{
				$list.='<td><font color="blue">'.$cbkhusus.'</td>';
				}
				else if($cbkfrom=="ortu")
				{
				$list.='<td align="right">'.$cbkhusus.'</td>';
				}
			
			$index++;
			
		}$list.='</table>'; //while 
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
	     <form action="controller/doInsertCbK.php" method="post" enctype="multipart/form-data">
    <table  align="center">
    	<tr>
        <td colspan="8"><h2>Tambahkan Catatan Khusus</h2></td>
	</tr>
	<tr>
	<td colspan="8" align ="center"><label color="red"> <font color="red">WAJIB MEMBUAT COMMBOOK UMUM TERLEBIH DAHULU</td>
	</tr>
	<tr><td>Tanggal</td><td></td>
   	 	<td colspan="6"><?php date_default_timezone_set("Asia/Jakarta");
		$date = date("d-m-Y").""; 
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
        <td colspan="6"><textarea name = "txtBerita"   style="width: 300px; height: 75px;" disabled></textarea> </td>
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
  <form action="controller/doInsertCbK.php" method="post" enctype="multipart/form-data">
    <table  align="center">
    	<tr>
        <td colspan="8"><h2>Tambahkan Catatan Khusus</h2></td>
	</tr>
	<tr><td>Tanggal</td><td></td>
   	 	<td colspan="6"><?php date_default_timezone_set("Asia/Jakarta");
		$date = date("d-m-Y").""; 
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

    	<input type="hidden" name="siswaID" value="<?php echo $siswaID;?>"/>
        <td colspan="8"><input type ="submit" value="Simpan" /></td>
    </tr>
   </table> </form>
    <?php } ?>
   
   <br>
      </div>
      </div>
      </div>
      </div>
      </div>
<?php } ?>

    <?php
	include ("footer.php")
	?>
