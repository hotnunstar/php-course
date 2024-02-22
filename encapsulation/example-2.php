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

class Developer extends Person{
    public function checkData(){
        echo get_class($this) . '<br>';

        echo $this->name . '<br>';
        echo $this->age . '<br>';
        //echo $this->password . '<br>'; // Not visible here because is private
    }
}

$object = new Developer();

//echo $object->age . '<br>';

$object->checkData()

?>