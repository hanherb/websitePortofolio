<!DOCTYPE html>
<html>
<head>
	<?php include 'source.php' ?>
	<style>
	body{
		background-color: #F1F1F1;
	}

	a {
		color: #8e9197;
	}
	a:hover,
	a:focus {
		color:#F05521;
		text-decoration: none;
		font-family: 'Oswald', sans-serif;
	}
	</style>
</head>

<body>
	<?php include "nav.php"; ?>
	
	
	<div class="container-fluid" style="margin-top:80px;">

			<!--Row Kiri-->
			<div class="col-md-2">
				<div class="col-md-12 text-right">
					<img src="images/categories2.png" style="top:20px; margin-right=45px; padding-bottom:25px; z-index:-1;"class="col-md-offset-4 col-md-8">
					<div class="a-categories">
						<a class="filter" href="#" data-filter="all">All</a><br>
						<a class="filter" href="#" data-filter=".category-1">Programming</a><br>
						<a class="filter" href="#" data-filter=".category-2">Game</a><br>	
						<a class="filter" href="#" data-filter=".category-3">Mobile Apps</a><br>	
						<a class="filter" href="#" data-filter=".category-4">Website</a><br>
						<a class="filter" href="#" data-filter=".category-5">Other</a>
					</div>
				</div>
			</div>
		
		<!--Row Kanan-->
		<div id="container" class="col-md-10" style="height:100%;">
						
				<div class="mix category-1 content-portofolio">
					<img src="images/1.png">
					<h4><strong>Portofolio Preview</strong></h4>
					<p>created by</p>
				</div>

				<div class="mix category-2 content-portofolio">
					<img src="images/1.png">
					<h4><strong>Portofolio Preview</strong></h4>
					<p>created by</p>
				</div>

				<div class="mix category-1 content-portofolio">
					<img src="images/1.png">
					<h4><strong>Portofolio Preview</strong></h4>
					<p>created by</p>
				</div>

					<div class="mix category-1 content-portofolio">
					<img src="images/1.png">
					<h4><strong>Portofolio Preview</strong></h4>
					<p>created by</p>
				</div>

				<div class="mix category-2 content-portofolio">
					<img src="images/1.png">
					<h4><strong>Portofolio Preview</strong></h4>
					<p>created by</p>
				</div>

				<div class="mix category-2 content-portofolio">
					<img src="images/1.png">
					<h4><strong>Portofolio Preview</strong></h4>
					<p>created by</p>
				</div>
		
		</div>

	</div>


</body>

</html>
