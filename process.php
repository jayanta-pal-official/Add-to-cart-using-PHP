<?php
session_start();
// session_destroy();
if(isset($_REQUEST['addcart'])) {

//   if(isset($_SESSION['cart'])) {
//     $myitems = array_column($_SESSION['cart'], 'ProductName');
//     if (in_array($_REQUEST['product_name'], $myitems)) {

//       echo '<script>
//       alert("Item allready Added")
//       window.location= "product.php"
//       </script>';
//     }
//      else {  
      $product_name = $_REQUEST['product_name'];
      $product_price = $_REQUEST['product_price'];
      $product_image = $_REQUEST['product_image'];

      $_SESSION['cart'][] = ['ProductName' => $product_name, 'ProductPrice' => $product_price, 'ProductImage' => $product_image, 'quentity' => 1];
      // echo "<pre>";
      // print_r($_SESSION["cart"]);

      echo'<script>
        alert("Added to cart")
        window.location = "index.php"
      </script>';
    // }
    
  // }
}
?>