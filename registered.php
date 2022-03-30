<?php 
include_once('connection.php');
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pass'];

// echo $name.$password.$email;

$query="SELECT * FROM `users` WHERE `email`='$email'";

$run=mysqli_query($con,$query);

if($result=mysqli_fetch_assoc($run)){
    echo "In First IF";
    $_SESSION['failed']="Email '".$email."' is Already Registered Please Login Or Try Another Email";
    header('location:register.php');
}else{
    $query="INSERT INTO `users`( `email`, `password`, `name`) VALUES ('$email','$password','$name')";
    // echo "In ELSE";
if($exe=mysqli_query($con,$query)){
    $_SESSION['success']="Email '".$email."' is  Registered Successfully, Please login";
    header('location:login.php');
}else{
    $_SESSION['failed']="Something Went Wrong Please Try Again!";
    header('location:register.php');
}

}

?>