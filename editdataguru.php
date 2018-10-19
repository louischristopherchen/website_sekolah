<?php 
include("controller/doConnect.php");
  session_start();
    $pegawaiID=$_REQUEST['pegawaiID'];
  	$result = mysql_query("select p.pegawaiID,p.kelasID,p.IDG,p.IDDG,p.IDDDG,p.IDDDDG,p.username,p.password,p.namaGuru,p.role,p.ttlG,p.tempatlahirG,p.agamaG,p.statusP,p.jlhAG,p.tinggiG,p.beratG,p.alamatG,p.kelurahanG,p.kecamatanG,p.kabkotG,p.hpG,p.noktpG,p.emailG,p.pendidikanG,p.bidangstudiG,p.tglbertugasG,p.jabatanG,p.bAsing, p.jpG,p.gpG,p.umG,p.tjG,p.tlG, k.kelass,k.room from pegawai as p, kelas as k where k.kelasID=p.kelasID AND pegawaiID ='$pegawaiID' ");
	$row = mysql_fetch_array($result);
  ?>

        
        <?php
		include ("header.php")
		?>
        
         <?php if(!isset($_SESSION['userRole'])){ ?>
          <?php }else if(($_SESSION['userRole'] == "admin")){?>
          
<br><br>
<form action="controller/doEditGuru.php" method="post" enctype="multipart/form-data">
    <table  align="center" border="0">
    
    
    <tr>
        <td colspan="8"><h2>EDIT DATA PEGAWAI</h2></td>
    	
	</tr>
	<tr>
    <td colspan="8">
    <b>DATA DIRI</b>
    </td>
    </tr>
    <tr>
        <td>NO ID PEGAWAI</td><td> </td>
       
        <td align="left" colspan="7">TB
		<?php
		$IDG=$row['IDG'];
		$IDDG=$row['IDDG'];
		$IDDDG=$row['IDDDG'];
		$IDDDDG=$row['IDDDDG'];
		$list="$IDG$IDDG$IDDDG$IDDDDG";
		echo $list;
		?>
		</td>
    </tr>
    
       <tr>
        <td>Nama Lengkap</td><td>:</td>
        <td colspan="7"><input type ="text" name = "txtNamaL" value="<?php echo $row['namaGuru'];?>"/></td>
    </tr> 
    <tr>
        <td>Kelas/Room</td><td>:</td>
       <td colspan="2">
		<select name = "txtKelas">
            <option value="" selected>-Kelas-</option>
            <?php
            
            		$result1 =mysql_query("SELECT kelasID,kelass from kelas
             group by kelass ORDER BY kelasID");
            		while($row1=mysql_fetch_array($result1))
            		{	
            			$kelasID=$row1['kelasID'];
            			$kelass=$row1['kelass'];
            			
            			$ealist='<option value="'.$kelass.'">'.$kelass.'</option>' ;
                          echo $ealist;
            		
            		} 
            	 
            ?>
    </select>
			<select name = "txtRoom">
            <option value="" selected>-room-</option>
            <?php
            
            		$result2 =mysql_query("SELECT kelasID,room from kelas
             group by room ORDER BY kelasID");
            		while($row2=mysql_fetch_array($result2))
            		{	
            			$kelasID=$row2['kelasID'];
            			$room=$row2['room'];
            			
            			$ialist='<option value="'.$room.'">'.$room.'</option>' ;
                          echo $ialist;
            		
            		} 
            	 
            ?>
            </select>
		</td>
		
		
		<td><?php echo $row['kelass'].$row['room'];?></td>
    </tr>
    
    <tr>
        <td>Username</td><td>:</td>
        <td colspan="7"><input type ="text" name = "txtUsername" value="<?php echo $row['username'];?>"/></td>
       
    </tr>
    <tr>
        <td>Tempat, Tanggal Lahir</td><td>:</td>
        <td colspan="7"><input type ="text" name = "txtTTL" value="<?php echo $row['ttlG'];?>"/></td>
    </tr>
    <tr>
        <td>Agama</td><td>:</td>
        <td colspan="7">
        <select name = "txtAgama"/>
				<option value="" selected>----------</option>
				<option value="Islam">Islam</option>
				<option value="Budha">Budha</option>
				<option value="Kristen">Kristen</option>
				<option value="Katolik">Katolik</option>
				<option value="Hindu">Hindu</option>
        	</select><?php echo $row['agamaG'];?>
        </td>
    </tr>
   <tr>
        <td>Status Perkawinan</td><td>:</td>
       <td colspan="7">
		<select name = "txtStatusK"/>
				<option value="" selected>----------</option>
				<option value="Single">Single</option>
				<option value="Menikah">Menikah</option>
				<option value="Cerai">Cerai</option>
		</select><?php echo $row['statusP'];?>
		</td>

    </tr>
        <tr>
        <td>Jlh Anak</td><td>:</td>
        <td colspan="7"><input type ="text" name = "txtJlhAnk" value="<?php echo $row['jlhAG'];?>"/></td>
    </tr>
    <tr>
        <td>Tinggi Badan</td><td>:</td>
        <td colspan="7"><input type ="text" name = "txtTinggiBadan" value="<?php echo $row['tinggiG'];?>"/></td>
    </tr>
 <tr>
        <td>Berat Badan</td><td>:</td>
        <td colspan="7"><input type ="text" name = "txtBeratBadan" value="<?php echo $row['beratG'];?>"/></td>
    </tr>    
   <tr>
        <td>Alamat</td><td>:</td><td>Jalan </td>
        <td colspan="4"><input type ="text" name = "txtAlmt" value="<?php echo $row['alamatG'];?>"/></td>
    </tr>
       <tr>
    <td></td>
    <td></td>
    <td>Kelurahan</td>
    <td colspan="4"><input type ="text" name = "txtKel" value="<?php echo $row['kelurahanG'];?>"/></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td>Kecamatan</td>
    <td colspan="4"><input type ="text" name = "txtKec" value="<?php echo $row['kecamatanG'];?>"/></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td>Kab/Kota</td>
    <td colspan="4"><input type ="text" name = "txtKabKo" value="<?php echo $row['kabkotG'];?>"/></td>
    </tr>
      <tr>
        <td>No HP</td><td>:</td>
        <td colspan="7"><input type ="text" name = "txtNoHP" value="<?php echo $row['hpG'];?>"/></td>
    </tr>
      <tr>
        <td>No KTP</td><td>:</td>
        <td colspan="7"><input type ="text" name = "txtNoKTP" value="<?php echo $row['noktpG'];?>"/></td>
    </tr>
     <tr>
        <td>Email</td><td>:</td>
        <td colspan="7"><input type ="text" name = "txtEmail" value="<?php echo $row['emailG'];?>"/></td>
    </tr>
    
    <tr>
    <td colspan="8">
    <b>DATA LAIN LAIN</b>
    </td>
    </tr>
    <tr>
    <td>Pendidikan Terakhir</td>
    <td>:</td>
    <td colspan="8"><input type ="text" name = "txtPendidikanT" value="<?php echo $row['pendidikanG'];?>"/></td>
    </tr>
        <tr>
    <td>Bidang Studi</td>
    <td>:</td>
    <td colspan="8"><input type ="text" name = "txtStudi" value="<?php echo $row['bidangstudiG'];?>"/></td>
    </tr>

    <tr>
    <td>Bertugas di sekolah sejak</td>
    <td>:</td>
    <td colspan="8"><input type ="text" name = "txtBertugas" value="<?php echo $row['tglbertugasG'];?>"/></td>
    </tr>
	    <tr>
    <td>Jabatan</td>
    <td>:</td>
    <td colspan="8"><input type ="text" name = "txtJabatan" value="<?php echo $row['jabatanG'];?>"/></td>
        <tr>
    <td>Penguasaan Bahasa Asing</td>
    <td>:</td>
    <td colspan="8"><input type ="text" name = "txtBAsing" value="<?php echo $row['bAsing'];?>"/></td>
    </tr>
    </tr>
	    <tr>
    <td>JP</td>
    <td>:</td>
    <td colspan="8"><input type ="text" name = "txtJP" value="<?php echo $row['jpG'];?>"/></td>
    </tr>
	    <tr>
    <td>GP</td>
    <td></td>
    <td colspan="8"><input type ="text" name = "txtGP" value="<?php echo $row['gpG'];?>"/></td>
    </tr>

    <tr>
    <td>UM</td>
    <td>:</td>
    <td colspan="8"><input type ="text" name = "txtUM" value="<?php echo $row['umG'];?>"/></td>
    </tr>
    <tr>
    <td>TJ</td>
    <td>:</td>
    <td colspan="8"><input type ="text" name = "txtTJ" value="<?php echo $row['tjG'];?>"/></td>
    </tr>
    <tr>
    <td>TL</td>
    <td>:</td>
    <td colspan="8"><input type ="text" name = "txtTL" value="<?php echo $row['tlG'];?>"/></td>
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
        <td colspan="8"><input type ="submit" value="Simpan" /></td>
    </tr>
   </table> </form><br><br><br><br>
   <?php }else{?>
   <?php } ?>

    <?php
	include ("footer.php")
	?>