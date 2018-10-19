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
	$start=($page-1)*20;
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
    if(!isset($_SESSION['userRole']))
	{
	
	
      }
	  else if(($_SESSION['userRole'] == "admin"))
	  {	
	  
	  if(!isset($_REQUEST['txtSearch'])||$search=="")
	{
		
		$list.='<table width="80%" align="center">';
	

		$list.='
    <table  align="center">
	<tr>
        <td  align="center" colspan="10"><h2>DAFTAR PEGAWAI</h2></td>
    	</tr>
	<tr>
	<td colspan="10">
	<form action="viewg.php" method="get">
	<input type="text" name="txtSearch">
	<input type="submit" value ="search">
	</form>
	</td>
	</tr>
    </table>
    <table  align="center"BORDER=1>
	<tr>
	<td>NomorID</td>
	<td>Nama Lengkap</td>
	<td>Jabatan</td>
	<td>Username</td>
	<td>Kelas</td>
    <td>TTL</td>
    <td>Agama</td>
    <td>HP/No. Telp</td>
    <td>View</td>
	<td>Edit</td>
	</tr>
	';

		$count=mysql_query("select * from pegawai");
		$pages = ceil(mysql_num_rows($count)/20);
		$result =mysql_query("select g.pegawaiID, g.IDG,g.IDDG, g.IDDDG, g.IDDDDG, g.namaGuru,g.jabatanG, g.username, g.ttlG,g.agamaG, g.hpG, k.kelass,k.room from pegawai as g, kelas as k where g.KelasID=k.KelasID order by g.IDDDDG ASC limit $start,20");
		while($row=mysql_fetch_array($result))
		{			$ID=$row['IDG'];
			$IDD=$row['IDDG'];
			$IDDD=$row['IDDDG'];
			$IDDDD=$row['IDDDDG'];
			$namaL=$row['namaGuru'];
			$username=$row['username'];
			$TTL=$row['ttlG'];
			$agama=$row['agamaG'];
			$hp=$row['hpG'];	
			$kelas=$row['kelass'];
			$room=$row['room'];
			$pegawaiID=$row['pegawaiID'];
			$jabatanG=$row['jabatanG'];
		
			$list.='<tr>
			<td>TB'.$ID.''.$IDD.''.$IDDD.''.$IDDDD.'</td>
			<td>'.$namaL.'</td>
			<td>'.$jabatanG.'</td>
			<td>'.$username.'</td>
			<td>'.$kelas.''.$room.'</td>
			<td>'.$TTL.'</td>
			<td>'.$agama.'</td>
			<td>'.$hp.'</td>
			<td><a href = "viewgd.php?pegawaiID='.$pegawaiID.'"/>Detail</a></td>
			<td><a href = "editdataguru.php?pegawaiID='.$pegawaiID.'"/>Edit</a></td>
			' ;
			
			$index++;
		}$list.='</table>'; //while 
	}//if
			
	  }//session admin
	  else if(($_SESSION['userRole'] == "dentry"))
	  {	
	  
	  if(!isset($_REQUEST['txtSearch'])||$search=="")
	{
		
		$list.='<table width="80%" align="center">';
	

		$list.='
    <table  align="center">
	<tr>
        <td  align="center" colspan="10"><h2>DAFTAR PEGAWAI</h2></td>
    	</tr>
	<tr>
	<td colspan="10">
	<form action="viewg.php" method="get">
	<input type="text" name="txtSearch">
	<input type="submit" value ="search">
	</form>
	</td>
	</tr>
    </table>
    <table  align="center"BORDER=1>
	<tr>
	<td>NomorID</td>
	<td>Nama Lengkap</td>
	<td>Jabatan</td>
	<td>Username</td>
	<td>Kelas</td>
    <td>TTL</td>
    <td>Agama</td>
    <td>HP/No. Telp</td>
    <td>View</td>
	</tr>
	';

		$count=mysql_query("select * from pegawai");
		$pages = ceil(mysql_num_rows($count)/20);
		$result =mysql_query("select g.pegawaiID, g.IDG,g.IDDG, g.IDDDG, g.IDDDDG, g.namaGuru,g.jabatanG, g.username, g.ttlG,g.agamaG, g.hpG, k.kelass,k.room from pegawai as g, kelas as k where g.KelasID=k.KelasID order by g.IDDDDG ASC limit $start,20");
		while($row=mysql_fetch_array($result))
		{			$ID=$row['IDG'];
			$IDD=$row['IDDG'];
			$IDDD=$row['IDDDG'];
			$IDDDD=$row['IDDDDG'];
			$namaL=$row['namaGuru'];
			$username=$row['username'];
			$TTL=$row['ttlG'];
			$agama=$row['agamaG'];
			$hp=$row['hpG'];	
			$kelas=$row['kelass'];
			$room=$row['room'];
			$pegawaiID=$row['pegawaiID'];
			$jabatanG=$row['jabatanG'];
		
			$list.='<tr>
			<td>TB'.$ID.''.$IDD.''.$IDDD.''.$IDDDD.'</td>
			<td>'.$namaL.'</td>
			<td>'.$jabatanG.'</td>
			<td>'.$username.'</td>
			<td>'.$kelas.''.$room.'</td>
			<td>'.$TTL.'</td>
			<td>'.$agama.'</td>
			<td>'.$hp.'</td>
			<td><a href = "viewgd.php?pegawaiID='.$pegawaiID.'"/>Detail</a></td>
			' ;
			
			$index++;
		}$list.='</table>'; //while 
	}//if
			
	  }
	?>
   


         
         <!-- header Start
         ================================================= -->
        
        <?php
		include ("header.php")
		?>
    
    
    <?php
	echo '<div style="overflow-x:auto;">'.$list.'</div>';
	echo '<br/><br/><div class="pages">';
							for($i=1;$i<=$pages;$i++)
							{
							if(isset($_REQUEST['txtSearch'])&&$search!="")
							{
								echo '<div  class="page"><a href = "viewg.php?page='.$i.'&txtSearch='.$search.'">'.$i.'</a></div>';
							}
							else
							{
								echo '<div  class="page"><a href = "viewg.php?page='.$i.'">'.$i.'</a></div>';
							}
							
						}
						echo '</div><br/><br/>';
	?>    
    <?php
	include ("footer.php")
	?>