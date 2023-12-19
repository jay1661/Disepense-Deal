<?php
	var_dump($_POST);
	var_dump($_FILES);

	$target_dir = "upload/";

	$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	if (file_exists($target_file)) 
	{
		echo "Sorry, file already exist.";
		$uploadOk = 0;
	}

	if ($_FILES["fileToUpload"]>5000000) 
	{
		echo "File is to large.";
		$uploadOk = 0;
	}

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
	{
		echo "Sorry, only JPG, JPEG, PNG and GIF files are allowed";
		$uploadOk = 0;
	}

	if ($uploadOk == 0) 
	{
		echo "Sorry, Your file was not uploaded.";
	}
	else
	{
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)) 
		{
			echo "The file".basename($_FILES["fileToUpload"]["name"])."has been uploaded.";
		} 
		else 
		{
			echo "Sorry, there was an error uploading file.";
		}
		
	}
?>