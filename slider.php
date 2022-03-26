<?php 
$slides=array('https://edu.abidingtech.com/assets/images/slides/androidcourseingujranwala.png',
'https://edu.abidingtech.com/assets/images/slides/14229_banner%201.png',
'https://edu.abidingtech.com/assets/images/slides/AbidingTechComputerEducationslide2.png',
'https://edu.abidingtech.com/assets/images/slides/AbidingTechComputerEducationslide4.png',
'https://edu.abidingtech.com/assets/images/slides/AbidingTechComputerEducationslide5.png');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div class="carousel slide carousel-dark" id="slider" data-bs-ride="carousel">

            <ul class="carousel-indicators">
            <?php 
                foreach($slides as $index=>$img)
                {

                    echo '<li data-bs-slide-to="'.$index.'" '; 
                    if($index ==0)
                    echo 'class="active"';

                    echo 'data-bs-target="#slider"></li>';

                }
                
                ?>

            </ul>

            <div class="carousel-inner">
                <?php 
                foreach($slides as $index=>$img)
                {
                    if($index ==0)
                    echo ' <div class="carousel-item active">';
                    else
                    echo ' <div class="carousel-item">';

                    echo '<img class="img-fluid" src="'.$img.'" alt="">
                    </div>';

                }
                
                ?>
               
                

            </div>
            <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#slider">
                <span class="carousel-control-next-icon"></span>
            </button>
            <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#slider">
                <span class="carousel-control-prev-icon"></span>
            </button>



        </div>

    </div>

</body>

</html>