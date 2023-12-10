<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>home page</title>
    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- stylesheet-->
    <link  href="./css/index.css" rel="stylesheet">
</head>

<body>
    <?php require('./added/header.php');
    ?>

    <main>
        <!--- register form-->
        <section class="form-row row d-flex justify-content-center ">
            <h1>Don't have an account, Fill out form below to register!</h1>
            <div class="col-sm-12 col-md-3 col-lg-0 bg-secondary text-white .align-items-md-center">
                <form class="form1" method="post" action="registerSave.php">
                    <div class="mb-3">
                        <label for="first name" class="form-label">First Name:</label>
                        <input type="text" class="form-control" id="fname">
                    </div>
                    <div class="mb-3">
                        <label for="last name" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" id="lname">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="tel" class="form-control" id="phone">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email1">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password1">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </section>
        <!-- sign in form-->
        <section class="signIn">
            <div class="col align-self-center">
                <h2>Sign in below</h2>
                <form class="form2" method="post" action="./include/validate.php">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email2" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>

                    <button type=" submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </section>
        </div>
        </section>

    </main>

</body>
<?php require('./added/footer.php') ?>
<?php




















?>

</html>


































</head>