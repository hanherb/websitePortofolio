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
		      <img src="images/home-slideshow.jpg" >
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

		<!-- Content -->


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
	
	 <?php include "footer.php"; ?> 

	</body>

</html>
