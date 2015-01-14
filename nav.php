 <?php
    session_start();
    if (empty($_SESSION['nama'])) {
      session_destroy();
    }
 ?>
 <!------------------------------------------------Button Header Navbar------------------------------------------------>
 <nav class="navbar navbar-induk navbar-fixed-top">
    <div class="container-fluid col-md-offset-1 col-md-10">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">
          <img class="navbar-logo" src="images/logo3.png">
        </a>
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="portofolio.php">Portofolio</a></li>
          <?php
            if(session_status() == PHP_SESSION_NONE) {
              $attr = '<a data-toggle="modal" data-target="#myModal">Upload</a>';
            }
            else {
              $attr = '<a href="upload-upload.php">Upload</a>';
            }
          ?>
          <li><?php echo $attr; ?></li>
        </ul>

        <?php
          if (session_status() == PHP_SESSION_NONE) {
            include "sign-in-database.php"; 
          }
        ?>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <?php
              if(session_status() != PHP_SESSION_NONE) {
                $user=$_SESSION['nama'];
              }
              if (session_status() == PHP_SESSION_NONE) {
                echo '<a class="navbar-font" data-toggle="modal" data-target="#myModal" id="navbar1">Sign In</a>';
              }
              else {
                echo '<a class="navbar-font dropdown-toggle" id="menu1" data-toggle="dropdown"> '. $user .' </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                          <li><p><a role="menuitem" tabindex="-1" href="myprofile.php?id='.$_SESSION["nama"].'">
                          <span class="glyphicon glyphicon-user"></span> My Profile</a></p></li>
                          <li><p><a role="menuitem" tabindex="-1" href="edit-profile.php"><span class="glyphicon glyphicon-wrench"></span> Edit Profile</a></p></li>
                          <li class="divider"></li>
                          <li><a role="menuitem" tabindex="-1" href="signout.php" name="logout"><span class="glyphicon glyphicon-off"></span> Sign Out</a></li>
                        </ul>';
              }
            ?> 
          </li> 
        </ul>

        <!--Popup-->
        <div class="modal fade" id="myModal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <img class="navbar-logo col-md-offset-2" src="images/logo2.png"style="margin-top:2px;">
              </div>
              <div class="modal-body" style="margin-top: -15px;">
                <form method="post">
                  <h2 class="col-md-offset-4">Sign In</h2><br>
                  <label class="col-md-offset-1">Username</label> <br>
                  <input name="nama" type="text" class="input-user col-md-offset-1 col-md-10" placeholder="Username atau Email" id="nama">
                  <br><br><br>
                  <label class="col-md-offset-1">Password</label> <br>
                  <input name="password" type="password" class="input-user col-md-offset-1 col-md-10" placeholder="Kata Sandi" id="password">
                  <br><br><br>
                  <input type="submit" class="btn btn-primary col-md-offset-1 col-md-10" value="Sign In" name="sign_in"> <br><br><br>
                </form>
              </div>
              <div class="modal-footer" style="margin-top: -15px;">
                <label>Not a member yet? <a style="color:#F05521;"href="signup.php">Sign Up</a></label>
              </div>
            </div>
          </div>
        </div>
        <!--End Popup-->
        <form method="get" action="search-result.php">
          <div class="input-group col-md-3" style="left:20px;">
            <input type="text" name="search" class="form-control" placeholder="Search portofolio...">       
            <span class="input-group-btn">
              <button name"submit_search" class="btn btn-default" type="submit">
                <img class="navbar-search-box-icon" src="images/search_icon.png">
              </button>
            </span>
          </div>
       </form>
      </div>        
     </div>  
 </nav>