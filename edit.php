<?php 
include_once('connection.php');
$id=$_GET['id'];
$query="SELECT * FROM `employees` WHERE id=".$id;

$exe=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($exe);

// print_r($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Update Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
<h1>Update Employee -><?php echo $data['name']; ?></h1>
<form action="/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <input class="form-control" type="text" name="name" placeholder="Enter Emp Name" value="<?php echo $data['name']; ?>">
    <br>
    <textarea class="form-control" name="address" placeholder="Enter Address"><?php echo $data['address']; ?></textarea>
    <br>
    <input class="form-control" type="file" name="img" accept="image/*">
    <input class="btn btn-success" type="submit" value="Save">
</form>
</div>
</body>
</html>