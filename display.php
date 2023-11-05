<?php
session_start();
?>
<?php
// error_reporting(0);

if (!isset($_SESSION["cart"])) {
?>
    <script>
        alert("Empty Card!!!")
        window.location = 'index.php'
    </script>

<?php
    // header("location: product.php");
}
// if (!isset($_REQUEST['removecart'])) {
//     session_destroy();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce website</title>
    <!-- add bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- add bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- add font-aswome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">
                            <h4>Home</h4>
                        </a>
                    </li>

                </ul>
                <form class="d-flex">
                    <!-- <input type="submit" name="removecart" value="Remove" class="btn btn-info" style="color: red; font-size: 20px; "></input> -->
                    <!-- <a aria-current="page" href="./logout.php" name="removecart" style="text-decoration: none; color: black; font-size: 25px; "> Remove All <i style="color: red" class="fa-solid fa-trash"></i></a> -->

                </form>
            </div>
        </div>
    </nav>
    <div class="container" style="text-align: center; margin-top:40px ">
        <?php
        $values = $_SESSION['cart'];
        // echo "<pre>";
        // print_r( $_SESSION['cart']);
        echo '<table  class="table table-bordered">';
        echo '<tr> <th>Product Name</th> <th>Product Image</th> <th>Product Price</th><th>Quantity</th><th>Update</th><th>Delete</th> </tr>';

        // echo '<tr>';
        $sum = 0;
        if (isset($_SESSION["cart"])) {
            foreach ($values as $key => $value) {
                $sum = $sum + $value["ProductPrice"];
                echo
              "<tr>
                <td>  $value[ProductName]</td>
                <td>$value[ProductImage]</td>
                <td> $value[ProductPrice]</td>
                <form action='update.php' method='POST' >
                <td> <input class='text-center border-0 ' name='quentity' type='number' min ='1' max='10'  value='$value[quentity]' ></td>
                <td><button class ='btn-warning' >Update</button></td>
                </form>
                <form action='delete.php' method='POST' >
                <td><button name='remove' class='btn-danger' onclick= 'return myfunction()' >Delete</button></td> 
                <input type='hidden' name='remove_item' value='$value[ProductName]'>
                </form>
                </tr>
                ";
            
            }
           echo "<b>Total Price : ₹</b>" .$sum."/-" ;
        }
        ?>
    </div>
    <script>
        function myfunction(){
            return confirm("are you sure to delete item?")
        }
    </script>
</body>

</html>