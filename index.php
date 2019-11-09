<?php
    // Developer:   James Horton
    // Date:        05/08/2019
    // Assignment:  Final Project
    // File:        JimsWidgetShop


    $log = filter_input(INPUT_GET, 'log');
    if (isset($log)){
        if ($log =='y'){
            if(isset($_SESSION)){
                $_SESSION = array();
                session_destroy();
            } // end of if
        } // end of if
    } // end of if

    include "./views/header.php";
    echo("<br>");
    echo("<a href = './admin_index/adminIndex.php'>Admin Access</a><br><br>");

    echo("<a href = './public_index/publicIndex.php'>Public Access</a><br><br>");
    include "./views/footer.php";
?>