<?php 
	include("doConnect.php");
	session_start();
	
	$title = $_REQUEST['txtTitleN'];
	$noN = $_REQUEST['noN'];
	
	if ($title=="")
	{
		header("location:../news.php?errorMsg=title Must be Filled");
	}
	
	else
	{
		if($_FILES['fileUpload']['tmp_name'])
		{
			$folder = "../news/";
			$imageSize = getimagesize($_FILES['fileUpload']['tmp_name']);
			$imageType = explode(".",$_FILES['fileUpload']['name']);
			$imageType = end($imageType);
		    if($imageSize==false)
			{
				header("location:../news.php?errorMsg=Only image can be upload");
			}
			else if($imageType !="jpg" && $imageType !="jpeg" && $imageType !="png"&& $imageType !="JPG" && $imageType !="JPEG" && $imageType !="PNG")
			{
				header("location:../news.php?errorMsg=Only .jpg .jpeg or .png image");
			}
			else
			{
				$picName = "$noN.".$imageType;
				date_default_timezone_set("Asia/Jakarta");
				$date = date("d-m-Y")."";
				mysql_query("insert into news values('','$noN','$title','$picName','$date')");
				move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $folder.$picName);	
				header("location:../news.php");				
			}
		}
		else
		{
			header("location:../news.php?errorMsg=News Image  Must be chosen");
		}
	
	}
	
?>