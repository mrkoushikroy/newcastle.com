<?php
session_start();
if(isset($_SESSION['id'])){
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <?php include"navbar.php"; ?>

    <div class="container text-center">
            <div class=" text-center h3 mt-3">
                Hotels in Newcastle
            </div>
            <div class="container-fluid text-dark">
                <div class="row">
                    <div class="col-lg-6 col-12 p-2">
                        <div class="row">
                            <div class="col-6">
                                <div class="card mb-4 shadow-sm">
                                    <img src="assets/img/hotels/1.jpeg" alt="">
                                    <div class="card-body">
                                        <p class="card-text h5">Ip Cottage Newcastle</p>
                                        <p class="card-text">House/Cottage</p>
                                        <div>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            (315 Reviews)

                                        </div>
                                        <div>
                                            <a href="https://www.zomato.com/Newcastle" class="btn btn-outline-danger" target="_blank"   >Book
                                                online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card mb-4 shadow-sm">
                                    <img src="assets/img/hotels/2.jpeg" alt="">
                                    <div class="card-body">
                                        <p class="card-text h5">Sun Park Resort</p>
                                        <p class="card-text">Resort</p>
                                        <div>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            (255 Reviews)

                                        </div>
                                        <div>
                                            <a href="https://www.zomato.com/Newcastle" class="btn btn-outline-danger" target="_blank"   >Book
                                                online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 d-flex flex-column">
                                <div class="card mb-4 shadow-sm">
                                    <img src="assets/img/hotels/3.jpeg" alt="">
                                    <div class="card-body">
                                        <p class="card-text h5">The Annayatama</p>
                                        <p class="card-text">Resort</p>
                                        <div>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            (55 Reviews)

                                        </div>
                                        <div>
                                            <a href="https://www.zomato.com/Newcastle" class="btn btn-outline-danger" target="_blank"   >Book
                                                online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 d-flex flex-column">
                                <div class="card mb-4 shadow-sm">
                                    <img src="assets/img/hotels/4.jpeg" alt="">
                                    <div class="card-body">
                                        <p class="card-text h5">Club Mahindra</p>
                                        <p class="card-text">Hotel</p>
                                        <div>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            (315 Reviews)

                                        </div>
                                        <div>
                                            <a href="https://www.zomato.com/Newcastle" class="btn btn-outline-danger" target="_blank"   >Book
                                                online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 d-flex flex-column">
                                <div class="card mb-4 shadow-sm">
                                    <img src="assets/img/hotels/5.jpeg" alt="">
                                    <div class="card-body">
                                        <p class="card-text h5">River Side Cottage</p>
                                        <p class="card-text">Cottage</p>
                                        <div>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            (315 Reviews)

                                        </div>
                                        <div>
                                            <a href="https://www.zomato.com/Newcastle" class="btn btn-outline-danger" target="_blank"   >Book
                                                online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 d-flex flex-column">
                                <div class="card mb-4 shadow-sm">
                                    <img src="assets/img/hotels/6.jpeg" alt="">
                                    <div class="card-body">
                                        <p class="card-text h5">Roy Cottage Newcastle</p>
                                        <p class="card-text">House</p>
                                        <div>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            (315 Reviews)

                                        </div>
                                        <div>
                                            <a href="https://www.zomato.com/Newcastle" class="btn btn-outline-danger" target="_blank"   >Book
                                                online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="card mb-6 col-12 shadow-sm d-block accomiframe">
                            <iframe id="gmap_canvas2"
                                src="https://maps.google.com/maps?q=newcastle%20uk&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                        </div>
                        <div class="text-dark text-center">
                            <br>
                            <h2 class="text-center">Find Out best deals now</h2><br><br><br><br><br>
                            <h3 class="text-center">Reach us</h3>
                            <br><a href="activities.php" class="btn btn-sm btn-outline-danger rounded-pill">Contact
                                    Us</a><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
    <?php include"footer.php"; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>
<?php
}
else{
    header("location: login.php");
}
?>