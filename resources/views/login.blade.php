<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hagane</title>
    <link rel="shortcut icon" type="image/png" href="/img/Simbolo-FondoTransparente.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/separacionIzqDere.css') }}">
    <script src="http://code.jquery.com/jquery-latest.js"></script>


    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/script.min.js') }}"></script>
</head>

<body>
      {{-- CONTENIDO DEL RESTO DE LAS PÁGINAS*************************** --}}
      <div class="login-card"><img src="/img/Simbolo-FondoTransparente.png" alt=""  class="profile-img-card">
        <p class="profile-name-card"> </p>

        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">Correo electrónico</label>
                                <input class="form-control" id="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Contraseña</label>
                                <input class="form-control" id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        {{-- <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a> --}}
                        </div>
                    </form>


       {{--  <form class="form-signin"><span class="reauth-email"> </span>
            <input class="form-control" type="email" required="" placeholder="Correo" autofocus="" id="inputEmail" maxlength="35">
            <input class="form-control" type="password" required="" placeholder="Contraseña" id="inputPassword" maxlength="16">
            <div class="checkbox">
                <div class="checkbox">
                    <label><input type="checkbox">Remember me</label>
                </div>
            </div> --}}
            {{-- Falta arreglar el login, redireccionar a otra página --}}
           {{--  <form action="../index.html">
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Iniciar sesión</button>
            </form> --}}
            
        {{-- </form><a href="#" class="forgot-password">¿Has olvidado tu contraseña?</a></div> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
      {{-- ************************************************************* --}}
</body>
</html>