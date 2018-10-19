<?php 
include("controller/doConnect.php");
  session_start();
$siswaID=$_REQUEST['siswaID'];

?>
        <?php
		include ("header.php")
		?>
        
         <?php if(!isset($_SESSION['userRole'])){ ?>
          <?php }else if(($_SESSION['userRole'] == "dentry")||($_SESSION['userRole'] == "admin")){?>
  <table style="margin-left:10%;">
	<tr>
        <td><ul class="pager">
  <li><a href="viewpayment.php?siswaID=<?php echo $siswaID; ?>">Back</a></li></ul></td>
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

    <table class="table" >
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
    </table>
       </div></div></div>
	</div></div>
	<!--row container-->
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
     <?php }else if(($_SESSION['userRole'] == "guru")){?>
     <table style="margin-left:10%;">
	<tr>
        <td><ul class="pager">
  <li><a href="index.php">Back</a></li></ul></td>
    	</tr></table>
    <table align="center" border="1">
	<tr>
        <td colspan="3"><h4><b>Data Siswa</b></h4></td>
    	</tr>
    
	<?php
	$result =mysql_query("select * from siswa where siswaID=$siswaID");
	while($row=mysql_fetch_array($result))
	{	$siswaID=$row['siswaID'];
		$ID=$row['noID'];
		$IDD=$row['noIDD'];
		$IDDD=$row['noIDDD'];
		$namaL=$row['namaLengkap'];
		$namaP=$row['namaPanggilan'];
		$TTL=$row['ttl'];
		$anakke=$row['anakke'];
		$jlhsaudara=$row['jlhsaudara'];
		$agama=$row['agama'];
		$goldarah=$row['goldarah'];
		$tinggibadan=$row['tinggibadan'];
		$jalan=$row['jalan'];
		$kelurahan=$row['kelurahan'];
		$kec=$row['kecamatan'];
		$kabkot=$row['kabkot'];
		
	$list='
		<td>Nomor ID</td><td>'.$ID.''.$IDD.''.$IDDD.'</td></tr><tr>
		<td>Nama Lengkap</td><td>'.$namaL.'</td></tr><tr>
		<td>Nama Pangglan</td><td>'.$namaP.'</td></tr><tr>
		<td>TTL</td><td>'.$TTL.'</td></tr><tr>
		<td>Anak ke</td><td>'.$anakke.'</td></tr><tr>
		<td>Jlh Saudara</td><td>'.$jlhsaudara.'</td>
		
	</tr>' ;
	echo $list;
	}

	?>
 
	<tr>
	
   
    


	<?php
	$result =mysql_query("select * from siswa where siswaID=$siswaID");
	while($row=mysql_fetch_array($result))
	{	$siswaID=$row['siswaID'];
		$ID=$row['noID'];
		$IDD=$row['noIDD'];
		$IDDD=$row['noIDDD'];
		$namaL=$row['namaLengkap'];
		$namaP=$row['namaPanggilan'];
		$TTL=$row['ttl'];
		$anakke=$row['anakke'];
		$jlhsaudara=$row['jlhsaudara'];
		$agama=$row['agama'];
		$goldarah=$row['goldarah'];
		$tinggibadan=$row['tinggibadan'];
		$jalan=$row['jalan'];
		$kelurahan=$row['kelurahan'];
		$kec=$row['kecamatan'];
		$kabkot=$row['kabkot'];
		
	$list=' <td>agama </td><td>'.$agama.'</td></tr><tr>
		 <td>Gol Darah</td><td>'.$goldarah.'</td></tr>
		 <tr><td>Tinggi Badan</td><td>'.$tinggibadan.'</td></tr>
    <tr>
		<td rowspan="4">Alamat</td>
		<td>Jl '.$jalan.'</td>
	</tr>
	<tr>
	<td>Kel '.$kelurahan.' </td>
	</tr>
	<tr>
	<td>Kec '.$kec.'</td>
	</tr>
	<tr>
	<td>Kab/Kota '.$kabkot.'</td>
	</tr>' ;
	echo $list;
	}

	?>
 
     
	<tr>
        <td colspan="3" align="Left" ><h4><b>Data Orang Tua</b></h4></td>
    	</tr>
	<tr>
	

	<?php
	$result =mysql_query("select * from orangtua where siswaID=$siswaID");
	while($row=mysql_fetch_array($result))
	{	$siswaID=$row['siswaID'];
		$ayah=$row['ayah'];
		$pendidikanA=$row['pendidikanA'];
		$pekerjaanA=$row['pekerjaanA'];
		$namausahaA=$row['namausahaA'];
		$telpA=$row['telpA'];
		$ibu=$row['ibu'];
		$pendidikanI=$row['pendidikanI'];
		$pekerjaanI=$row['pekerjaanI'];
		$namausahaI=$row['namausahaI'];
		$telpI=$row['telpI'];	
		
	$list='
	<td>Nama Ayah</td><td>'.$ayah.'</td></tr><tr>
	<td>Pendidikan Terakhir</td><td>'.$pendidikanA.'</td></tr><tr>
	<td>Pekerjaan</td> <td>'.$pekerjaanA.'</td></tr><tr>
	<td>Nama Usaha/Kantor</td><td>'.$namausahaA.'</td></tr><tr>
	<td>Telp</td><td>'.$telpA.'</td>
	</tr>' ;
	echo $list;
	}

	?>



	<?php
	$result =mysql_query("select * from orangtua where siswaID=$siswaID");
	while($row=mysql_fetch_array($result))
	{	$siswaID=$row['siswaID'];
		$ayah=$row['ayah'];
		$pendidikanA=$row['pendidikanA'];
		$pekerjaanA=$row['pekerjaanA'];
		$namausahaA=$row['namausahaA'];
		$telpA=$row['telpA'];
		$ibu=$row['ibu'];
		$pendidikanI=$row['pendidikanI'];
		$pekerjaanI=$row['pekerjaanI'];
		$namausahaI=$row['namausahaI'];
		$telpI=$row['telpI'];	
		
	$list='<tr>    <td>Nama Ibu</td><td>'.$ibu.'</td></tr><tr>
	<td>Pendidikan Terakhir</td><td>'.$pendidikanI.'</td></tr><tr>
	<td>Pekerjaan</td><td>'.$pekerjaanI.'</td></tr><tr>
	<td>Nama Usaha/Kantor</td><td>'.$namausahaI.'</td></tr><tr>
	<td>Telp</td><td>'.$telpI.'</td></tr>' ;
	echo $list;
	}

	?>

	<tr>
        <td colspan="3" align="Left" ><h4><b>Data Pendukung</b></h4></td>
    	</tr>
    
	

	<?php
	$result =mysql_query("select * from pendukungs where siswaID=$siswaID");
	while($row=mysql_fetch_array($result))
	{	$siswaID=$row['siswaID'];
		$sklhA=$row['sklhA'];
		$jalanS=$row['jalanS'];
		$sttb=$row['sttb'];
		$darikls=$row['darikls'];
		$alasanpdh=$row['alasanpdh'];
		$namakes=$row['namakes'];
		$hubkes=$row['hubkes'];
		$telpkes=$row['telpkes'];
		$namakess=$row['namakess'];
		$hubkess=$row['hubkess'];
		$telpkess=$row['telpkess'];
		$masalahkes=$row['masalahkes'];
		$hobby=$row['hobby'];
		$prestasi=$row['prestasi'];
		$prestasii=$row['prestasii'];
		$harapan=$row['harapan'];
		$penjemput=$row['penjemput'];
		$telppenjemput=$row['telppenjemput'];
				
	$list='<tr>
	<td>Sekolah Asal</td><td>'.$sklhA.'</td></tr><tr>
	<td>Jalan Sekolah</td><td>'.$jalanS.'</td></tr><tr>
    <td>Tgl & No.STTB</td><td>'.$sttb.'</td></tr><tr>
    <td>Dari Kelas</td><td>'.$darikls.'</td></tr><tr>
    <td>Alasan Pindah</td><td>'.$alasanpdh.'</td>
	</tr>' ;
	echo $list;
	}

	?>
	<tr>
        <td colspan="3" align="Left" ><h4><b>Dalam Keadaan Darurat Hub</b></h4></td>
    </tr>


	<?php
	$result =mysql_query("select * from pendukungs where siswaID=$siswaID");
	while($row=mysql_fetch_array($result))
	{	$siswaID=$row['siswaID'];
		$sklhA=$row['sklhA'];
		$jalanS=$row['jalanS'];
		$sttb=$row['sttb'];
		$darikls=$row['darikls'];
		$alasanpdh=$row['alasanpdh'];
		$namakes=$row['namakes'];
		$hubkes=$row['hubkes'];
		$telpkes=$row['telpkes'];
		$namakess=$row['namakess'];
		$hubkess=$row['hubkess'];
		$telpkess=$row['telpkess'];
		$masalahkes=$row['masalahkes'];
		$hobby=$row['hobby'];
		$prestasi=$row['prestasi'];
		$prestasii=$row['prestasii'];
		$harapan=$row['harapan'];
		$penjemput=$row['penjemput'];
		$telppenjemput=$row['telppenjemput'];
				
	$list='<tr>
	 <td>Nama</td>  <td>'.$namakes.'</td></tr><tr>
	<td>Hub</td> <td>'.$hubkes.'</td></tr><tr>
	<td>Telp</td><td>'.$telpkes.'</td></tr><tr>
    <td>Nama</td><td>'.$namakess.'</td></tr><tr>
	<td>Hub</td><td>'.$hubkess.'</td></tr><tr>
	<td>Telp</td><td>'.$telpkess.'</td>
	</tr>' ;
	echo $list;
	}

	?>
	<tr>
        <td  colspan="3"align="Left" ><h4><b>Data Lain-Lain</b></h4></td>
    	</tr>
	<?php
	$result =mysql_query("select * from pendukungs where siswaID=$siswaID");
	while($row=mysql_fetch_array($result))
	{	$siswaID=$row['siswaID'];
		$sklhA=$row['sklhA'];
		$jalanS=$row['jalanS'];
		$sttb=$row['sttb'];
		$darikls=$row['darikls'];
		$alasanpdh=$row['alasanpdh'];
		$namakes=$row['namakes'];
		$hubkes=$row['hubkes'];
		$telpkes=$row['telpkes'];
		$namakess=$row['namakess'];
		$hubkess=$row['hubkess'];
		$telpkess=$row['telpkess'];
		$masalahkes=$row['masalahkes'];
		$hobby=$row['hobby'];
		$prestasi=$row['prestasi'];
		$prestasii=$row['prestasii'];
		$harapan=$row['harapan'];
		$penjemput=$row['penjemput'];
		$telppenjemput=$row['telppenjemput'];
				
	$list='<tr> 
	<td>Masalah Kes</td><td>'.$masalahkes.'</td></tr><tr>
	<td>Hobby</td><td>'.$hobby.'</td></tr><tr>
	<td>Prestasi 1</td><td>'.$prestasi.'</td></tr><tr>
	<td>Prestasi 2</td><td>'.$prestasii.'</td>
	</tr>' ;
	echo $list;
	}

	?>
 
	<?php
	$result =mysql_query("select * from pendukungs where siswaID=$siswaID");
	while($row=mysql_fetch_array($result))
	{	$siswaID=$row['siswaID'];
		$sklhA=$row['sklhA'];
		$jalanS=$row['jalanS'];
		$sttb=$row['sttb'];
		$darikls=$row['darikls'];
		$alasanpdh=$row['alasanpdh'];
		$namakes=$row['namakes'];
		$hubkes=$row['hubkes'];
		$telpkes=$row['telpkes'];
		$namakess=$row['namakess'];
		$hubkess=$row['hubkess'];
		$telpkess=$row['telpkess'];
		$masalahkes=$row['masalahkes'];
		$hobby=$row['hobby'];
		$prestasi=$row['prestasi'];
		$prestasii=$row['prestasii'];
		$harapan=$row['harapan'];
		$penjemput=$row['penjemput'];
		$telppenjemput=$row['telppenjemput'];
				
	$list='<tr>
	<td>Harapan</td><td>'.$harapan.'</td></tr><tr>
	<td>Penjemput</td><td>'.$penjemput.'</td></tr><tr>
	<td>Telp Penjemput</td>	<td>'.$telppenjemput.'</td>

	</tr>' ;
	echo $list;
	}

	?>
   </table><br><br>
<?php } ?>

    <?php
	include ("footer.php")
	?>
