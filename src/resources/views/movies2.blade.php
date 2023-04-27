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
background-image: url(image/background.jpg);
    
}

.login {
    background-color: transparent;
}

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        </style>
    </head>
    <body >


      @csrf
     @if(auth()->check())
      {{$result->name}}<a href="{{route('user.destroy')}}">Logout</a>

      @endif
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="users"><img src="image/StreamFairy.png" width="250px"height="100px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="    justify-content: flex-end;">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown" style="    justify-content: flex-end;">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              
             
                <img src="" height="50px" width="50px" alt="..." class="rounded-circle">
               
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
          
        </div>
      </nav>
      {{-- <a href="{{route('user.index')}}"></a> --}}
       
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
            @foreach ($result->all() as $te)
                <li>{{ $te->name }}</li>
            @endforeach
        </ul>
    </div>
    @endif      
             
           <fotter class="d">

           </fotter>
        </div>

        <Script src="js/bootstrap.js">

        </Script>
    </body>
</html>
