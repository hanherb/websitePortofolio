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
	</style>
</head>

<body>
	<?php 
		include "nav.php";
		include "sign-up-database.php";
	?> 
	<div class="container-fluid col-md-offset-3 col-md-6 signup-page">
	<h2 class="text-center">Sign Up</h2>
	<hr>
	<div class="form-content-signup text-center">
		<form class="form-horizontal" method="post">
	  		<div class="form-group">
	    		<label class="col-md-offset-1 col-sm-3col-md-offset-1 col-sm-3 control-label text-right">Username</label>
	    		<div class="col-sm-6">
	     			<input type="text" class="form-control" name="signup_username" placeholder="Username">
	    		</div>
	  		</div>

	  		<div class="form-group">
	    		<label class="col-md-offset-1 col-sm-3 control-label text-right">Email</label>
	    		<div class="col-sm-6">
	     			<input type="email" class="form-control" name="signup_email" placeholder="Email">
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
	     			<input type="text" class="form-control" name="signup_fullname" placeholder="Fullname">
	    		</div>
	  		</div>
	  
	    	<div class="form-group">
	    		<label class="col-md-offset-1 col-sm-3 control-label text-right">Student ID Number</label>
	    		<div class="col-sm-6">
	     			<input type="text" class="form-control" name="signup_nim" placeholder="Student ID Number">
	    		</div>
	  		</div>

	  		<div class="form-group">
	    		<label class="col-md-offset-1 col-sm-3 control-label text-right">Year</label>
	    		<div class="col-sm-2">
	     			<select class="form-control" name="signup_year" placeholder="Year"2@>
	     				<option value="2011" selected="selected">2011</option>
	     				<option value="2012">2012</option>
	     				<option value="2013">2013</option>
	     				<option value="2014">2014</option>
	     			</select>
	    		</div>
	  		</div>


	  <div class="form-group">
	      <br><button type="submit" class="btn col-md-offset-2 col-md-7" name="sign_up">Create Account</button>
	  </div>

	  <hr> 

	</div>
</form>
	</div>
