<?php include "db.php"; ?>
<?php include "navbar.php"; ?>
<div class="container">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
<div class="row">
    <?php

if(isset($_GET['post_id'])){
                $post_id=$_GET['post_id'];
            }
            
            $query="SELECT * FROM posts WHERE post_id=$post_id";
            $select_all_posts_query=mysqli_query($connection,$query);
            $row=mysqli_fetch_assoc($select_all_posts_query);
            $artist=$row['Artist'];
            $language=$row['language'];
            $Url=$row['Url'];
            $post_image=$row['post_image'];
            
            ?>
            <img src="<?php echo "image/." . $post_image; ?>" width="320" height="500" alt="">
            <br>
         <audio controls>
             <source src="<?php echo "upload/." . $Url; ?>" type="audio/mpeg">
             <!-- <source src="Admin/upload/<?php echo $Url; ?>" type="audio/mpeg"> -->
            </audio>
            
            <?php
            
            $query="SELECT * FROM posts WHERE language='$language' OR Artist='$artist' ORDER BY RAND() LIMIT 10";
            $select_all_posts_query=mysqli_query($connection,$query);
            while($row=mysqli_fetch_assoc($select_all_posts_query)){
                $post_id=$row['post_id'];
                $artist=$row['Artist'];
                $language=$row['language'];
                $Url=$row['Url'];
                ?>
    
    <div class="col-lg-4 ">
        
        <div class="card music-card" >
            <div class="card-body">
<h5 class="card-title "></h5>
<h6 class="card-subtitle mb-2 text-body-primary"><?php echo $artist?></h6>
<a href="#" class="card-link"><a href="detail.php?post_id=<?php echo $post_id; ?>"><?php echo $Url;?></a> </a>
</div>
</div>


</div>
<!-- echo "<tr>";
    echo "<td>$artist</td>";
    echo "<td>$language</td>"; -->
    <!-- <a href="detail.php?post_id=<?php echo $post_id; ?>"><?php echo $Url;?></a> -->
    
    <!-- echo "<td>  <a  href='detail.php?post_id=echo $post_id;'>$Url</a></td>"; -->
    
    <!-- //      echo "<td><audio src='uploads/.$Url' 
    //      controls>
    // </audio></td>"; -->
    
    
    <?php      }
    ?>
             
             </html>