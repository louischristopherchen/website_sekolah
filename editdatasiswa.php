<?php 
include("controller/doConnect.php");
  session_start();
  $siswaID=$_REQUEST['siswaID'];
  	$result = mysql_query("select s.siswaID, s.kelasID, s.noID, s.noIDD, s.noIDDD, s.namaLengkap, s.password, s.namaPanggilan, s.ttl, s.anakke, s.jlhsaudara, s.agama, s.goldarah, s.tinggibadan, s.jalan, s.kelurahan, s.kecamatan, s.kabkot, k.kelass,k.room from siswa as s, kelas as k where k.kelasID=s.kelasID AND siswaID ='$siswaID' ");
	$row = mysql_fetch_array($result);
  ?>
        
        <?php
		include ("header.php")
		?>
        
         <?php if(!isset($_SESSION['userRole'])){ ?>
          <?php }else if(($_SESSION['userRole'] == "admin")){?>
          
<br><br>
<form action="controller/doEditSiswa.php" method="post" enctype="multipart/form-data">
    <table  align="center">
    <tr>
        <td colspan="7"><h2>EDIT DATA SISWA</h2></td>
    	
	</tr>
	
    <tr>
        <td>NO ID SISWA</td><td> </td>
		<td colspan="4">
		<?php
		
			
			$noid=$row['noID'];
			$noidd=$row['noIDD'];
			$noiddd=$row['noIDDD'];
			$list="$noid$noidd$noiddd";
			echo $list;
		
		?>
		</td>	
    </tr>
    
       <tr>
        <td>Nama Lengkap</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtNamaL" value="<?php echo $row['namaLengkap'];?>"/></td>
    </tr> 
    <tr>
        <td>Password</td><td></td>
        <td colspan="5"><a href = "controller/doResetPassword.php?&siswaID=<?php echo $siswaID; ?>" onclick="return confirm('Reset Password?')"/>RESET PASSWORD</a></td>
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
        <td>Nama Panggilan</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtNamaP" value="<?php echo $row['namaPanggilan'];?>"/></td>
        </td>
    </tr>
    <tr>
        <td>Tempat, Tanggal Lahir</td><td> </td>
        <td colspan="5"><input type ="text" style="width: 220px;" name = "txtTTL" value="<?php echo $row['ttl'];?>"/></td>
    </tr>
    <tr>
        <td>Anak ke</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtAnakke" value="<?php echo $row['anakke'];?>"/></td>
    </tr>
    <tr>
        <td>Jumlah Saudara</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtJlhSdra" value="<?php echo $row['jlhsaudara'];?>"/></td>
    </tr>
    <tr>
        <td>Agama</td><td> </td>
        <td colspan="5">        <select name = "txtAgama"/>
				<option value="<?php echo $row['agama'];?>" selected><?php echo $row['agama'];?></option>
				<option value="Islam">Islam</option>
				<option value="Budha">Budha</option>
				<option value="Kristen">Kristen</option>
				<option value="Katolik">Katolik</option>
				<option value="Hindu">Hindu</option>
        	</select>
 </td>
    </tr>
    <tr>
        <td>Golongan Darah</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtGolDrh" value="<?php echo $row['goldarah'];?>"/></td>
    </tr>
    <tr>
        <td>Tinggi Badan</td><td> </td>
        <td colspan="5"><input type ="text" name = "txtTinggiBadan" value="<?php echo $row['tinggibadan'];?>"/></td>
    </tr>
    
   <tr>
        <td>Alamat</td><td></td><td colspan="1">Jalan </td>
        <td colspan="4"><input type ="text" name = "txtAlmt" value="<?php echo $row['jalan'];?>"/></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td>Kelurahan</td>
    <td colspan="4"><input type ="text" name = "txtKel" value="<?php echo $row['kelurahan'];?>"/></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td>Kecamatan</td>
    <td colspan="4"><input type ="text" name = "txtKec" value="<?php echo $row['kecamatan'];?>"/></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td>Kab/Kota</td>
    <td colspan="4"><input type ="text" name = "txtKabKo" value="<?php echo $row['kabkot'];?>"/></td>
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
        <td colspan="7"><input type ="submit" value="Selanjutnya" /></td>
    </tr>
   </table> </form><br><br><br><br>
   <?php }else{?>
   <?php } ?>

    <?php
	include ("footer.php")
	?>