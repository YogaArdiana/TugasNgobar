<?php
        function selected($getparam, $val){
            return(isset($_GET[$getparam]) && $_GET[$getparam] == $val) ? "selected" : null;
        }
?>