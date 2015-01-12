<?php
	mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("portofolio") or die(mysql_error());

    

	if(isset($_POST['submit'])) {
		// session_start();
		$title = strip_tags(trim($_POST['title']));
		$description = strip_tags(trim($_POST['description']));
		$category = strip_tags(trim($_POST['category']));
		$link = strip_tags(trim($_POST['link']));
		$username = strip_tags(trim($_SESSION['nama']));

		$target_dir = "images/uploads/";
		$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {

		echo "<script type='text/javascript'> 
        alert('Sorry, file already exists.');
        </script>";

		    $uploadOk = 0;
		}
		// Check file size
		/*
		if ($_FILES["fileUpload"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}*/
		// Allow certain file formats

		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "<script type='text/javascript'> 
			alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
			</script>";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["fileUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		$preview = $target_dir . basename($_FILES["fileUpload"]["name"]);

		$sql = "INSERT INTO `portofolio`.`upload` (`id_upload`, `title`, `description`, `created_by`, `category`, `link`, `preview`)
		VALUES ('', '$title', '$description', '$username', '$category', '$link', '$preview')";
		mysql_query($sql);
	}
?>