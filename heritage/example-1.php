<?php

class Document{
    private $number;

    public function getNumber(){
        return $this->number;
    }

    public function setNumber($number){
        $this->number = $number;
    }
}

class VAT extends Document{
    public function validate():bool{
        $this->getNumber();

        // VAT Validation

        return true;
    }
}

$doc = new VAT();
$doc->setNumber('123123123');
var_dump($doc->validate());
echo '<br>';
echo $doc->getNumber();

?>