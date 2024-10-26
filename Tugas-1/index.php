<?php
require_once "Function/perhitungan.php";
require_once "Function/selected.php";
require_once "Function/valueFormHistory.php";
?>  

<?php
$perhitungan = new Perhitungan();
?>

<?php
include 'mainTemplate/header.php';
?>


    <main>
        <div class="Container">   
            <div class="group">
                <div class="badge">
                    Tugas Membuat Perhitungan Dengan
                    <h2>Class Dan Function</h2>
                </div>
                <div class="badge">
                        <p>Pilih Opsi</p>
                        <form action="" method="GET">
                        <div class="" style="display: flex ; gap: 4px;">
                            <?php
                            include "partials/select.php"
                            ?>
                            <button class="button-coba">
                                Coba
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Form -->
            <div class="mainReturn">
                <form action="" method="GET">
                    <?php
                    include "partials/main/mainFormLogic.php";
                    ?>
                    <input type="text" name="getAnswer" value="1" hidden>
                    <button class="butoon-hitung">Hitung</button>
                </form>
            </div>


            <!-- Answer -->
            <?php
            if(isset($_GET['getAnswer'])){
            ?>
            <div class="mainReturn" style="margin-top:10px ;">
                <p>Answer For</p>
                <?php
                include "partials/main/mainAnswerLogic.php";
                ?>
            </div>
            <?php
            }
            ?>
        </div>
    </main>


<?php
include "mainTemplate/footer.php";
?>