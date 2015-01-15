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
	<div class="container-fluid col-md-offset-1 col-md-10 upload-page">
	
		<!-- Top Column -->
		<div class="upload-top col-md-12">
			<h2 class="text-center">Upload Project</h2>
			<hr class="col-md-offset-1 col-md-10">
		</div>

		<!-- Column Left -->
		<form method="post" role="form" enctype="multipart/form-data">
			<div class="upload-left col-md-7">
				
					<div class="form-group">
						<label for="">Project Title</label>
						<input type="text" name="title" class="form-control" id="" placeholder="Project Title">
					</div>

					<div class="form-group">
						<label for="">Project Description</label>
						<input type="text" name="description" class="form-control" id="" placeholder="Tell the story behind this project">
					</div>

					<div class="form-group">
						<label for="">Category</label>
				      	<select class="form-control" name="category">
							<option value="programming">Programming</option>
							<option value="game">Game</option>
							<option value="mobile">Mobile Apps</option>
							<option value="website">Website</option>
							<option value="other">Other</option>
						</select>					
					</div>

					<div class="form-group">
						<label for="">Project Link</label>
						<input type="text" name="link" class="form-control" id="" placeholder="Tell the story behind this project">
					</div>
				
			</div>

			<!-- Column Right-->
			<div class="upload-right col-md-4">
				<label for="">Upload Photo Preview</label>
				<div class="col-md-offset-1 upload-right-upload-photo">
					<img src="images/avatar-upload.png" id="uploadPreview">
					<input class="col-md-offset-3" type="file" name="fileUpload" id="fileUpload">
				</div>

				<div class="col-md-offset-1 upload-right-upload-photo">
					<img src="images/avatar-upload.png" id="uploadPreview2">
					<input class="col-md-offset-3" type="file" name="fileUpload2" id="fileUpload2">
				</div>

				<div class="col-md-offset-1 upload-right-upload-photo">
					<img src="images/avatar-upload.png" id="uploadPreview3">
					<input class="col-md-offset-3" type="file" name="fileUpload3" id="fileUpload3">
				</div>

			</div>

			<button type="submit" class="btn col-md-offset-4 col-md-4" name="submit"><span class="glyphicon glyphicon-cloud-upload"></span> Upload Project </button>
		</form>
		<hr class="col-md-offset-1 col-md-10">	
	</div>




</body>
</html>
