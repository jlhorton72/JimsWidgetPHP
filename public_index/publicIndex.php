<?php
    // Developer:   James Horton
    // Date:        05/08/2019
    // Assignment:  Final Project
    // File:        JimsWidgetShop
    
    // echo("hello world"); // works
    include "../views/header.php";
    include "../models/database.php";
    include "../models/dbFunctions.php";

    $prodName = filter_input(INPUT_POST, 'prodName');
    $prodImg = filter_input(INPUT_POST, 'prodImg');
    $prodPrice = filter_input(INPUT_POST, 'prodPrice');
    $prodQty = filter_input(INPUT_POST, 'prodQty');
    $prodID = filter_input(INPUT_GET, 'prodID');

    $custName = filter_input(INPUT_GET, 'custName');
    $qty = filter_input(INPUT_GET, 'qty');
    $qtyIsEnuf = filter_input(INPUT_GET, 'qtyIsEnuf');

    $aryProd = getProducts();
    foreach ($aryProd as $prod){
        // print_r($prod);
        echo ("<a href = '?prodID=" . $prod['productID'] . "'>" . $prod['productName'] . "</a><br>");
    } // end of foreach

    if ($prodID != NULL){
        include "../views/displayProduct.php";
    } // end of if not null

    if ($qty != NULL) {
        // echo ($qtyIsEnuf);
        if ($qty > $qtyIsEnuf){
            
            $qty = NULL;
            $qtyIsEnuf = NULL;
            echo("<h4> Can't order that many! </h4>");
        } // cant order that many
        else {
            addOrders($prodID, $custName, $qty);
            $prodQty = $qtyIsEnuf - $qty;

            include "../views/summary.php";
        } // enough so order it
    } // end of if ordered
    

    echo("<br><a href = '../index.php?log=y'>Main Page</a><br>");
    include "../views/footer.php";
?>