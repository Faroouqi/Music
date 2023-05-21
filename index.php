
  <head>
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css1/styles.css">
</head>

  <body class="login-body">

        <div id="login-row" class="row justify-content-center align-items-center">
            
           
            <div class="login-box">
                <div class="login-img">
                    <img src="images/music-solid.png" alt="music">
                </div>
           
                    <form class="form" action="login.php" method='post'>
                        <div class="form-group">
                            <label for="username" ></label><br>
                            <input type="text" name="username" id="username" placeholder="Username" class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="password" ></label><br>
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                        </div>
                        <br>
                        <div class="form-group login-footer d-grid ">
                            <input type="submit" name="login" class="btn btn-secondary btn-md" value="login">
                            <br><a class="link-light link-opacity-50" href="register.php">Sign Up</a>
                            
                        </div>
                    </form>
                </div> 
            </div>

  </body>


<!-- <html>
<head>
   
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <body>
       <div class="loginbox">
        <img src="images/avatar.png" class="avatar">
    <h1>Login Here</h1>
    <form action="login.php" method="post">
        <p>Username</p>
<input type="text" class="form-control" name="username" placeholder="Enter Username">
<p>Password</p>
<input type="password" class="form-control" name="password" placeholder="Enter Password">
<input type="submit" name="login" value="Login">
<a href='register.php' style='color:red;'>Register</a>
<a href='upload.php' style='color:red;'>upload</a>
        </form>   
    </div> 
    </body>
</head>
</html> -->