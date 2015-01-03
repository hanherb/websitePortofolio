<!DOCTYPE html>
<html>
<head>
	<?php include 'source.php' ?>
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
	    	<form>
	    		<label>Project Title</label>
	      		<textarea class="form-control upload-upload-text" rows="1" placeholder="Project Title"></textarea>

	      		<label style="padding-top:35px;">Project Description</label>
	      		<textarea class="form-control upload-upload-text" rows="3" placeholder="Tell the story behind this project"></textarea>

	      		<label style="padding-top:35px;">Category</label>
	      		<textarea class="form-control upload-upload-text" rows="3" placeholder="Categories by portfolio page"></textarea>

	      		<label style="padding-top:35px;">Project Link</label>
	      		<textarea class="form-control upload-upload-text" rows="3" placeholder="Put your project's link here"></textarea>

	      		<label style="padding-top:35px;">Upload Photo Preview</label>
	      		<div class="upload-photo-box" style="background-color:#fff; padding-top:25px; border:1px solid #ccc; height:100px;" >
	      			<p class="text-center">Choose a file to upload</p>
	      			<button type="button" class="col-md-offset-5 col-md-2 btn-primary">Upload</button>
	      		</div>
	    	</form>
	    </div>
 	  </div>

</body>
</html>