<?php

class Person {
    public $name; //Attribute

    // Method
    public function speak(){
        return "My name is " . $this->name;
    }
}

$john = new Person();
$john->name = "John Doe";
echo $john->speak();

?>