<?php

if(isset($_GET['Perhitungan']) && $_GET['Perhitungan'] == "LPP"){
?>
   <input type="text" name="Perhitungan" value="LPP" class="w-100" hidden>
<?php
   include "partials/innerFormPanjangLebar.php";

}elseif(isset($_GET['Perhitungan']) && $_GET['Perhitungan'] == "KPP"){
?>
   <input type="text" name="Perhitungan" value="KPP" class="w-100" hidden>
<?php
   include "partials/innerFormPanjangLebar.php";

}elseif(isset($_GET['Perhitungan']) && $_GET['Perhitungan'] == "LKP"){
?>
   <input type="text" name="Perhitungan" value="LKP" class="w-100" hidden>
<?php
   include "partials/innerFormSisi.php";

}elseif(isset($_GET['Perhitungan']) && $_GET['Perhitungan'] == "LS"){
?>
   <input type="text" name="Perhitungan" value="LS" class="w-100" hidden>
<?php
   include "partials/innerFormAlasTinggi.php";

}elseif(isset($_GET['Perhitungan']) && $_GET['Perhitungan'] == "LL"){
?>
   <input type="text" name="Perhitungan" value="LL" class="w-100" hidden>
<?php
   include "partials/innerFormJariJari.php";
   
}elseif(isset($_GET['Perhitungan']) && $_GET['Perhitungan'] == "KL"){
?>
   <input type="text" name="Perhitungan" value="KL" class="w-100" hidden>
<?php
   include "partials/innerFormJariJari.php";

}
?>