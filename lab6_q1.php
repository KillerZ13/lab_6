<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
        $name = "Muhammad Hazim Bin Annuar";
        $matric_number = "DI220015";
        $course = "Bachelor Of Information Technology";
        $year_of_study = "Year 2 semester 1";
        $Address = "Kampung Parit Lapis Mahang";
    ?>
    <table>
    <tr>
        <td>Name</td>
        <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo "$matric_number"; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
        <td>Year Of Study</td>
        <td><?php echo "$year_of_study"; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo "$Address"; ?></td>
    </tr>
 </table>

</body>
</html>