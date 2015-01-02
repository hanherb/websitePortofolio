<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <title>Sign Up</title>
    <style type="text/css">
      body 
      {
        background-color: #F1F1F1;
      }
      .navbar-def 
      {
        background-color: #F05521;
        color: #FFFFFF;
        border-radius: 0px;
      }
      .nav-col-f
      {
        color: #FFF;
      }

      .anjing
      {
        color: #FFF;
      }

      .nav-col-f:hover
      {
        background-color: red;
      }

      .search
      {
        width: 550px;
        padding: 10px 20px;
        margin-top: 5px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-weight: 400;
        font-size: 13px;
        color: #9d9e9e;
        text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
        background: #fff;
        top: 10px;
        border: 1px solid gray;
        border-radius: 5px;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
      }

      #search
      {
        border-radius: 7px;
      }

      .signup-form
      {
        width: 600px;
        height: 680px;
        margin: 0 auto;
        border-radius: 5px;
        border: 1px solid #F05521;
        z-index: 5;
        background: white;
        margin-bottom: 50px;
      }

      .peta
      {
        width: 600px;
        height: 450px;
        margin: 0 auto;
        border-radius: 8px;
        border: 1px solid white;
        z-index: 5;
        background: #F05521;
      }

      .header
      {
        padding: 15px 30px 30px 30px;
        color: white;
        text-align: center;
        background: #F05521;
        margin-bottom: 0px;
      }

      .logo2
      {
        width: 70%;
      }

      #sign-up
      {
        text-align: center; 
        color: gray;
        font-size: 30px;
        font-family: arial;
        margin-top: 10px;
      }
      .content .name
      {
        color: gray;
        font-size: 16px;
        font-family: 'Calibri';
        margin-top: 10px;
        margin-bottom: 0px;
      }

      .firstName
      {
        color: gray;
        padding: 7px 20px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", 'sans-serif';
        font-weight: 400;
        font-size: 13px;
        color: #000;
        text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
        background: #fff;
        top: 10px;
        border: 1px solid gray;
        border-radius: 5px;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
      }

      .lastName
      {
        color: gray;
        padding: 7px 20px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", 'sans-serif';
        font-weight: 400;
        font-size: 13px;
        color: #000;
        text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
        background: #fff;
        top: 10px;
        border: 1px solid gray;
        border-radius: 5px;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
      }

      .content .username
      {
        color: gray;
        font-size: 16px;
        font-family: 'Calibri';
        margin-top: 20px;
        margin-bottom: 0px;
      }

      .inputUsername
      {
        color: gray;
        padding: 7px 20px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", 'sans-serif';
        font-weight: 400;
        font-size: 13px;
        color: #000;
        text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
        background: #fff;
        top: 10px;
        border: 1px solid gray;
        border-radius: 5px;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
      }

      .content .email
      {
        color: gray;
        font-size: 16px;
        font-family: 'Calibri';
        margin-top: 20px;
        margin-bottom: 0px;
      }

      .inputEmail
      {
        color: gray;
        padding: 7px 20px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", 'sans-serif';
        font-weight: 400;
        font-size: 13px;
        color: #000;
        text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
        background: #fff;
        top: 10px;
        border: 1px solid gray;
        border-radius: 5px;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
      }

      .content .password
      {
        color: gray;
        font-size: 16px;
        font-family: 'Calibri';
        margin-top: 20px;
        margin-bottom: 0px;
      }

      .inputPassword
      {
        color: gray;
        padding: 7px 20px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", 'sans-serif';
        font-weight: 400;
        font-size: 13px;
        color: #000;
        text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
        background: #fff;
        top: 10px;
        border: 1px solid gray;
        border-radius: 5px;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
      }

      .content .retypePassword
      {
        color: gray;
        font-size: 16px;
        font-family: 'Calibri';
        margin-top: 20px;
        margin-bottom: 0px;
      }

      .inputretype
      {
        color: gray;
        padding: 7px 20px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", 'sans-serif';
        font-weight: 400;
        font-size: 13px;
        color: #000;
        text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
        background: #fff;
        top: 10px;
        border: 1px solid gray;
        border-radius: 5px;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
        -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
      }

      .sign-up
      {
        overflow: auto;
        background: #045;
        border: 1px solid white;
        border-radius: 5px;
        color: white;
        padding: 4px 30px 4px 30px;
        margin-top: 30px;
        margin-left: 425px;
      }

      .maps
      {
        margin-top: 20px;
      }

      #quote
      {
        color: white;
        font-family: 'Brush Script Std';
        font-size: 30px;
        text-align: center;
        text-shadow: blue;
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-def">
      <div class="col-md-12">
        <div class="col-md-4">
          <div class="container-fluid">
            <div class="navbar-header">
              <ul class="nav navbar-nav">
                <li><a class="nav-col-f" href="index1.html"><b>Home</b></a></li>
                <li><a class="nav-col-f" href="#"><b>Portofolio</b></a></li>
                <li><a class="nav-col-f" href="#"><b>Upload</b></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
            <div class"col-md-6"></div>
            <input class="search" placeholder="search">
            <img id="search" src="cari.png" width="40px" height="40px">
          </div>
        </div>
        <div class="col-md-2">
            <ul class="nav navbar-nav">
              <li><a class="nav-col-f" href="sign-in.html"><b>sign in</b></a></li>
              <li><a class="nav-col-f" href="sign-up.html"><b>sign up</b></a></li>
            </ul>
        </div>
      </div>
    </nav>

    <div class="col-md-12">
      <div class="col-md-6">
      <form class="signup-form">
        <div class="header">
          <h1>
            <img src="logo2.png" alt="Alco Inc" class="logo2">
          </h1>
        </div>  
        <div class="content">
          <div>
            <p id="sign-up">Sign Up</p>
          </div>
          <div class="col-md-12">
            <p class="name"><b>Name</b></p>
              <input class="firstName col-md-5" placeholder="First Name">
              <div class="col-md-1 offset"></div>
              <input class="lastName col-md-5" placeholder="Last Name">
          </div>
          <br>
          <div class="col-md-12">
            <p class="username"><b>Username</p></b>
              <input class="inputUsername col-md-11" placeholder="Username">
              <div class="col-md-1 offset"></div>
          </div>
          <div class="col-md-12">
            <p class="email"><b>Email</b></p>
              <input class="inputEmail col-md-11" placeholder="Email">
              <div class="col-md-1 offset"></div>
          </div>
          <div class="col-md-12">
            <p class="password"><b>Password</b></p>
              <input type="password" class="inputPassword col-md-11" placeholder="Password">
              <div class="col-md-1 offset"></div>
          </div>
          <div class="col-md-12">
            <p class="retypePassword"><b>Retype your password</b></p>
              <input class="inputretype col-md-11" type="password" placeholder="Re-type your password">
              <div class="col-md-1 offset"></div>
          </div>
          <br>  
          <div>
            <button class="sign-up">Sign Up</button>
          </div>
        </div>
        
      </form>
      </div>
      <div class="col-md-6">
      <form class="peta">
        <div class="header">
          <h1>
            <img src="logo2.png" alt="Himti Portofolio" class="logo2" >
          </h1>
          </div>  
        <div class="content">
          <div class="col-md-12">
            <img class="maps col-md-12" src="peta-indonesia.png" >
          </div>
          <div class="col-md-12">
            <span id="quote" class="col-md-12">"Indonesia in your hand "</span>
          </div>
        </div>
      </form>
      </div>
    </div>
    <
  </body>
</html>
