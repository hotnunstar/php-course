<?php

class Address
{
    private $city;
    private $street;
    private $number;

    public function __construct($city, $street, $number)
    {
        $this->city = $city;
        $this->street = $street;
        $this->number = $number;
    }

    public function __destruct()
    {
        var_dump("DESTRUCT");
    }

    public function __toString()
    {
        return $this->city . ', ' . $this->street . ', ' . $this->city;
    }
}

$myAddress = new Address('Braga', 'New Street', 166);

echo $myAddress

?>