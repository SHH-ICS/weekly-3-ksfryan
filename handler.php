<!DOCTYPE html>
<html>

  <?php
  $myVariable = "";
  if (isset($_POST['myVariable'])) {
    $myVariable = $_POST['myVariable'];
  }
  echo "<h1>My Program</h1>\n";
  echo "<p>My Variable is = " . $myVariable . "</p>\n";
  ?>

</body>

</html>

<?php
echo "Welcome to github Pizzaria!!\n";
$x = readline("large or extra large: ");

if ($x == "large") {
  $a = 6;
} elseif (in_array($x, ["extra large", "xl", "XL", "Extra Large"])) {
  $a = 10;
} else {
  echo "Invalid size\n";
  exit();  // End the program if an invalid size is entered
}

$y = readline("Enter amount of toppings: ");

if ($y == "1") {
  $a += 1;
} elseif ($y == "2") {
  $a += 1.75;
} elseif ($y == "3") {
  $a += 2.50;
} elseif ($y == "4") {
  $a += 3.35;
} else {
  echo "Invalid number of toppings\n";
  exit();  // End the program if an invalid number of toppings is entered
}

$c = "Your total with tax is";
$h = round($a * 1.13, 2);  // Rounding the number and adding tax
echo "$c $h\n";
?>