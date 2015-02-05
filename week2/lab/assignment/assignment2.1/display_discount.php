<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
      <?php
         
        $product_description = $_POST['product_description'];
        $list_price = $_POST['list_price'];
        $discount_percent = $_POST['discount_percent'];
       
        $error_message = '';
        
         if(empty($product_description)) {
               $error_message = 'Product Descriptions required field';
           }
            if(!is_string($product_description)) {
               $error_message = 'Must be a string value';
           }
            if(empty($list_price)) {
               $error_message = 'List Price needs to be entered';
           }
            if(!is_numeric($list_price)) {
               $error_message = 'List Price needs to be numeric';
           }
           if(empty($discount_percent)) {
               $error_message = 'Discount percent needs to be entered';
           }
            if(!is_numeric($discount_percent)) {
               $error_message = 'Discount Percent needs to be numeric';
           } 
        
            if ($error_message !='') { 
        include('index.php'); 
        exit();
            }
    
        $discount_formatted = $discount_percent * $list_price * .01;
        $discount_price_formatted = $list_price - $discount_formatted;
          
      ?>
    
    <div id="content">
      
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br />

        <label>List Price:</label>
        <span>$<?php echo $list_price; ?></span><br />

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent; ?>%</span><br />

        <label>Discount Amount:</label>
        <span>$<?php echo $discount_formatted; ?></span><br />

        <label>Discount Price:</label>
        <span>$<?php echo $discount_price_formatted; ?></span><br />

        <p>&nbsp;</p>
       
    </div>
</body>
</html>