<?php 
    // Developer:   James Horton
    // Date:        05/08/2019
    // Assignment:  Final Project
    // File:        JimsWidgetShop
    ?>
<section>
    <?php
    include "../models/database.php";
    include "../models/dbFunctions.php";
        echo ("<h4>" . "Orders: " . "</h4>");
        echo ("Order#" . "&nbsp" . "Product#" . "&nbsp" . "Customer" . "&nbsp" . "Quantity" . "<br>");
        $aryOrders = getOrders();

        foreach ($aryOrders as $order) {
            $ord = $order['orderID'];
            $prod = $order['productID'];
            $cust = $order['customerName'];
            $qty = $order['qtyOrdered'];
            $format = " %'-9d %'-9d %'-11s %'-8d";
            echo sprintf($format, $ord, $prod, $cust, $qty);
        } // end offoreach
        echo("<br><br><br>");
        echo ("<a href='../admin_index/adminHome.php'>Back</a><br>");
    ?>
</section>