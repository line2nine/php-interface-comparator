<?php
include "class/Circle.php";
include "class/Comparator.php";

class CircleComparator extends Circle implements Comparator
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function getRadius()
    {
        return parent::getRadius();
    }

    function compare($circleOne, $circleTwo)
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();

        if ($radiusOne > $radiusTwo) {
            return 1;
        } else if ($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }
    }
}