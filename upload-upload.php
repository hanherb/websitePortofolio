<!DOCTYPE html>
<html>
<head>
	<?php 
		include 'source.php';
		include 'upload-database.php';
	 ?>
	<style>
	body{
		background-color: #F1F1F1;
	}
	label {
		color: #67696e;
	}
	</style>
</head>

<body>
	<?php include "nav.php"; ?>
	<div class="container-fluid" style=" background-color:#fff; height:100px; margin-top:50px;">
		<a class="focus-link col-md-offset-2 col-md-2"href="#">Manage Project</a>
		<a class="focus-link col-md-offset-0 col-md-1"href="#">Upload</a> 	
	</div>
	
	  <div class="upload-upload-form col-md-offset-2 col-md-8" style="background-color:#fff; margin-top:15px; padding-top:25px;">
	  	<div class="col-md-offset-1 col-md-10">
	    	<form method="post" action="" enctype="multipart/form-data">
	    		<label>Project Title</label>
	      		<input type="text" name="title" class="form-control upload-upload-text" rows="1" placeholder="Project Title"></input>

	      		<label style="padding-top:35px;">Project Description</label>
	      		<input type="text" name="description" class="form-control upload-upload-text" rows="3" placeholder="Tell the story behind this project"></input>

	      		<label style="padding-top:35px;">Category</label>
	      		<select class="form-control" name="category">
				    <option value="programming" selected="selected">Programming</option>
				    <option value="game">Game</option>
				    <option value="mobile">Mobile Apps</option>
				    <option value="website">Website</option>
				    <option value="other">Other</option>
				</select>

	      		<label style="padding-top:35px;">Project Link</label>
	      		<input type="text" name="link" class="form-control upload-upload-text" rows="3" placeholder="Put your project's link here"></input>

	      		<label style="padding-top:35px;">Upload Photo Preview</label>
	      		<div class="upload-photo-box" style="background-color:#fff; padding-top:25px; border:1px solid #ccc; height:100px;">
	      			<p class="text-center">Choose a file to upload</p>
	      			<input type="file" name="fileUpload" class="fileUpload col-md-offset-5" style="margin-left:37%;">
	      			<br>
	      		</div>
	      		<br>
	      		<input type="submit" name="submit" class="col-md-offset-5 col-md-2 btn btn-primary">
	    	</form>
	    </div>
 	  </div>

</body>
</html>
