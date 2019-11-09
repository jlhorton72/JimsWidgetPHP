<?php 
    // Developer:   James Horton
    // Date:        05/08/2019
    // Assignment:  Final Project
    // File:        JimsWidgetShop
    ?>
<h4> Add your Product </h4>
<form action="adminHome.php" method="post" enctype="multipart/form-data">
    <label for="prodName">Product Name: </label>
    <input autocomplete="off" type = "text" name="prodName" value=""><br>

    <label for="prodPrice">Price: </label>
    <input autocomplete="off" type = "text" name="prodPrice" value=""><br>

    <label for="prodQty">Quantity: </label>
    <input autocomplete="off" type = "text" name="prodQty" value=""><br>

    <label for="imageName">Image Name: </label>
  <?php //  <input autocomplete="off" type = "text" name="imageName" value="" readonly><br>
?>
    <input type="file" name="addImage">
    <br>
  
    <!-- <input type="hidden" name = "updtID" value=""> -->
    <input type="submit" class="btn btn-primary" value="Edit">
    

</form>