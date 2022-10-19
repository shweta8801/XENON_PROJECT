<?php
session_start();
include 'database_conection/config.php';
if (isset($_POST['send_message'])) {
	$email = $_POST['email_input'];
	$userid = $_SESSION['userid_session'];
	$subject = $_POST['subject_message'];
	$description = $_POST['description_input'];
	$sql = "INSERT INTO `contact_page` (`userid`, `email`, `subject`, `description`, `status`, `date`) VALUES ('$userid', '$email', '$subject', '$description', '0', current_timestamp());";
	$insert_data = mysqli_query($config, $sql);
	if ($insert_data) {
		$success = "We will conect you soon";
	} else {
		$failed = "Something Went Wrong!.";
	}
}

?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact us</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link href="inc/css/app.css" rel="stylesheet">

</head>

<body>
	<?php include 'inc/navbar.php'; ?>
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
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" required class="form-control" id="exampleFormControlInput1" name="email_input" placeholder="Email" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="mb-3  col-md-6 ">
                            <label for="exampleFormControlTextarea1" class="form-label">Subject</label>
                            <input type="text" required class="form-control" id="exampleFormControlInput1" name="subject_message" placeholder="Subject" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="mb-3  col-md-6 ">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea required class="form-control" id="exampleFormControlInput1" name="description_input" rows="5" placeholder="Type a message" ></textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="send_message" class="btn btn-primary">Send</button>
                    
                    </div>

                </form>
            </fieldset>
        </div>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>