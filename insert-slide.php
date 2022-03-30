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

$directory="images/slides/";
$old_path=$directory.$_FILES['img']['name'];
$imageFileType =strtolower(pathinfo($old_path,PATHINFO_EXTENSION));
$new_name=time()."_file_.".$imageFileType;

$file_target=$directory.$new_name;

if(move_uploaded_file($_FILES['img']['tmp_name'],$file_target)){

    $emp_img='/'.$file_target;
    $query="INSERT INTO `slides`(`img`) VALUES ('$emp_img')";

if($exe=mysqli_query($con,$query)){
    $_SESSION['success']="Slide Successfully Added";
    header('location:admin.php');
}else{
    echo "FAILED To Insert Employee";
}
    
}else{
    echo "Image Not Uploaded";
}

?>