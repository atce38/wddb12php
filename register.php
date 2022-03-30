<?php 
include_once('connection.php');
session_start();
// $query="SELECT * FROM `employees`";

// $exe=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <?php 
    if(isset($_SESSION['failed']))
    {
        echo '<div class="alert alert-danger">'.
        $_SESSION["failed"].
    
        '</div>';
        unset($_SESSION['failed']);
    }
    
    ?>
    
<h1>Signup</h1>
<form action="/registered.php" method="post" enctype="multipart/form-data">
    <input class="form-control" type="text" name="name" placeholder="Enter Name" >
    <input class="form-control" type="email" name="email" placeholder="Enter Email" >
    <input class="form-control" type="password" name="pass" placeholder="Enter Password" >
    <input class="btn btn-success" type="submit" value="Register">
    <a class="btn btn-info" href="/login.php">Login</a>
</form>
</div>

</body>
</html>