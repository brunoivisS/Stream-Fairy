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
      @if(auth()->check())
      {{route('home.index')}}
      @else 



      
    
        <img src="image/StreamFairy.png" width="auto" height="auto" alt="Stickman">
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
                Already logged in |{{ auth()->user()->firstName }}| <a href="{{route('user.destroy')}}">Logout</a>
              @else
                <form method="post" action="{{route("user.store")}}">
                    @csrf
                    <div>
                        <section class="vh-100 gradient-custom">
                            <div class="container py-5 h-100">
                              <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                  <div class="card bg-dark text-white" style="border-radius: 1rem;">
                                    <div class="card-body p-5 text-center">
                          
                                      <div class="mb-md-5 mt-md-4 pb-5">
                          
                                        <h2 class="fw-bold mb-5 text-uppercase">Login</h2>
                                        @if(session()->has('success'))
                                        {{ session()->get('success') }} 
                                        @endif
                                        @error('error')
                                        <span>{{$message}}</span>
                                        @enderror
                                        <div class="form-outline form-white mb-4">
                                          <input type="email" id="typeEmailX"  name="email" value="" placeholder="Email" class="form-control form-control-lg" />
                                          @error('email')
                                            <span>{{$message}}</span>
                                          @enderror
                                          <label class="form-label" for="typeEmailX"></label>
                                         
                                        </div>
                          
                                        <div class="form-outline form-white mb-4">
                                          <input type="password" id="typePasswordX"name="password" id="password" placeholder="Password"  class="form-control form-control-lg" />
                                          @error('email')
                                          <span style="color='blue'">{{$message}}</span>
                                        @enderror
                                          <label class="form-label"  for="typePasswordX"></label>
                                          <div class="remember-forgot">
                                            <label><input type="checkbox">
                                            Remember me</label>
                                            <div>
                                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" >Forgot password?</a></p>
                                            </div>
    
                                        </div>
                                        </div>                                 
                                                    
                                        <button class="btn btn-outline-light btn-lg login col-12 px-5"  type="submit">Login</button>
                                                                                   
                                      </div>
                          
                                      <div>
                                        <p class="mb-0">Don't have an account? <a href="/create" class="text-white-50 fw-bold">Sign Up</a>
                                        </p>
                                      </div>
                          
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                    <div></div>

                </form>
                @endif
           <fotter class="d">

           </fotter>
        </div>
        @endif
    </body>
</html>
