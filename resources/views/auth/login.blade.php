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


            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <input type="email"  class="form-control 
                    @error('email') is-invalid @enderror" name="email" 
                    value="{{ old('email') }}" required autocomplete="email" name="email" placeholder="Email" />
                    @if($errors->has('email')) 
                    <span class="invalid-feedback" role="alert">
                        
                    </span>
                @endif
                </div>
                <div class="mb-3">
                    <input type="password"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" name="password" placeholder="Mot de passe" />
                    @if($errors->has('password'))   
                    <span class="invalid-feedback" role="alert">
                        
                    </span>
                @endif
                </div>
                
                <div class="mb-3">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input" id="rememberCheck" />
                    <label class="form-check-label" for="remember">    {{ __('souviens-toi de moi') }}</label>
                </div>
                <div class="buttons d-block">
                    <button type="submit" class="btn-hover color-blue">Se connecter</button>

                   </div>
                    @if (Route::has('password.request'))
                    </br>
                    <div class="buttons d-block">
                        
                   <button class="btn-hover color-blue" onclick="location.href='{{ route('password.request') }}'" type="button">
         
                        {{ __('Mot de passe oublié ?') }}
                    </button>
                
                </div>
                @endif
            </form>

        </section>
        <div class="footer">
            <p>Blink Pharma Copyright 2022.</p>
        </div>

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
     <script src="/assets/vendor/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
     <script src="/assets/vendor/bootstrap/js/popper.min.js" crossorigin="anonymous"></script>
     <script src="/assets/vendor/bootstrap/jquery/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
     <script src="/assets/js/main.js"></script>
 </body>
</html>


