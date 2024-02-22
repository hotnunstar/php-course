<?php

interface Vehicle{
    public function accelerate($velocity);
    public function slowDown($velocity);
    public function switchGear($gear);
}

abstract class Car implements Vehicle{
    public function accelerate($velocity)
    {
        echo "Car accelerate until " . $velocity . "km/h";
    }

    public function slowDown($velocity)
    {
        echo "Car slow down until " . $velocity . "km/h";
    }

    public function switchGear($gear)
    {
        echo "Car switch to " . $gear . " gear";
    }
}

?>