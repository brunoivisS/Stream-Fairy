<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="css/app.css">
        <!-- Styles -->
        <style>
/* fallback for old browsers */

/* Chrome 10-25, Safari 5.1-6 */
body {
    background-repeat: no-repeat;
background-size: cover;
/* background-image: url(image/background.jpg); */
    
}
/* Color of the links BEFORE scroll */
.navbar-scroll .nav-link,
.navbar-scroll .navbar-toggler .fa-bars {
  color: #fff;
}

/* Color of the links AFTER scroll */
.navbar-scrolled .nav-link,
.navbar-scrolled .navbar-toggler .fa-bars {
  color: #4f4f4f;
}

/* Color of the navbar AFTER scroll */
.navbar-scrolled {
  background-color: #fff;
}

/* An optional height of the navbar AFTER scroll */
.navbar.navbar-scroll.navbar-scrolled {
  padding-top: 5px;
  padding-bottom: 5px;
}


.login {
    background-color: transparent;
}

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        </style>
    </head>
    <body >
      <header>

        <nav class="navbar navbar-expand-lg fixed-top navbar-scroll">
          <div class="container-fluid">
            <button
                    class="navbar-toggler ps-0"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01"
                    aria-controls="navbarExample01"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                    >
              <span
                    class="d-flex justify-content-start align-items-center"
                    >
                <i class="fas fa-bars"></i>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="#intro">Home</a>
                </li>
                <li class="nav-item">
                  <a
                     class="nav-link"
                     href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
                     rel="nofollow"
                     target="_blank"
                     >Learn Bootstrap 5</a
                    >
                </li>
                <li class="nav-item">
                  <a
                     class="nav-link"
                     href="https://mdbootstrap.com/docs/standard/"
                     target="_blank"
                     >Download MDB UI KIT</a
                    >
                </li>
              </ul>
      
              <ul class="navbar-nav flex-row">
                <!-- Icons -->
                <li class="nav-item">
                  <a
                     class="nav-link pe-2"
                     href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
                     rel="nofollow"
                     target="_blank"
                     >
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                     class="nav-link px-2"
                     href="https://www.facebook.com/mdbootstrap"
                     rel="nofollow"
                     target="_blank"
                     >
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                     class="nav-link px-2"
                     href="https://twitter.com/MDBootstrap"
                     rel="nofollow"
                     target="_blank"
                     >
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                     class="nav-link ps-2"
                     href="https://github.com/mdbootstrap/mdb-ui-kit"
                     rel="nofollow"
                     target="_blank"
                     >
                    <i class="fab fa-github"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </header>
      
      
      <a href="/">
      <img src="image/StreamFairy.png" width="auto" height="auto" href="login" alt="Stickman">

    </a>
        {{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif      
              @if(auth()->check())
                Already logged in |{{ auth()->user()->name }}| <a href="{{route('user.destroy')}}">Logout</a>
                it's workingg!
                @else
                
                @endif
           <fotter class="d">

           </fotter>
        </div>
    </body>
</html>
