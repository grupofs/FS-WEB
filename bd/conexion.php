<?php


function getPDO () {
   
    $user = "foodsp_web";
    $pass = "63plz5pdp2";

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=foodsp_web', $user, $pass);
        $pdo->exec("SET NAMES 'utf8';");
        return $pdo;
        
    } catch (PDOException $e) {
        return null;
    }

}

getPDO();
