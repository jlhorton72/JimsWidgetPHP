<?php 
    // Developer:   James Horton
    // Date:        05/08/2019
    // Assignment:  Final Project
    // File:        JimsWidgetShop

    $aryProducts = getProducts();

    foreach ($aryProducts as $prods){
        // print_r($prod);
        echo ("<a href = '?prodID=" . $prods['productID'] . "'>" . $prods['productName'] . "</a><br>");
    } // end of foreach



    ?>