<?php 
include("controller/doConnect.php");
  session_start();
  $siswaID=$_REQUEST['siswaID'];
  	$result = mysql_query("select * from orangtua where siswaID ='$siswaID' ");
	$row = mysql_fetch_array($result);
  ?>
        
        <?php
		include ("header.php")
		?>
        
         <?php if(!isset($_SESSION['userRole'])){ ?>
          <?php }else if(($_SESSION['userRole'] == "admin")){?>
          
<br><br>
<form action="controller/doEditSiswa2.php" method="post" enctype="multipart/form-data">
    <table  align="center">
    <tr>
        <td colspan="7"><h2>EDIT DATA ORANG TUA</h2></td>
    	
	</tr>
       <tr>
        <td>Nama Ayah</td><td>  </td>
        <td colspan="5"><input type ="text" name = "txtNamaA" value="<?php echo $row['ayah'];?>"/></td>
    </tr> 
    <tr>
        <td>Pendidikan Terakhir</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtPendidikanA" value="<?php echo $row['pendidikanA'];?>"/></td>
        </td>
    </tr>
    <tr>
        <td>Pekerjaan</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtPekerjaanA" value="<?php echo $row['pekerjaanA'];?>"/></td>
    </tr>
    <tr>
        <td>Nama Kantor/Usaha</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtKantorA" value="<?php echo $row['namausahaA'];?>"/></td>
    </tr>
    <tr>
        <td>HP/No. Telp</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtTelpA" value="<?php echo $row['telpA'];?>"/></td>
    </tr>
    <tr>
        <td>Nama Ibu</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtNamaI" value="<?php echo $row['ibu'];?>"/></td>
    </tr>
    <tr>
        <td>Pendidikan Terakhir</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtPendidikanI" value="<?php echo $row['pendidikanI'];?>"/></td>
    </tr>
    <tr>
        <td>Pekerjaan</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtPekerjaanI" value="<?php echo $row['pekerjaanI'];?>"/></td>
    </tr>
       <tr>
        <td>Nama Kantor/Usaha</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtKantorI" value="<?php echo $row['namausahaI'];?>"/></td>
    </tr>
       <tr>
        <td>HP/No. Telp</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtTelpI" value="<?php echo $row['telpI'];?>"/></td>
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
    <tr> <input type="hidden" name="siswaID" value="<?php echo $siswaID;?>"/>
        <td colspan="7"><input type ="submit" value="Selanjutnya" /></td>
    </tr>
   </table> </form><br><br><br><br>
   <?php } ?>

    <?php
	include ("footer.php")
	?>