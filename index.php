<?php
include "class/CircleComparator.php";

$circleOne = new CircleComparator('circleOne', 8);
$circleTwo = new CircleComparator('circleTwo', 2);

$test = $circleOne->compare($circleTwo, $circleTwo);
echo ('Comparator: <br>');
echo $test;