<!DOCTYPE html>
<html>
<head>
	<?php include 'source.php' ?>
	<style>
	body{
		background-color: #F2F1ED;
	}

	a {
		color: #979796;
	}
	a:hover,
	a:focus {
		color:#de5a51;
		text-decoration: none;
		font-family: 'Oswald', sans-serif;
	}
	h4 {
		color: #262626;
	}
	</style>
</head>

<body>
	<?php include "nav.php"; ?>
	
	
	<div class="container-fluid" style="margin-top:80px;">

			<!--Row Kiri-->
			<div class="col-md-2" style="left: 35px;">
				<div class="col-md-12 text-right">
					<img src="images/categories22.png" style="top:20px; margin-right=45px; padding-bottom:25px; z-index:-1;"class="col-md-offset-4 col-md-8">
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
		<div id="container" class="col-md-10" style="left: 65px; height:100%;">
						
				<div class="mix category-1 content-portofolio">
					<img src="images/3.png">
					<h4><strong>Portofolio Preview</strong></h4>
					<p>by <font color="#de5a51">Suparno</font></p>
				</div>

				<div class="mix category-2 content-portofolio">
					<img src="images/3-b.png">
					<h4><strong>Portofolio Preview</strong></h4>
					<p>by <font color="#de5a51">Suparno</font></p>
				</div>

				<div class="mix category-1 content-portofolio">
					<img src="images/3.png">
					<h4><strong>Portofolio Preview</strong></h4>
					<p>by <font color="#de5a51">Suparno</font></p>
				</div>

					<div class="mix category-1 content-portofolio">
					<img src="images/3-b.png">
					<h4><strong>Portofolio Preview</strong></h4>
					<p>by <font color="#de5a51">Suparno</font></p>
				</div>

				<div class="mix category-2 content-portofolio">
					<img src="images/3.png">
					<h4><strong>Portofolio Preview</strong></h4>
					<p>by <font color="#de5a51">Suparno</font></p>
				</div>

				<div class="mix category-2 content-portofolio">
					<img src="images/3-b.png">
					<h4><strong>Portofolio Preview</strong></h4>
					<p>by <font color="#de5a51">Suparno</font></p>
				</div>
		
		</div>

	</div>


</body>

</html>
