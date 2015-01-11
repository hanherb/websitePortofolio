<!DOCTYPE html>
<html>
	<head>
		<?php include 'source.php' ?>

	</head>

	<body class="edit-profile">
		<?php include "nav.php"; ?>

		<div class="col-md-12">
			<div class="col-md-offset-2 col-md-8 col-md-offset-2">
				<form class="edit-form">
			        <div class="header-edit">
			          	<h1>
			            	<img src="images/logo2.png" alt="Himti_Portofolio" class="logo2">
			          	</h1>
			        </div>  
			        <div >
			        	<div>
          					<p id="editProfile">Edit Profile</p>
          					<hr>
          				</div>
			        </div>

			        <div class="col-md-12">
			        	<div class="col-md-6">
			        		<img src="images/2.png" class="photo-profile">
			        	</div>
			        	<div class="col-md-6">
			        		<label style="padding-top:35px;">Change Photo Profile</label>
				      		<div class="upload-photo-box" style="background-color:#fff; padding-top:25px; border:1px solid #ccc; height:100px;">
				      			<p class="text-center">Choose a photo to upload</p>
				      			<input type="file" name="fileUpload" class="fileUpload col-md-offset-5" style="margin-left:20%;">
				      			<br>
				      		</div>
				      		<br>
			        	</div>
			        </div>

			        <div class="col-md-12">
			        	<p class="name">Name</p>
			            	<input class="firstName col-md-5" placeholder="First Name">
			              	<div class="col-md-1 offset"></div>
			              	<input class="lastName col-md-5" placeholder="Last Name">
			        </div>
			        <br>

			        <div class="col-md-12">
			            <p class="email">Email</p>
			            	<input class="inputEmail col-md-11" placeholder="Email">
			            	<div class="col-md-offset-1"></div>
			        </div>

			        <div class="col-md-12">
			            <p class="Address">Address</p>
			            	<input type="text" class="inputAddress col-md-11" placeholder="Address">
			              	<div class="col-md-offset-1"></div>
			        </div>
			        <div class="col-md-12">
			        	<p class="phoneNumber">Phone Number</p>
			            	<input class="inputPhone col-md-11" type="number" placeholder="Phone Number">
			              	<div class="col-md-offset-1"></div>
			        </div>
			        <br>

			        <div class="col-md-12">
			        	<legend>Change a password</legend>
				        <div class="col-md-12">
				        	<p class="oldPassword">Old Password</p>
				            <input class="input-old-password col-md-4" type="password" placeholder="Old Password">
						</div>
				        <div class="col-md-12">
				        	<p class="newPassword">New Password</p>
				            <input class="input-new-password col-md-4" type="password" placeholder="New Password">
				        </div>
				        <div class="col-md-12">
				        	<p class="retypeNewPassword">Re-type New Password</p>
				            <input class="input-retype-password col-md-4" type="password" placeholder="Re-type New Password">
				        </div>
				        <br>
					</div>
			        <div>
			        	<button class="button-save">save</button>
			        </div>


			    </form>
			</div>
		</div>
	<body>