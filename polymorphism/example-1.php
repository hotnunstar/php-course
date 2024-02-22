<?php

abstract class Animal {
    public function speak(){
        return "Sound";
    }

    public function move(){
        return "Walk";
    }
}

class Dog extends Animal {
    public function speak(){
        return "Bark";
    }
}

class Cat extends Animal {
    public function speak(){
        return "Meow";
    }
}

class Bird extends Animal {
    public function speak(){
        return "Sing";
    }

    public function move(){
        return "Fly and " . parent::move();
    }
}

$pluto = new Dog();

echo $pluto->speak() . '<br>';
echo $pluto->move()  . '<br>';

echo "-------<br>";

$garfield = new Cat();

echo $garfield->speak() . '<br>';
echo $garfield->move()  . '<br>';

echo "-------<br>";

$zazu = new Bird();

echo $zazu->speak() . '<br>';
echo $zazu->move()  . '<br>';

?>