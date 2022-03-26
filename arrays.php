<?php 
$arr=array(12=>512,222,'tahir'=>"Hello");
$arr[]=10;
$arr['hasnain']=15;
$arr[]="Sajeel";

echo $arr['hasnain'].'<br>';
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<h1>Foreach Loop</h1><br>";
foreach($arr as $index=>$values){
    echo $index.'-'. $values.'<br>';
}
$arr1=array(15,12,'Sajeel','husnain');
$count=count($arr1);
echo "<h1>For Loop</h1><br>";
echo "Number of index=>".$count.'<br>';
for($i=0; $i<$count; $i++)
{
    echo  $arr1[$i].'<br>';
}
$j=0;
echo "<h1>While Loop</h1><br>";
while($j<$count){
    echo  $arr1[$j].'<br>';
    $j++;
}

$k=0;
echo "<h1>Do While Loop</h1><br>";
do{
    echo  $arr1[$k].'<br>';
    $k++;
}while($k<$count);

?>