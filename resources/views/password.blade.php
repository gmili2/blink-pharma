<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/vendor/bootstrap/scss/bootstrap.css" />
        <link rel="stylesheet" href="/assets/css/buttons.css" />
        <link rel="stylesheet" href="/assets/css/main.css" />
        <title>Blink pharma</title>
    </head>

    <body class="p-login">
        <section class="support">
            <a href="tel:05 30 500 500"><b>Support :</b> 05 30 500 500 <img src="assets/icons/support.svg" alt="support" /></a>
        </section>

        <section class="login">
            <div class="logo">
                <img src="assets/img/logo.png" alt="Blink" />
            </div>

            <form action="home.html" method="POST">
                <div class="text-center mb-4">
                    <p>Entrez votre e-mail pour obtenir un lien de réinitialisation</p>
                </div>

                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" />
                </div>

                <div class="buttons d-block">
                    <button type="submit" class="btn-hover color-blue">Envoyer le lien</button>
                </div>
            </form>
        </section>
        <div class="footer">
            <p>BlinkPharma Copyright 2021.</p>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/js/popper.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/jquery/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script src="/assets/js/main.js"></script>
    </body>
</html>
