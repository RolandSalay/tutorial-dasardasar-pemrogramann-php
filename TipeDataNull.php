<?php

$name = "Noel";
$Name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

$name = "noel";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "noel";
unset($contoh);


var_dump(isset($contoh));