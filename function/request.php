<?php
    function formatPost($name, $default=null){
        if(isset($_POST[$name])){
            return htmlspecialchars($_POST[$name]);
        }
        else{
            return $default;
        }
    }