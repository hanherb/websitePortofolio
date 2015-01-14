<?php
	include 'connection.php';
	include 'nav.php';

	if(isset($_POST['submit_edit'])) {
		$email = $_POST['signup_email'];
		$password = md5($_POST['signup_password']);
		$confirm_password = md5($_POST['signup_confirm_password']);
		$fullname = $_POST['signup_fullname'];
		$nim = $_POST['signup_nim'];
		$year = $_POST['signup_year'];

	    $email_check = mysql_query("SELECT * FROM user WHERE email = '" . $email . "'")
	    or die("Couldn't query the user-database.");
	    $num = mysql_num_rows($email_check);

	    $sql = "SELECT * FROM user WHERE username = '".$_SESSION['nama']."'";
		$result = mysql_query($sql);
		if($result === FALSE) { 
		    die(mysql_error());
		}

		while ($row = mysql_fetch_array($result)) {
			$email_pass = $row['email'];
		}

	    if($email == $email_pass) {
	    	$num = 0;
	    }

	    // Avatar Upload
	    $target_dir = "images/avatars/";
		$target_file = $target_dir . basename($_FILES["avatarUpload"]["name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		if($_FILES["avatarUpload"]["name"]) {
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {

			    echo "<script type='text/javascript'> 
			    		alert('File format is not JPG/JPEG/PNG/GIF.');
			    	  </script>";
			   	$avatar = "images/avatar-upload.png";
			}

			else {
				move_uploaded_file($_FILES["avatarUpload"]["tmp_name"], $target_file);
			    $avatar = $target_dir . basename($_FILES["avatarUpload"]["name"]);	
			}
		}

		else {
			$avatar = "images/avatar-upload.png";
		}
	    // Avatar End

		if($password != $confirm_password) {
			echo '<script type="text/javascript">
					alert("Confirm password berbeda dengan password");
				  </script>';
		}

	    else if($num == 1) {
	        echo '<script type="text/javascript">
	                alert("Email sudah terdaftar");
	              </script>';
	    }

	    else if((strlen($email) == 0) || ($password == "d41d8cd98f00b204e9800998ecf8427e") || (strlen($fullname) == 0) || 
	        (strlen($nim) == 0)) {
	        echo '<script type="text/javascript">
	                alert("Tidak boleh ada field yang kosong");
	              </script>';
	    }

		else {
			$sql = "UPDATE user SET nim = '$nim', email = '$email', password = '$password', fullname = '$fullname',
			 year = '$year', avatar = '$avatar' WHERE username = '".$_SESSION['nama']."'";
			mysql_query($sql);
		}
	}
?>