<?php 
include_once('connection.php');
session_start();

$email=$_POST['email'];
$password=$_POST['pass'];

// echo $name.$password.$email;

$query="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";

$run=mysqli_query($con,$query);

if($result=mysqli_fetch_assoc($run)){
    
    setcookie('login',$result['email'],time()+(86400*365));
    $_SESSION['success']="Successfully Logged IN";
    header('location:/');
}else{
    $_SESSION['failed']="Email Or Password incorrect";
    header('location:login.php');

}

?>