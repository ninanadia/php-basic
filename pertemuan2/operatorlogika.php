<?php

$a = true;
$b = false;

// variabel $c akan bernilai false
$c = $a && $b;
printf("%b && %b = %b", $a,$b,$c);
echo "<hr>";

// variabel $c akan bernilai true
$c = $a || $b;
printf("%b || %b = %b", $a,$b,$c);
echo "<hr>";

// variabel $c akan bernilai false
$c = !$a;
printf("!%b = %b", $a, $c);
echo "<hr>";

echo "Operasi AND \n";
echo "1 && 1 :".(true && true)."\n";
echo "1 && 0 :".(true && false)."\n";
echo "0 && 0 :".(false && false)."\n\n";

echo "Operasi OR \n";
echo "1 || 1 :".(true || true)."\n";
echo "1 || 0 :".(true || false)."\n";
echo "0 || 0 :".(false || false)."\n\n";

echo "Operasi NOT \n";
echo "!1 :".(!true)."\n";
echo "!0 :".(!false)."\n\n";


?>