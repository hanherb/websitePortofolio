<!DOCTYPE html>
<html>
<head>
	<?php 
		include 'source.php';
	 ?>
	<style>
	body{
		background-color: #EAEAEA;
	}
	</style>
</head>

<body>
	<?php 
		include "nav.php";
		include "edit-profile-database.php";
	?> 
<div class="container-fluid col-md-12 editprofile-page">
	<h2 class="text-center">Edit Profile</h2>
	<hr class="col-md-offset-1 col-md-10"> 

	<?php
		include 'connection.php';
		$sql = "SELECT * FROM user WHERE username = '".$_SESSION['nama']."'";
		$result = mysql_query($sql);
		if($result === FALSE) { 
		    die(mysql_error());
		}

		while ($row = mysql_fetch_array($result)) {
			$nim = $row['nim'];
			$username = $row['username'];
			$email = $row['email'];
			$password = ($row['password']);
			$fullname = $row['fullname'];
			$year = $row['year'];
			$avatar = $row['avatar'];
		}
	?>

	<!-- Column - Left  -->
	<form class="form-horizontal" method="post" enctype="multipart/form-data">
		<div class="col-md-offset-1 col-md-6 column-left">
			<div class="form-content-editprofile text-center">
		  		<div class="form-group">
		    		<label class="col-md-offset-1 col-sm-3col-md-offset-1 col-sm-3 control-label text-right">Username</label>
		    		<div class="col-sm-6">
		     			<input type="text" class="form-control" name="signup_username" placeholder="Username" disabled 
		     			value=<?php echo '"'.$username.'"' ?>>
		    		</div>
		  		</div>

		  		<div class="form-group">
		    		<label class="col-md-offset-1 col-sm-3 control-label text-right">Email</label>
		    		<div class="col-sm-6">
		     			<input type="email" class="form-control" name="signup_email" placeholder="Email" value=<?php echo '"'.$email.'"' ?>>
		    		</div>
		  		</div>

		  		<div class="form-group">
		    		<label class="col-md-offset-1 col-sm-3col-md-offset-1 col-sm-3 control-label text-right">Password</label>
		    		<div class="col-sm-6">
		     			<input type="password" class="form-control" name="signup_password" placeholder="Password">
		    		</div>
		  		</div>

		  		<div class="form-group">
		    		<label class="col-md-offset-1 col-sm-3col-md-offset-1 col-sm-3 control-label text-right">Confirm Password</label>
		    		<div class="col-sm-6">
		     			<input type="password" class="form-control" name="signup_confirm_password" placeholder="Confirm Password">
		    		</div>
		  		</div>

		  		<div class="form-group">
		    		<label class="col-md-offset-1 col-sm-3 control-label text-right">Fullname</label>
		    		<div class="col-sm-6">
		     			<input type="text" class="form-control" name="signup_fullname" placeholder="Fullname" value=<?php echo '"'.$fullname.'"' ?>>
		    		</div>
		  		</div>
		  
		    	<div class="form-group">
		    		<label class="col-md-offset-1 col-sm-3 control-label text-right">Student ID Number</label>
		    		<div class="col-sm-6">
		     			<input type="text" class="form-control" name="signup_nim" placeholder="Student ID Number" value=<?php echo '"'.$nim.'"' ?>>
		    		</div>
		  		</div>

		  		<div class="form-group">
		    		<label class="col-md-offset-1 col-sm-3 control-label text-right">Year</label>
		    		<div class="col-sm-3">
		     			<select class="form-control" name="signup_year" placeholder="Year">
		     				<option value="2011" <?php if ($year == "2011") {echo 'selected="selected"';}?>>2011</option>
		     				<option value="2012" <?php if ($year == "2012") {echo 'selected="selected"';}?>>2012</option>
		     				<option value="2013" <?php if ($year == "2013") {echo 'selected="selected"';}?>>2013</option>
		     				<option value="2014" <?php if ($year == "2014") {echo 'selected="selected"';}?>>2014</option>
		     			</select>
		    		</div>
	  			</div>
			</div>
		</div>


		<!-- Column-Right -->
	 	<div class="col-md-offset0 col-md-4 column-right">
	 		<div class="form-group upload-avatar">
			    <label class="col-sm-5 control-label text-right">Profile Picture</label>
			    <input type="file" id="avatarUpload" name="avatarUpload" class="fileUpload-avatar col-md-offset-6">
			    <div class="upload-avatar-template">
					<img src=<?php echo '"'.$avatar.'"' ?> id="avatarPreview">
				</div>
			</div>
		</div> 	
 	
		<div class="form-group editprofile-button">
      		<br><button type="submit" class="btn col-md-offset-3 col-md-6" name="submit_edit"><span class="glyphicon glyphicon-floppy-disk"></span> Save Information </button>
  		</div>
  	</form>

 	<hr class="col-md-offset-1 col-md-10"> 

</div>




	 <?php include "footer.php"; ?> 

</body>
</html>
