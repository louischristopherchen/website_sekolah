<?php 
include("controller/doConnect.php");
  session_start();
  ?>

        
        <?php
		include ("header.php")
		?>
        
         <?php if(!isset($_SESSION['userRole'])){ ?>
          <?php }else if(($_SESSION['userRole'] == "dentry")||($_SESSION['userRole'] == "admin")){?>
             
    <div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3" >
   <div class="well">
 
 

	
	<table width="80%" align="center">
		
    <table  align="center">
	<tr>
        <td  align="center" colspan="10"><h2>Kelas</h2></td>
    	</tr>
	
    </table>
    <table  align="center"BORDER=0>
	
<form action="controller/doSelectK.php" method="post" enctype="multipart/form-data">
	 <tr><td>
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
<td><input type ="submit" value="GO" /></td>
</tr></form><tr><td colspan="3"><label>
                     	<font color="red">
                             <?php 
                            if(isset($_REQUEST['errorMsg']))
                            {
                                echo $_REQUEST['errorMsg'];
                            }
                            ?></font>
                            </label></td></tr>
</table>
   </div>
    </div>



  <div class="col-lg-9 col-md-9 col-sm-9" >
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <div class="well">
  <?php
	
	if(!isset($_REQUEST['kelass'])&&!isset($_REQUEST['room']))
	{
	$list.=' <table  align="center">
	<tr>
	<td><h1>Silahkan Pilih Kelas Terlebih Dahulu</h1></td>
	</tr></table>';
		 		 
	}
 	
 	else if(isset($_REQUEST['kelass'])&&isset($_REQUEST['room']))
 	{
 	      
          
        
 	    $list.='
 	    <table BORDER=1>';
 	    if(isset($_REQUEST['errMsg']))
        {
 	    $list.='  <label><font color="red">
 	    '.$_REQUEST['errMsg'].'
        </font>
        </label>';
        }
 		$kelass=$_REQUEST['kelass'];
 		$room=$_REQUEST['room'];
 		$index=0;
 		$index++;
		$result=mysql_query("select k.kelasID, k.kelass,k.room,s.siswaID,s.namaLengkap
		 from kelas as k, siswa as s
		 where 
		 k.kelasID=s.kelasID
		 AND k.kelass='$kelass' 
		 and k.room='$room'order by s.namaLengkap asc");
		while($row=mysql_fetch_array($result))
		{	
		    
			$kelasID=$row['kelasID'];
			$siswaID=$row['siswaID'];
			$kelass=$row['kelass'];
			$room=$row['room'];
			$namaLengkap=$row['namaLengkap'];
            $list.='
            <tr>
            <td>'.$index.'</td>
			<td>'.$kelass.$room.'</td>
			<td>'.$namaLengkap.'</td>
		
			
			<td> <form action="controller/doPindahK.php" method="post" enctype="multipart/form-data"> 
<select name = "pkelass"/>
<option value="" selected>-Kelas-</option>
<option value=""></option>
<option value="PG">PG</option>
<option value="KA">KA</option>
<option value="KB">KB</option>
<option value="P1">P1</option>
<option value="P2">P2</option>
<option value="P3">P3</option>
<option value="P4">P4</option>
<option value="P5">P5</option>
<option value="P6">P6</option>
<option value="J1">J1</option>
<option value="J2">J2</option>
<option value="J3">J3</option>
<option value="S1">S1</option>
<option value="S2">S2</option>
<option value="S3">S3</option>
			</td>
			<td>
			<select name = "proom"/>
<option value="" selected>-room-</option>
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">E</option>
<option value="F">F</option>
			</td>
<td>
<input type="hidden" name="siswaID" value="'.$siswaID.'"/>
<input type="hidden" name="kelass" value="'.$kelass.'"/>
<input type="hidden" name="room" value="'.$room.'"/>
<input type ="submit" value="Pindah" /></td>
</tr></form>' ;
			
			$index++;
			
		}
		
		$list.='</table><br>'; //while 
		
 	}
 	
 	
	?>
    <?php
	echo $list;
	echo '<br/>';
	?> 
	

	</div></div>
	

      </div>
      </div>
      </div>

   <?php }else{?>
   <?php } ?>

    <?php
	include ("footer.php")
	?>