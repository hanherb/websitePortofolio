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
	</style>
</head>

<body>
	<?php include "nav.php"; ?> 
	<div class="container-fluid signup-page col-md-offset-3 col-md-6">
	<legend><h3 class="text-center"><strong>Sign Up<strong></h3></legend>
	<div class="form-content-signup text-center">
		<form class="form-horizontal">
	  		<div class="form-group">
	    		<label class="col-sm-3 control-label text-right">Username</label>
	    		<div class="col-sm-5">
	     			<input type="text" class="form-control">
	    		</div>
	  		</div>

	  		<div class="form-group">
	    		<label class="col-sm-3 control-label text-right">Email</label>
	    		<div class="col-sm-5">
	     			<input type="email" class="form-control">
	    		</div>
	  		</div>

	  		<div class="form-group">
	    		<label class="col-sm-3 control-label text-right">Password</label>
	    		<div class="col-sm-5">
	     			<input type="password" class="form-control">
	    		</div>
	  		</div>

	  		<div class="form-group">
	    		<label class="col-sm-3 control-label text-right">Confirm Password</label>
	    		<div class="col-sm-5">
	     			<input type="password" class="form-control">
	    		</div>
	  		</div>

	  		<div class="form-group">
	    		<label class="col-sm-3 control-label text-right">Fullname</label>
	    		<div class="col-sm-5">
	     			<input type="text" class="form-control">
	    		</div>
	  		</div>
	  
	    	<div class="form-group">
	    		<label class="col-sm-3 control-label text-right">Student ID Number</label>
	    		<div class="col-sm-5">
	     			<input type="text" class="form-control">
	    		</div>
	  		</div>

	  		<div class="form-group">
	    		<label class="col-sm-3 control-label text-right">Year</label>
	    		<div class="col-sm-2">
	     			<select class="form-control">
	     				<option value="2011">2011</option>
	     				<option value="2012">2012</option>
	     				<option value="2013">2013</option>
	     				<option value="2013">20113</option>
	     			</select>
	    		</div>
	  		</div>


	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn">Create Account</button>
	    </div>
	  </div>
	</div>
</form>
	</div>
