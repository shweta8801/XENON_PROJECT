<?php
include 'database_conection/config.php';
if (isset($_POST['register'])) {  ///// if submit button pressed.

    $username = $_POST['username_input'];
    $password = $_POST['password_input'];
    $confirm_password_input = $_POST['confirm_password_input'];

    $md5_password = md5($password);  ///// this is encrypted password for database.
    if ($password == $confirm_password_input) {
        $sql = "INSERT INTO `users` (`userid`, `username`, `password`, `user_status`, `date`) VALUES (NULL, '$username', '$password', '1', current_timestamp());";
        $run_query = mysqli_query($config, $sql);
        if ($run_query) {
            header("location:index.php");
        }
    } else {
        $failed = "Password and Confirm Password Not Match!";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Sell Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="inc/css/app.css" rel="stylesheet">

</head>

<body>
    <div>
        <div class="container ">
            <fieldset>


                <form action="" class="login_form" method="post">
                    <div class="text-center">
                    <img src="images/Bike1.jpg" alt="" class="login_logo  img-fluid" />
                    </div>

                    <div class="row ">
                        <div class="col-lg-3"></div>
                        <div class="mb-3 col-md-6 ">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="text" required class="form-control" id="exampleFormControlInput1" name="username_input" placeholder="Username" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="mb-3  col-md-6 ">
                            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                            <input type="password" required class="form-control" id="exampleFormControlInput1" name="password_input" placeholder="Password" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="mb-3  col-md-6 ">
                            <label for="exampleFormControlTextarea1" class="form-label">Confirm Password</label>
                            <input type="password" required class="form-control" id="exampleFormControlInput1" name="confirm_password_input" placeholder="Password" />
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="register" class="btn btn-primary">Register</button>
                        <a href="index.php" class="btn btn-xs btn-primary">Login</a>
                    </div>

                </form>
            </fieldset>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>