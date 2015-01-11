<!DOCTYPE html>
<html>
	<head>
		<?php include 'source.php' ?>

	</head>

	<body>
		<?php include "nav.php"; ?>
		
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox" style="width:100%">
		    <div class="item active">
		      <img src="images/home-1.jpg" >
		      <div class="carousel-caption">
		        ...
		      </div>
		    </div>
		    <div class="item">
		      <img src="images/home-2.jpg" alt="...">
		      <div class="carousel-caption">
		        ...
		      </div>
		    </div>
		    <div class="item">
		      <img src="images/home-4.jpg" alt="...">
		      <div class="carousel-caption">
		        ...
		      </div>
		    </div>
		    ...
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		<!-- Content -->

		<div class="contentWhite col-md-12">
			<div class="col-md-12">
				<h1 class="first-title">
					How to Make my Portofolio?
				</h1>
			</div>
			<div class="col-md-12">
				<div class="col-md-offset-1 col-md-3">
					<img src="images/step-1.png" class="step">
					<div class="des-step fillForm">
						<h3 class="des-step">
							Fill in the Form
						</h3>
					</div>
				</div>
				<div class="col-md-3">
					<img src="images/step-2.png" class="step">
					<div class="des-step choosePorto">
						<h3>
							Choose the Portofolio Section
						</h3>
					</div>
				</div>
				<div class="col-md-4">
					<img src="images/step-3.png" class="step">
					<div class="des-step expandPorto">
						<h3>
							Expand your Portofolio
						</h3>
					</div>
				</div>
			</div>
			<br>
			<div class="letStart col-md-12">
				<div class="col-md-offset-4 col-md-4 col-md-offset-4">
					<h4>
						Lets Start Now! 
						<a href="upload-upload.php"> >> </a>
					</h4>
				</div>	
			</div>
		</div>
		<div class="content col-md-12" >			
			<div class="col-md-offset-2 col-md-8 col-md-offset-2">
				<h1 class="second-title">
					We Connect all of HIMTI Member 
				</h1>
			</div>
			<div class="col-md-12">
				<div class="himtiMember col-md-offset-2 col-md-8 col-md-offset-2">
					<div class="col-md-12">
						<div class="col-md-3">
							<h2 class="memberCount">12 Person</h2>
							<h5 class="memberCount">Member of 2010</h5>
						</div>
						<div class="col-md-3">
							<h2 class="memberCount">13 Person</h2>
							<h5 class="memberCount">Member of 2011</h5>
						</div>
						<div class="col-md-3">
							<h2 class="memberCount">11 Person</h2>
							<h5 class="memberCount">Member of 2012</h5>
						</div>
						<div>
							<h2 class="memberCount">18 Person</h2>
							<h5 class="memberCount">Member of 2013 & 2014</h5>
						</div>
					</div>
				</div>
				<br><br><br><br><br><br>
				<div class="col-md-offset-2 col-md-8 col-md-offset-2">
					<div class="col-md-6">
						<img src="images/himti-member.jpg" class="himti-member">
						<p class="quote">Talk less do more!</p>
					</div>
					<div class="col-md-6">
						<img src="images/himtimember.jpg" class="himti-member">
						<p class="quote">Do it now!</p>
					</div>
				</div>
			</div>
		</div>
		<div class="contentBlue col-md-12">
			<div class="col-md-offset-2 col-md-8 col-md-offset-2">
				<h1 class="third-title">
					Developer of HIMTI Portofolio
				</h1>
			</div>
			
			<div class="col-md-offset-2 col-md-8 col-md-offset-2">
				<div class="col-md-4">
					<img src="images/aley.png" class="developer-image">
					<h4 class="dev-name">Ahmad Alimuddin</h4>
					<h6 class="dev-name" style="margin-top: -7px">Project Manager</h6>
				</div>				
				<div class="col-md-4">
					<img src="images/dio.png" class="developer-image">
					<h4 class="dev-name">Hanindyo Herbowo</h4>
					<h6 class="dev-name" style="margin-top: -7px">Project Leader</h6>
				</div>
				<div class="col-md-4">
					<img src="images/nisfie.png" class="developer-image">
					<h4 class="dev-name">Nurfitri Nisfie R</h4>
					<h6 class="dev-name" style="margin-top: -7px">Project Designer</h6>
				</div>
			</div>

		</div>
<!--
		<div class="contentblue col-md-12">
			<div class="col-md-offset-2 col-md-8 col-md-offset-2">
				<h1 class="five-title col-md-12">
					Any Quetions? of Problem? Call Us!
				</h1>
			</div>
			<form class="comment-form col-md-offset-3 col-md-6 col-md-offset-3">
				<div class="col-md-12">
					<input class="inputName" placeholder="Your Name">
					<input class="inputEmail" placeholder="Your Email">
					<textarea class="comment" placeholder="Comment"></textarea>
					<input type="submit" class="submit col-md-12">
				</div>			
			</form>
		</div>

-->
		<footer class="footer col-md-12">
			&copy; 2014 tipar13
		</footer>


		<!--
		<div class="contact col-md-12">
			<img src="images/home-3.jpg" class="col-md-12">
			<form class="comment-form col-md-12">
				<div class="col-md-offset-3 col-md-3 col-md-offset-6">
					<input class="inputName" placeholder="Your Name">
					<input class="inputEmail" placeholder="Your Email">
					<textarea class="comment" placeholder="Comment"></textarea>
					<input type="submit" class="submit col-md-12">
				</div>
				
			
		</div>
	-->
	</body>

</html>
