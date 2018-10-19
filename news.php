<?php 
include("controller/doConnect.php");
  session_start();
  if(isset($_REQUEST['page']))
	{
		$page=$_REQUEST['page'];
	}	
	else
	{
		$page=1;
	}
	$start=($page-1)*20;
	$list="";
	$index=0;
	if(isset($_REQUEST['txtSearch']))
	{
		$search=$_REQUEST['txtSearch'];
	}
	else
	{
		$search="";
	}
  ?>
        
        <?php
		include ("header.php")
		?>
		
<?php if(!isset($_SESSION['userRole'])){ ?>
  <?php
    
	  if(!isset($_REQUEST['txtSearch'])||$search=="")
	{
		
		$list.='<table width="80%" align="center">';
	

		$list.='
    <table  align="center">
	<tr>
        <td  align="center" colspan="10"><h2>News</h2></td>
    	</tr>
	
    </table>
    <table  align="center"BORDER=1>
	<tr>
	<td align="center"><b>DATE</b></td>
	<td align="center"><b>TITLE</b></td>

	</tr>
	';

		$count=mysql_query("select * from news");
		$pages = ceil(mysql_num_rows($count)/20);
		$result =mysql_query("select * from news order by dateN DESC limit $start,20");
		while($row=mysql_fetch_array($result))
		{	
			$newsID=$row['newsID'];
			$noN=$row['noN'];	
			$titleN=$row['titleN'];
			$imgN=$row['imgN'];
			$dateN=$row['dateN'];
		
			$list.='<tr>
			<td>'.$dateN.'</td>
			<td><a href = "newsd.php?newsID='.$newsID.'"/>'.$titleN.'</a></td>
			' ;
			
			$index++;
		}$list.='</table>'; //while 
	}//if 
	?>
    <?php
	echo $list;
	echo '<br/><br/><div class="pages">';
							for($i=1;$i<=$pages;$i++)
							{
							
								echo '<div  class="page"><a href = "views.php?page='.$i.'">'.$i.'</a></div>';
							
							
						}
						echo '</div><br/><br/>';
	?>  
  <?php }else if(($_SESSION['userRole'] == "dentry")||($_SESSION['userRole'] == "admin")){?>
  
  <?php
    
	  if(!isset($_REQUEST['txtSearch'])||$search=="")
	{
		
		$list.='<table width="80%" align="center">';
	

		$list.='
    <table  align="center">
	<tr>
        <td  align="center" colspan="10"><h2>News</h2></td>
    	</tr>
	
    </table>
    <table  align="center"BORDER=1>
	<tr>
	<td align="center"><b>Date</b></td>
	<td align="center"><b>Title</b></td>
	<td align="center"><b>Edit</b></td>
	</tr>
	';

		$count=mysql_query("select * from news");
		$pages = ceil(mysql_num_rows($count)/20);
		$result =mysql_query("select * from news order by dateN DESC limit $start,20");
		while($row=mysql_fetch_array($result))
		{	
			$newsID=$row['newsID'];
			$noN=$row['noN'];	
			$titleN=$row['titleN'];
			$imgN=$row['imgN'];
			$dateN=$row['dateN'];
		
			$list.='<tr>
			<td>'.$dateN.'</td>
			<td><a href = "newsd.php?newsID='.$newsID.'"/>'.$titleN.'</a></td>
			<td><a href = "newse.php?newsID='.$newsID.'"/>Edit</a></td>
			<td><a href = "newse.php?newsID='.$newsID.'"/>Delete</a></td>
			' ;
			
			$index++;
		}$list.='</table>'; //while 
	}//if 
	?>
    <?php
	echo $list;
	echo '<br/><br/><div class="pages">';
							for($i=1;$i<=$pages;$i++)
							{
							
								echo '<div  class="page"><a href = "views.php?page='.$i.'">'.$i.'</a></div>';
							
							
						}
						echo '</div><br/><br/>';
	?>  
  <form action="controller/doInsertNews.php" method="post" enctype="multipart/form-data">
    <table  align="center">
    
    
    	<tr>
        <td colspan="8"><h2>Insert News</h2></td>
    	
	</tr>
	<tr>
   	 	<td colspan="8"><?php date_default_timezone_set("Asia/Jakarta");
		$date = date("d-m-Y").""; 
		echo $date;?>
    		</td>
    	</tr>
    	
    	<tr>
        <td>No. Pengumumman</td><td> </td>
        <td colspan="6">
        	<?php
		$result = mysql_query("select noN From news ORDER BY noN DESC limit 1"); 
		$row=mysql_fetch_array($result);
		
			$noN=$row['noN'];
			if(!isset($noN))
			{
			$noN=0;
			}
			$list=$noN+1;
			echo $list;
		
		?></td>
    	</tr>
    	
    	
    	<tr>
        <td>Tilte</td><td> </td>
        <td colspan="6"><input type ="text" name = "txtTitleN" style="width:500px;"/></td>
    	</tr>
    	
    	<tr>
   	<td>Upload Foto News</td>
        <td> </td>
        <td colspan="6"><input name = "fileUpload" type = "file"></td>	
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
    <tr><input type="hidden" name="noN" value="<?php echo $list;?>"/>
        <td colspan="8"><input type ="submit" value="Simpan" /></td>
    </tr>
   </table> </form><br>
   <?php } ?>
   
	  <?php
	include ("footer.php")
	?>