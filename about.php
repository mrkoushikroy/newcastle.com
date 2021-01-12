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

    <div class="container text-center mt-4  rounded opacity-2">
        <div class="row">
            <div class="col-md-6 col-12">
                <h2 class="mt-4">About Us !</h2><br><br>


                <blockquote>
                    <p style="text-align: center;">The Newcastle.com websitr points the United by seven iconic bridges across a bustling Quayside, Newcastle
                        and Gateshead form a single, diverse and extremely vibrant visitor destination in the North East
                        of England.

                        Get ready to be charmed by the famous Geordie spirit in a city bursting with thriving nightlife,
                        an award-winning restaurant scene, top-notch attractions and museums and places to stay which
                        span comfortable affordability to four-star luxury. Choose from a wealth of things to do in
                        NewcastleGateshead and discover the unexpected with centuries-old history and heritage,
                        breathtaking architecture and impressive innovation. Undeniably, NewcastleGateshead is the go-to
                        destination for roaring nightlife. Experience the pull of a night on the Toon and be wowed by
                        excellent culture and events all year round – from showstopping theatre, comedy and live music
                        that sits alongside the clubs, cocktail bars and independent breweries.

                        A passionate city bursting with Northern pride, visit NewcastleGateshead for world-class sport
                        at iconic venues.

                        Stay with us in NewcastleGateshead and explore further afield from striking city centre to
                        beautiful coastline and rugged countryside – a varied experience all wrapped up in one visit.



                        Delve into our official tourism guide for NewcastleGateshead to discover the North East’s most
                        vibrant destination.</p>
                </blockquote>
            </div>
            <div class="col-md-6 col-12 mt-4">
                <div class="custom story">
                    <h4 class="alert alert-danger bg-danger">COVID-19 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h4>
                    <h4 class="alert alert-warning">If you are thinking about booking a trip during the next few
                        months, but are unsure how any travel restrictions related to COVID-19 may impact that
                        booking, don't worry we have you covered.</h4>
                    <h4 class="alert alert-warning">And for anyone who has already made a booking with Active
                        Aotearoa for a trip coming up, rest assured that if it is affected by government imposed
                        restrictions then you will also be covered by our Covid-19 refund policy (see below).</h4>
                    <h4 class="alert alert-warning">With a bit of luck we'll all be back to normal soon! If you have
                        any questions in the meantime please don't hesitate to get in touch on +1234567890 or
                        <a href="#">Newcastle.com</a>
                    </h4>
                    <h4 class="alert alert-warning">COVID-19 REFUND POLICY:&nbsp;If your confirmed activity has to
                        be cancelled by us due to travel restrictions imposed by the government because of COVID-19
                        we will refund your deposit, or the total sum paid at the time of cancellation. &nbsp;&nbsp;
                    </h4>
                    <h5>&nbsp;</h5>
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