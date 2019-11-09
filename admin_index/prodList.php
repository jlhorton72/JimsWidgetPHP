<?php
    // Developer:   James Horton
    // Date:        05/08/2019
    // Assignment:  Final Project
    // File:        JimsWidgetShop
?>
<section>
    <?php
        echo("<h2>" . "Product List" . "</h2>");
        $aryProd = getProducts();
        // print_r($aryProd);
        foreach($aryProd as $prod){
            $nameStr = $prod['productName'];
            // $prodStr = "<a href='?prodID=$prod[productID]'>$nameStr</a><br>";
            // echo($prodStr);
            echo("<img src='../images/" . $prod['imageName'] . "' alt='" . $prod['productName'] . " width='250' height='250'>");
            $editStr = "<a href='?editID=$prod[productID]'> Edit</a> &nbsp";      // home
            $deletestr = "<a href='?deleteID=$prod[productID]'>Delete </a><br>";  // home
            echo($editStr . $deletestr);
            echo("<br><br>");
        } // end of foreach


    ?>
</section>