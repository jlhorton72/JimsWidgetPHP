<?php
    // Developer:   James Horton
    // Date:        05/08/2019
    // Assignment:  Final Project
    // File:        JimsWidgetShop
    
    $userName = "root";
    $password = "";
    $host = "localhost";
    $db_name= "jimswidgetshop";
    
    $dsn = "mysql:host=$host;dbname=$db_name";
    
    try {
        $db = new PDO($dsn, $userName, $password);
        // echo ("yes!!");
    }
    catch(Exception  $e){
        echo($e->getmessage());
        die();
    }
    
    ?>