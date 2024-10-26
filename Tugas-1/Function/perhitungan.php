<?php
require_once "str.php";

class Perhitungan extends Str{
    private $pi = 3.14159;
    public function luasPersegiPanjang($p, $l){
        if(empty($p) || empty($l)){
            return "Tidak Boleh Kosong";
        }else{
            $perhitungan = $p * $l;
            $name = "Luas Persegi Panjang";
            return $this->StrReturnTwoValue($name, $p, $l, $perhitungan, "PL");
        }
    }
    public function kelilingPersegiPanjang($p, $l){
        if(empty($p) || empty($l)){
            return "Tidak Boleh Kosong";
        }else{
            $perhitungan = 2*($p + $l);
            $name = "Keliling Persegi Panjang";
            return $this->StrReturnTwoValue($name, $p, $l, $perhitungan, "PL");
        }
    }
    public function luasKelilingPersegi($s){
        if(empty($s)){
            return "Tidak Boleh Kosong";
        }else{
            $LuasPersegi = $s * $s;
            $kelilingPersegi = 4 * $s;
            $nameLsPr = "Luas Persegi";
            $nameKelPr = "Keliling Persegi";
            return $this->StrReturnOneValue($nameLsPr, $s, $LuasPersegi, "S") 
            . "<br>" .
                   $this->StrReturnOneValue($nameKelPr, $s, $kelilingPersegi, "S");
        }

    }
    public function luasSegitiga($a, $t){
        if(empty($a) || empty($t)){
            return "Tidak Boleh Kosong";
        }else{
            $perhitungan = 0.5 * $a * $t;
            $name = "Luas Segitiga";
            return $this->StrReturnTwoValue($name, $a, $t, $perhitungan, "AT");
        }
    }
    public function luasLingkaran($r){
        if(empty($r)){
            return "Tidak Boleh Kosong";
        }else{
            $perhitungan = $this->pi * $r * $r;
            $name = "Luas Lingkaran";
            return $this->StrReturnOneValue($name, $r, $perhitungan, "R");
        }
    }
    public function kelilingLingkaran($r){
        if(empty($r)){
            return "Tidak Boleh Kosong";
        }else{
            $perhitungan = 2 * $this->pi * $r;
            $name = "Keliling Lingkaran";
            return $this->StrReturnOneValue($name, $r, $perhitungan, "R");
        }
    }

}
?>