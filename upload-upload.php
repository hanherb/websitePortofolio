<!DOCTYPE html>
<html>
<head>
	<?php 
		include 'source.php';
		include 'upload-database.php';
	 ?>
	<style>
	body{
		background-color: #F2F1ED;
	}
	label {
		color: #67696e;
	}
	a {
		color: #de5a51;
		font-family: "Times New Roman", Times, serif;
	}
	</style>
</head>

<body>
	<?php include "nav.php"; ?> 
	<div class="container-fluid col-md-offset-2 col-md-9" style="border-bottom: 3px solid #de5a51; background-color:#F2F1ED; height:100px; margin-top:50px;">
		<a class="focus-link col-md-2" href="#">Upload</a> 	
		<a class="focus-link col-md-3"href="#">Manage Project</a>		
	</div>

	
	<div class="content col-md-12">
		<!-- Row Kiri -->
		 <div class="upload-upload-form col-md-offset-2 col-md-5" style="background-color:#fff; margin-top:15px; padding-top:25px;">
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

		<!-- Row Kanan -->
		<div class="col-md-3" style="left: 55px; margin-top:15px; padding-top:25px;">
			<button type="button" class="save"></button>
			<input type="button" class="btn-publish"/>

		   	<!--<ul class="actions with-icons">
				<li><a href="http://brianhoffdesign.com/" class="visit" target="_blank"><span class="icon double"><span>↪</span></span> <span class="text"><em>Visit</em>brianhoffdesign.com</span></a></li>
				<li class="pagination"><a href="/websites/5225-danish" class="prev"><span class="double icon"><span>◃</span></span> <span class="text"><em>Previous</em>Danish™</span></a></li>
				<li class="pagination"><a href="/websites/5230-medium" class="next"><span class="double icon"><span>▹</span></span> <span class="text"><em>Next</em>Medium</span></a></li>
			</ul>
			<ul class="credit-list with-icons">
				<li><a href="/claims/new?website_id=5228" class="claim"><span class="icon check"><span>✓</span></span> <span class="text">Add a credit</span></a></li>
			</ul>
			<ul class="collection-actions with-icons">
				<li><a href="/users/sign_up" class="collection-add" rel="tipsy" original-title="Sign up or sign in to add sites to collections."><span class="icon add"><span>+</span></span> <span class="text">Add to a collection</span></a></li>
			</ul>-->


	</div>
	 
</body>
</html>
