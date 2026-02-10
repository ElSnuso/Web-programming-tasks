<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 4</title>
</head>

<body>
<?php include 'header.php'; ?>

<form method="post">    
    Name <input type="text"  name="name"><br>   
    Age <input type="number" name="name"><br>
    <input type="submit" name="submit" value="Check">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    if ($age >= 18) {
        echo "$name is eligible for voting";
    }
    else {
        echo "$name is not eligible for voting";
    }
}
?>

<?php
$month = date("F");

switch($month) {
    case "August":
        echo "It's August, so it's still holiday. ";
        break;
    default:
        echo "Not August, this is $month so I don't have any holidays.";
}
?>

<form method="post">
    Enter a number: 
    <input type="number" name="number">
    <input type="submit" name="submit" value="show table">
</form>

<?php
if (isset($_POST['submit'])) {
    $n = $_POST['number'];

    echo "<h4> Multiplication table table of $n </h4>";
    
    for($i = 1; $i <= 9; $i++) {
        echo "$n x $i = " . ($n * $i) . "<br>";

    }
}
?>

<form method="post">
    Enter a number:
    <input type="number" name="number">
    <input type="submit" name="submit" value="print">
</form>


<?php
if(isset($_POST['submit'])) {
    $n = $_POST['number'];
    $i = 1;

    while ($i <= $n) {
        echo $i . " ";
        $i++;
    }
}
?>
<br><br>
<?php
$myarray=array("HTML", "CSS", "PHP", "JavaScript");

foreach($myarray as $value) {
    echo $value . "<br>";
}
?>

<?php include 'footer.php'; ?>
</body>
</html>
