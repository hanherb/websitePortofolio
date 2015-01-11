 <?php
    session_start();
    if (!$_SESSION['nama']) {
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
                echo '<a class="navbar-font" data-toggle="modal" data-target="#myModal" id="nav1">Sign in</a>';
              }
              else {
                echo '<a class="navbar-font dropdown-toggle" id="menu1" data-toggle="dropdown">' . $user . '
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                          <li><a role="menuitem" tabindex="-1" href="#">My Profile</a></li>
                          <li><a role="menuitem" tabindex="-1" href="#">Edit Profile</a></li>
                          <li class="divider"></li>
                          <li><a role="menuitem" tabindex="-1" href="signout.php" name="logout">Sign Out</a></li>
                        </ul>
                      </a>';
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
                <img class="navbar-logo col-md-offset-2" src="images/logo2.png">
              </div>
              <div class="modal-body">
                <form method="post">
                  <h2 class="col-md-offset-4">Sign In</h2><br>
                  <label class="col-md-offset-1">Username</label> <br>
                  <input name="nama" type="text" class="input-user col-md-offset-1 col-md-10" placeholder="Username atau Email" id="nama">
                  <br><br><br>
                  <label class="col-md-offset-1">Password</label> <br>
                  <input name="password" type="password" class="input-user col-md-offset-1 col-md-10" placeholder="Kata Sandi" id="password">
                  <br><br><br>
<<<<<<< HEAD
                  <input type="submit" class="btn btn-primary col-md-offset-1 col-md-10" value="Sign In"> <br><br><br>
                </div>
                 <div class="modal-footer">
<<<<<<< HEAD
                    <label>Not a member yet? <a style="color:#F05521;"href="sign-up.php">Sign Up</a></label>
=======
                    <label>Not a member yet? <a style="color:#F05521;"href="signup.php">Sign Up</a></label>
>>>>>>> 7f46e5b89a9a487259047dec6e24b65cd274534a
                 </div>

=======
                  <input type="submit" class="btn btn-primary col-md-offset-1 col-md-10" value="Sign In" name="sign_in"> <br><br><br>
                </form>
              </div>
              <div class="modal-footer">
                <label>Not a member yet? <a style="color:#F05521;"href="signup.php">Sign Up</a></label>
              </div>
            </div>
>>>>>>> baf803c2fb93fa0743d9aa5db598644325f1b265
          </div>
        </div>
        <!--End Popup-->

         <div class="input-group col-md-3" style="left:20px;">
           <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button"><img class="navbar-search-box-icon" src="images/search_icon.png"></button>
          </span>
       </div>
      </div>        
     </div>  
 </nav>