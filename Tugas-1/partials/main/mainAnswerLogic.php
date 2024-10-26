<?php
                if(isset($_GET['Perhitungan']) && $_GET['Perhitungan'] == "LPP"){
                        $p = $_GET['panjang'];
                        $l = $_GET['lebar'];
                        $hasil = $perhitungan->luasPersegiPanjang($p, $l)
                ?>
                        <h3>Luas Persegi Panjang</h3>
                        <p class="returnPerhitungan"><?=$hasil?></p>
                <?php
                    }
                    elseif(isset($_GET['Perhitungan']) && $_GET['Perhitungan'] == "KPP"){
                        $p = $_GET['panjang'];
                        $l = $_GET['lebar'];
                        $hasil = $perhitungan->kelilingPersegiPanjang($p, $l)
                ?>
                        <h3>Keliling Persegi Panjang</h3>
                        <p class="returnPerhitungan"><?=$hasil?></p>
                <?php
                    }
                    elseif(isset($_GET['Perhitungan']) && $_GET['Perhitungan'] == "LKP"){
                        $s = $_GET['sisi'];
                        $hasil = $perhitungan->luasKelilingPersegi($s)
                ?>
                        <h3>Luas Keliling Persegi</h3>
                        <p class="returnPerhitungan"><?=$hasil?></p>
                <?php
                    }
                    elseif(isset($_GET['Perhitungan']) && $_GET['Perhitungan'] == "LS"){
                        $a = $_GET['alas'];
                        $t = $_GET['tinggi'];
                        $hasil = $perhitungan->luasSegitiga($a, $t)
                ?>
                        <h3>Luas Segitiga</h3>
                        <p class="returnPerhitungan"><?=$hasil?></p>
                <?php
                    }
                    elseif(isset($_GET['Perhitungan']) && $_GET['Perhitungan'] == "LL"){
                        $r = $_GET['jariJari'];
                        $hasil = $perhitungan->luasLingkaran($r)
                ?>
                        <h3>Luas Lingkaran</h3>
                        <p class="returnPerhitungan"><?=$hasil?></p>
                <?php
                    }
                    elseif(isset($_GET['Perhitungan']) && $_GET['Perhitungan'] == "KL"){
                        $r = $_GET['jariJari'];
                        $hasil = $perhitungan->kelilingLingkaran($r)
                ?>
                        <h3>Keliling Lingkaran</h3>
                        <p class="returnPerhitungan"><?=$hasil?></p>
                <?php
                    }
                ?>