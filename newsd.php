<?php 
include("controller/doConnect.php");
  session_start();
if(isset($_REQUEST['txtSearch']))
{
	$search=$_REQUEST['txtSearch'];
}
else
{
	$search="";
}
$newsID=$_REQUEST['newsID'];

?>
        <?php
		include ("header.php")
		?>
        
         <?php if(!isset($_SESSION['userRole'])){ ?>
            <table align="center">
	<tr>
        <td><h4><b>News</b></h4></td>
    	</tr>
    </table>
     <table align="center">
	<?php
	$result =mysql_query("select * from news where newsID=$newsID");
	while($row=mysql_fetch_array($result))
	{	$newsID=$row['newsID'];
		$noN=$row['noN'];	
		$titleN=$row['titleN'];
		$imgN=$row['imgN'];
		$dateN=$row['dateN'];
		
	$list='<tr>
		<td></td>
		<td align="center"><h4><b>'.$titleN.'</b></h4></td>
		</tr>
		<tr>
		<td></td>
		<td> <img data-imagezoom="true" class="img-responsive" width="600" height="350" src="news/'.$row['imgN'].'" /></td>		
	</tr>' ;
	echo $list;
	}

	?>
          </table><br>
          <?php }else if(($_SESSION['userRole'] == "dentry")||($_SESSION['userRole'] == "admin")){?>
          
            <table align="center">
	<tr>
        <td><h4><b>News</b></h4></td>
    	</tr>
    </table>
     <table align="center">
	<?php
	$result =mysql_query("select * from news where newsID=$newsID");
	while($row=mysql_fetch_array($result))
	{	$newsID=$row['newsID'];
		$noN=$row['noN'];	
		$titleN=$row['titleN'];
		$imgN=$row['imgN'];
		$dateN=$row['dateN'];
		
	$list='<tr>
		<td></td>
		<td align="center"><h4><b>'.$titleN.'</b></h4></td>
		</tr>
		<tr>
		<td></td>
		<td> <img data-imagezoom="true" class="img-responsive" width="600" height="200" src="news/'.$row['imgN'].'" /></td>		
	</tr>' ;
	echo $list;
	}

	?>
          </table><br>
          
          
		  <?php }?>
		  
		  
		<?php
		include ("footer.php")
		?>