<?php

class Person{
    public $name = "John Doe";
    protected $age = "27";
    private $password = "123456";

    public function checkData(){
        echo $this->name . '<br>';
        echo $this->age . '<br>';
        echo $this->password . '<br>';
    }
}

$object = new Person();

//echo $object->age . '<br>';

$object->checkData()

?>