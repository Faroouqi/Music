<?php include "login_asset.php"; 

?>
<?php include "navbar.php"; ?>

<!-- <a href="index.php">Logut</a> -->
<?php
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    // $query="SELECT * FROM users WHERE username='$username' ";
    // $user_select=mysqli_query($connection,$query);
    // $row=mysqli_fetch_array($user_select);
    // $password=$row['password'];
    $sql="UPDATE users SET password = '$password' WHERE username='$username'";
    mysqli_query($connection, $sql);

}
?>
<head>
    <title>Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css1/styles.css">
</head>

  <body class="login-body">

        <div id="login-row" class="row justify-content-center align-items-center">
            
           
            <div class="login-box">
                <div class="login-img">
                    <img src="images/music-solid.png" alt="music">
                </div>
           
                    <form class="form" action="" method='post'>
                        <div class="form-group">
                            <label for="username" ></label><br>
                            <input type="text" name="username" id="username" placeholder="Username" class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="password" ></label><br>
                            <input type="password" name="password" id="password" placeholder="Enter new Password" class="form-control">
                        </div>
                        <br>
                        <div class="form-group login-footer d-grid ">
                            <input type="submit" name="login" class="btn btn-secondary btn-md" value="submit">
                            <br><a class="link-light link-opacity-50" href="index.php">Logout</a>
                            
                        </div>
                    </form>
                </div> 
            </div>

  </body>

