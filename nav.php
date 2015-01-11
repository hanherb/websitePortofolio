 <!------------------------------------------------Button Header Navbar------------------------------------------------>
 <nav class="navbar navbar-induk navbar-fixed-top">
    <div class="container-fluid col-md-offset-1 col-md-10">
     <div class="navbar-header">
      <a class="navbar-brand" href="#">
      <img class="navbar-logo" src="images/logo3.png">
       <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="portofolio.php">Portofolio</a></li>
          <li><a href="upload-upload.php">Upload</a></li>
       </ul>

          <ul class="nav navbar-nav navbar-right" style="display:block;">


          <li>
          <?php
          $_SESSION=NULL;

           if($_SESSION==NULL){

             $user="Sign In";
            }
            else{


              $user=$_SESSION['username'];
            }


            ?>

          <a class="navbar-font" data-toggle="modal" data-target="#myModal"><?php echo $user ?></a></li> 
       </ul>

       <!--Popup-->
       <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1">
          <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <img class="navbar-logo col-md-offset-2" src="images/logo2.png">
                  </div>
                <div class="modal-body">
                  <h2 class="col-md-offset-4">Sign In</h2><br>
                  <label class="col-md-offset-1">Username</label> <br>
                  <input name="nama" type="text" class="input-user col-md-offset-1 col-md-10" placeholder="Username atau Email" id="nama">
                  <br><br><br>
                  <label class="col-md-offset-1">Password</label> <br>
                  <input name="password" type="password" class="input-user col-md-offset-1 col-md-10" placeholder="Kata Sandi" id="password">
                  <br><br><br>
                  <input type="submit" class="btn btn-primary col-md-offset-1 col-md-10" value="Sign In"> <br><br><br>
                </div>
                 <div class="modal-footer">
                    <label>Not a member yet? <a style="color:#F05521;"href="sign-up.php">Sign Up</a></label>
                 </div>

          </div>
        </div>
      </div>

         <div class="input-group col-md-3" style="left:20px;">
           <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button"><img class="navbar-search-box-icon" src="images/search_icon.png"></button>
          </span>
       </div>
      </div>        
     </div>  
 </nav>