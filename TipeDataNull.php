<?php

$name = "roland";
$Name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

$name = "Roland";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "Roland";
unset($contoh);


var_dump(isset($contoh));
