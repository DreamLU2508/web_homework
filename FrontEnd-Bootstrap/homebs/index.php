<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <img src="images/logo.png" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav ms-auto ">
                                    <a class="nav-link text-color" href="#">Home</a>
                                    <a class="nav-link text-color" href="#">About</a>
                                    <a class="nav-link text-color" href="#">Foods</a>
                                    <a class="nav-link text-color" href="#">Contact</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="d-flex col-md-12 bg-cuatoi" style="background-image: url(images/bg.jpg);">
                    <div class="input-group justify-content-sm-center align-self-sm-center h-10">
                        <input type="search" class="form-control rounded-3 " style="flex: 0 0 50%" placeholder="Search"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="button" class="btn btn-outline-primary color-cuatoi"
                            style="color: #FFF;">search</button>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <body>
        <div class="container-fluid">
            <div class="row">
                <h2 class="Explore text-center mt-5" style="color: #000;">Explore Foods</h2>
            </div>

            <div class="row">
                <div class="col-md-12 d-md-flex justify-content-center my-4">
                    <div class="explore-food d-sm-flex justify-content-sm-center">
                        <img class="rounded explore-food-img" src="images/pizza.jpg" alt="">
                        <h3 class="explore-food-title">Pizza</h3>
                    </div>

                    <div class="explore-food d-sm-flex justify-content-sm-center">
                        <img class="rounded explore-food-img" src="images/burger.jpg" alt="">
                        <h3 class="explore-food-title">burger</h3>
                    </div>

                    <div class="explore-food d-sm-flex justify-content-sm-center">
                        <img class="rounded explore-food-img" src="images/momo.jpg" alt="">
                        <h3 class="explore-food-title">Momo</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid  bg-light">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="Explore text-center mt-5" style="color: #000;">Foods Menu</h2>
                </div>
            </div>

        <div class="row my-4">
                <div class="col-md-6 col-sm-12 d-flex flex-wrap justify-content-md-end justify-content-sm-center">
                    <div class="card mb-3 rounded justify-content-end " style="max-width: 550px;">
                        <div class="row g-0 ">
                            <div class="col-md-4 col-sm-4 d-sm-flex justify-content-sm-center align-self-sm-center ">
                                <img src="images/menu-pizza.jpg" style="max-height: 100px;  " class="img-fluid rounded " alt="...">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="card-body">
                                    <h5 class="card-title">Food Title</h5>
                                    <p class="card-text my-0">$2.3</p>
                                    <p class="card-text figure "><small class="text-muted font-size-cuatoi ">Made with Italian Sauce, chicken, and organice vegetables</small></p>
                                    <a href="" class="btn btn-primary color-cuatoi font-size-cuatoi">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3 rounded justify-content-end " style="max-width: 550px;">
                        <div class="row g-0 ">
                            <div class="col-md-4 col-sm-4  d-sm-flex justify-content-sm-center align-self-sm-center ">
                                <img src="images/menu-burger.jpg" style="max-height: 100px;  " class="img-fluid rounded " alt="...">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="card-body">
                                    <h5 class="card-title">Nice Burger</h5>
                                    <p class="card-text my-0">$2.3</p>
                                    <p class="card-text figure "><small class="text-muted font-size-cuatoi ">Made with Italian Sauce, chicken, and organice vegetables</small></p>
                                    <a href="" class="btn btn-primary color-cuatoi font-size-cuatoi">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3 rounded justify-content-end " style="max-width: 550px;">
                        <div class="row g-0 ">
                            <div class="col-md-4 col-sm-4 d-sm-flex justify-content-sm-center align-self-sm-center ">
                                <img src="images/menu-pizza.jpg" style="max-height: 100px;  " class="img-fluid rounded " alt="...">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="card-body">
                                    <h5 class="card-title">Food Title</h5>
                                    <p class="card-text my-0">$2.3</p>
                                    <p class="card-text figure "><small class="text-muted font-size-cuatoi ">Made with Italian Sauce, chicken, and organice vegetables</small></p>
                                    <a href="" class="btn btn-primary color-cuatoi font-size-cuatoi">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 d-sm-flex flex-sm-wrap justify-content-md-start  justify-content-sm-center">
                    <div class="card mb-3 rounded justify-content-end " style="max-width: 550px;">
                        <div class="row g-0 ">
                            <div class="col-md-4 col-sm-4 d-sm-flex justify-content-sm-center align-self-sm-center ">
                                <img src="images/menu-burger.jpg" style="max-height: 100px;  " class="img-fluid rounded " alt="...">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="card-body">
                                    <h5 class="card-title">Smoky Burger</h5>
                                    <p class="card-text my-0">$2.3</p>
                                    <p class="card-text figure "><small class="text-muted font-size-cuatoi ">Made with Italian Sauce, chicken, and organice vegetables</small></p>
                                    <a href="" class="btn btn-primary color-cuatoi font-size-cuatoi">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3 rounded justify-content-end " style="max-width: 550px;">
                        <div class="row g-0 ">
                            <div class="col-md-4 col-sm-4 d-sm-flex justify-content-sm-center align-self-sm-center ">
                                <img src="images/menu-pizza.jpg" style="max-height: 100px;  " class="img-fluid rounded " alt="...">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="card-body">
                                    <h5 class="card-title">Food Title</h5>
                                    <p class="card-text my-0">$2.3</p>
                                    <p class="card-text figure "><small class="text-muted font-size-cuatoi ">Made with Italian Sauce, chicken, and organice vegetables</small></p>
                                    <a href="" class="btn btn-primary color-cuatoi font-size-cuatoi">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3 rounded justify-content-end " style="max-width: 550px;">
                        <div class="row g-0 ">
                            <div class="col-md-4 col-sm-4 d-sm-flex justify-content-sm-center align-self-sm-center ">
                                <img src="images/menu-momo.jpg" style="max-height: 100px;  " class="img-fluid rounded " alt="...">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="card-body">
                                    <h5 class="card-title">Chicken Steam Momo</h5>
                                    <p class="card-text my-0">$2.3</p>
                                    <p class="card-text figure "><small class="text-muted font-size-cuatoi ">Made with Italian Sauce, chicken, and organice vegetables</small></p>
                                    <a href="" class="btn btn-primary color-cuatoi font-size-cuatoi">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <a href="" class = "see-all text-decoration-none">
                        <p class="text text-center mb-5 text-color">See All Foods</p>
                    </a>
                </div>
            </div>
        </div>
    </body>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center my-2">
                    <i class="bi bi-facebook mx-2 footer-icon"></i>
                    <i class="bi bi-instagram mx-2 footer-icon"></i>
                    <i class="bi bi-twitter mx-2 footer-icon"></i>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">All rights reserved. Designed By <span class="text-color">Vijay Thapa</span></p>
                </div>
            </div>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>

</html>