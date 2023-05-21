<?php session_start(); ?>
<?php 
$artist1=$_SESSION['Artist1'];
$artist2=$_SESSION['Artist2'];
$artist3=$_SESSION['Artist3'];
$language=$_SESSION['language']

?>
<?php include "navbar.php"; ?>
<?php include "db.php"; ?>

<?php include "login_asset.php"; 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css2/style.css">
</head>
<body>
    
</body>
</html>

<h1 class="h1-index" >Recommended Songs List</h1>
<!-- <div class="container"> -->
<!-- <table class="table table-striped-columns">
        <thead>
            <tr>
                <th scope="col">Artist</th>
                <th scope="col">Songs</th>
                
            </tr>
        </thead> -->
    <div class="row">

        <?php 
        // echo $language;
            // WHERE Aritst='$Artist1' and language='$language' OR Aritst='$Artist2' and language='$language' OR Aritst='$Artist2' and language='$language' language='$language'
            $query="SELECT * FROM posts WHERE Artist='$artist1' and language='$language' OR Artist='$artist3' and language='$language' OR Artist='$artist2' and language='$language' OR language='$language' LIMIT 10";
            $select_posts=mysqli_query($connection,$query);
            
            while($row=mysqli_fetch_assoc($select_posts)){
                $post_id=$row['post_id'];
                $artist=$row['Artist'];
                $language=$row['language'];
                $Url=$row['Url'];
                $post_image=$row['post_image'];
                ?>
                <!-- <tbody> -->
            <!-- <tr> -->
                <!-- <td scope="row"><?php echo $artist?></td>
                <td> <a href="detail.php?post_id=<?php echo $post_id; ?>"><?php echo $Url;?></a> </td> -->
            <!-- </tr> -->


      <!-- <div class="col-sm-6 mb-3 mb-sm-0"> -->
      <div class="col-lg-4 ">

      <div class="card music-card" >
          <div class="card-body">
      <img src="<?php echo "Admin/image/." . $post_image; ?>" class="card-img-top" alt="...">
    <h5 class="card-title "></h5>
    <h6 class="card-subtitle mb-2 text-body-primary"><?php echo $artist?></h6>
    <a href="#" class="card-link"><a href="detail.php?post_id=<?php echo $post_id; ?>"><?php echo $Url;?></a> </a>
  </div>
</div>
        
        
      </div>
    

                
            <!-- //      echo "<td><audio src='uploads/.$Url' 
            //      controls>
            // </audio></td>";
                 echo "</tr>"; -->
                <!-- </tbody> -->
                
   <?php     }
?>

        </div>
<!-- <a href="upload.php" > Upload</a> -->


<!-- </table>
        </div> -->