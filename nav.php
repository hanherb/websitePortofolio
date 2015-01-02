
	<!------------------------------------------------Button Header Navbar------------------------------------------------>
	<nav class="navbar navbar-induk navbar-fixed-top">
  		<div class="container-fluid col-md-offset-1 col-md-10">
  			<div class="navbar-header">
	  			<a class="navbar-brand" href="#">
	  			<img class="navbar-logo" src="images/logo2.png">
			    <ul class="nav navbar-nav">
			      	<li><a href="index.php">Home</a></li>
			      	<li><a href="portofolio.php">Portofolio</a></li>
			      	<li><a href="upload-upload.php" style="margin-top:-15px; height:65px;"><button class="btn-primary btn navbar-btn" role="button">Upload</button></a></li>
			    </ul>

		        <ul class="nav navbar-nav navbar-right" style="display:block;">
			       <li><a class="navbar-font" data-toggle="modal" data-target="#myModal">Sign In</a></li> 
			    </ul>

			    <!--Popup-->
			    <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="false">X</button>
								<img class="navbar-logo col-md-offset-4" src="images/logo2.png">
							</div>
							<div class="modal-body">
								<h2 class="col-md-offset-5">Sign In</h2><br>
								<label class="col-md-offset-1">Username</label> <br>
								<input name="nama" type="text" class="input-user col-md-offset-1 col-md-10" placeholder="Username atau Email" id="nama">
								<br><br><br>
								<label class="col-md-offset-1">Password</label> <br>
								<input name="password" type="password" class="input-user col-md-offset-1 col-md-10" placeholder="Kata Sandi" id="password">
								<br><br><br>
								<input type="submit" class="btn btn-primary col-md-offset-1 col-md-10" value="Sign In"> <br><br><br>
							</div>
							<div class="modal-footer">
								<label class="col-md-9" style="right: 35px;">Not a member yet? <a href="#">Sign Up</a></label>
							</div>
						</div>
					</div>
				</div>
				<!---->

				<!--<ul class="nav navbar-nav navbar-right">
        			<li class="Username" style="display:none;">
          				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Username<span class="caret"></span></a>
          				<ul class="dropdown-menu" role="menu">
            				<li><a href="#">My Profile</a></li>
            				<li><a href="#">Log Out </a></li>
          				</ul>
        			</li>
      			</ul>-->
  

      			<div class="input-group col-md-3" style="left:20px;">
	   		    	<input type="text" class="form-control" placeholder="Search for...">
		      		<span class="input-group-btn">
		        		<button class="btn btn-default" type="button"><img class="navbar-search-box-icon" src="images/search_icon.png"></button>
		      		</span>
	    		</div>
	    	</div>   		   
	   	</div>  
	</nav>
