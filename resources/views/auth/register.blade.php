<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Zona socios</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Bootstrap and my style -->
        <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/css/hotel_Spa.css') }}" rel="stylesheet">
        <!-- Fonts and Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Arapey|IM+Fell+French+Canon+SC|Poppins" rel="stylesheet">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div class="container">
            <div>{!! Notification::showAll() !!}</div>
            <div class="row align-items-center">
                <div class="col-5">
                    <a href="{{ url('/') }}">
                        <img src="images/titulo.jpg" class="img-fluid" alt="Gran Hotel Miramar">
                    </a>
                </div>
                <div class="col-7">
                    <div class="row justify-content-end">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse row" id="navbarTogglerDemo01">
                                <a class="navbar-brand" href="#"></a>
                                <ul class="ext-box navbar-nav mr-auto mt-2 mt-lg-0 justify-content-center">

                                    @guest
                                    @if (auth('admin')->check())
                                    <li class="int-box"><a class="nav-link" href="{{ route('admin.dashboard') }}">{{ __('Admin area') }}</a></li>
                                    @else
                                    <li class="int-box"><a class="nav-link" href="{{ route('admin.login') }}">{{ __('Admin login') }}</a></li>
                                    @endif

                                    <li class="int-box"><a class="nav-link" href="{{ route('login') }}">{{ __('User Login') }}</a></li>
                                    <li class="int-box"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                    @else
                                    <li class="int-box nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    @endguest
                                    <li class="int-box nav-item cambio_idioma_nav">
                                        <form action="language" method="post">
                                            {{ csrf_field() }}
                                            @if (App::getLocale() == 'es')
                                            <img src="images/ico-bandera-esp.png" class="img-fluid">
                                            @else
                                            <img src="images/ico-bandera-eng.png" class="img-fluid">
                                            @endif
                                            <select id="idioma" onchange="this.form.submit()" name="locale">
                                                <option  value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                                                <option  value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                                            </select>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>


            <main class="py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card" style="margin-top: 60px; margin-bottom: 208px;">
                                <div class="card-header">{{ __('Register') }}</div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        {{ csrf_field()  }}

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                                            <div class="col-md-6">
                                                <input id="lastName" name="lastName" type="text" class="form-control"  minlength="2" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                                                                
                                        <div class="form-group row">
                                            <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                                            <div class="col-md-6">
                                                <input id="phoneNumber" name="phoneNumber" type="number" class="form-control" min="111111111" max="999999999" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="card_number" class="col-md-4 col-form-label text-md-right">{{ __('Targeta de pago') }}</label>

                                            <div class="col-md-6">
                                                <input id="card_number" name="card_number" type="number" class="form-control" min="1111111111111111" max="9999999999999999" placeholder="16 numeros sin espacios" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="holder_card" class="col-md-4 col-form-label text-md-right">{{ __('Titular tarjeta') }}</label>

                                            <div class="col-md-6">
                                                <input id="holder_card" name="holder_card" type="text" class="form-control" minlength="5" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="expDate_card" class="col-md-4 col-form-label text-md-right">{{ __('Fecha cad. tarjeta') }}</label>

                                            <div class="col-md-6">
                                                <input id="expDate_card" name="expDate_card" type="text" class="form-control" minlength="5" maxlength="5" placeholder="07/18" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" minlength="6" placeholder="Minimo 6 caracteres" required>

                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" minlength="6" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>


    </body>
</html>




