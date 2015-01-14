<!DOCTYPE html>
<html>
<head>
	<?php 
		include 'source.php';
		include 'connection.php';
	?>
	<style>
	body{
		background-color: #EAEAEA;
	}

	h2, h3, p {
		/*font-family: "Times New Roman", Times, serif;*/
		font-family: Helvetica,Arial,'Liberation Sans',FreeSans,sans-serif;
		color: #444;
	}
	hr {
	  border-color: black;
	  border-width: 6px 0;
	}
  	
	</style>
</head>

<?php
	$url = $_SERVER['REQUEST_URI'];
	$parsedUrl = substr($url, strpos($url, "=") + 1);
	$arr = explode("-", $parsedUrl);
	$createdBy = $arr[0];
	$title = str_replace("_", " ", $arr[1]);
	
	$sql = "SELECT * FROM upload WHERE created_by = '".$createdBy."' AND title = '".$title."'";
	$result = mysql_query($sql);
	if($result === FALSE) { 
	    die(mysql_error());
	}

	while ($row = mysql_fetch_array($result)) {
		$title = $row['title'];
		$description = $row['description'];
		$createdBy = $row['created_by'];
		$category = strtoupper($row['category']);
		$link = $row['link'];
		$preview = '"'.$row['preview'].'"';
	}
?>

<body>
	<?php include "nav.php"; ?>

	<div class="col-md-offset-1 container-fluid portofolio-project" style="margin-top:80px;">

		<!--Row Kiri-->
		<div class="portofolio-project-title-link col-md-12">
			<h1><?php echo $title ?></h1>
			<p><a href="portofolio.php">PORTOFOLIO</a> . <a><?php echo $category ?></a></p>
		</div>
		<div class="col-md-7 portofolio-project-slideshow-template"> 


			<!-- Slide Show -->
			<div id="portofolio-project-slideshow" class="carousel slide" data-ride="carousel">
			      <ol class="carousel-indicators">
			        <li data-target="#portofolio-project-slideshow" data-slide-to="0" class="active"></li>
			        <li data-target="#portofolio-project-slideshow" data-slide-to="1" class=""></li>
			        <li data-target="#portofolio-project-slideshow" data-slide-to="2" class=""></li>
			      </ol>
			     <div class="carousel-inner" role="listbox">
				        <div class="item active">
				          <img src=<?php echo $preview ?> data-holder-rendered="true" style="width: 600px; height: 333px;">
				          <div class="carousel-caption">
				            <h3>First slide label</h3>
				            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				          </div>
				        </div>
				        <div class="item">
				          <img src="images/2-b.png" data-holder-rendered="true" class="slide-image" style="width: 600px; height: 333px;">
				          <div class="carousel-caption">
				            <h3>Second slide label</h3>
				            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				          </div>
				        </div>
				        <div class="item">
				          <img src="images/2-c.png" data-holder-rendered="true" class="slide-image" style="width: 600px; height: 333px;">
				          <div class="carousel-caption">
				            <h3>Third slide label</h3>
				            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
				          </div>
				        </div>
			      </div>
			      
			      <a class="left carousel-control" href="#portofolio-project-slideshow" role="button" data-slide="prev">
			        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			        <span class="sr-only">Previous</span>
			      </a>
			      <a class="right carousel-control" href="#portofolio-project-slideshow" role="button" data-slide="next">
			        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			        <span class="sr-only">Next</span>
			      </a>
	    	</div>
		</div>

		<!--Row Kanan-->
		<div class="col-md-4 portofolio-project-right">
			<hr>
			<h4>Description</h4>
			<p><?php echo $description ?></p>
			<hr>
			<h4>Link</h4>
			<p><a href="#"><?php echo $link ?></a></p>
			<hr>
			<h4>Created By</h4>
			<p><?php echo $createdBy ?></p>
			<hr>

		</div>

	</div>
	
	 <?php include "footer.php"; ?> 

	



</body>
</html>