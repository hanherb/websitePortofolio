<?php
	mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("portofolio") or die(mysql_error());

    if(isset($_POST['nama']) || isset($_POST['password'])) {
    	$username = $_POST['nama'];
    	$password = md5($_POST['password']);
    	$database_check = mysql_query("SELECT * FROM user WHERE username = '" . $username . "' AND password = '" . $password . "'") or die("Couldn't query the user-database.");
    	$num = mysql_num_rows($database_check);
    	$database_check2 = mysql_query("SELECT * FROM user WHERE email = '" . $username . "' AND password = '" . $password . "'") or die("Couldn't query the user-database.");
    	$num2 = mysql_num_rows($database_check2);
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = mysql_query($sql);
        if($result === FALSE) { 
            die(mysql_error());
        }

        while ($row = mysql_fetch_array($result)) {
            $block = $row['block'];
        }

    	if(($num == 1) || ($num2 == 1)) {
    		if($num2 == 1) {
    			$username = mysql_query("SELECT username FROM user WHERE email = '" . $username . "'");
    		}

            if($block != 0) {
                echo '<script type="text/javascript">
                        alert("Account anda telah di block");
                      </script>';
            }
            else {
        		session_start();
        		$_SESSION['nama'] = $username;
        		$_SESSION['password'] = $password;

                header('Location: signin-success.php');
            }
    	}

    	else {
    		echo '<script type="text/javascript">
	    			alert("Username / password salah");
	    		  </script>';
    	}
    }
?>