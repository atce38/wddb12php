<?php 
include_once('connection.php');
session_start();
$query="SELECT * FROM `slides`";

$exe=mysqli_query($con,$query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abiding Tech Computer Education</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</head>
<body>
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
    <h1> <?php 
    if(isset($user) && $user !=null){
        
        echo "Welcome ".$user['name'].$user['role'];
        echo '<a class="btn btn-danger" href="/logout.php">Logout</a> ';

        if($user['role'] =='admin')
        echo '<a class="btn btn-info" href="/admin.php">Admin Panel</a> ';

    }else{
        echo '<a class="btn btn-primary" href="/login.php">Login</a> ';
    }
    ?> 
        
    </h1>
    <div class="row">
    <div id="mcar" class="carousel slide col" data-bs-ride="carousel">
        <div class="carousel-inner">
        <?php
        $count=0;
        while($data=mysqli_fetch_assoc($exe)){
            if($count==0)
            echo '<div class="carousel-item active">';
            else
            echo '<div class="carousel-item">';

            echo '<img class="d-block w-100" src="'.$data['img'].'" alt="First slide">';
            echo '</div>';
            $count++;
           
        }
        
        ?>
            
                        
                    </div>
        <a class="carousel-control-prev" data-bs-target="#mcar" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" data-bs-target="#mcar" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
    
</body>
</html>