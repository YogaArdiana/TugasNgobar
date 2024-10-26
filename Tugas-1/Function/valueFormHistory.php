
<?php
        function valueHistory($getparam){
            return(isset($_GET[$getparam])) ? $_GET[$getparam] : null;
        }
?>