<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
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

    if(!isset($_SESSION['userRole']))
	{
		if(!isset($_REQUEST['txtSearch'])||$search=="")
		{}
		else
		{} 
	
      }
	  else if(($_SESSION['userRole'] == "admin"))
	  {	
	  
	  if(!isset($_REQUEST['txtSearch'])||$search=="")
	{
		
		$list.='<table width="80%" align="center">';
	

		$list.='
    <table  align="center">
	<tr>
        <td  align="center" colspan="10"><h2>REAL DATA SISWA</h2></td>
    	</tr>
	
    </table>
    <table  align="center"BORDER=1>
     <tr>
	<td colspan="10">
	<input class="form-control" id="myInput" type="text" placeholder="Search..">
	</td>
	</tr>
	<tr>
	<td>NomorID</td>
	<td>Nama Lengkap</td>
	<td>Kelas</td>
    <td>TTL</td>
    <td>Agama</td>
    <td>Nama Ibu</td>
    <td>HP/No. Telp</td>
    <td>View</td>
	<td>Edit</td>
	</tr><tbody id="myTable">
	';

		$count=mysql_query("select * from siswa where kelasID!=1");
		$result =mysql_query("select s.siswaID, s.noID,s.noIDD, k.kelass,k.room, s.noIDDD, s.namaLengkap, s.ttl,s.agama, ot.ibu,ot.telpI from siswa as s, orangtua as ot, kelas as k 
		where s.siswaID=ot.siswaID AND s.KelasID=k.KelasID AND s.kelasID!=1 order by s.noIDDD ASC");
		while($row=mysql_fetch_array($result))
		{			$ID=$row['noID'];
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
			
		
			$list.='<tr>
			<td>'.$ID.''.$IDD.''.$IDDD.'</td>
			<td>'.$namaL.'</td>
			<td>'.$kelas.''.$room.'</td>
			<td>'.$TTL.'</td>
			<td>'.$agama.'</td>
			<td>'.$ibu.'</td>
			<td>'.$telpI.'</td>
			<td><a href = "viewsd.php?siswaID='.$siswaID.'"/>Detail</a></td>
			<td><a href = "editdatasiswa.php?siswaID='.$siswaID.'"/>Edit</a></td>
			' ;
			
			$index++;
		}$list.='</tbody></table>'; //while 
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
        <td  align="center" colspan="10"><h2>REAL DATA SISWA</h2></td>
    	</tr>
	
    </table>
    <table  align="center"BORDER=1>
     <tr>
	<td colspan="10">
	<input class="form-control" id="myInput" type="text" placeholder="Search..">
	</td>
	</tr>
	<tr>
	<td>NomorID</td>
	<td>Nama Lengkap</td>
	<td>Kelas</td>
    <td>TTL</td>
    <td>Agama</td>
    <td>Nama Ibu</td>
    <td>HP/No. Telp</td>
    <td>View</td>
	</tr><tbody id="myTable">
	';

		$count=mysql_query("select * from siswa where kelasID!=1");
		$result =mysql_query("select s.siswaID, s.noID,s.noIDD, k.kelass,k.room, s.noIDDD, s.namaLengkap, s.ttl,s.agama, ot.ibu,ot.telpI from siswa as s, orangtua as ot, kelas as k 
		where s.siswaID=ot.siswaID AND s.KelasID=k.KelasID AND s.kelasID!=1 order by s.noIDDD ASC");
		while($row=mysql_fetch_array($result))
		{			$ID=$row['noID'];
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
			
		
			$list.='<tr>
			<td>'.$ID.''.$IDD.''.$IDDD.'</td>
			<td>'.$namaL.'</td>
			<td>'.$kelas.''.$room.'</td>
			<td>'.$TTL.'</td>
			<td>'.$agama.'</td>
			<td>'.$ibu.'</td>
			<td>'.$telpI.'</td>
			<td><a href = "viewsd.php?siswaID='.$siswaID.'"/>Detail</a></td>

			' ;
			
			$index++;
		}$list.='</tbody></table>'; //while 
	}//if
	  }//session
	?>
        
        <?php
		include ("header.php")
		?>
    
    
    <?php
	echo '<div style="overflow-x:auto;">'.$list.'</div>';
	echo '</div><br/><br/>';
	?>    
    <?php
	include ("footer.php")
	?>