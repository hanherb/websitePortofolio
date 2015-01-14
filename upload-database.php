<?php
	include "connection.php";

	if(isset($_POST['submit'])) {
		session_start();
		$title = strip_tags(trim($_POST['title']));
		$description = strip_tags(trim($_POST['description']));
		$category = strip_tags(trim($_POST['category']));
		$link = strip_tags(trim($_POST['link']));
		$username = strip_tags(trim($_SESSION['nama']));

		$target_dir = "images/uploads/";
		$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		if((strlen($title) == 0) || (strlen($description) == 0) || (strlen($link) == 0)) {
			echo '<script type="text/javascript">
                    alert("Tidak boleh ada field yang kosong");
                  </script>';
		}

		// Check if user doesn't want to use preview
		else {
			if(!$_FILES['fileUpload']["name"]) {
				echo "<script type='text/javascript'> 
			    		alert('Portofolio di upload tanpa preview.');
			    	  </script>";
			   	$preview = "images/3-c.png";
			}

			else {
				
				// Check if file already exists
				if (file_exists($target_file)) {

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

				    $uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					echo "<script type='text/javascript'> 
			    		alert('File name already exist in the database, or file format is not JPG/JPEG/PNG/GIF.');
			    	  </script>";
				// if everything is ok, try to upload file
				} 
				else {
				    move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
				    $preview = $target_dir . basename($_FILES["fileUpload"]["name"]);			      				  
				}

				
			}

			if($uploadOk != 0) {
				$sql = "INSERT INTO `portofolio`.`upload` (`id_upload`, `title`, `description`, `created_by`, `category`, `link`, `preview`)
				VALUES ('', '$title', '$description', '$username', '$category', '$link', '$preview')";
				mysql_query($sql);
			}
		}
	}
?>