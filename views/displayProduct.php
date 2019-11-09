<?php 
    // Developer:   James Horton
    // Date:        05/08/2019
    // Assignment:  Final Project
    // File:        JimsWidgetShop
    ?>
<section style="float:right; width:500px">
    <?php
        $getProd = getProd($prodID);
        // print_r($getProd);
    ?>

    <img style="float:left;" src="<?php echo '../images/'. $getProd['imageName'];?>" alt="<?php $getProd['productName'];?>" width="250px">

    <h4><?php echo ($getProd['productName']);?></h4>

    <h5> Product ID: <?php echo  $getProd['productID'];?></h5>       

    <h5>Price: <?php echo (" $ " . $getProd['price']);?></h5>

    <form action="publicIndex.php" action="post">
        <label for="qty">Quantity to Order: </label>
        <input type="text" name="qty" value="">

        <label for="custName">Please enter name:  </label>
        <input type="text" name="custName" value="">

        <input type="hidden" name = "prodID" value="<?php echo $getProd['productID'];?>">
        <input type="hidden" name = "qtyIsEnuf" value="<?php echo $getProd['qty'];?>">
        <br><br>
        <input type="submit" class="btn btn-primary" value="Order">
    </form>

</section>