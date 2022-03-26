<?php 

$a="Hello Class";
$num1=15;
$num2=10;
abc($a);
add($num1,$num2);
function abc($val){
    echo $val;
}

function add($val1,$val2){
    echo "<h1 class='text-center'>The result of addition=".$val1+$val2."</h1>";
}

function sub($val1,$val2){
    return "The result of Subtraction=".$val1-$val2;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h3 class="text-center"><?php echo sub($num1,$num2); ?></h3>
</body>
</html>