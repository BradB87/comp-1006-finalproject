
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register page</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--stylesheets-->
    <link rel="stylesheet" href="./css/register.css">

</head>
<body>
<?php require('./include/header.php') ?>


<!--register form--->
<h1>Please register below:</h1>
    <section class="form-row row d-flex justify-content-center">
       
        <div class="col-sm-12 col-md-2 col-lg-0 bg-secondary text-white ">
            <form method="post" action="registerSave.php">
                <div class="mb-3 ">
                    <label for="fname" class="form-label">First Name:</label>
                    <input type="text" class="form-control" id="fname">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name:</label>
                    <input type="text" class="form-control" id="lname">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="tel" class="form-control" id="phone">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</body>