<?php
$teacher = ["Nina Nadia", 1177050079 , 
"IT RPL" , "ninanadiash@idn.sch.id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Teacher</title>
</head>
<body>
   <?php foreach($teacher as $value)
   {
    echo "$value <br>";
   }
   ?>
</body>
</html>