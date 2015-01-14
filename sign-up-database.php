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

        $username_check = mysql_query("SELECT * FROM user WHERE username = '" . $username . "'")
        or die("Couldn't query the user-database.");
        $num = mysql_num_rows($username_check);

        $email_check = mysql_query("SELECT * FROM user WHERE email = '" . $email . "'")
        or die("Couldn't query the user-database.");
        $num2 = mysql_num_rows($email_check);

    	if($password != $confirm_password) {
    		echo '<script type="text/javascript">
    				alert("Confirm password berbeda dengan password");
    			  </script>';
    	}

        else if($num == 1) {
            echo '<script type="text/javascript">
                    alert("Username sudah terdaftar");
                  </script>';
        }

        else if($num2 == 1) {
            echo '<script type="text/javascript">
                    alert("Email sudah terdaftar");
                  </script>';
        }

        else if(strpos($username, '-') !== false) {
            echo '<script type="text/javascript">
                    alert("Username tidak boleh menggunakan karakter -");
                  </script>';
        }

        else if(strpos($username, ' ') !== false) {
            echo '<script type="text/javascript">
                    alert("Username tidak boleh menggunakan spasi");
                  </script>';
        }

        else if((strlen($username) == 0) || (strlen($email) == 0) || ($password == "d41d8cd98f00b204e9800998ecf8427e") || (strlen($fullname) == 0) || 
            (strlen($nim) == 0)) {
            echo '<script type="text/javascript">
                    alert("Tidak boleh ada field yang kosong");
                  </script>';
        }

    	else {
    		$sql = "INSERT INTO `portofolio`.`user` (`id_number`, `nim`, `username`, `email`, `password`, `fullname`, `year`)
			VALUES ('', '$nim', '$username', '$email', '$password', '$fullname', '$year')";
			mysql_query($sql);
    	}
    }
?>