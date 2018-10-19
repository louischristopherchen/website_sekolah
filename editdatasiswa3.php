<?php 
include("controller/doConnect.php");
  session_start();
    $siswaID=$_REQUEST['siswaID'];
	$result = mysql_query("select * from pendukungs where siswaID ='$siswaID' ");
	$row = mysql_fetch_array($result);
  ?>
        
        <?php
		include ("header.php")
		?>
        
         <?php if(!isset($_SESSION['userRole'])){ ?>
          <?php }else if(($_SESSION['userRole'] == "admin")){?>
          
<br><br>
<form action="controller/doEditSiswa3.php" method="post" enctype="multipart/form-data">
    <table  align="center">
    <tr>
        <td colspan="7"><h2>DATA PENDUKUNG</h2></td>
    	
	</tr>
    <tr>
        <td colspan="7"><b>Data Perkembangan Pendidikan</b></td>
	</tr>
	
     <tr>
        <td>Sekolah Asal</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtSekolahA" value="<?php echo $row['sklhA'];?>"/></td>
    </tr> 
    <tr>
        <td>Alamat Sekolah</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtAlamatS" value="<?php echo $row['jalanS'];?>"/></td>
        </td>
    </tr>
    <tr>
        <td>Tgl & No.STTB</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtSTTB" value="<?php echo $row['sttb'];?>"/></td>
    </tr>
    <tr>
        <td>Dari Kelas</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtDrKls" value="<?php echo $row['darikls'];?>"/></td>
    </tr>
    <tr>
        <td>Alasan Pindah</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtAlsnP" value="<?php echo $row['alasanpdh'];?>"/></td>
    </tr>
     <tr>
        <td colspan="7"><b>Data Kesehatan</b></td>
	</tr>
	<td colspan="7">Kontak yang dapat dihubungi dalam keadaan
    darurat (selain orang tua)</td>
	</tr>
     <tr>
        <td>Nama</td><td> </td>
        <td><input type ="text" name = "txtNamaE" value="<?php echo $row['namakes'];?>"/></td>
    
        <td>Hub</td><td> </td>
        <td><input type ="text" name = "txtHubE" value="<?php echo $row['hubkes'];?>"/></td>
        </td>
    </tr>
    <tr>
        <td>HP/No Telp</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtHPE" value="<?php echo $row['telpkes'];?>"/></td>
    </tr>
   <tr>
        <td>Nama</td><td> </td>
        <td><input type ="text" name = "txtNamaEE" value="<?php echo $row['namakess'];?>"/></td>
   
        <td>Hub</td><td> </td>
        <td><input type ="text" name = "txtHubEE"value="<?php echo $row['hubkess'];?>"/></td>
        </td>
    </tr>
    <tr>
        <td>HP/No Telp</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtHPEE" value="<?php echo $row['telpkess'];?>"/></td>
    </tr>
    
    <tr>
        <td>Masalah Kesehatan</td><td> </td>
    <td colspan="5"><textarea name= "txtMslhK"  cols="60"  rows="5"><?php echo nl2br($row['masalahkes']);?></textarea></td>
    </tr>
    <tr>
        <td colspan="7"><b>Data Lain - Lain</b></td>
	</tr>
	
     <tr>
        <td>Hobby anak</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtHobby" value="<?php echo $row['hobby'];?>"/></td>
    </tr> 
    <tr>
        <td>Prestasi anak</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtPrestasi" value="<?php echo $row['prestasi'];?>"/></td>
        </td>
    </tr>
     <tr>
        <td></td><td> </td>
        <td colspan="5"><input type ="text" name = "txtPrestasii" value="<?php echo $row['prestasii'];?>"/></td>
        </td>
    </tr>
    
    <tr>
        <td>Nama Penjemput</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtPenjemput" value="<?php echo $row['penjemput'];?>"/></td>
    </tr> 
    <tr>
        <td>HP/No.Telp</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtTlpPenjemput" value="<?php echo $row['telppenjemput'];?>"/></td>
        </td>
    </tr>
    <tr>
        <td colspan="7">Harapan Bapak/Ibu memasukkan anak anda ke Sekolah Tunas Bangsa</td><td> </td>
    </tr>
    <tr>
        <td>Harapan</td><td> </td>
    <td colspan="5"><textarea name= "txtHarapan"  cols="60"  rows="5"><?php echo nl2br($row['harapan']);?></textarea></td>
    </tr>
    <tr>
        <td colspan="7"><label>
         <?php 
         if(isset($_REQUEST['errorMsg']))
         {
          echo $_REQUEST['errorMsg'];
         }
         ?></label></td>
    </tr>
    <tr><input type="hidden" name="siswaID" value="<?php echo $siswaID;?>"/>
        <td colspan="7"><input type ="submit" value="Simpan" /></td>
    </tr>
   </table> </form><br><br><br><br>
   <?php } ?>

    <?php
	include ("footer.php")
	?>