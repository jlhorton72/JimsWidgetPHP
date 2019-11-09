<?php
    // Developer:   James Horton
    // Date:        05/08/2019
    // Assignment:  Final Project
    // File:        JimsWidgetShop
    
    // echo("hi from admin");       // works
    include "../views/header.php";
    include "../models/database.php";
    include "../models/dbFunctions.php";
    // include "../views/login.php";

    // variables here
    $log = filter_input(INPUT_GET, 'log');
    $uName = filter_input(INPUT_POST, 'userName');
    $pass = filter_input(INPUT_POST, 'password');


    // end vars

    // ******************************
    // test conditions
    if ($uName === NULL && $pass === NULL){
        include "../views/login.php";
        // echo("here");    // works
    }

    if ($log =='y'){
        $_SESSION = array();
        session_destroy();
    } // end of if y

    if ($uName != NULL && $pass != NULL){
        echo ("made it");
        $verified = getUser($uName, $pass);
        echo("yes");
        if ($verified == 'y'){
            $_SESSION['valid'] = 'y';
            header("Location: ../admin_index/adminHome.php");
        } // end of true
        else {
            echo ("Invalid User, Verify Log In");
        } // end of else
    } // end of if valid user


    // end test cons


        // this also logs out session and protects the admin sign in
    echo("<br><a href = '../index.php?log=y'>Main Page</a><br>");

    include "../views/footer.php";
    // echo ("<a href='../index.php?log=y'>Log Out</a>");
?>