<?php
require './added/header.php';
?>
<main>
    <section class="signIn">
        <div class="col align-self-center">
            <!-- sign in form for validation-->
            <h3>sign in please!</h3>
            <form method="post" action="./added/validate.php">
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="email" required > 
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="password" required>
                </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</main>
<?php
require './added/footer.php';
?>








