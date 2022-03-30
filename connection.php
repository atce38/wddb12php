<?php 
$con=mysqli_connect('localhost','root','','wddb12');
$user=null;
if(isset($_COOKIE['login'])){
    // echo gettype($_COOKIE['login']);
    // $user=json_decode($_COOKIE['login']);
    // $user_Role=$user->role;
    $email=$_COOKIE['login'];
    $query="SELECT * FROM `users` WHERE `email`='$email'";

        $run=mysqli_query($con,$query);

        if($result=mysqli_fetch_assoc($run)){
            $user=$result;
            
        }

}


?>