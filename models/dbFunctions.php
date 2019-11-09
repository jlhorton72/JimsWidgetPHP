<?php
    // Developer:   James Horton
    // Date:        05/08/2019
    // Assignment:  Final Project
    // File:        JimsWidgetShop

function addProduct($prodName, $prodImg, $prodPrice, $prodQty){
    global $db;
    $sql = "INSERT INTO `product`(`productID`, `productName`, `imageName`, `price`, `qty`) 
        VALUES (null, '$prodName', '$prodImg', $prodPrice, $prodQty)"; // works
    $pdos = $db -> query($sql);
    // no return, just an add
    // maybe display added product
} // end of function addProduct

function delProduct($prodId){
    global $db;
    $sql = "DELETE FROM `product` WHERE `productID` = $prodId"; // works
    $pdos = $db -> query($sql);
    // no return, just an add
    // maybe display product deleted
} // end of function addProduct


function editProduct($prodName, $prodImg, $prodPrice, $prodQty, $updtID){
    global $db;
    $sql = "UPDATE `product` SET `productName`='$prodName',`imageName`='$prodImg',`price`=$prodPrice,`qty`=$prodQty 
         WHERE `productID`=$updtID"; // works
    $pdos = $db -> query($sql);
    // no return, just an edit
    // maybe display edited product
} // end of editOrders

function addOrders($prodID, $custName, $qty){
    global $db;
    $sql = "INSERT INTO `orders`(`orderID`, `productID`, `customerName`, `qtyOrdered`)
         VALUES (null, $prodID,'$custName',$qty)"; // works
    $pdos = $db -> query($sql);
    // no return, just an edit
    // maybe display added order
} // end of addOrders

function editOrders($orderId, $prodID, $custName, $qty){
    global $db;
    $sql = "UPDATE `orders` SET `productID`=$prodID,`customerName`='$custName',`qtyOrdered`=$qty WHERE `orderID`=$orderId"; // works
    $pdos = $db -> query($sql);
    // no return, just an edit
    // maybe display edited order
} // end of editOrders

function getQty($prodID){
    global $db;
    $sql = "SELECT `qty` FROM `product` WHERE productID = $prodID";
    $pdos = $db -> query($sql);
    $rs = $pdos -> fetch();
    return $rs;
} // end getQty

function getProducts(){
    global $db;
    $sql = "SELECT * FROM product";
    $pdos = $db->query($sql);
    $rs = $pdos->fetchAll();
    return $rs;
} // end of getProdcuts

function getProd($prodID){
    global $db;
    $sql = "SELECT * FROM product WHERE productID = $prodID";
    $pdos = $db->query($sql);
    $rs = $pdos->fetch();
    return $rs;
} // end of getProdcuts

function getOrders(){
    global $db;
    $sql = "SELECT * FROM orders";
    $pdos = $db -> query($sql);
    $rs = $pdos -> fetchAll();
    return $rs;
} // end of getOrders

function getUser($uName, $pass){
    global $db;
    $sql = "SELECT * FROM users WHERE name = '$uName' AND password = '$pass'";
    $pdos = $db->query($sql);
    $rs = $pdos->fetch();
    if ($rs == null){
        return 'n';
    } // end of if null
    else {
        return 'y';
    } // end of else
} // get user info

?>