<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    function calculateArea($width, $height){
        $area=$width * $height;
        return $area;
    }

    $width=4;
    $height=2;
    $result=calculateArea($width,$height);

    echo "The area of a rectangle with a width of $width and $height of height is $result ";
    ?>

</body>
</html>
