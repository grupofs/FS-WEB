<?php


function getPDO () {
   
    $user = "root";
    $pass = "";

    try {
        $pdo = new PDO('mysql:host=162.211.86.2;dbname=foodsp_web', $user, $pass);
        $pdo->exec("SET NAMES 'utf8';");
        return $pdo;
        
    } catch (PDOException $e) {
        print "¡Error!: <br/>";
        return null;
        echo 'error';
    }

}

getPDO();