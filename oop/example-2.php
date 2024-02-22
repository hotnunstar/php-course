<?php

class Car{
    private $model;
    private $motor;
    private $year;

    public function getModel(){
        return $this->model;
    }

    public function setModel($model){
        $this->model = $model;
    }

    public function getMotor():float{
        return $this->motor;
    }

    public function setMotor($motor){
        $this->motor = $motor;
    }

    public function getYear():int{
        return $this->year;
    }

    public function setYear($year){
        $this->year = $year;
    }

    public function show(){
        return array(
            'model'=>$this->getModel(),
            'motor'=>$this->getMotor(),
            'year'=>$this->getYear(),
        );
    }
}

$golf = new Car();
$golf->setModel("Golf GT");
$golf->setMotor("1.6");
$golf->setYear("2016");

var_dump($golf->show());

?>