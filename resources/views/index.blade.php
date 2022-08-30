<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="resource_blink_pharma/assets/vendor/bootstrap/scss/bootstrap.css" />
        <link rel="stylesheet" href="resource_blink_pharma/assets/css/buttons.css" />
        <link rel="stylesheet" href="resource_blink_pharma/assets/css/main.css" />
        <title>Blink pharma</title>
    </head>

    <body class="p-login">
        <section class="support">
            <a href="tel:05 30 500 500"><b>Support :</b> 05 30 500 500 <img src="resource_blink_pharma/assets/icons/support.svg" alt="support" /></a>
        </section>

        <section class="login">
            <div class="logo">
                <img src="assets/img/logo.png" alt="Blink" />
            </div>

            <form action="home.html" method="POST">
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" />
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Mot de passe" />
                </div>

                <div class="mb-3">
                    <input type="checkbox" class="form-check-input" id="rememberCheck" />
                    <label class="form-check-label" for="rememberCheck">Se souvenir de moi</label>
                </div>

                <div class="buttons d-block">
                    <button type="submit" class="btn-hover color-blue">Se connecter</button>
                </div>

                <div class="reset-password">
                    <a href="/password.html">Mot de passe oublié ?</a>
                </div>
            </form>
        </section>
        <div class="footer">
            <p>BlinkPharma Copyright 2021.</p>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="resource_blink_pharma/assets/vendor/bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
        <script src="resource_blink_pharma/assets/vendor/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="resource_blink_pharma/assets/vendor/bootstrap/js/popper.min.js" crossorigin="anonymous"></script>
        <script src="resource_blink_pharma/assets/vendor/bootstrap/jquery/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script src="resource_blink_pharma/assets/js/main.js"></script>
    </body>
</html>
