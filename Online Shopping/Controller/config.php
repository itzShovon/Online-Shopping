<?php
    try {
        $dbhost = $dbname = $dbuser = $dbpass ="";

        $dbhost = 'localhost';
        $dbname = 'online_shoping';
        $dbuser = 'root';
        $dbpass = '';

        $db = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e) {
        echo "Connection error: ".$e->getMessage();
    }
?>