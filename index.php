<!DOCTYPE html>
<html>
	<head>
		<?php include 'source.php'; ?>

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

		<div class="col-md-12" id="content-1">
			<div class="col-md-12">
				<h1 class="title-1">
					How to Make my Portofolio?
				</h1>
			</div>
			<div class="col-md-12">
				<div class="col-md-offset-1 col-md-3">
					<img src="images/step-1.png" class="step">
					<div class="des-step">
						<h3 class="des-step">
							Fill in the Form
						</h3>
					</div>
				</div>
				<div class="col-md-3">
					<img src="images/step-2.png" class="step">
					<div class="des-step">
						<h3>
							Choose the Portofolio Section
						</h3>
					</div>
				</div>
				<div class="col-md-4">
					<img src="images/step-3.png" class="step">
					<div class="des-step">
						<h3>
							Expand your Portofolio
						</h3>
					</div>
				</div>
			</div>
		</div>
		<div id="content-2">
			
		</div>
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
				
			</form>
		</div>
	-->
	</body>

</html>
