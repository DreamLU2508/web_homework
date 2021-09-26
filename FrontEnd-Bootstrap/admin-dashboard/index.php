<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active text-color" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-color" href="#">Admin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-color" href="#">Category</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-color" href="#">Food</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-color" href="#">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-color" href="#">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <body>
        <div class="container">
            <div class="row bg-cuatoi">
                <div class="col-md-12">
                    <h2 class="title ml-cuatoi my-5">DashBoard</h2>
                </div>
            </div>

            <div class="row bg-cuatoi">
                <div class="col-md-12 d-flex position-relative left-cuatoi">
                    <div class="dashboard-box">
                        <h2 class = "dashboard-box-num m-0 py-3 text-center">4</h2>
                        <p class="dashboard-box-title text-center">Categories</p>
                    </div>
                    <div class="dashboard-box">
                        <h2 class = "dashboard-box-num m-0 py-3 text-center">6</h2>
                        <p class="dashboard-box-title text-center">Foods</p>
                    </div>
                    <div class="dashboard-box">
                        <h2 class = "dashboard-box-num m-0 py-3 text-center">3</h2>
                        <p class="dashboard-box-title text-center">Total Orders</p>
                    </div>
                    <div class="dashboard-box">
                        <h2 class = "dashboard-box-num m-0 py-3 text-center">$36.00</h2>
                        <p class="dashboard-box-title text-center">Revenue Generated</p>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <footer>
        <div class="container">
            <div class="row bg-footer-cuatoi ">
                <p class="footer-title text-center mt-sm-3">2020 All rights reserved. Foods House. Developed By - <span class="span footer-text-color"> CSE485</span></p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>

</html>