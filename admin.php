<?php 
include_once('connection.php');
session_start();
if(isset($user) && $user !=null){
    if($user['role'] !='admin'){
        $_SESSION['failed']="Unauthorized Action";
        header('location:/');
    }

}else{
    $_SESSION['failed']="Please Login";
    header('location:/');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <?php 
    if(isset($_SESSION['success']))
    {
        echo '<div class="alert alert-success">'.
        $_SESSION["success"].
    
        '</div>';
        unset($_SESSION['success']);
        // session_destroy();
    }
    if(isset($_SESSION['failed']))
    {
        echo '<div class="alert alert-danger">'.
        $_SESSION["failed"].
    
        '</div>';
        unset($_SESSION['failed']);
        // session_destroy();
    }
    ?>
<h1>Slider Form</h1>
<form action="/insert-slide.php" method="post" enctype="multipart/form-data">
    <label for="">Please Select A Slider Image</label>
    <input class="form-control" type="file" name="img" accept="image/*">
    <input class="btn btn-success" type="submit" value="Save">
    
</form>
</div>

    
</body>
</html>