<?php
$email=$_POST['email'];
$name=$_POST['name'];


// echo "<pre>";
// print_r($_FILES['img']);
// echo "</pre>";

$directory="images/";
$old_path=$directory.$_FILES['img']['name'];
$imageFileType =strtolower(pathinfo($old_path,PATHINFO_EXTENSION));
$new_name=time()."_file_.".$imageFileType;

$file_target=$directory.$new_name;
// echo $file_target;
$file_size=$_FILES['img']['size']/1024;
// if($file_size < 220)
// echo "File_Size is Valid";
// else
// echo "File_Size is InValid Required file size is 220kb";
if(move_uploaded_file($_FILES['img']['tmp_name'],$file_target)){
// echo "Image Uploaded";
header('location:form.php');
}else{
    echo "Image Not Uploaded";
}
?>