<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exercise 3 - Form Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-4">
  <h2 class="mb-4">Enter Your Name</h2>


  <form method="post" action="">
    <div class="mb-3">
      <label for="firstname" class="form-label">Firstname:</label>
      <input type="text" class="form-control  w-25" id="firstname" name="firstname" placeholder="Enter your first name" required>
    </div>

    <div class="mb-3">
      <label for="lastname" class="form-label">Lastname:</label>
      <input type="text" class="form-control w-25" id="lastname" name="lastname" placeholder="Enter your last name" required>
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>

 
  <?php
  if(isset($_POST['submit'])) {
      $firstname = htmlspecialchars($_POST['firstname']);
      $lastname = htmlspecialchars($_POST['lastname']);
      echo "<h3 class='mt-4'>Hello $firstname $lastname! You are welcome to my site.</h3>";
  }
  ?>

</div>

<div class="container mt-3">   
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.n.</th>
        <th>Name</th>
        <th>Grade</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>John</td>
        <td>5</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Alice</td>
        <td>4</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Bob</td>
        <td>5</td>
      </tr>
    </tbody>
  </table>
</div>

<div style="margin-left: 100px;">
    <?php
    $str1 = "Hello";
    $str2 = "World";

    $combined = $str1 . " " . $str2;

    echo $combined . "<br>";
    echo "Length of string: " . strlen($combined);
    ?>
</div>

<div style="margin-left: 100px;">
    <?php
    $a = 298;
    $b = 234;
    $c = 46;

    $sum = $a + $b + $c;
    echo"<h3>Sum: $sum </h3>";
    ?>

<?php
$browser = $_SERVER['HTTP_USER_AGENT'];

echo "<h3>Your browser information:</h3>";
echo $browser;
?>


<?php include 'footer.php'; ?>


</body>
</html>
