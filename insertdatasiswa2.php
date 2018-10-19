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
<form action="controller/doInsertSiswa2.php" method="post" enctype="multipart/form-data">
    <table  align="center">
    <tr>
        <td colspan="7"><h2>DATA ORANG TUA</h2></td>
    	
	</tr>
       <tr>
        <td>Nama Ayah</td><td>  </td>
        <td colspan="5"><input type ="text" name = "txtNamaA" value="<?php if(isset($_COOKIE['cookieNamaA'])){echo $_COOKIE['cookieNamaA'];}?>"/></td>
    </tr> 
    <tr>
        <td>Pendidikan Terakhir</td>
        <td> </td>
        <td colspan="5">
            <select name = "txtPendidikanA"/>
				<option value="" selected>------------------</option>
				<option value="SD">SD</option>
				<option value="SMP">SMP</option>
				<option value="SMA">SMA</option>
				<option value="DIPLOMA">DIPLOMA</option>
				<option value="SARJANA">SARJANA</option>
				<option value="Dan Lain Lain">Dan Lain Lain</option>
        	</select>
            </td>
        
    </tr>
    <tr>
        <td>Pekerjaan</td><td> </td>
        <td colspan="5">
        <select name = "txtPekerjaanA"/>
				<option value="" selected>------------------</option>
				<option value="Swasta">Swasta</option>
				<option value="PNS">PNS</option>
				<option value="Wirausaha">Wirausaha</option>
				<option value="Dan Lain Lain">Dan Lain Lain</option>
        	</select>
        </td>
    </tr>
    <tr>
        <td>Nama Kantor/Usaha</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtKantorA" value="<?php if(isset($_COOKIE['cookieKantorA'])){echo $_COOKIE['cookieKantorA'];}?>"/></td>
    </tr>
    <tr>
        <td>HP/No. Telp</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtTelpA" value="<?php if(isset($_COOKIE['cookieTelpA'])){echo $_COOKIE['cookieTelpA'];}?>"/></td>
    </tr>
    <tr>
        <td>Nama Ibu</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtNamaI" value="<?php if(isset($_COOKIE['cookieNamaI'])){echo $_COOKIE['cookieNamaI'];}?>"/></td>
    </tr>
    <tr>
        <td>Pendidikan Terakhir</td><td> </td>
        <td colspan="5"> <select name = "txtPendidikanI"/>
				<option value="" selected>------------------</option>
				<option value="SD">SD</option>
				<option value="SMP">SMP</option>
				<option value="SMA">SMA</option>
				<option value="DIPLOMA">DIPLOMA</option>
				<option value="SARJANA">SARJANA</option>
				<option value="Dan Lain Lain">Dan Lain Lain</option>
        	</select></td>
    </tr>
    <tr>
        <td>Pekerjaan</td><td> </td>
        <td colspan="5">  <select name = "txtPekerjaanA"/>
				<option value="" selected>------------------</option>
				<option value="Swasta">Swasta</option>
				<option value="PNS">PNS</option>
				<option value="Wirausaha">Wirausaha</option>
				<option value="Dan Lain Lain">Dan Lain Lain</option>
        	</select>
        	</td>
    </tr>
       <tr>
        <td>Nama Kantor/Usaha</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtKantorI" value="<?php if(isset($_COOKIE['cookieKantorI'])){echo $_COOKIE['cookieKantorI'];}?>"/></td>
    </tr>
       <tr>
        <td>HP/No. Telp</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtTelpI" value="<?php if(isset($_COOKIE['cookieTelpI'])){echo $_COOKIE['cookieTelpI'];}?>"/></td>
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
    <tr> <input type="hidden" name="siswaID" value="<?php echo $siswaID;?>"/>
        <td colspan="7"><input type ="submit" value="Selanjutnya" /></td>
    </tr>
   </table> </form><br><br><br><br>
   <?php } ?>

    <?php
	include ("footer.php")
	?>