<?php
session_start();
if(isset($_REQUEST['remove'])){
    foreach($_SESSION['cart'] as $key => $v){ 
        // echo "<pre>";
        // print_r($key);
        if($v['ProductName'] == $_REQUEST['remove_item']){
        unset($_SESSION['cart'][$key]);
        } 
            echo"<script>
            alert('Item Removed');
            window.location = 'display.php';
            </script>";   
    }
    
}
?>