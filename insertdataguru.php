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
<form action="controller/doInsertGuru.php" method="post" enctype="multipart/form-data">
    <table  align="center">
    
    
    <tr>
        <td colspan="8"><h2>REGISTER PEGAWAI</h2></td>
    	
	</tr>
	<tr>
    <td colspan="8">
    <b>DATA DIRI</b>
    </td>
    </tr>
    <tr>
        <td>NO ID PEGAWAI</td><td> </td>
        <td >TB</td>
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
				<option value="" selected>-BLN MASUK-</option>
				<option value="01">Jan</option>
				<option value="02">Feb</option>
				<option value="03">Mar</option>
				<option value="04">Apr</option>
				<option value="05">Mei</option>
				<option value="06">Jun</option>
				<option value="07">Jul</option>
				<option value="08">Aug</option>
				<option value="09">Sep</option>
				<option value="10">Okt</option>
				<option value="11">Nov</option>
				<option value="12">Des</option>
       </select>
		</td>
		<td>
			<input type ="text" name = "txtIDDD" value="<?php if(isset($_COOKIE['cookieIDDD'])){echo $_COOKIE['cookieIDDD'];}?>"  style="width:20px;"/>
		</td>
        <td colspan="2">
		<?php
		$result = mysql_query("select IDDDDG From pegawai ORDER BY IDDDDG DESC limit 1"); 
		$row=mysql_fetch_array($result);
			$IDDDDG=$row['IDDDDG'];
			$list=$IDDDDG+1;
			echo str_pad($list,4,"0",STR_PAD_LEFT);
		?>
		<input type ="hidden" name = "txtIDDDD" value="<?php echo str_pad($list,4,"0",STR_PAD_LEFT)?>"   style="width:40px;"/>
		</td>	
    </tr>
    
       <tr>
        <td>Nama Lengkap</td><td> </td>
        <td colspan="7"><input type ="text" name = "txtNamaL" value="<?php if(isset($_COOKIE['cookieNamaL'])){echo $_COOKIE['cookieNamaL'];}?>"/></td>
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
        <td>Username</td><td> </td>
        <td colspan="7"><input type ="text" name = "txtUsername" value="<?php if(isset($_COOKIE['cookieUsername'])){echo $_COOKIE['cookieUsername'];}?>"/></td>
       
    </tr>
    <tr>
        <td>Tempat, Tanggal Lahir</td><td> </td>
        <td colspan="7"><input type ="text" name = "txtTTL" value="<?php if(isset($_COOKIE['cookieTTL'])){echo $_COOKIE['cookieTTL'];}?>"/></td>
    </tr>
    <tr>
        <td>Agama</td><td> </td>
        <td colspan="7">
        <select name = "txtAgama"/>
				<option value="" selected>----------</option>
				<option value="Islam">Islam</option>
				<option value="Budha">Budha</option>
				<option value="Kristen">Kristen</option>
				<option value="Katolik">Katolik</option>
				<option value="Hindu">Hindu</option>
        	</select>
        </td>
    </tr>
   <tr>
        <td>Status Perkawinan</td><td> </td>
       <td colspan="7">
		<select name = "txtStatusK"/>
				<option value="" selected>----------</option>
				<option value="Single">Single</option>
				<option value="Menikah">Menikah</option>
				<option value="Cerai">Cerai</option>
		</select>
		</td>

    </tr>
        <tr>
        <td>Jlh Anak</td><td> </td>
        <td colspan="7"><input type ="text" name = "txtJlhAnk" value="<?php if(isset($_COOKIE['cookieJlhAnk'])){echo $_COOKIE['cookieJlhAnk'];}?>"/></td>
    </tr>
    <tr>
        <td>Tinggi Badan</td><td> </td>
        <td colspan="7"><input type ="text" name = "txtTinggiBadan" value="<?php if(isset($_COOKIE['cookieTinggiBadan'])){echo $_COOKIE['cookieTinggiBadan'];}?>"/></td>
    </tr>
 <tr>
        <td>Berat Badan</td><td> </td>
        <td colspan="7"><input type ="text" name = "txtBeratBadan" value="<?php if(isset($_COOKIE['cookieBeratBadan'])){echo $_COOKIE['cookieBeratBadan'];}?>"/></td>
    </tr>    
   <tr>
        <td>Alamat</td><td></td><td>Jalan </td>
        <td colspan="4"><input type ="text" name = "txtAlmt" value="<?php if(isset($_COOKIE['cookieAlmt'])){echo $_COOKIE['cookieAlmt'];}?>"/></td>
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
        <td>No HP</td><td></td>
        <td colspan="7"><input type ="text" name = "txtNoHP" value="<?php if(isset($_COOKIE['cookieNoHP'])){echo $_COOKIE['cookieNoHP'];}?>"/></td>
    </tr>
      <tr>
        <td>No KTP</td><td></td>
        <td colspan="7"><input type ="text" name = "txtNoKTP" value="<?php if(isset($_COOKIE['cookieNoKTP'])){echo $_COOKIE['cookieNoKTP'];}?>"/></td>
    </tr>
     <tr>
        <td>Email</td><td></td>
        <td colspan="7"><input type ="text" name = "txtEmail" value="<?php if(isset($_COOKIE['cookieEmail'])){echo $_COOKIE['cookieEmail'];}?>"/></td>
    </tr>
    
    <tr>
    <td colspan="8">
    <b>DATA LAIN LAIN</b>
    </td>
    </tr>
    <tr>
    <td>Pendidikan Terakhir</td>
    <td></td>
    <td colspan="8"><input type ="text" name = "txtPendidikanT" value="<?php if(isset($_COOKIE['cookiePendidikanT'])){echo $_COOKIE['cookiePendidikanT'];}?>"/></td>
    </tr>
        <tr>
    <td>Bidang Studi</td>
    <td></td>
    <td colspan="8"><input type ="text" name = "txtStudi" value="<?php if(isset($_COOKIE['cookieStudi'])){echo $_COOKIE['cookieStudi'];}?>"/></td>
    </tr>

    <tr>
    <td>Bertugas di sekolah sejak</td>
    <td></td>
    <td colspan="8"><input type ="text" name = "txtBertugas" value="<?php if(isset($_COOKIE['cookieBertugas'])){echo $_COOKIE['cookieBertugas'];}?>"/></td>
    </tr>
	    <tr>
    <td>Jabatan</td>
    <td></td>
    <td colspan="8"><input type ="text" name = "txtJabatan" value="<?php if(isset($_COOKIE['cookieJabatan'])){echo $_COOKIE['cookieJabatan'];}?>"/></td>
        <tr>
    <td>Penguasaan Bahasa Asing</td>
    <td></td>
    <td colspan="8"><input type ="text" name = "txtBAsing" value="<?php if(isset($_COOKIE['cookieBAsing'])){echo $_COOKIE['cookieBAsing'];}?>"/></td>
    </tr>
    </tr>
	    <tr>
    <td>JP</td>
    <td></td>
    <td colspan="8"><input type ="text" name = "txtJP" value="<?php if(isset($_COOKIE['cookieJP'])){echo $_COOKIE['cookieJP'];}?>"/></td>
    </tr>
	    <tr>
    <td>GP</td>
    <td></td>
    <td colspan="8"><input type ="text" name = "txtGP" value="<?php if(isset($_COOKIE['cookieGP'])){echo $_COOKIE['cookieGP'];}?>"/></td>
    </tr>

    <tr>
    <td>UM</td>
    <td></td>
    <td colspan="8"><input type ="text" name = "txtUM" value="<?php if(isset($_COOKIE['cookieUM'])){echo $_COOKIE['cookieUM'];}?>"/></td>
    </tr>
    <tr>
    <td>TJ</td>
    <td></td>
    <td colspan="8"><input type ="text" name = "txtTJ" value="<?php if(isset($_COOKIE['cookieTJ'])){echo $_COOKIE['cookieTJ'];}?>"/></td>
    </tr>
    <tr>
    <td>TL</td>
    <td></td>
    <td colspan="8"><input type ="text" name = "txtTL" value="<?php if(isset($_COOKIE['cookieTL'])){echo $_COOKIE['cookieTL'];}?>"/></td>
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
        <td colspan="8"><input type ="submit" value="Simpan" /></td>
    </tr>
   </table> </form><br><br><br><br>
   <?php }else{?>
   <?php } ?>

    <?php
	include ("footer.php")
	?>