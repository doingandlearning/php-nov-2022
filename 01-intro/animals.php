<?php

echo 'Assignment by value';
echo '<br>';
$animal1 = 'Cat';
$animal2 = $animal1;

echo $animal1 . '-' . $animal2;

echo '<br>';
$animal2 = 'Dog';
echo $animal1 . '-' . $animal2;

echo '<br>';
echo 'Assignment by reference';
echo '<br>';
$animal3 = "elephant";
$animal4 = &$animal3;


echo $animal3 . '-' . $animal4;

echo '<br>';
$animal4 = "Hippo";
echo $animal3 . '-' . $animal4;
echo '<br>';
# Type and value of the variable
var_dump(isset($animal5));