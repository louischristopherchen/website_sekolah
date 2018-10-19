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
          
<br><br>
<form action="controller/doInsertSiswa3.php" method="post" enctype="multipart/form-data">
    <table  align="center">
    <tr>
        <td colspan="7"><h2>DATA PENDUKUNG</h2></td>
    	
	</tr>
    <tr>
        <td colspan="7"><b>Data Perkembangan Pendidikan</b></td>
	</tr>
	
     <tr>
        <td>Sekolah Asal</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtSekolahA"/></td>
    </tr> 
    <tr>
        <td>Alamat Sekolah</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtAlamatS"/></td>
        </td>
    </tr>
    <tr>
        <td>Tgl & No.STTB</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtSTTB"/></td>
    </tr>
    <tr>
        <td>Dari Kelas</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtDrKls"/></td>
    </tr>
    <tr>
        <td>Alasan Pindah</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtAlsnP"/></td>
    </tr>
     <tr>
        <td colspan="7"><b>Data Kesehatan</b></td>
	</tr>
	<td colspan="7">Kontak yang dapat dihubungi dalam keadaan
    darurat (selain orang tua)</td>
	</tr>
     <tr>
        <td>Nama</td><td> </td>
        <td><input type ="text" name = "txtNamaE"/></td>
    
        <td>Hub</td><td> </td>
        <td><input type ="text" name = "txtHubE"/></td>
        </td>
    </tr>
    <tr>
        <td>HP/No Telp</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtHPE"/></td>
    </tr>
   <tr>
        <td>Nama</td><td> </td>
        <td><input type ="text" name = "txtNamaEE"/></td>
   
        <td>Hub</td><td> </td>
        <td><input type ="text" name = "txtHubEE"/></td>
        </td>
    </tr>
    <tr>
        <td>HP/No Telp</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtHPEE"/></td>
    </tr>
    
    <tr>
        <td>Masalah Kesehatan</td><td> </td>
    <td colspan="5"><textarea name= "txtMslhK"></textarea></td>
    </tr>
    <tr>
        <td colspan="7"><b>Data Lain - Lain</b></td>
	</tr>
	
     <tr>
        <td>Hobby anak</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtHobby"/></td>
    </tr> 
    <tr>
        <td>Prestasi anak</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtPrestasi"/></td>
        </td>
    </tr>
     <tr>
        <td></td><td> </td>
        <td colspan="5"><input type ="text" name = "txtPrestasii"/></td>
        </td>
    </tr>
    
    <tr>
        <td>Nama Penjemput</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtPenjemput"/></td>
    </tr> 
    <tr>
        <td>HP/No.Telp</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtTlpPenjemput"/></td>
        </td>
    </tr>
    <tr>
        <td colspan="7">Harapan Bapak/Ibu memasukkan anak anda ke Sekolah Tunas Bangsa</td><td> </td>
    </tr>
    <tr>
        <td>Harapan</td><td> </td>
    <td colspan="5"><textarea name= "txtHarapan"></textarea></td>
    </tr>
    <tr>
        <td colspan="7"><label><font color="red">
         <?php 
         if(isset($_REQUEST['errorMsg']))
         {
          echo $_REQUEST['errorMsg'];
         }
         ?></font></label></td>
    </tr>
    <tr><input type="hidden" name="siswaID" value="<?php echo $siswaID;?>"/>
        <td colspan="7"><input type ="submit" value="Simpan" /></td>
    </tr>
   </table> </form><br><br><br><br>
   <?php } ?>

    <?php
	include ("footer.php")
	?>
