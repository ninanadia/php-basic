<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>

<!-- Example 1 -->
<?php
$number = 9;
if ($number %2 == 0){
  echo $number . " adalah bilangan genap";
} else {
  echo $number . " adalah bilangan ganjil";
}
?>

<!-- Example 2 -->
<?php
$t = date("H");

if ($t < "18") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
</body>
</html>