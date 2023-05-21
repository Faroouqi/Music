<?php include "navbar.php"; ?>
<?php include "db.php"; ?>
<?php include "login_asset.php"; 

?>
<!-- <?php echo $username; ?> -->

<h1>Songs List</h1>
<div class="container">
<table class="table table-striped-columns">
        <thead>
            <tr>
                <th scope="col">Artist</th>
                <th scope="col">Songs</th>
                <th scope="col">Button</th>
                
                
            </tr>
        </thead>

        <?php 
            // WHERE Aritst='$Artist1' and language='$language' OR Aritst='$Artist2' and language='$language' OR Aritst='$Artist2' and language='$language' language='$language'
            $query="SELECT * FROM posts";
            $select_posts=mysqli_query($connection,$query);
            
            while($row=mysqli_fetch_assoc($select_posts)){
                $post_id=$row['post_id'];
                $artist=$row['Artist'];
                $language=$row['language'];
                $Url=$row['Url'];
                ?>
                <tbody>
            <tr>
                <td scope="row"><?php echo $artist?></td>
                <td><?php echo $Url?> </td>
               <?php echo "<td><a href='remove.php?delete={$post_id}' style='color:red;'>Delete</a></td>"; ?>
            </tr>
                
            <!-- //      echo "<td><audio src='uploads/.$Url' 
            //      controls>
            // </audio></td>";
                 echo "</tr>"; -->
                </tbody>
                
   <?php     }
?>
<!-- <a href="upload.php" > Upload</a> -->


</table>
        </div>
        <?php
                if(isset($_GET['delete'])){
                $delete_id=$_GET['delete'];
                $query="DELETE FROM posts WHERE post_id={$delete_id}";
                $delete_result=mysqli_query($connection,$query);
                // header("Location: remove.php");

                }
                ?>