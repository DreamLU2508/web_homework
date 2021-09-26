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
                    <h2 class="title ml-cuatoi my-5">Manage Food</h2>
                </div>
            </div>

            <div class="row bg-cuatoi">
                <button type="button" class="btn btn-primary width-fit ml-cuatoi">Add Food</button>
            </div>

            <div class="row bg-cuatoi">
                <div class="col-md-12">
                    <table class="table ml-cuatoi width-table my-3 ">
                        <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Food</th>
                                <th scope="col">Price</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Total</th>
                                <th scope="col" style="min-width: 98px;" >Order Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Costomer Name</th>
                                <th scope="col" style="min-width: 100px;">ConTact </th>
                                <th scope="col">Email</th>
                                <th scope="col" >Addess</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mixed Pizza</td>
                                <td>10.00</td>
                                <td>2</td>
                                <td>20.00</td>
                                <td>2020-11-30<br>04:07:17</td>
                                <td class="text-success">Delivered</td>
                                <td>Jana Bush</td>
                                <td>+1 (562)<br>101-2028</td>
                                <td>tydujy@mailinator.com</td>
                                <td>Minima iure ducimus</td>
                                <td>
                                    <button type="button" class="btn btn-success">Update order</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Best Burger</td>
                                <td>4.00</td>
                                <td>4</td>
                                <td>16.00</td>
                                <td>2020-11-30<br>03:52:43</td>
                                <td class="text-success">Delivered</td>
                                <td>Kelly Dillard</td>
                                <td>+1 (908)<br>914-3106</td>
                                <td>fexekihor@mailinator.com</td>
                                <td>Incudunt ipsum ad d</td>
                                <td>
                                    <button type="button" class="btn btn-success">Update order</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Sadeko Momo</td>
                                <td>6.00</td>
                                <td>3</td>
                                <td>18.00</td>
                                <td>2020-11-30<br>03:48:48</td>
                                <td class="text-danger">Cancelled</td>
                                <td>Bradley farrell</td>
                                <td>+1 (576)<br>504-4657</td>
                                <td>zuhafiq@mailinator.com</td>
                                <td>Duis aliqua Qui lor</td>
                                <td>
                                    <button type="button" class="btn btn-success">Update order</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>

    <footer>
        <div class="container">
            <div class="row bg-footer-cuatoi ">
                <p class="footer-title text-center mt-sm-3">2020 All rights reserved. Foods House. Developed By - <span
                        class="span footer-text-color"> CSE485</span></p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>

</html>