<?php 
include "db.php";

if(isset($_POST['create_post'])){

    $lang=$_POST['lang'];
    $artist=$_POST['artist'];
    $post_image=$_FILES['post_image']['name'];
    $post_image_temp=$_FILES['post_image']['tmp_name'];

    move_uploaded_file($post_image_temp,"upload/.$post_image");

    		// Now let's Insert the video path into database
            $query = "INSERT INTO posts(Url,Artist,language) VALUES('{$post_image}','{$artist}','{$lang}')";
            $add_post=mysqli_query($connection,$query);


    if(!$add_post){
        die("Failed".mysqli_error($connection));
    }
        header("Location:recommend.php");
    
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
                <form >
                    <h1>Add Songs</h1><br><br>
                
                    <label for="artist" >Artist</label><br>
                    <input type="text" id="username"  name="artist" class="form-control" ><br>
    
                    <label for="lang" >Language</label><br>
                    <input type="tel" id="phone"  name="lang" class="form-control"><br>
    
                    <div class="form-group">
<label for="image">Song</label>
<input type="file" name="post_image" class="form-control" accept=".mp3" title="Songs"/>
    
                    <div class="form-group login-footer d-grid " id='song'>
                        <input type="submit" name="create_post" class="btn btn-secondary btn-md" value="Add Song"><br>
<!-- /<p >Already a user?<a class="link-primary link-opacity-80" href="login.html">login</a></p> -->
                    
                    </div>
     
                </form>

            </div>
            

        </div>
        <div class="col-md-6 col2">
            <div class="sign-phrase">
                <h2>MUSIC</h2>
                <H3> RECOMMENDER</H3>
        
           
            <div class="sign-author">
                <h4>.</h4>
        
            </div> 
            
        </div>

    </div>
    
</body>
</html>
<!-- <form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="lang">Language</label>
    <input type="text" class="form-control" name="lang">
</div>
<div class="form-group">
    <label for="artist">Artist</label>
    <input type="text" class="form-control" name="artist">
</div>

<div class="form-group">
<label for="image">Song</label>
<input type="file" name="post_image" class="form-control" accept=".mp3" title="Songs"/>
    
    <!-- <input type="file" name="post_image"> -->

<!-- <div class="form-group">
    <input class="btn btn-primary" type="submit" name="create_post" value="Add Post">
</div>

</form> --> -->