<?php

class Document{
    private $number;

    public function getNumber(){
        return $this->number;
    }

    public function setNumber($number){
        $result = Document::checkVat($number);
        if ($result === false) echo ("VAT number is invalid.");
        $this->$number = $number;
    }

    public static function checkVat($vat):bool{
        if (empty($vat)) return false;

        $vat = preg_match('/[0-9]/', $vat)?$vat:0;
        $vat = str_pad($vat, 11, '0', STR_PAD_LEFT);

        if (strlen($vat) != 11) return false;
        else if ($vat == '00000000000' || $vat == '11111111111' || $vat == '22222222222' || $vat == '33333333333' || $vat == '44444444444' || $vat == '55555555555' || $vat == '66666666666' || $vat == '77777777777' || $vat == '88888888888' || $vat == '99999999999') return false;
        else{
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $vat[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($vat[$c] != $d) return false;
            }
        }
        return true;
    }
}

// First way
$vat = new Document();
$vat->setNumber('35341185889');
var_dump($vat->getNumber());

// Second way
var_dump(Document::checkVat('35341185889'))

?>