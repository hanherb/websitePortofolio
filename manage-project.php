<!DOCTYPE html>
<html>
<head>
  <?php include 'source.php' ?>
  <style>
    body {
    background-color: #EAEAEA;
  }
  </style>
</head>

<body>
  <?php include "nav.php"; ?>
  <div class="container-fluid col-md-12" style=" max-height: 100%;">
    <div class="container-fluid col-md-offset-2 col-md-9" style="margin-top: 100px;" >
      <ul class=" upload-upload ">
        <li><a class="col-md-2 text-center" href="upload-upload.php">Upload</a></li>
        <li><a class="col-md-3 text-center manage-activated"href="manage-project.php">Manage Project</a><li>   
      </ul>
    </div>
    
    <?php
      include 'connection.php';
      $sql = "SELECT * FROM upload WHERE created_by = '".$_SESSION['nama']."'";
      $result = mysql_query($sql);
      if($result === FALSE) { 
          die(mysql_error());
      }
    ?>
           
     <div class="col-md-offset-2 manage-project-content col-md-10" style="height: 100%;">
        <!-- <hr> --> 
      <?php
         while ($row = mysql_fetch_array($result)) { 
           echo '<div class="col-md-3 project-thumbnail" >
            <div class="thumbnail col-md-12">
              <img data-src="holder.js/100%x200" alt="100%x200" src="'.$row["preview"].'" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
              <div class="caption">
                <h4><strong>'.$row["title"].'</strong></h4>
                <p>'.ucfirst($row["category"]).'</p>
                <p>
                <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                <a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-remove-sign"></span> Delete</a>
                </p>
              </div>
            </div>
          </div>';
        }
      ?>
    </div>
  </div>
  
 <?php include "footer.php"; ?> 
   
</body>

</html>
