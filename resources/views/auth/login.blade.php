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
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>


                {{-- <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control 
                        @error('email') is-invalid @enderror" name="email" 
                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> --}}
                <div class="mb-3">
                    <input type="password"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" name="password" placeholder="Mot de passe" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>


{{-- 
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> --}}
                
                <div class="mb-3">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input" id="rememberCheck" />
                    <label class="form-check-label" for="remember">    {{ __('Remember Me') }}</label>
                </div>
                
                {{-- <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div> --}}
                <div class="buttons d-block">
                    <button type="submit" class="btn-hover color-blue">Se connecter</button>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                </div>


                {{-- <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div> --}}
            </form>


{{-- 
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
            </form> --}}
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












{{-- 


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
 


 --}}
