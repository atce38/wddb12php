<?php 

if(isset($_COOKIE['login'])){
    
    setcookie('login',"",time()-(86400*365));
    $_SESSION['success']="Successfully Logout";
    header('location:/');
}else{
    $_SESSION['failed']="You are not Logged in please login";
    header('location:login.php');

}

?>