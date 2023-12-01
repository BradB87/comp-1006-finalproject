<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About</title>
    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- stylesheet-->
    <link rel="stylesheet" href="../css/about.css">

</head>

<body>
    <?php require('./include/header.php') ?>
    <main>
        <h1>J. Jonah Jameson personal blog</h1><br>
        <!-- image--->
        <div class="container">
            <img src="./image/dev-d2Py_uhXJQo-unsplash.jpg" alt="comics">
        </div>
        <!-- intro-->
        <p> Looking for an interesting read look at my below articles:</p>
        <!-- About use blog profile lists --> 
        <div class="list1 d-flex justify-content-center">
            <ul class="list-group list-group-flush  col-sm-12 col-md-3 col-lg-0">
                <h2>Past blog history:</h2><br>
                <li class="list-group-item">Where is Spiderman?</li>
                <li class="list-group-item">Where did he come from?</li>
                <li class="list-group-item">Why is he in my way?</li>
                <li class="list-group-item">Is Spiderman a menace to society!!</li>
            </ul>
        </div>
        <div class="list3 d-flex justify-content-center">
            <ol class="list-group list-group-numbered col-sm-12 col-md-3 col-lg-0">
                <h3>Why should you care</h3><br>
                <li class="list-group-item">Do it for America</li>
                <li class="list-group-item">Anti superheroes are better</li>
                <li class="list-group-item">We can think for ourselves</li>
            </ol>
        </div>





    </main>

</body>
<?php require('./include/footer.php') ?>


</html>