        <select name="Perhitungan" id="">
                <option value="LPP"
                    <?= selected("Perhitungan" ,"LPP") ?>
                >
                    Luas Persegi Panjang
                </option>
                <option value="KPP"
                    <?= selected("Perhitungan" , "KPP") ?>
                >
                    Keliling Persegi Panjang
                </option>
                <option value="LKP"
                    <?= selected( "Perhitungan" ,"LKP") ?>
                >
                    Luas Keliling Persegi
                </option>
                <option value="LS"
                    <?= selected("Perhitungan" ,"LS") ?>
                >
                    Luas Segitiga
                </option>
                <option value="LL"
                    <?= selected("Perhitungan" ,"LL") ?>
                >
                    Luas Lingkaran
                </option>
                <option value="KL"
                    <?= selected("Perhitungan" ,"KL") ?>
                >
                    Keliling Lingkaran
                </option>
            </select>