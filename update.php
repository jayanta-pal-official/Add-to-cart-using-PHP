<?php
session_start();
if (isset($_SESSION["cart"]) ) {  
    echo"<pre>";
    print_r($_SESSION["cart"]) ;
}
?>