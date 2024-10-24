<?php
class Perhitungan{
    public function luasPersegiPanjang($p, $l){
        $perhitungan = $p * $l;
        return "Hasil Dari Perhitungan Luas Persegi Panjang Dari Panjang <strong>$p</strong> dan Lebar <strong>$l</strong> adalah <strong>$perhitungan</strong>";
    }
    public function kelilingPersegiPanjang($p, $l){
        $perhitungan = 2*($p + $l);
        return "Hasil Dari Perhitungan Keliling Persegi Panjang Dari Panjang <strong>$p</strong> dan Lebar <strong>$l</strong> adalah <strong>$perhitungan</strong>";
    }
    public function luasKelilingPersegi($s){
        $LuasPersegi = $s * $s;
        $kelilingPersegi = 4 * $s;
        return "Hasil Dari Perhitungan Luas Persegi dari Sisi = <strong>$s</strong> adalah <strong>$LuasPersegi</strong> <br> 
                Hasil Dari Perhitungan Keliling Persegi dari Sisi = <strong>$s</strong> adalah <strong>$kelilingPersegi</strong>";
    }
    public function luasSegitiga($a, $t){
        $perhitungan = 0.5 * $a * $t;
        return "Hasil Dari Perhitungan Luas Segitiga Dari Alas <strong>$a</strong> dan Tinggi <strong>$t</strong> adalah <strong>$perhitungan</strong>";
    }
    public function luasLingkaran($r){
        $perhitungan = 3.14159 * $r * $r;
        return "Hasil Dari Perhitungan Luas Lingkaran Dari Jari-Jari <strong>$r</strong> adalah <strong>$perhitungan</strong>";
    }
    public function kelilingLingkaran($r){
        $perhitungan = 2 * 3.14159 * $r;
        return "Hasil Dari Perhitungan Keliling Lingkaran Dari Jari-Jari <strong>$r</strong> adalah <strong>$perhitungan</strong>";
    }

}
?>