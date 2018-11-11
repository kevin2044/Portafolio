<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Laravel</title>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark d-block d-md-none">
      <div class="d-flex justify-content-between">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>
      </div>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Disabled</a>
          </li>
        </ul>
        {{-- @if (Route::has('login'))
          <ul class="navbar-nav">
            @auth
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/home') }}">Home</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @endauth
          </ul>
        @endif --}}
      </div>
    </nav>
    <section class="home_backimg">
      <div class="container">
        <div class="row">
          <div class="col">
            <ul class="home_menu">
              <li><a href="{{ url('/') }}"><img src="{{ asset('images/logo-header-kevin-luna.svg') }}" alt="logo header kevin luna" class="img-fluid"></a></li>
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li><a href="{{ url('/sobre-mi') }}">Sobre Mi</a></li>
              <li><a href="{{ url('/portafolio') }}">Portafolio</a></li>
              <li><a href="{{ url('/contacto') }}">Contacto</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
					<div class="col d-flex justify-content-center align-items-center flex-column">
						<img src="{{ asset('/images/logo-principal.svg') }}" alt="logo principal" class="img-fluid" itemprop="image">
						<h2 itemprop="jobTitle">DESARROLLO WEB</h2>
						<a href="{{ url('/contacto') }}" class="btn btn-default contacto" itemprop="url">Contacto</a>
					</div>
        </div>
      </div>
    </section>
  </body>
</html>
