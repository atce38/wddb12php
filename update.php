<?php 


include_once('connection.php');

$name=$_POST['name'];
$address=$_POST['address'];
$id=$_POST['id'];
// echo $id.'<br>';
// echo $name.'<br>';
// echo $address;

$directory="images/";
$old_path=$directory.$_FILES['img']['name'];
$imageFileType =strtolower(pathinfo($old_path,PATHINFO_EXTENSION));
$new_name=time()."_file_.".$imageFileType;

$file_target=$directory.$new_name;

if(move_uploaded_file($_FILES['img']['tmp_name'],$file_target)){

    $emp_img='/'.$file_target;
    $query="UPDATE `employees` SET `name`='$name',`address`='$address',`img`='$emp_img' WHERE id=".$id;

    // echo $query;
    if($exe=mysqli_query($con,$query)){
        header('location:emp_form.php');
    }else{
        echo "FAILED To Update Employee";
    }
    
}else{
    echo "Image Not Uploaded";
}





?>