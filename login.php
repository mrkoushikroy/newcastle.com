<?php
session_start();
if(!isset($_SESSION["username"])){
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="vendor/bootstrap/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <?php include"navbar.php"; ?>
    <div class="container col-lg-6 col-12 py-2 mt-3">


        <div id="box" class="">
            <form class="form-signin" method="post">
                <div class="text-center mb-4">
                    <h2 class="h3 mb-3 font-weight-normal">Login here</h2>

                    <div class="d-flex justify-content-center" id="msg" role="alert">
                        <p id="frm_error"></p>
                        <p id="load" class=""></p>
                    </div>
                    <div class="text-center">
                        <img class="rounded-circle d-none m-0 p-0" src="assets/img/animat.gif" alt="Generic placeholder image"
                            id="suc" width="140" height="140">
                    </div>

                </div>
                <div class="form-label-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" name="email" id="email" class="form-control fields" placeholder="Email address"
                        onkeyup="ValidateEmail();" required="">
                    <span id="error_email" class="text-danger text-success error_fields"></span>
                </div><br />

                <div class="form-label-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="password" id="password" class="form-control fields"
                        placeholder="Password" onkeyup="ValidatePassword();">
                    <span id="error_password" class="text-danger text-success error_fields"></span>

                </div><br />

                <div id="" class="text-danger"></div>
            </form>
        </div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="button" name="submit" id="submit" class="btn btn-success"
                onclick='form_login()'>submit</button>
        </div>


    </div>

    <?php include"footer.php"; ?>

    <script src="assets/js/jquery.js"></script>
    <script>
    function ValidateEmail() {
        var email = document.getElementById("email").value;
        var lblError = document.getElementById("error_email");
        lblError.innerHTML = "";
        var expr =
            /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (!expr.test(email)) {
            lblError.innerHTML = "Invalid email address.";
            $('#email').addClass('is-invalid');
            $('#email').removeClass('is-valid');
            $('#error_email').removeClass('text-success');
            $('#error_email').addClass('text-danger');
        } else {
            $('#email').addClass('is-valid');
            $('#email').removeClass('is-invalid');
            $('#error_email').removeClass('text-danger');
            $('#error_email').addClass('text-success');
            lblError.innerHTML = "looks good !";
        }
    }

    function ValidatePassword() {
        var password = document.getElementById("password").value;
        var lblErrorp = document.getElementById("error_password");
        lblErrorp.innerHTML = "";
        if (password.length < 5) {
            lblErrorp.innerHTML = "Invalid password";
            $('#password').addClass('is-invalid');
            $('#password').removeClass('is-valid');
            $('#error_password').removeClass('text-success');
            $('#error_password').addClass('text-danger');

        } else {
            $('#password').addClass('is-valid');
            $('#password').removeClass('is-invalid');
            $('#error_password').removeClass('text-danger');
            $('#error_password').addClass('text-success');
            lblErrorp.innerHTML = "looks good !";
        }
    }

    function form_login() {
        var email = jQuery('#email').val();
        var password = jQuery('#password').val();
        var frm_error = '';
        jQuery('.error_fields').html('');

        if (email.length <= 5) {
            jQuery('#email').addClass('is-invalid');
            jQuery('#error_email').html('Email must be more than 5 character');
            frm_error = 'yes';
        }
        if (email.length >= 6) {
            jQuery('#email').removeClass('is-invalid');
            jQuery('#email').addClass('is-valid');
            frm_error = '';
        }
        if (password.length <= 4) {
            jQuery('#password').addClass('is-invalid');
            jQuery('#error_password').html('Password must be more than 4 character');
            frm_error = 'yes';
        }
        if (password.length >= 5) {
            jQuery('#password').addClass('is-valid');
            jQuery('#password').removeClass('is-invalid');
            frm_error = '';
        }

        if (frm_error == '') {
            $('#submit').html('connecting..');
            $.ajax({
                url: "login-validate.php",
                type: "POST",
                data: 'email=' + email + '&password=' + password,
                success: function(data) {
                    //   alert(data);
                    if (data == "correct") {
                        jQuery('#msg').removeClass('alert alert-danger');
                        jQuery('#suc').removeClass('d-none');
                        jQuery('#msg').addClass('alert alert-success');
                        jQuery('#frm_error').html('Successful');
                        jQuery('#load').addClass('loader5');
                        setTimeout(function() {
                            window.location.replace("index.php");
                        }, 3000);
                    } else {
                        $('#submit').html('submit');
                        jQuery('#frm_error').html('Please enter valid details');
                        jQuery('#msg').addClass('alert alert-danger');
                    }
                }
            });

        }
    }
    </script>
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
    
        header("location:index.php");
}
?>