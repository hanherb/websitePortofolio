<!DOCTYPE html>
<html>
<head>
  <?php include 'source.php' ?>;
</head>

<body>
  <?php
    include 'nav.php';
    include "connection.php";

    $url = $_SERVER['REQUEST_URI'];
    $userpage = substr($url, strpos($url, "=") + 1);
    
    $sql = "SELECT * FROM user WHERE username = '$userpage'";
    $result = mysql_query($sql);
    if($result === FALSE) { 
        die(mysql_error());
    }

    while ($row = mysql_fetch_array($result)) {
      $username = $row['username'];
      $nim = $row['nim'];
      $fullname = $row['fullname'];
      $year = $row['year'];
      $avatar = $row['avatar'];
    }
  ?>
  <div class="col-md-offset-1 col-md-10 myprofile-page">

      <div class="myprofile-heading ">
        <img src="images/cover.png"> <!-- cover  -->
        <div class="myprofile-avatar col-md-2">
          <a href=<?php echo '"'.$avatar.'"' ?> target="_blank">
            <img src=<?php echo '"'.$avatar.'"' ?>>
          </a>
        </div>
        <h2 class="col-xs-offset-2"><?php echo $username.' <small>('.$fullname.')</small>' ?></h2>
        <?php

          if($_SESSION['nama'] == "admin") {
            echo '<form method="post">
                    <button type="submit" class="btn btn-danger" name="block"><span class="glyphicon glyphicon-remove-sign"></span> Block User</button>
                  </form>';
          }
          if(isset($_POST['block'])) {
            $sqlBlock = "UPDATE user SET block = '1' WHERE username = '$userpage'";
            mysql_query($sqlBlock);
          }
        ?>
      </div>
    
      <div class="col-md-12 myprofile-about">
        <p><span class="glyphicon glyphicon-user"></span> Student ID Number <?php echo $nim ?></p>
        <p><span class="glyphicon glyphicon-flag"></span> Year <?php echo $year ?></p>        
      </div>
    
      <!-- Portfolio Content -->
      <div class="row col-md-12 myprofile-portofolio-content">
        <?php
          $sql = "SELECT * FROM upload WHERE created_by = '$userpage'";
          $result = mysql_query($sql);
          if($result === FALSE) { 
              die(mysql_error());
          }

          while ($row = mysql_fetch_array($result)) {
            echo '<div class="col-md-3 myprofile-img-template">
                    <a href="portofolio-project.php?id='.$userpage.'-'.preg_replace("/\s+/", "_", $row["title"]).'">
                      <img src="'.$row["preview"].'">
                    </a>
                    <h4><strong>'.$row["title"].'</strong></h4>
                    <p>'.ucfirst($row["category"]).'</p>
                  </div>';
          }
        ?>
      </div>
  </div>
    


   <?php include 'footer.php' ?>
</body>

</html>
