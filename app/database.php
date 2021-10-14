<?php
    function connect(){
        return new mysqli(HOST,USER,PASS,DB);
    }
?>