<?php 
include_once('connection.php');
$id=$_GET['id'];
$query="DELETE FROM `employees` WHERE id=".$id;

if($exe=mysqli_query($con,$query)){
    header('location:emp_form.php');
}else{
    echo "FAILED To Update Employee";
}
?>