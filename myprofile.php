<!DOCTYPE html>
<html>
<head>
  <?php include 'source.php' ?>;
</head>

<body>
  <?php include 'nav.php' ?>
  <div class="col-md-offset-1 col-md-10 myprofile-page">

      <div class="myprofile-heading ">
        <img src="images/home-3.jpg"> <!-- cover  -->
        <div class="myprofile-avatar col-md-2">
          <img src="images/avatar-upload.png">
        </div>
        <h2 class="col-xs-offset-2">Username</h2>
        <?php
          include "connection.php";
          
          $url = $_SERVER['REQUEST_URI'];
          $userpage = substr($url, strpos($url, "=") + 1);

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
        <p><span class="glyphicon glyphicon-user"></span> Student ID Number 113103003</p>
        <p><span class="glyphicon glyphicon-flag"></span> Year 2013</p>        
      </div>
    
      <!-- Portfolio Content -->
      <div class="row col-md-12 myprofile-portofolio-content">
        <div class="col-md-3 myprofile-img-template">
            <img src="images/3-myprofile.png">
            <h4><strong>Project's Name</strong></h4>
            <p>Category</p>
        </div>
        
        <div class="col-md-3 myprofile-img-template">
            <img src="images/3-myprofile.png">
            <h4><strong>Project's Name</strong></h4>
            <p>Category</p>
        </div>

        <div class="col-md-3 myprofile-img-template">
            <img src="images/3-myprofile.png">
            <h4><strong>Project's Name</strong></h4>
            <p>Category</p>
        </div>

        <div class="col-md-3 myprofile-img-template">
            <img src="images/3-myprofile.png">
            <h4><strong>Project's Name</strong></h4>
            <p>Category</p>
        </div>
        <div class="col-md-3 myprofile-img-template">
            <img src="images/3-myprofile.png">
            <h4><strong>Project's Name</strong></h4>
            <p>Category</p>
        </div>
        
        <div class="col-md-3 myprofile-img-template">
            <img src="images/3-myprofile.png">
            <h4><strong>Project's Name</strong></h4>
            <p>Category</p>
        </div>

        <div class="col-md-3 myprofile-img-template">
            <img src="images/3-myprofile.png">
            <h4><strong>Project's Name</strong></h4>
            <p>Category</p>
        </div>

        <div class="col-md-3 myprofile-img-template">
            <img src="images/3-myprofile.png">
            <h4><strong>Project's Name</strong></h4>
            <p>Category</p>
        </div>

      </div>

  </div>
    


   <?php include 'footer.php' ?>
</body>

</html>
