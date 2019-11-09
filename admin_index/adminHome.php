<?php
    // Developer:   James Horton
    // Date:        05/08/2019
    // Assignment:  Final Project
    // File:        JimsWidgetShop

    if(isset($_SESSION)){
        session_start();}

    include "../models/database.php";
    include "../models/dbFunctions.php";


    // if ($_SESSION['valid'] != 'y'){
    //     header("Location: ../index.php");
    // } // end of if valide

    // variables
    $prodID = filter_input(INPUT_GET, 'prodID');
    $editID = filter_input(INPUT_GET, 'editID');
    $deleteID = filter_input(INPUT_GET, 'deleteID');
    $updtID = filter_input(INPUT_POST, 'updtID');
    $addProd = filter_input(INPUT_POST, 'addProd');

    $prodName = filter_input(INPUT_POST, 'prodName');
    // $prodImg = filter_input(INPUT_POST, 'prodImg');
    $prodPrice = filter_input(INPUT_POST, 'prodPrice');
    $prodQty = filter_input(INPUT_POST, 'prodQty');
    $imgName = filter_input(INPUT_POST, 'imageName');
    $addImg = filter_input(INPUT_POST, 'addImg', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

    $custName = filter_input(INPUT_POST, 'prodQty');
    $qty = filter_input(INPUT_POST, 'qty');
    $qtyIsEnuf = filter_input(INPUT_POST, 'qtyIsEnuf');

    // include "../views/header.php";
    // end vars
    
    if ($prodID != NULL) {
        include "./prodList.php";
        // include "";  // want to display the product
    } // end of if
    else if ($addProd != NULL) {
        $imgName = $_FILES['addImage']['name'];
        addProducts($prodName, $imgName, $prodPrice, $prodQty);
        $tempName = $_FILES['addImage']['tmp_name'];
        $dir = '..' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $imgName;
        move_uploaded_file($tempName, $dir);
        include "./prodList.php";
    }
    else if ($editID != NULL){
        include "../views/editProd.php";
    } // end of first else
    else if ($deleteID != NULL){
        delProduct($deleteID);
        include "./prodList.php";
        $deleteID = NULL;
     } // end of else if 
     else if ($updtID != NULL){
        if ($_FILES['addImage']['name'] == NULL){
            editProduct($prodName, $imgName, $prodPrice, $prodQty, $updtID);
            include "./prodList.php";
        } // end of if
        else {
            $imgName = $_FILES['addImage']['name'];
            editProduct($prodName, $imgName, $prodPrice, $prodQty, $updtID);
            $tempName = $_FILES['addImage']['tmp_name'];
            $dir = '..' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $imgName;
            move_uploaded_file($tempName, $dir);
            include "./prodList.php";
        } // end of else
     } // end of elif

    else{
        include "./prodList.php";
    } // end of else nothing valid
   
    echo("<br><a href='../views/addProd.php'>Add Product</a><br>");
    echo("<br><a href='../views/orders.php'>View Orders</a><br>");
    echo("<br><a href = '../index.php?log=y'>Main Page</a><br>");
    include "../views/footer.php";

        // navigation
   

    
?>