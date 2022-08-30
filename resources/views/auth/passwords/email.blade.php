

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

        <section class="support">
            <a href="tel:05 30 500 500"><b>Support :</b> 05 30 500 500 <img src="assets/icons/support.svg" alt="support" /></a>
        </section>

        <section class="login">
            <div class="logo">
                <img src="/assets/img/logo.png" alt="Blink" />
            </div>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
                <div class="mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                    placeholder="Email"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div> --}}

                <div class="buttons d-block">
                    <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    {{-- @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif --}}
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
    
    
    
    
    
    
    
    
    
    
    
