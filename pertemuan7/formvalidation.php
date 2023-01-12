<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
 
}
?>

<h2>Contoh Form Validation dengan PHP</h2>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	  Nama: <input type="text" name="name">
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>

	<?php
	echo "<h2>Yang kamu inputkan:</h2>";
	echo $name;
	echo "<br>";
	?>

</body>
</html>