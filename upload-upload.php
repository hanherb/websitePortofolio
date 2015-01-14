<!DOCTYPE html>
<html>
<head>
	<?php 
		include 'source.php';
		include 'upload-database.php';
	 ?>
	<style>
	body{
		background-color: #EAEAEA;
	}
	label {
		color: #67696e;
	}
	</style>
</head>

<body>
	<?php include "nav.php"; ?> 
	<div class="container-fluid col-md-offset-2 col-md-9" style="margin-top: 100px;" >
	</div>

	
	<div class="upload-upload-content col-md-12" style="height: 900px;">
		<!-- <hr> -->
		<!-- Row Kiri -->
		<div class="upload-upload-form-outline col-md-offset-2 col-md-9">
			<div class="upload-upload-form col-md-12" style="background-color:#fff; margin-top:15px; padding-top:25px; padding-bottom:25px;">
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
			      		<div class="upload-photo-box" style="background-color:#fff; padding-top:25px; border:1px solid #ccc; height:100%;">
			      			<p class="text-center">Choose a file to upload</p>
			      			<label class="col-md-offset-4" style="margin-left:37%;">Preview 1</label>
			      			<input type="file" name="fileUpload" class="fileUpload col-md-offset-5" style="margin-left:37%;">
			      			<br>
			      			<label class="col-md-offset-4" style="margin-left:37%;">Preview 2</label>
			      			<input type="file" name="fileUpload2" class="fileUpload col-md-offset-5" style="margin-left:37%;">
			      			<br>
			      			<label class="col-md-offset-4" style="margin-left:37%;">Preview 3</label>
			      			<input type="file" name="fileUpload3" class="fileUpload col-md-offset-5" style="margin-left:37%;">
			      			<br>
			      		</div>
			      		<br>
			      		<input type="submit" name="submit" class="col-md-offset-5 col-md-2 btn btn-primary">
		    		</form>
		    	</div>
	   	 	</div>
		</div>
	</div>

 <?php include "footer.php"; ?> 

</body>
</html>
