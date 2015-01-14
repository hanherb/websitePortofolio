<!DOCTYPE html>
<html>
<head>
	<?php 
		include 'source.php';
		include 'connection.php';
	?>
<body style="background-color: #EAEAEA;">
	<?php include "nav.php"; ?>
	
	
	<div class="container-fluid" style="margin-top:80px; height: 720px; max-height: 100%;">
		<?php
	      include 'connection.php';
	      $search = $_GET['search'];
	      $sql = "SELECT * FROM upload WHERE title = '".$search."'";
	      $result = mysql_query($sql);
	      if($result === FALSE) { 
	          die(mysql_error());
	      }
	    ?>
	    <div class="col-md-offset-2 col-md-10" style="height: 100%;">
	        <!-- <hr> --> 
	    	<?php
	        	while ($row = mysql_fetch_array($result)) { 
	        		echo '<div class="mix '. $row["category"] .' content-portofolio">
						<div class="col-md-3 portofolio-img-template">
							<a href="portofolio-project.php?id=
							'.$row["created_by"].'-'.preg_replace("/\s+/", "_", $row["title"]).'">
								<img src="'. $row["preview"] .'" id="imagePreview">
							</a>
						</div>
						<h4><strong>'. $row["title"] .'</strong></h4>
						<p>by <a href="user-page.php?id='.$row["created_by"].'"><font color="#de5a51">'. $row["created_by"] .'</a></font></p>
					  </div>';
		        }
	      	?>
	    </div>
	</div>