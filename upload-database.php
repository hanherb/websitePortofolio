<?php
	include "connection.php";
	include "nav.php";
	if(isset($_POST['submit'])) {
		$title = strip_tags(trim($_POST['title']));
		$description = strip_tags(trim($_POST['description']));
		$category = strip_tags(trim($_POST['category']));
		$link = strip_tags(trim($_POST['link']));
		$username = strip_tags(trim($_SESSION['nama']));
		$preview = '';
		$preview2 = '';
		$preview3 = '';

		$target_dir = "images/uploads/";
		$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
		$target_file2 = $target_dir . basename($_FILES["fileUpload2"]["name"]);
		$target_file3 = $target_dir . basename($_FILES["fileUpload3"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
		$imageFileType3 = pathinfo($target_file3,PATHINFO_EXTENSION);

		if((strlen($title) == 0) || (strlen($description) == 0) || (strlen($link) == 0)) {
			echo '<script type="text/javascript">
                    alert("Tidak boleh ada field yang kosong");
                  </script>';
		}

		// Check if user doesn't want to use preview
		else {
			if(!$_FILES['fileUpload']["name"] && !$_FILES['fileUpload2']["name"] && !$_FILES['fileUpload3']["name"]) {
				echo "<script type='text/javascript'> 
			    		alert('Portofolio di upload tanpa preview.');
			    	  </script>";
			   	$preview = "images/2.png";
			   	$preview2 = "images/2-b.png";
			   	$preview3 = "images/2-c.png";
			}

			else {
				
				// Check if file already exists
				if($_FILES['fileUpload']["name"]) {
					if (file_exists($target_file)) {
					    $uploadOk = 0;
					}
				}

				if($_FILES['fileUpload2']["name"]) {
					if (file_exists($target_file2)) {
						$uploadOk = 0;
					}
				}

				if($_FILES['fileUpload3']["name"]) {
					if (file_exists($target_file3)) {
						$uploadOk = 0;
					}
				}

				if($_FILES['fileUpload']["name"] && $_FILES['fileUpload2']["name"]) {
					if($_FILES['fileUpload']["name"] == $_FILES['fileUpload2']["name"]) {
						$uploadOk = 0;
					}
				}

				if($_FILES['fileUpload']["name"] && $_FILES['fileUpload3']["name"]) {
					if($_FILES['fileUpload']["name"] == $_FILES['fileUpload3']["name"]) {
						$uploadOk = 0;
					}
				}

				if($_FILES['fileUpload2']["name"] && $_FILES['fileUpload3']["name"]) {
					if($_FILES['fileUpload2']["name"] == $_FILES['fileUpload3']["name"]) {
						$uploadOk = 0;
					}
				}
				// Check file size
				/*
				if ($_FILES["fileUpload"]["size"] > 500000) {
				    echo "Sorry, your file is too large.";
				    $uploadOk = 0;
				}*/
				// Allow certain file formats
				if($_FILES['fileUpload']["name"]) {
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "PNG" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" && $imageFileType != "JPEG" && $imageFileType != "JPG" && $imageFileType != "GIF" ) {

					    $uploadOk = 0;
					}
				}

				if($_FILES['fileUpload2']["name"]) {
					if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "PNG" && $imageFileType2 != "jpeg"
					&& $imageFileType2 != "gif" && $imageFileType2 != "JPEG" && $imageFileType2 != "JPG" && $imageFileType2 != "GIF" ) {

					    $uploadOk = 0;
					}
				}	

				if($_FILES['fileUpload3']["name"]) {
					if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "PNG" && $imageFileType3 != "jpeg"
					&& $imageFileType3 != "gif" && $imageFileType3 != "JPEG" && $imageFileType3 != "JPG" && $imageFileType3 != "GIF" ) {

					    $uploadOk = 0;
					}
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					echo "<script type='text/javascript'> 
			    		alert('File name already exist in the database, or file format is not JPG/JPEG/PNG/GIF.');
			    	  </script>";
				// if everything is ok, try to upload file
				} 
				else {
					if($_FILES['fileUpload']["name"]) {
						move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
					    $preview = $target_dir . basename($_FILES["fileUpload"]["name"]);	
					}
				   	
				   	if($_FILES['fileUpload2']["name"]) {
				   		move_uploaded_file($_FILES["fileUpload2"]["tmp_name"], $target_file2);
				    	$preview2 = $target_dir . basename($_FILES["fileUpload2"]["name"]);
				   	}
				    
				    if($_FILES['fileUpload3']["name"]) {
					    move_uploaded_file($_FILES["fileUpload3"]["tmp_name"], $target_file3);
					    $preview3 = $target_dir . basename($_FILES["fileUpload3"]["name"]);	
				    }		      				  
				}		
			}

			if($uploadOk != 0) {
				if($preview == '') {
					$preview = "images/2.png";
				}

				if($preview2 == '') {
					$preview2 = "images/2-b.png";
				}

				if($preview3 == '') {
					$preview3 = "images/2-c.png";
				}

				$sql = "INSERT INTO `portofolio`.`upload` (`id_upload`, `title`, `description`, `created_by`, `category`, `link`, `preview`,
					`preview2`, `preview3`)
				VALUES ('', '$title', '$description', '$username', '$category', '$link', '$preview', '$preview2', '$preview3')";
				mysql_query($sql);
			}
		}
	}
?>