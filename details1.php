<?php include "db.php"; ?>
<?php include "navbar.php"; ?>
<div class="container">
<table class="table table-striped-columns">
        <thead>
            <tr>
                <th scope="col">Artist</th>
                <th scope="col">Songs</th>
                
            </tr>
        </thead>

            <tbody>

<?php

            if(isset($_GET['post_id'])){
                $post_id=$_GET['post_id'];
            }

            $query="SELECT * FROM posts WHERE post_id=$post_id";
            $select_all_posts_query=mysqli_query($connection,$query);
            $row=mysqli_fetch_assoc($select_all_posts_query);
            $artist=$row['Artist'];
            $language=$row['language'];
            
            $query="SELECT * FROM posts WHERE language='$language' OR Artist='$artist' ORDER BY RAND() LIMIT 10";
            $select_all_posts_query=mysqli_query($connection,$query);
            while($row=mysqli_fetch_assoc($select_all_posts_query)){
                $post_id=$row['post_id'];
                $artist=$row['Artist'];
                $language=$row['language'];
                $Url=$row['Url'];
    ?>
    
    <tr>
                <td scope="row"><?php echo $artist?></td>
                <td> <a href="detail.php?post_id=<?php echo $post_id; ?>"><?php echo $Url;?></a> </td>
            </tr>
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
                </tbody>


</table>