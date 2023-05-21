<?php include 'db.php' ?>
<?php

if(isset($_POST['login'])){
    $login_username=$_POST['username'];
    $login_password=$_POST['password'];
    // echo $login_username;
    echo "hi";
    // encrypt password
    //$login_password=crypt($login_password, '$2a$07$hashsomesillypasswordforsafety$');

    // To prevent sql injection
    // $login_username=mysqli_real_escape_string($connection,$login_username);
    // $login_password=mysqli_real_escape_string($connection,$login_password);

    $query="SELECT * FROM users WHERE username='$login_username' ";
    $user_select=mysqli_query($connection,$query);


    While($row=mysqli_fetch_array($user_select)){
        $user_id=$row['user_id'];
        $username=$row['username'];
        $Artist1=$row['Artist1'];
        $Artist2=$row['Artist2'];
        $Artist3=$row['Artist3'];
        $password=$row['password'];
        $language=$row['language'];
    } 
}
    // echo $username;
?>