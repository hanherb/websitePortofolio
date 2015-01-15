<!DOCTYPE html>
<html>
<head>
	<?php 
		include 'source.php';
		include 'edit-portofolio-database.php';
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
	<?php 
		include "nav.php";
		$url = $_SERVER['REQUEST_URI'];
		$parsedUrl = substr($url, strpos($url, "=") + 1);
		$arr = explode("-", $parsedUrl);
		$createdBy = $arr[0];
		$title = str_replace("_", " ", $arr[1]);

		$sql = "SELECT * FROM upload WHERE created_by = '".$createdBy."' AND title = '".$title."'";
		$result = mysql_query($sql);
		if($result === FALSE) { 
		    die(mysql_error());
		}

		while ($row = mysql_fetch_array($result)) {
			$title = $row['title'];
			$description = $row['description'];
			$createdBy = $row['created_by'];
			$category = strtoupper($row['category']);
			$link = $row['link'];
			$preview = $row['preview'];
			$preview2 = $row['preview2'];
			$preview3 = $row['preview3'];
		}
	?> 
	<div class="container-fluid col-md-offset-1 col-md-10 upload-page">
	
		<!-- Top Column -->
		<div class="upload-top col-md-12">
			<h2 class="text-center">Edit Portofolio</h2>
			<hr class="col-md-offset-1 col-md-10">
		</div>

		<!-- Column Left -->
		<form method="post" role="form" enctype="multipart/form-data">
			<div class="upload-left col-md-7">
				
					<div class="form-group">
						<label for="">Project Title</label>
						<input type="text" name="title" class="form-control" id="" placeholder="Project Title" value=<?php echo '"'.$title.'"' ?>>
					</div>

					<div class="form-group">
						<label for="">Project Description</label>
						<input type="text" name="description" class="form-control" id="" placeholder="Tell the story behind this project" 
						value=<?php echo '"'.$description.'"' ?>>
					</div>

					<div class="form-group">
						<label for="">Category</label>
				      	<select class="form-control" name="category">
							<option value="programming" <?php if (strtolower($category) == "programming") {echo 'selected="selected"';}?>>Programming</option>
							<option value="game" <?php if (strtolower($category) == "game") {echo 'selected="selected"';}?>>Game</option>
							<option value="mobile" <?php if (strtolower($category) == "mobile") {echo 'selected="selected"';}?>>Mobile Apps</option>
							<option value="website" <?php if (strtolower($category) == "website") {echo 'selected="selected"';}?>>Website</option>
							<option value="other" <?php if (strtolower($category) == "other") {echo 'selected="selected"';}?>>Other</option>
						</select>					
					</div>

					<div class="form-group">
						<label for="">Project Link</label>
						<input type="text" name="link" class="form-control" id="" placeholder="Tell the story behind this project" 
						value=<?php echo '"'.$link.'"' ?>>
					</div>
				
			</div>

			<!-- Column Right-->
			<div class="upload-right col-md-4">
				<label for="">Upload Photo Preview</label>
				<div class="col-md-offset-1 upload-right-upload-photo">
					<img src=<?php echo '"'.$preview.'"' ?> id="uploadPreview">
					<input class="col-md-offset-3" type="file" name="fileUpload" id="fileUpload" value=<?php echo '"'.$preview.'"' ?>>
				</div>

				<div class="col-md-offset-1 upload-right-upload-photo">
					<img src=<?php echo '"'.$preview2.'"' ?> id="uploadPreview2">
					<input class="col-md-offset-3" type="file" name="fileUpload2" id="fileUpload2" value=<?php echo '"'.$preview2.'"' ?>>
				</div>

				<div class="col-md-offset-1 upload-right-upload-photo">
					<img src=<?php echo '"'.$preview3.'"' ?> id="uploadPreview3">
					<input class="col-md-offset-3" type="file" name="fileUpload3" id="fileUpload3" value=<?php echo '"'.$preview3.'"' ?>>
				</div>

			</div>

			<button type="submit" class="btn col-md-offset-4 col-md-4" name="submit"> Submit Project </button>
		</form>
		<hr class="col-md-offset-1 col-md-10">	
	</div>

</body>
</html>
