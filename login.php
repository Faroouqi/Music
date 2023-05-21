<?php include "db.php"; ?>
<?php include "login_asset.php"; ?>

<?php session_start(); ?>
<?php

// if(isset($_POST['login'])){
//     $login_username=$_POST['username'];
//     $login_password=$_POST['password'];
//     echo $login_username;
//     // encrypt password
//     //$login_password=crypt($login_password, '$2a$07$hashsomesillypasswordforsafety$');

//     // To prevent sql injection
//     // $login_username=mysqli_real_escape_string($connection,$login_username);
//     // $login_password=mysqli_real_escape_string($connection,$login_password);

//     $query="SELECT * FROM users WHERE username='$login_username' ";
//     $user_select=mysqli_query($connection,$query);



//         $row=mysqli_fetch_array($user_select);
//         $user_id=$row['user_id'];
//         $username=$row['username'];
//         $Artist1=$row['Artist1'];
//         $Artist2=$row['Artist2'];
//         $Artist3=$row['Artist3'];
//         $password=$row['password'];
//         $language=$row['language'];
//     } 
//     // echo $username;
// ?>

<?php
$_SESSION['user_id']=$user_id;
$_SESSION['username']=$username;
$_SESSION['language']=$language;
$_SESSION['Artist1']=$Artist1;
$_SESSION['Artist2']=$Artist2;
$_SESSION['Artist3']=$Artist3;

 
// echo $username;
if($login_username == 'sami' && $login_password== '8523'  && $username!=NULL ){

    
    header("Location:admin/index.php?artist1=$Artist1&artist3=$Artist3&artist2=$Artist2");
    // header("Location:info1.php?artist1=$Artist1&artist3=$Artist3&artist2=$Artist2");

}
else if($login_username == $username && $login_password== $password  && $username!=NULL ){

    // header("Location:info.php?artist1=$Artist1&artist3=$Artist3&artist2=$Artist2");

     header("Location:recommend.php?artist1=$Artist1&artist3=$Artist3&artist2=$Artist2");

}
else{
   
//    header("Location:recommend.php");
    header("Location:index.php");
}




?>