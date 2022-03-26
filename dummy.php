<?php 
include_once('header.php');
include_once('common_fun.php');
$img=['https://edu.abidingtech.com/assets/images/others/evolution.png',
'https://edu.abidingtech.com/assets/images/others/evolution.png',
'https://edu.abidingtech.com/assets/images/others/evolution.png',
'https://edu.abidingtech.com/assets/images/others/evolution.png',
'https://edu.abidingtech.com/assets/images/others/evolution.png'];

$heading=['ROBOTICS','ROBOTICS','ROBOTICS','ROBOTICS','ROBOTICS'];
$text=['We are the Pioneers of Robotics in Gujranwala. Robotics is an introductory
and also advance course in robots. There are two main classes of industrial robots – continuous path
robots.','We are the Pioneers of Robotics in Gujranwala. Robotics is an introductory
and also advance course in robots. There are two main classes of industrial robots – continuous path
robots.','We are the Pioneers of Robotics in Gujranwala. Robotics is an introductory
and also advance course in robots. There are two main classes of industrial robots – continuous path
robots.','We are the Pioneers of Robotics in Gujranwala. Robotics is an introductory
and also advance course in robots. There are two main classes of industrial robots – continuous path
robots.','We are the Pioneers of Robotics in Gujranwala. Robotics is an introductory
and also advance course in robots. There are two main classes of industrial robots – continuous path
robots.'];

?>
<div class="container top100">
    <div class="row">
        <?php 
        foreach($img as $index=> $image)
        {
            echo '<div class="col-md text-center">
            <img src="'.$image.'" alt="">
            <h6 class="top30 font-weight-bold">'.$heading[$index].'</h6>
            <p class="top15 text-secondary">'.$text[$index].'</p>
            <a href="/search?search=ROBOTICS" class="text-success font-weight-bold">Learn More</a>
        </div>';
       
        }

        ?>

    </div>
</div>

<h1><?php echo add(15,10); ?></h1>
<?php
include_once("footer.php");
?>