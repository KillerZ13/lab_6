<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle Area Calculator</title>
</head>
<body>
    <h1>Rectangle Area Calculator</h1>
    <?php
    function calculateArea($width, $height) 
    {
        $area = $width * $height;
        return $area;
    }
    $width = 5;
    $height = 10;

    $area = calculateArea($width, $height);
    echo "<p>The area of the rectangle with width $width and height $height is: $area</p>";
    ?>
</body>
</html>
