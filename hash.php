<?php 
    $password = "Dorji lethro";
    $hasded = password_hash($password,PASSWORD_DEFAULT);
    echo($hasded);

    $f = password_verify($password,$hasded);
    echo " hello".$f;


?>