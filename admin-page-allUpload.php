<!DOCTYPE html>
<html>
	<head>
		<?php include 'source.php' ?>

	</head>

	<body class="edit-profile" style="background: #eaeaea;">
		<?php include "nav.php"; ?>

		<div class="container-fluid" style="margin-top: 80px;">

			<!------------------------------------ Kolom Kiri ---------------------------------->

			<div class="col-md-2" style="left: 5px; top: -25px">
				<div class="col-md-12 text-center">
					<img src="images/admin-page.png" style="top:20px; margin-right=45px; padding-bottom:25px; z-index:-1;"
					class="col-md-offset-4 col-md-8">
						<div class="a-categories col-md-offset-4">
							<a class="filter" href="admin-page.php" data-filter="all">All User</a><br>
							<a class="filter" href="admin-page-allUpload.php" data-filter=".category-1">All Protofolio</a><br>
						</div>
				</div>
			</div>


			<!------------------------------------ Kolom Tengah ---------------------------------->

			<div class="col-md-6" id="container" style="left: 30px; height: 100%;">
				
				<div class="mix category-1 content-portofolio">
					<div class="col-md-offset-1 col-md-12 user-portofolio-preview">
						<div class="col-md-7">
							<a href="#"><legend><h5 color="#de5a51" class="text-center">About Portofolio</h5></legend></a>
							<p>this portofolio has made in Jakarta. blablabla.<br><a href="#"> Read More -></a></p>
						</div>
						<div class="col-md-3" style="top: 20px;">
							<h4><strong>Portofolio Title</strong></h4>
							<p style="margin-top: -10px;">by <font color="#de5a51">Si Fulan </font></p>
						</div>
						<div class="col-md-2" style="top: 20px;">
							<button style="width: 75px; background: blue; color: #ffffff;">Edit</button>
							<button style="width: 75px; background: red; color: #ffffff; margin-top: 7px;">Delete</button>
						</div>		
					</div>
				</div>

				<div class="mix category-2 content-portofolio">
					<div class="col-md-offset-1 col-md-12 user-portofolio-preview">
						<div class="col-md-7">
							<a href="#"><legend><h5 color="#de5a51" class="text-center">About Portofolio</h5></legend></a>
							<p>this game will change the old game, like flappy bird etc. 
							<br><a href="#"> Read More -></a></p>
						</div>
						<div class="col-md-3" style="top: 20px;">
							<h4><strong>Portofolio Title</strong></h4>
							<p style="margin-top: -10px;">by <font color="#de5a51">Si Fulan </font></p>
						</div>
						<div class="col-md-2" style="top: 20px;">
							<button style="width: 75px; background: blue; color: #ffffff;">Edit</button>
							<button style="width: 75px; background: red; color: #ffffff; margin-top: 7px;">Delete</button>
						</div>		
					</div>
				</div>

				<div class="mix category-2 content-portofolio">
					<div class="col-md-offset-1 col-md-12 user-portofolio-preview">
						<div class="col-md-7">
							<a href="#"><legend><h5 color="#de5a51" class="text-center">About Portofolio</h5></legend></a>
							<p>i make this game for Middle exam of AP2. blablabla.
							<br><a href="#"> Read More -></a></p>
						</div>
						<div class="col-md-3" style="top: 20px;">
							<h4><strong>Portofolio Title</strong></h4>
							<p style="margin-top: -10px;">by <font color="#de5a51">Si Fulan </font></p>
						</div>
						<div class="col-md-2" style="top: 20px;">
							<button style="width: 75px; background: blue; color: #ffffff;">Edit</button>
							<button style="width: 75px; background: red; color: #ffffff; margin-top: 7px;">Delete</button>
						</div>		
					</div>
				</div>

				<div class="mix category-1 content-portofolio">
					<div class="col-md-offset-1 col-md-12 user-portofolio-preview">
						<div class="col-md-7">
							<a href="#"><legend><h5 color="#de5a51" class="text-center">About Portofolio</h5></legend></a>
							<p>this portofolio has made in Jakarta. blablabla.
							<br><a href="#"> Read More -></a></p>
						</div>
						<div class="col-md-3" style="top: 20px;">
							<h4><strong>Portofolio Title</strong></h4>
							<p style="margin-top: -10px;">by <font color="#de5a51">Si Fulan </font></p>
						</div>
						<div class="col-md-2" style="top: 20px;">
							<button style="width: 75px; background: blue; color: #ffffff;">Edit</button>
							<button style="width: 75px; background: red; color: #ffffff; margin-top: 7px;">Delete</button>
						</div>		
					</div>
				</div>

			</div>

			<!------------------------------------ Kolom Kanan ---------------------------------->

			<div class="col-md-3" style="left: 50px;">
				<div class="col-md-12 text-right">
					<img src="images/categories22.png" style="margin-right: 45px; padding-bottom:25px; z-index:-1;"
					class="col-md-offset-8 col-md-4">
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

		</div>
	</body>

</html>