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

	$list="";
	$index=0;

    if(!isset($_SESSION['userRole']))
	{
		
      }
	  else if(($_SESSION['userRole'] == "dentry")||($_SESSION['userRole'] == "admin"))
	  {	
	  
		$list.='
    <table  align="center">
	<tr>
        <td  align="center" colspan="10"><h2>DAFTAR SISWA</h2></td>
    	</tr>
	<tr>
	</table>
	<table  align="center" border="1">
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

		$count=mysql_query("select * from siswa");
		$result =mysql_query("select s.siswaID, s.noID,s.noIDD, s.noIDDD, s.namaLengkap, s.ttl, k.kelass,k.room,s.agama, ot.ibu,ot.telpI 
		from siswa as s, orangtua as ot, kelas as k 
		where  s.siswaID=ot.siswaID AND s.KelasID=k.KelasID AND s.kelasID!=1
		order by s.noIDDD ASC");
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
			
			$list.='<tr>
			<td>'.$ID.''.$IDD.''.$IDDD.'</td>
			<td>'.$namaL.'</td>
			<td>'.$kelas.''.$room.'</td>
			<td>'.$TTL.'</td>
			<td>'.$agama.'</td>
			<td>'.$ibu.'</td>
			<td>'.$telpI.'</td>
			<td><a href = "viewpayment.php?siswaID='.$siswaID.'"/>Detail Payment</a></td>
			' ;
			
		
		}$list.='</tbody></table>'; //while 
	  }
	?>
        
        <?php
		include ("header.php")
		?>
    

    <?php
	echo $list;
	echo '<br/><br/>';
						
	?>    
    <?php
	include ("footer.php")
	?>