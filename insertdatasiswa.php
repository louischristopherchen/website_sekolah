<?php 
include("controller/doConnect.php");
  session_start();
  ?>
        
        <?php
		include ("header.php")
		?>
        
         <?php if(!isset($_SESSION['userRole'])){ ?>
          <?php }else if(($_SESSION['userRole'] == "dentry")||($_SESSION['userRole'] == "admin")){?>
          
<br><br>
<form action="controller/doInsertSiswa.php" method="post" enctype="multipart/form-data">
    <table  align="center">
    <tr>
        <td colspan="7"><h2>REGISTER SISWA</h2></td>
    	
	</tr>
	
    <tr>
        <td>NO ID SISWA</td><td> </td>
        <td>
		<select name = "txtID"/>
				<option value="" selected>-THN MASUK-</option>
				<option value="16">2016</option>
				<option value="17">2017</option>
				<option value="18">2018</option>
				<option value="19">2019</option>
				<option value="20">2020</option>
				<option value="21">2021</option>
				<option value="22">2022</option>
				<option value="23">2023</option>
				<option value="24">2024</option>
				<option value="25">2025</option>
		</select>
		</td>
		<td>
		<select name = "txtIDD"/>
				<option value="" selected>-TINGKATAN-</option>
				<option value="01">PG</option>
				<option value="02">TK-A</option>
				<option value="03">TK-B</option>
				<option value="04">P1</option>
				<option value="05">P2</option>
				<option value="06">P3</option>
				<option value="07">P4</option>
				<option value="08">P5</option>
				<option value="09">P6</option>
				<option value="10">J1</option>
				<option value="11">J2</option>
				<option value="12">J3</option>
				<option value="13">S1</option>
				<option value="14">S2</option>
				<option value="15">S3</option>
		</select>
		</td>
		<td colspan="2">
			
	
		<?php
		$result = mysql_query("select noIDDD From siswa ORDER BY noIDDD DESC limit 1"); 
		$row=mysql_fetch_array($result);
		
			$noiddd=$row['noIDDD'];
			$list=$noiddd+1;
			echo str_pad($list,6,"0",STR_PAD_LEFT);
		
		?>
		<input type ="hidden" name = "txtIDDD" value="<?php echo str_pad($list,6,"0",STR_PAD_LEFT);?>"/>
		</td>	
    </tr>
    
       <tr>
        <td>Nama Lengkap</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtNamaL" value="<?php if(isset($_COOKIE['cookieNamaL'])){echo $_COOKIE['cookieNamaL'];}?>"/></td>
    </tr> 
    <tr>
        <td>Kelas</td><td> </td>
       <td>
		<select name = "kelass"/>
<option value="" selected>-Kelas-</option>
<?php

		$result =mysql_query("SELECT kelasID,kelass from kelas
 group by kelass ORDER BY kelasID");
		while($row=mysql_fetch_array($result))
		{	
			$kelasID=$row['kelasID'];
			$kelass=$row['kelass'];
			
			$ealist='<option value="'.$kelass.'">'.$kelass.'</option>' ;
              echo $ealist;
		
		} 
	 
?>
		</td>
		<td>
		    <select name = "room"/>
<option value="" selected>-room-</option>
<?php

		$result =mysql_query("SELECT kelasID,room from kelas
 group by room ORDER BY kelasID");
		while($row=mysql_fetch_array($result))
		{	
			$kelasID=$row['kelasID'];
			$room=$row['room'];
			
			$ialist='<option value="'.$room.'">'.$room.'</option>' ;
              echo $ialist;
		
		} 
	 
?>
		</td>

    </tr>
    <tr>
        <td>Nama Panggilan</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtNamaP" value="<?php if(isset($_COOKIE['cookieNamaP'])){echo $_COOKIE['cookieNamaP'];}?>"/></td>
        </td>
    </tr>
    <tr>
        <td>Tempat, Tanggal Lahir</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtTTL" value="<?php if(isset($_COOKIE['cookieTTL'])){echo $_COOKIE['cookieTTL'];}?>"/></td>
    </tr>
    <tr>
        <td>Anak ke</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtAnakke" value="<?php if(isset($_COOKIE['cookieAnakke'])){echo $_COOKIE['cookieAnakke'];}?>"/></td>
    </tr>
    <tr>
        <td>Jumlah Saudara</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtJlhSdra" value="<?php if(isset($_COOKIE['cookieJlhSdra'])){echo $_COOKIE['cookieJlhSdra'];}?>"/></td>
    </tr>
    <tr>
        <td>Agama</td><td> </td>
        
        <td colspan="5">        <select name = "txtAgama"/>
				<option value="" selected>----------</option>
				<option value="Islam">Islam</option>
				<option value="Budha">Budha</option>
				<option value="Kristen">Kristen</option>
				<option value="Katolik">Katolik</option>
				<option value="Hindu">Hindu</option>
        	</select></td>
    </tr>
    <tr>
        <td>Golongan Darah</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtGolDrh" value="<?php if(isset($_COOKIE['cookieGolDrh'])){echo $_COOKIE['cookieGolDrh'];}?>"/></td>
    </tr>
    <tr>
        <td>Tinggi Badan</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtTinggiBadan" value="<?php if(isset($_COOKIE['cookieTinggiBadan'])){echo $_COOKIE['cookieTinggiBadan'];}?>"/></td>
    </tr>
    
   <tr>
        <td>Alamat</td><td></td><td colspan="1">Jalan </td>
        <td colspan="4"><input type ="text" name = "txtAlmt" value="<?php if(isset($_COOKIE['cookieAlmtJln'])){echo $_COOKIE['cookieAlmtJln'];}?>"/></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td>Kelurahan</td>
    <td colspan="4"><input type ="text" name = "txtKel" value="<?php if(isset($_COOKIE['cookieKel'])){echo $_COOKIE['cookieKel'];}?>"/></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td>Kecamatan</td>
    <td colspan="4"><input type ="text" name = "txtKec" value="<?php if(isset($_COOKIE['cookieKec'])){echo $_COOKIE['cookieKec'];}?>"/></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td>Kab/Kota</td>
    <td colspan="4"><input type ="text" name = "txtKabKo" value="<?php if(isset($_COOKIE['cookieKabko'])){echo $_COOKIE['cookieKabko'];}?>"/></td>
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
    <tr>
        <td colspan="7"><input type ="submit" value="Selanjutnya" /></td>
    </tr>
   </table> </form><br><br><br><br>
   <?php }else{?>
   <?php } ?>

    <?php
	include ("footer.php")
	?>