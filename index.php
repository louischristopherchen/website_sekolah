<?php 
include("controller/doConnect.php");
  session_start();
  ?>
        
        <?php
		include ("header.php")
		?>
 <?php if(!isset($_SESSION['userRole'])){ ?>
 <!-- Slider Start
        ============================================================== -->

        <section id="slider"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="slider-text-area">
                                <div class="slider-text">
                                    
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-12 close -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #slider close -->
 
   <?php }else if(($_SESSION['userRole'] == "spv")){?>
    <!-- Slider Start
        ============================================================== -->

        <section id="slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="slider-text-area">
                                <div class="slider-text">
                                    
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-12 close -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #slider close -->
    <?php }else if(($_SESSION['userRole'] == "dentry")||($_SESSION['userRole'] == "admin")){?>
        <?php $pegawaiID = $_SESSION['pegawaiID']; ?>
     <div class="container">
<div class="row">
<div class="col-lg-7 col-md-7 col-sm-7" >
<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">GREETING</div>
      <div class="panel-body">Selamat datang, Bapak/Ibu 
      <?php 
	  	  $result = mysql_query("SELECT namaGuru,IDG,IDDG, IDDDG, IDDDDG, username, ttlG,agamaG,hpG,statusP ,noktpG from pegawai where
 pegawaiID='$pegawaiID'");
 	  while($row = mysql_fetch_array($result))
			{
	
			$namaGuru=$result['namaGuru'];
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
			$hpG=$row['hpG'];
			$statusP=$row['statusP'];	
			$kelas=$row['kelass'];
		$list='<b>'.$namaGuru.'</b>';
		echo $list;
}
		?>
      </div>
    </div>
      </div>
</div><br>

<div class="row col-xs-12 col-lg-5 col-md-5 col-sm-12 col-sx-offset-12" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">Data Guru</div>
      <div class="panel-body">
                  <table style="margin-left:10%;">
      <tr>
      <td>NO INDUK Guru</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
      <b>TB<?php echo $IDG.$IDDG.$IDDDG.$IDDDDG;?></b>
      </td>
      </tr>
            </tr>
      <tr>
      <td>Nama Guru</td>
      <td>&nbsp;:&nbsp;</td>
	<td><b><?php echo $namaL; ?></b></td>
      </tr>
       <tr><td>Kelas</td><td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $kelas;?></b></td>
      </tr>
      <tr><td>Tempat, Tgl Lahir</td>
      <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $TTLG;?></b></td>
      </tr>
      </tr>
      <tr><td>Agama</td>
      <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $agama;?></b></td>
      </tr>
      </tr>
      <tr><td>Status Perkawinan</td>
      <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $statusP;?></b></td>
      </tr>
      </tr>
      <tr><td>Tinggi Badan</td>
      <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $tinggiG;?></b></td>
      </tr>
      </tr>
      <tr><td>Berat Badan</td>
      <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $beratG;?></b></td>
      </tr>
      </tr>
      <tr><td>Alamat</td>
      <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $alamatG;?></b></td>
      </tr>
      </tr>
      <tr><td>No Hp</td><td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $hpG;?></b></td>
      </tr>
      </tr>
      <tr><td>No KTP</td><td>&nbsp;:&nbsp;</td>
      <td><b><?php  echo $noktpG; ?></b></td>
      </tr>
      </tr>
      <tr><td>Email</td><td>&nbsp;:&nbsp;</td>
      <td><b><?php echo  $emailG;?></b></td>
      </tr>

      </table>
      </div>
    </div>
</div>



</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">Data Lain-Lain</div>
      <div class="panel-body">
      
      </div>
    </div>
</div>

</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading"></div>
      <div class="panel-body">    
      
      </div>
    </div>
</div>
</div>

</div>
</div>
</div>
<div>
<br><br><br>
</div>
    <?php }else if(($_SESSION['userRole'] == "ortu")){?>
  <?php $noIDDD = $_SESSION['noIDDD']; ?>
    <div class="container">
<div class="row">
<div class="col-lg-7 col-md-7 col-sm-7" >
<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">GREETING</div>
      <div class="panel-body">Selamat datang, Bapak/Ibu dari  <font color="blue"><?php 
	  
	  	$result = mysql_query("SELECT s.siswaID, s.noID,s.noIDD, s.noIDDD, s.namaLengkap,s.goldarah, 
	  	s.ttl,s.agama,s.jalan,s.kelurahan,s.kecamatan,s.kabkot, ot.ayah,ot.telpA,ot.ibu,
	  	ot.telpI,pd.namakes,pd.hubkes,pd.telpkes,pd.namakess,pd.hubkess,pd.telpkess,
	  	k.kelass
	  	from siswa as s, orangtua as ot, pendukungs as pd, kelas as k
	  	 WHERE 
	  	 s.siswaID=ot.siswaID
	  	 AND s.siswaID=pd.siswaID
	  	 AND ot.siswaID=pd.siswaID
	  	 AND s.siswaID=ot.siswaID
	  	 AND s.kelasID=k.kelasID
	  	 AND noIDDD = '$noIDDD'");

		$result = mysql_fetch_array($result);
			$siswaID=$result['siswaID'];
			$ID=$result['noID'];
			$IDD=$result['noIDD'];
			$IDDD=$result['noIDDD'];
			$namaL=$result['namaLengkap'];
			$TTL=$result['ttl'];
			$agama=$result['agama'];
			$jalan=$result['jalan'];
			$kelurahan=$result['kelurahan'];
			$kecamatan=$result['kecamatan'];
			$kabkot=$result['kabkot'];
			$ibu=$result['ibu'];
			$telpI=$result['telpI'];	
			$ayah=$result['ayah'];
			$telpA=$result['telpA'];	
			$kelass=$result['kelass'];
			$namakes=$result['namakes'];
			$hubkes=$result['hubkes'];
			$telpkes=$result['telpkes'];
			$namakess=$result['namakess'];
			$hubkess=$result['hubkess'];
			$telpkess=$result['telpkess'];
			$goldarah=$result['goldarah'];
			echo  $namaL;

	  
	  ?></font></div>
    </div>
      </div>
</div><br>

<div class="row col-xs-12 col-lg-5 col-md-5 col-sm-12 col-sx-offset-12" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">Data Siswa</div>
      <div class="panel-body">
      
      <table style="margin-left:10%;">
      <tr>
      <td>NO INDUK SISWA</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
      <b><?php echo $ID.$IDD.$IDDD;?></b>
      </td>
      </tr>
       <tr>
      <td>Kelas</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
      <b><?php echo $kelass;?></b>
      </td>
      </tr>
      <tr>
      <td>Nama Lengkap</td>
      <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $namaL;?></b></td>
      </tr>
      <tr>
      <td>Tempat, Tgl Lahir</td>
       <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $TTL;?></b></td>
      </tr>
      <tr>
      <td>Agama</td>
       <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $agama?></b></td>
      </tr>
      <tr>
      <td>Jalan</td>
       <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $jalan?></b></td>
      </tr>
      <tr>
      <td>Kelurahan</td>
       <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $kelurahan?></b></td>
      </tr>
      <tr>
      <td>Kecamatan</td>
       <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $kecamatan?></b></td>
      </tr>
      <tr>
      <td>Kab/Kota</td>
      <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $kabkot?></b></td>
      </tr>
      </table>
      
      
      
      
      </div>
    </div>
</div>



</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">Data Orang Tua</div>
      <div class="panel-body">
      
      <table style="margin-left:10%;">
      <tr>
      <td>Nama Ayah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
      <b><?php echo $ayah;?></b>
      </td>
      </tr>
       <tr>
      <td>HP Ayah</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
      <b><?php echo $telpA;?></b>
      </td>
      </tr>
      <tr>
      <td>Nama Ibu</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
      <b><?php echo $ibu;?></b>
      </td>
      </tr>
       <tr>
      <td>HP Ibu</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
      <b><?php echo $telpI;?></b>
      </td>
      </tr>      </table>
      
      
      </div>
    </div>
</div>

</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">Data Lain-Lain</div>
      <div class="panel-body">
      <table style="margin-left:10%;">
      <tr>
      <td colspan="4">Emergency Call</td>
      </tr>
      <tr>
      <td>1.</td>
      <td>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
      <b><?php echo $namakes;?></b>
      </td>
      </tr>
      <tr>
      <td></td>
      <td>Hubungan</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
      <b><?php echo $hubkes;?></b>
      </td>
      </tr>
      <tr>
      <td></td>
      <td>Telepon</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
      <b><?php echo $telpkes;?></b>
      </td>
      </tr>
      <tr>
      <td>2.</td>
      <td>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
      <b><?php echo $namakess;?></b>
      </td>
      </tr>
      <tr>
      <td></td>
      <td>Hubungan</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
      <b><?php echo $hubkess;?></b>
      </td>
      </tr>
      <tr>
      <td></td>
      <td>Telepon</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
      <b><?php echo $telpkess;?></b>
      </td>
      </tr>
      <tr>
 
      <td colspan="2">Golongan Darah</td>
     
      <td>&nbsp;:&nbsp;</td>
      <td>
      <b><?php echo $goldarah;?></b>
      </td>
      </tr>
      </table>
        
      
      
      
      </div>
    </div>
</div>
</div>


</div>
</div>
</div>
<div>
<br><br><br>
</div>
    <?php }else if(($_SESSION['userRole'] == "guru")){?>
    <?php $kelasID = $_SESSION['kelasID']; ?>
     <div class="container">
<div class="row">
<div class="col-lg-7 col-md-7 col-sm-7" >
<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">GREETING</div>
      <div class="panel-body">Selamat datang, Bapak/Ibu 
      <?php 
      
	  	  $result = mysql_query("SELECT s.namaLengkap, s.siswaID, s.noID,s.noIDD, s.noIDDD,  s.ttl,ot.ibu,ot.telpI, k.kelass, g.namaGuru,g.pegawaiID, g.IDG,g.IDDG, g.IDDDG, g.IDDDDG,  g.username, g.ttlG,g.agamaG, g.hpG, g.statusP from orangtua as ot, siswa as s, pegawai as g, kelas as k where k.kelasID=g.kelasID
AND s.kelasID=g.kelasID
AND s.siswaID=ot.siswaID
AND g.kelasID='$kelasID'");
		$result = mysql_fetch_array($result);
			$namaGuru=$result['namaGuru'];
			$kelass=$result['kelass'];
		 
		$list='<b>'.$namaGuru.'</b>';
		echo $list;
		?>
     <br><br>
      <table class="table-bordered table-striped" >
      <tr>
      <td align="center"><b>No.</b></td>
      <td align="center"><b>NO ID</b>
      </td>
      <td align="center"><b>Nama</b>
      </td>
      <td align="center"><b>Tempat Tanggal Lahir</b>
      </td>
	<td align="center"><b>View</b></td>
      </tr>
      <?php
		$result = mysql_query("SELECT s.namaLengkap, s.siswaID, s.noID,s.noIDD, s.noIDDD,  s.ttl,ot.ibu,ot.telpI, k.kelass, g.namaGuru,g.pegawaiID, g.IDG,g.IDDG, g.IDDDG, g.IDDDDG,  g.username, g.ttlG,g.agamaG, g.hpG, g.statusP, g.tinggiG, g.beratG, g.alamatG, g.emailG, g.hpG, g.noktpG from orangtua as ot, siswa as s, pegawai as g, kelas as k where k.kelasID=g.kelasID
AND s.kelasID=g.kelasID
AND s.siswaID=ot.siswaID
AND g.kelasID='$kelasID' order by namaLengkap asc");
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
			$hpG=$row['hpG'];
			$statusP=$row['statusP'];	
			$kelas=$row['kelass'];
		
			$siswaID=$row['siswaID'];	
			$list='<tr>
			<td align="right">'.$index.'</td>
			<td>'.$ID.''.$IDD.''.$IDDD.'</td>
			<td>'.$namaLengkap.'</td>
			<td>'.$TTL.'</td>
			<td><a href = "viewsd.php?siswaID='.$siswaID.'"/>Detail</a></td>			
			</tr>';
			echo $list;
			$index++;
			}
			
      ?>
      
      
      </table>
      </div>
    </div>
      </div>
</div><br>

<div class="row col-xs-12 col-lg-5 col-md-5 col-sm-12 col-sx-offset-12" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">Data Guru</div>
      <div class="panel-body">
                  <table style="margin-left:10%;">
      <tr>
      <td>NO INDUK Guru</td>
      <td>&nbsp;:&nbsp;</td>
      <td>
      <b>TB<?php echo $IDG.$IDDG.$IDDDG.$IDDDDG;?></b>
      </td>
      </tr>
            </tr>
      <tr>
      <td>Nama Guru</td>
      <td>&nbsp;:&nbsp;</td>
	<td><b><?php echo $namaL; ?></b></td>
      </tr>
       <tr><td>Kelas</td><td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $kelas;?></b></td>
      </tr>
      <tr><td>Tempat, Tgl Lahir</td>
      <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $TTLG;?></b></td>
      </tr>
      </tr>
      <tr><td>Agama</td>
      <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $agama;?></b></td>
      </tr>
      </tr>
      <tr><td>Status Perkawinan</td>
      <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $statusP;?></b></td>
      </tr>
      </tr>
      <tr><td>Tinggi Badan</td>
      <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $tinggiG;?></b></td>
      </tr>
      </tr>
      <tr><td>Berat Badan</td>
      <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $beratG;?></b></td>
      </tr>
      </tr>
      <tr><td>Alamat</td>
      <td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $alamatG;?></b></td>
      </tr>
      </tr>
      <tr><td>No Hp</td><td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $hpG;?></b></td>
      </tr>
      </tr>
      <tr><td>No KTP</td><td>&nbsp;:&nbsp;</td>
      <td><b><?php echo $noktpG;?></b></td>
      </tr>
      </tr>
      <tr><td>Email</td><td>&nbsp;:&nbsp;</td>
      <td><b><?php echo  $emailG;?></b></td>
      </tr>

      </table>
      </div>
    </div>
</div>



</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">Data Lain-Lain</div>
      <div class="panel-body">
      
      </div>
    </div>
</div>

</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading"></div>
      <div class="panel-body">    
      
      </div>
    </div>
</div>
</div>

</div>
</div>
</div>
<div>
<br><br><br>
</div>
    <?php } ?>
       

    <?php
	include ("footer.php")
	?>