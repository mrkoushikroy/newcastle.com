<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Newcastle guide official!</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container-fluid">
  <div class="anim">
                <a href="/">
                    <img class="rounded mr-4 border border-danger p-1 mr-2" width="50" height="50"
                        src="assets/img/logo.png" alt=""></a>
            </div>
            <a class="navbar-brand d-flex align-items-center text-white font-weight-bolder mb-0 h3"
                href="/">Newcastle.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php
      if(isset($_SESSION['id'])){

      ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="activities.php">Activites</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="accomodation.php">Accomodations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="bookings.php">Bookings</a>
                    </li>
                    <?php
      }
      ?>
      </ul>
      <form class="d-flex">
      <?php
                            if(isset($_SESSION['username'])){
                                echo '<a type="button" class="btn btn-info me-2 text-light"><i class="fa fa-user-circle" aria-hidden="true"></i> Welcome ' .$_SESSION["name"]. '</a>
                                <a href="logout.php" type="button" class="btn log-btn btn-sm btn-info me-2"><i class="fa fa-power-off" aria-hidden="true"></i></a>';
                               
                            
                        
                         }
                        else{
                            echo'<a href="login.php" type="button" class="btn log-btn  btn-info me-2">Login</a>
                            <a href="register.php" type="button" class="btn log-btn  btn-info me-2">Signup</a>';

                        }
                        ?>
      </form>
    </div>
  </div>
</nav>


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