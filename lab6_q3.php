<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle Area Calculator</title>
</head>
<body>
    <?php
    function calculateArea($width, $height) 
    {
        $area = $width * $height;
        return $area;
    }
    $width = 4;
    $height = 2;

    $area = calculateArea($width, $height);
    echo "<p><b>The area of the rectangle with width $width and height $height is $area </p>";
    ?>
</body>
</html>
