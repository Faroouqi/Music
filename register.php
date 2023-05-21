<?php include "db.php"; ?>
<?php
if(isset($_POST['new_song'])){

    $username=$_POST['uname'];
    $password=$_POST['password'];
    $phoneno=$_POST['Mobile'];
    $artist1=$_POST['Artist1'];
    $artist2=$_POST['Artist2'];
    $artist3=$_POST['Artist3'];
    $language='hindi';
    $query="SELECT * FROM users WHERE username='$username'";
    $add_post=mysqli_query($connection,$query);
    $row=mysqli_fetch_assoc($add_post);
    $phone=$row['phoneno'];
    // echo $phone;
    if($phone==NULL)
    {
        $query="INSERT INTO users(username,password,Artist1,phoneno,Artist2,Artist3,language) VALUES ('{$username}',{$password},'{$artist1}','{$phoneno}','{$artist2}','{$artist3}','{$language}')";
        $add_post=mysqli_query($connection,$query);
      
        header("Location:recommend.php?artist1=$Artist1&artist3=$Artist3&artist2=$Artist2");
    }
    else
    {
        echo '<script>alert("Username Already Exist")</script>';
        // header("Location:register.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css1/styles.css">
    

</head>
<body>

    <div class="row">
        <div class="col-md-6 col1">

            <div class="sign-box">
                <form action="" method="post" enctype="multipart/form-data" >
                    <h1>Let's get you started</h1><br><br>
                
                    <label for="uname" >Username</label><br>
                    <input type="text" id="username"  name="uname" class="form-control" ><br>
    
                    <label for="Mobile" >Phone number</label><br>
                    <input type="tel" id="phone"  name="Mobile" class="form-control"><br>
                    <label for="tags" id="second">Language</label><br>
                    <select class="form-select" aria-label="Default select example" name="Artist1">
                        <option selected>Select Language</option>
                        <option value="Arjit Singh">Hindi</option>
                        <option value="Shreya Ghoshal">Malayalam</option>
                       
                      </select>
                    <label for="tags" id="second">Artist 1</label><br>
                    <select class="form-select" aria-label="Default select example" name="Artist1">
                        <option selected>Select Artist1</option>
                        <option value="Arjit Singh">Arjit Singh</option>
                        <option value="Shreya Ghoshal">Shreya Ghoshal</option>
                       
                      </select>
                      <label for="tags" id="first">Artist 2</label><br>
                      <select class="form-select" aria-label="Default select example" name="Artist2">
                        <option selected>Select Artist2</option>
                        <option value="Jubin Nautiyal">Jubin Nautiyal</option>
                        <option value="Mika Singh">Darshan Raval</option>
                      </select>
                      <label for="tags" id="first">Artist 3</label><br>
                      <select class="form-select" aria-label="Default select example" name="Artist3">
                        <option selected>Select Artist3</option>
                        <option value="Millind gaba">Vijay Yesudas</option>
                        <option value="param singh">param singh</option>
                      </select>
    
                    <label for="password" >Create password</label><br>
                    <input type="password" id="password"  name="password" class="form-control"><br>
    
                    <div class="form-group login-footer d-grid ">
                        <input type="submit" name="new_song" class="btn btn-secondary btn-md" value="Signup"><br>
                        <p >Already a user?<a class="link-primary link-opacity-80" href="index.php">login</a></p>
                    
                    </div>
     
                </form>

            </div>
            

        </div>
        <div class="col-md-6 col2">
            <div class="sign-phrase">
                <h2>“Where words fail, music speaks.”</h2>
        
            </div>
            <div class="sign-author">
                <h4>- Hans Christian Andersen.</h4>
        
            </div> 
            
        </div>

    </div>
    
</body>
</html>
<!-- <form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="uname">username</label>
    <input type="text" class="form-control" name="uname">
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="text" class="form-control" name="password">
</div>

<div class="form-group">
    <label for="Mobile">Phone Number</label>
    <input type="text" class="form-control" name="Mobile">
</div>



<div class="form-group">
    <label for="Artist1">Artist1</label><br>
    <select name="Artist1">
        <option value='Arjit Singh'>Arjit Singh</option>
        <option value='Shreya Ghoshal'>Shreya Ghoshal</option>
        <option value='Ankit Tiwari'>Ankit Tiwari</option>
        <option value='Jubin_Nautiyal'>Jubin Nautiyal</option>
        <option value='Ap_dhillon'>Ap dhillon</option>
        <option value='Palak_Muchhal'>Palak Muchhal</option>
    </select>
</div>
<div class="form-group">
    <label for="Artist2">Artist2</label><br>
    <select name="Artist2">
    <option value='Arjit Singh'>Arjit Singh</option>
        <option value='Shreya Ghoshal'>Shreya Ghoshal</option>
        <option value='Ankit Tiwari'>Ankit Tiwari</option>
        <option value='Jubin_Nautiyal'>Jubin Nautiyal</option>
        <option value='Ap_dhillon'>Ap dhillon</option>
        <option value='Palak_Muchhal'>Palak Muchhal</option>
    </select>
</div>
<div class="form-group">
    <label for="Artist3">Artist3</label><br>
    <select name="Artist3">
    <option value='Arjit Singh'>Arjit Singh</option>
        <option value='Shreya Ghoshal'>Shreya Ghoshal</option>
        <option value='Ankit Tiwari'>Ankit Tiwari</option>
        <option value='Jubin_Nautiyal'>Jubin Nautiyal</option>
        <option value='Ap_dhillon'>Ap dhillon</option>
        <option value='Palak_Muchhal'>Palak Muchhal</option>
    </select>
</div>
<div class="form-group">
    <label for="Language">Language</label><br>
    <select name="Language">
        <option value="Hindi">Hindi</option>
        <option value="Malayalam">Malayalam</option>
        <option value="Tamil">Tamil</option>
        <option value="Tamil">Telugu</option>
        
    </select>
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" name="new_song" value="Add Post">
</div>

</form> -->
