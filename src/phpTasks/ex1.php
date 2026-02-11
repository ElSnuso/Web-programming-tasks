<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 1: Getting Started with PHP - Allan Jakubovits</title>
</head>

<body>
<?php include 'header.php'; ?>
<main>
<h1>Exercise 1: Getting Started with PHP - Allan Jakubovits</h1>

<?php
echo '<h3>Hello world! My name is "David"</h3>';

$title = "PHP is interesting";

$g1 = 5;
$g2 = 4;
$g3 = 5;
?>

<h4><?php echo $title; ?></h4>

<table border="1">
    <tr>
        <th>S.n.</th>
        <th>Name</th>
        <th>Grade</th>
    </tr>
    <tr>
        <td>1</td>
        <td>John</td>
        <td><?php echo $g1; ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Alice</td>
        <td><?php echo $g2; ?></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Bob</td>
        <td><?php echo $g3; ?></td>
    </tr>
</table>

<br>

<img src="image.png" width="700" alt="Sample image">

</main>
<?php include 'footer.php'; ?>
</body>
</html>
