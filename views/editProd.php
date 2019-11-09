<?php 
    // Developer:   James Horton
    // Date:        05/08/2019
    // Assignment:  Final Project
    // File:        JimsWidgetShop
    
    $aryProd = getProd($editID);
?>

<form action="adminHome.php" method="post" enctype="multipart/form-data">
    <label for="prodName">Product Name: </label>
    <input autocomplete="off" type = "text" name="prodName" value="<?= $aryProd['productName']; ?>"><br>

    <label for="prodPrice">Price: </label>
    <input autocomplete="off" type = "text" name="prodPrice" value="<?= $aryProd['price']; ?>"><br>

    <label for="prodQty">Quantity: </label>
    <input autocomplete="off" type = "text" name="prodQty" value="<?= $aryProd['qty']; ?>"><br>

    <label for="imageName">Image Name: </label>
    <input autocomplete="off" type = "text" name="imageName" value="<?= $aryProd['imageName']; ?>" readonly><br>

    <input type="file" name="addImage">
    <br>
  
    <input type="hidden" name = "updtID" value="<?php echo $aryProd['productID'];?>">
    <input type="submit" class="btn btn-primary" value="Edit">
    

</form>