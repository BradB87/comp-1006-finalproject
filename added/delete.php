<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete page</title>
</head>
<section class="form-row row d-flex justify-content-center ">
    <h1>Don't have an account, Fill out form below to register!</h1>
    <div class="col-sm-12 col-md-3 col-lg-0 bg-secondary text-white .align-items-md-center">
        <form method="post" action="registerSave.php">
        <div class="mb-3">
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
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirm Password
            </label> <input type="password" class="form-control" id="confirm_password">
        </div>
        <button type="submit" class=" delete btn btn-primary">Submit</button>
        </form>
    </div>
</section>






<body>

</body>

</html>