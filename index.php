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
    <style>
        .card-img-top { width: 100%;height: 200px; object-fit: contain; } .images { margin: 20px auto; }
    </style>
</head>

<body>
    <!-- first child -->
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
                    <a aria-current="page" href="./display.php" style="text-decoration: none; color: white; font-size: 25px; "> Cart<i class="fa-solid fa-cart-shopping"></i></a>

                </form>
            </div>
        </div>
    </nav>
    <!-- second child -->

    <div class="row text-center">
        <!-- products -->
        <div class="col-md-10 images">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <form method="POST" action="process.php">
                        <div class="card" style="width: 25rem;">
                            <img src="https://m.media-amazon.com/images/I/81DvzeZIBOL.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Camara 1</h5>
                                <p class="card-text">₹5000</p>
                                <input type="hidden" name="product_image" value="./images/food1.jpg">
                                <input type="hidden" name="product_name" value="Camara1">
                                <input type="hidden" name="product_price" value="5000">
                                <input type="hidden" name="product_image" value="https://m.media-amazon.com/images/I/81DvzeZIBOL.jpg">
                                <input type="submit" name="addcart" value="Add Cart" class="btn btn-info"></input>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 mb-2">
                    <form method="POST" action="process.php">
                        <div class="card" style="width: 25rem;">
                            <img src="https://m.media-amazon.com/images/I/91b+LW0LDkL.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Camara 2</h5>
                                <p class="card-text">₹5500</p>
                                <input type="hidden" name="product_name" value="Camara 2">
                                <input type="hidden" name="product_price" value="5500">
                                <input type="hidden" name="product_image" value="https://m.media-amazon.com/images/I/91b+LW0LDkL.jpg">
                                <input type="submit" name="addcart" value="Add Cart" class="btn btn-info"></input>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4 mb-2">
                    <form method="POST" action="process.php">
                        <div class="card" style="width: 25rem;">
                            <img src="https://cdn.pixabay.com/photo/2012/04/13/17/00/camera-32871_640.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Camara 3</h5>
                                <p class="card-text"> ₹6000</p>
                                <input type="hidden" name="product_name" value="Camara 3">
                                <input type="hidden" name="product_price" value="6000">
                                <input type="hidden" name="product_image" value="https://cdn.pixabay.com/photo/2012/04/13/17/00/camera-32871_640.png">
                                <input type="submit" name="addcart" value="Add Cart" class="btn btn-info"></input>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4 mb-2">
                    <form method="POST" action="process.php">
                        <div class="card" style="width: 25rem;">
                            <img src="https://images.pexels.com/photos/50924/pexels-photo-50924.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Camara 4</h5>
                                <p class="card-text">₹8000</p>
                                <input type="hidden" name="product_name" value="Camara 4">
                                <input type="hidden" name="product_price" value="8000">
                                <input type="hidden" name="product_image" value="https://images.pexels.com/photos/50924/pexels-photo-50924.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                                <input type="submit" name="addcart" value="Add Cart" class="btn btn-info"></input>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4 mb-2">
                    <form method="POST" action="process.php">
                        <div class="card" style="width: 25rem;">
                            <img src="https://images.pexels.com/photos/11882783/pexels-photo-11882783.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Camara 5</h5>
                                <p class="card-text">₹10000</p>
                                <input type="hidden" name="product_name" value="Camara 5">
                                <input type="hidden" name="product_price" value="10000">
                                <input type="hidden" name="product_image" value="https://images.pexels.com/photos/11882783/pexels-photo-11882783.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                                <input type="submit" name="addcart" value="Add Cart" class="btn btn-info"></input>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4 mb-2">
                    <form method="POST" action="process.php">
                        <div class="card" style="width: 25rem;">
                            <img src="https://media.gettyimages.com/id/185278433/photo/black-digital-slr-camera-in-a-white-background.jpg?s=612x612&w=gi&k=20&c=0L7vA3lq5Xy30FwCIBRAsW7Ud1i12z36vzPZ16pdeL4=" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Camara 6</h5>
                                <p class="card-text">₹9000</p>
                                <input type="hidden" name="product_name" value="Camara 6">
                                <input type="hidden" name="product_price" value="9000">
                                <input type="hidden" name="product_image" value="https://media.gettyimages.com/id/185278433/photo/black-digital-slr-camera-in-a-white-background.jpg?s=612x612&w=gi&k=20&c=0L7vA3lq5Xy30FwCIBRAsW7Ud1i12z36vzPZ16pdeL4=">
                                <input type="submit" name="addcart" value="Add Cart" class="btn btn-info"></input>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4 mb-2">
                    <form method="POST" action="process.php">
                        <div class="card" style="width: 25rem;">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFT95VhlKx4QiicnU6SVh5ndRnDZLBcQYgoQ&usqp=CAU" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Camara 7</h5>
                                <p class="card-text">₹7000</p>
                                <input type="hidden" name="product_name" value="Camara 7">
                                <input type="hidden" name="product_price" value="7000">
                                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFT95VhlKx4QiicnU6SVh5ndRnDZLBcQYgoQ&usqp=CAU">
                                <input type="submit" name="addcart" value="Add Cart" class="btn btn-info"></input>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4 mb-2">
                    <form method="POST" action="process.php">
                        <div class="card" style="width: 25rem;">
                            <img src="https://cdn.pixabay.com/photo/2018/08/22/13/07/digital-camera-3623574_1280.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Camara 8</h5>
                                <p class="card-text">₹6500</p>
                                <input type="hidden" name="product_name" value="Camara 8">
                                <input type="hidden" name="product_price" value="6500">
                                <input type="hidden" name="product_image" value="https://cdn.pixabay.com/photo/2018/08/22/13/07/digital-camera-3623574_1280.jpg">
                                <input type="submit" name="addcart" value="Add Cart" class="btn btn-info"></input>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4 mb-2">
                    <form method="POST" action="process.php">
                        <div class="card" style="width: 25rem;">
                            <img src="https://m.media-amazon.com/images/I/91ljsG5QdPL.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Camara 9</h5>
                                <p class="card-text">₹8000</p>
                                <input type="hidden" name="product_name" value="Camara 9">
                                <input type="hidden" name="product_price" value="8000">
                                <input type="hidden" name="product_image" value="https://m.media-amazon.com/images/I/91ljsG5QdPL.jpg">
                                <input type="submit" name="addcart" value="Add Cart" class="btn btn-info"></input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>