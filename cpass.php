<?php 
include("controller/doConnect.php");
  session_start();
  ?>
        
        <?php
		include ("header.php")
		?>
 <?php if(!isset($_SESSION['userRole'])){ ?>
 
  <?php }else if(($_SESSION['userRole'] == "admin")){?>
  
   <?php }else if(($_SESSION['userRole'] == "spv")){?>
  
    <?php }else if(($_SESSION['userRole'] == "dentry")){?>
        <?php $pegawaiID = $_SESSION['pegawaiID']; ?>

    <?php }else if(($_SESSION['userRole'] == "ortu")){?>
  <?php $noIDDD = $_SESSION['noIDDD']; ?>
    <div  class="container" >
        <div class="col-xs-12"style="padding:30px;text-align='center';">
            <table align="center" style="padding:30px;width:35%;" >
                <form action="controller/doCpass.php" method="post" enctype="multipart/form-data">
                <tr>
                    <td>NEW PASSWORD</td>
                    <td><input type="password" name="password"/></td>
                </tr>
                <tr>
                    <td>PASSWORD CONFIRM</td>
                    <td><input type="password" name="confirmpass"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input  type="submit" value="submit" class="btn">
                    <font color="red">
                             <?php 
                            if(isset($_REQUEST['errorMsg']))
                            {
                                echo $_REQUEST['errorMsg'];
                            }
                            ?></font></td>
                </tr>
                </form>
            </table>
        </div>
    </div>
    
    <?php }else if(($_SESSION['userRole'] == "guru")){?>
    <?php $kelasID = $_SESSION['kelasID']; ?>
    <?php } ?>
       

    <?php
	include ("footer.php")
	?>