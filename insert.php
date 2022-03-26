<?php 


include_once('connection.php');
// if($con){
//     echo "Success";
// }



$name=$_POST['name'];
$address=$_POST['address'];

// echo $name.'<br>';
// echo $address;
$directory="images/";
$old_path=$directory.$_FILES['img']['name'];
$imageFileType =strtolower(pathinfo($old_path,PATHINFO_EXTENSION));
$new_name=time()."_file_.".$imageFileType;

$file_target=$directory.$new_name;

if(move_uploaded_file($_FILES['img']['tmp_name'],$file_target)){

    $emp_img='/'.$file_target;
    $query="INSERT INTO `employees`( `name`, `address`, `img`) VALUES ('".$name."','".$address."','".$emp_img."')";

if($exe=mysqli_query($con,$query)){
    header('location:emp_form.php');
}else{
    echo "FAILED To Insert Employee";
}
    
}else{
    echo "Image Not Uploaded";
}

?>