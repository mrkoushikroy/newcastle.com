<?php
session_start();
$id= $_SESSION['id'];
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

    <div class="container">
    <h2 class="py-3 text-center">Your Bookings</h2>
        <div class="row border rounded ">
        <?php
                require_once"db/config.php";
                $sql="SELECT ba.date_of_activity, ba.number_of_tickets, c.customer_forename, a.activity_name  FROM booked_activities ba 
                INNER JOIN customers c ON ba.customerID = c.customerID
                INNER JOIN activities a ON ba.activityID = a.activityID
                where ba.customerID='$id'";
                $result = mysqli_query($conn, $sql);
                $no=mysqli_num_rows($result);
                if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    echo'<div class="col-11 d-flex flex-row mb-4 p-2">
                    <div class="col-3 text-center"><img src="assets/img/user.png" alt="" width="60" height="60">
                    <p class="card-text mb-auto"><strong>'.$row['customer_forename'].'</strong></p>
                    </div>
                    <div class="col-8">
                        <h5 class="mb-0">'.$row['activity_name'].'</h5>
                        <p class="card-text mb-auto"> Date of activity: <strong>'.$row['date_of_activity'].'</strong></p>
                        <p class="card-text mb-auto">Number of tickets: <span class="badge bg-secondary">'.$row['number_of_tickets'].'</span></p>
                    </div>
                </div>
                <hr>';

                }
                }
                else{
                    echo '<div class="alert alert-danger" role="alert">No bookings found !</div>';
                }

                    ?>
            
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