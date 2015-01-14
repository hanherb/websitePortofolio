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
              <a href="portofolio-project.php?id='.$row["created_by"].'-'.preg_replace("/\s+/", "_", $row["title"]).'">
                <img data-src="holder.js/100%x200" alt="100%x200" src="'.$row["preview"].'" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
              </a>
              <div class="caption">
                <h4><strong>'.$row["title"].'</strong></h4>
                <p>'.ucfirst($row["category"]).'</p>
                <p>
                <form method="get">
                  <button type="submit" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-edit"></span> Edit</button> 
                  <button type="submit" class="btn btn-danger" role="button" name="delete">
                    <span class="glyphicon glyphicon-remove-sign"></span> Delete
                  </button>
                </form>
                </p>
              </div>
            </div>
          </div>';

          // // if(isset($_GET['delete'])) {
          // //   $sqlDelete = "DELETE FROM upload WHERE title='".$row['title']."' AND created_by='".$row['created_by']."'";
          // //   mysql_query($sqlDelete);
          // }
        }
      ?>
    </div>
  </div>
  
 <?php include "footer.php"; ?> 
   
</body>

</html>
