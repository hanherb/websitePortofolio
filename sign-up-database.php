<?php
	mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("portofolio") or die(mysql_error());

    if(isset($_POST['sign_up'])) {
    	$username = $_POST['signup_username'];
    	$email = $_POST['signup_email'];
    	$password = md5($_POST['signup_password']);
    	$confirm_password = md5($_POST['signup_confirm_password']);
    	$fullname = $_POST['signup_fullname'];
    	$nim = $_POST['signup_nim'];
    	$year = $_POST['signup_year'];

    	if($password != $confirm_password) {
    		echo '<script type="text/javascript">
    				alert("Confirm password berbeda dengan password");
    			  </script>';
    	}

    	else {
    		$sql = "INSERT INTO `portofolio`.`user` (`id_number`, `nim`, `username`, `email`, `password`, `fullname`, `year`)
			VALUES ('', '$nim', '$username', '$email', '$password', '$fullname', '$year')";
			mysql_query($sql);
    	}
    }
?>