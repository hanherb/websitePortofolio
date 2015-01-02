<!DOCTYPE html>
<html>
<head>
	<?php include 'source.php' ?>
	<style>
	body{
		background-color: #F2F1ED;
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

<body>
	<?php include "nav.php"; ?>

	<div class="col-md-offset-1 container-fluid" style="margin-top:80px;">
		<hr class="col-md-10">
		<!--Row Kiri-->
		<div class=" col-md-8">
			<h1><strong>Petisi Paramadina</strong></h1>
			<p>Website | Mobile Apps</p>

			<!-- Slide Show -->
			<div id="portofolio-project-slideshow" class="carousel slide" data-ride="carousel">
			      <ol class="carousel-indicators">
			        <li data-target="#portofolio-project-slideshow" data-slide-to="0" class="active"></li>
			        <li data-target="#portofolio-project-slideshow" data-slide-to="1" class=""></li>
			        <li data-target="#portofolio-project-slideshow" data-slide-to="2" class=""></li>
			      </ol>
			     <div class="carousel-inner" role="listbox">
				        <div class="item active">
				          <img src="images/2.png" data-holder-rendered="true">
				          <div class="carousel-caption">
				            <h3>First slide label</h3>
				            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				          </div>
				        </div>
				        <div class="item">
				          <img src="images/2-b.png" data-holder-rendered="true">
				          <div class="carousel-caption">
				            <h3>Second slide label</h3>
				            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				          </div>
				        </div>
				        <div class="item">
				          <img src="images/2-c.png" data-holder-rendered="true">
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
		<div class="col-md-4" style="top: 80px; left:-80px;">
			<h2>Description</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
			<h2>Team</h2>
			<p>Suprapto(2012), Suparman(2013), Sumarni(2014)</p>

		</div>

	</div>

	



</body>
</html>