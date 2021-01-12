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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <?php include"navbar.php"; ?>


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/bg.jpg" class="d-block w-100" alt="..." height="550" width="1200">
      <div class="carousel-caption d-md-block">
                    <a href="gallery.php"><button type="button" class="btn btn-success">Gallery</button></a>
                    <a href="activities.php"><button type="button" class="btn btn-danger">Contact</button></a>
                </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/bg1.jpg" class="d-block w-100" alt="..." height="550" width="1200">
      <div class="carousel-caption d-md-block">
                    <a href="gallery.php"><button type="button" class="btn btn-success">Gallery</button></a>
                    <a href="activities.php"><button type="button" class="btn btn-danger">Contact</button></a>
                </div>
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>


    <div class="container-fluid">
        <h2 class="text-center my-2">Keep Planning</h2><br>
        <div class="row rounded mx-1" style="background-color: #ff5d5d;">
            <div class="col-lg-6 col-12 p-1">
                <br>
                <h1 class="text-center text-light">Start saving your travel ideas</h1><br>
                <p class="text-center text-light">Create a Trip to save and organise all of your travel ideas, and see
                    them on a map</p>
                <br><a href="attract.php" class="text-decoration-none"><button type="button" class="btn btn-primary rounded-pill d-flex m-auto">Explore now</button></a></a><br>

            </div>
            <div class="col-lg-6 col-12 p-2">
            <div class="card mb-6 shadow-sm d-block">
            <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=newcastle%20uk&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
        </div>
    </div>

    <div class="container-fluid py-2">
        <div class="row rounded my-1 bg-primary py-1">
            <div class="col-lg-6 col-12 p-1 text-center">
                <div class="card mb-6 shadow-sm d-block"> <iframe width="100%" height="300"
                        src="https://www.youtube.com/embed/uCPwOqL1Oig" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-12 p-2">
                <br>
                <h1 class="text-center text-light">Explore the Beauty of Newcastle</h1><br>
                <p class="text-center text-light">Create a Trip to save and organise all of your travel ideas, and see
                    them on a map</p>
                <br><a href="activities.php" class="text-decoration-none"><button type="button"
                        class="btn btn-danger d-flex m-auto rounded-pill">Contact Us</button></a><br>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="row rounded py-1 text-center">
            <div class="col-lg-3 col-12 p-2  bg-warning border border-dark rounded align-items-center mb-5">
                <br>
                <h1 class="text-center text-light ">See your booked activities</h1><br>
                <p class="text-center text-light">Find the bookings you have done to explore the attractions of Newcastle</p>
                <br><a href="bookings.php" class="text-decoration-none"><button type="button"
                        class="btn btn-outline-danger d-flex m-auto rounded-pill">Visit now</button></a><br>
            </div>
            <div class="col-lg-3 col-12 p-2  bg-warning border border-dark rounded mb-5">
                <br>
                <h1 class="text-center text-light ">Explore the Beauty of Newcastle</h1><br>
                <p class="text-center text-light">Find the Attractions of Newcastle, Places with beauty in Newcastle.</p>
                <br><a href="activities.php" class="text-decoration-none"><button type="button"
                        class="btn btn-outline-danger d-flex m-auto rounded-pill"> Visit now</button></a><br>
            </div>
            <div class="col-lg-3 col-12 p-2  bg-warning border border-dark rounded mb-5">
                <br>
                <h1 class="text-center text-light">Explore Budget Hotels in Newcastle</h1><br>
                <p class="text-center text-light">Thinking where to stay, find out best hotels in Newcastle</p>
                <br><a href="accomodation.php" class="text-decoration-none"><button type="button"
                        class="btn btn-outline-danger d-flex m-auto rounded-pill">Visit now</button></a><br>
            </div>
            <div class="col-lg-3 col-12 p-2 bg-warning border border-dark rounded mb-5">
                <br>
                <h1 class="text-center text-light">Explore the details of Newcastle</h1><br>
                <p class="text-center text-light">See the beauty of Newcastle. Covid guidelines</p>
                <br><a href="about.php" class="text-decoration-none"><button type="button"
                        class="btn btn-outline-danger d-flex m-auto rounded-pill">Visit now</button></a><br>
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