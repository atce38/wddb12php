<?php 

$a=10;
$b=50;

mul();
function mul(){

    global $a,$b;
    echo $a*$b;

}

?>