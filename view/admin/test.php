<?php 

if ($_POST['btnsubmit'] == "submit") {
	$dir = "../upload/";
	$target = $dir . basename($_FILES["file"]['name']);	
	$validator = 1;
	$imagefiletype = strtolower(pathinfo($target, PATHINFO_EXTENSION));
	$check = getimagesize($_FILES['file']['tmp_name']);
	if ($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$validator = 1;
	} else {
		echo "file not an image";
		$validator = 0;
	}

	if ($validator === 1) {
		if (move_uploaded_file($_FILES["file"]["tmp_name"], $target)) {
	    echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
	  } else {
	    echo "Sorry, there was an error uploading your file.";
	  }
	} else {
		echo "upload file anda gagal";
	}

}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit" name="btnsubmit" value="submit">
</form>
</body>
</html>