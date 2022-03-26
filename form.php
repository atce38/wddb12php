<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORm</title>
</head>
<body>

<h1>Form With Get Method</h1>
<form action="/data.php" method="get">
    <input type="email" name="email" placeholder="Enter Email">
    <br>
    <input type="password" name="pass" placeholder="Enter Password">
    <br>
    <input type="submit" value="Login">
</form>

<h1>Form With POST Method/Request</h1>
<form action="/postdata.php" method="post">
    <input type="email" name="email" placeholder="Enter Email">
    <br>
    <input type="password" name="pass" placeholder="Enter Password">
    <br>
    <input type="submit" value="Login">
</form>

<h1>Form With POST Method/Request with submission File</h1>
<form action="/upload.php" method="post" enctype="multipart/form-data">
    <input type="email" name="email" placeholder="Enter Email">
    <br>
    <input type="text" name="name" placeholder="Enter Name">
    <br>
    <input type="file" name="img" >
    <br>
    <input type="submit" value="Login">
</form>
    
</body>
</html>