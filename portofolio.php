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
						<a class="filter" href="#" data-filter=".programming">Programming</a><br>
						<a class="filter" href="#" data-filter=".game">Game</a><br>	
						<a class="filter" href="#" data-filter=".mobile">Mobile Apps</a><br>	
						<a class="filter" href="#" data-filter=".website">Website</a><br>
						<a class="filter" href="#" data-filter=".other">Other</a>
					</div>
				</div>
			</div>
		
		<!--Row Kanan-->
		<div id="container" class="col-md-10" style="left: 65px; height:100%;">
			<?php
				mysql_connect("localhost","root","") or die(mysql_error());
   				mysql_select_db("portofolio") or die(mysql_error());

				$sql = "SELECT * FROM upload";
				$result = mysql_query($sql);
				if($result === FALSE) { 
				    die(mysql_error());
				}
				while ($row = mysql_fetch_array($result)) {
					echo '<div class="mix '. $row["category"] .' content-portofolio">
						<div class="col-md-3 portofolio-img-template">
							<a href="portofolio-project.php"><img src="'. $row["preview"] .'" id="imagePreview"></a>
						</div>
						<h4><strong>'. $row["title"] .'</strong></h4>
						<p>by <font color="#de5a51">'. $row["created_by"] .'</font></p>
					  </div>';
				}	
			?>
		</div>

	</div>


</body>

</html>
