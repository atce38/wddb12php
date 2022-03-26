<?php 
include_once('connection.php');
$query="SELECT * FROM `employees`";

$exe=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
<h1>Employee Form</h1>
<form action="/insert.php" method="post" enctype="multipart/form-data">
<input class="form-control" type="text" name="name" placeholder="Enter Emp Name" >
    <br>
    <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
    <br>
    <input class="form-control" type="file" name="img" accept="image/*">
    <input class="btn btn-success" type="submit" value="Save">
    
</form>
</div>

<br>
<table class="table table-stripped">
    <thead class="table-dark">
        <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Address</th>
        <th>Action</th>
        </tr>
    </thead>
    <img src="" alt="">
    <tbody>
        <?php
        while($data=mysqli_fetch_assoc($exe)){
            echo "<tr>";
            echo "<td>".$data['id']."</td>";
            echo "<td><img class='img-fluid' style='max-width:100px;' src='".$data['img']."' ></td>";
            echo "<td>".$data['name']."</td>";
            echo "<td>".$data['address']."</td>";
            echo '<td><a class="btn btn-primary" href="/edit.php?id='.$data['id'].'">Edit</a>
            <a class="btn btn-danger" href="/delete.php?id='.$data['id'].'">Delete</a></td>
            </td>';
            echo "</tr>";
        }
        
        ?>
        
    </tbody>
    


</table>
    
</body>
</html>