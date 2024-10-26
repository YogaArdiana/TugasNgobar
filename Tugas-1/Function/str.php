<?php
class Str{
    private $firstStr = "Hasil Dari Perhitungan";
    public function StrReturnTwoValue($name, $value1, $value2, $returnValue, $code){
        if($code == "PL"){
            return $this->firstStr . " $name Dari Panjang <strong>$value1</strong> dan Lebar<strong> $value2</strong> adalah <strong>$returnValue</strong>";
        }elseif($code == "AT"){
            return $this->firstStr . " $name Dari Alas <strong>$value1</strong> dan Tinggi<strong> $value2</strong> adalah <strong>$returnValue</strong>";
        }
    }
    public function StrReturnOneValue($name, $value1, $returnValue, $code){
        if($code == "S"){
            return $this->firstStr . " $name Dari Sisi <strong>$value1</strong> adalah <strong>$returnValue</strong>";
        }elseif($code == "R"){
            return $this->firstStr . " $name Dari Jari Jari <strong>$value1</strong> adalah <strong>$returnValue</strong>";
        }
    }
}
?>