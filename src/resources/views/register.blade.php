<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{url('css/app.css')}}">
        
        <!-- Styles -->
        <style>
/* fallback for old browsers */

/* Chrome 10-25, Safari 5.1-6 */
body {
    background-repeat: no-repeat;
background-size: cover;
background-image: url({{url('image/background.jpg')}});
    
}
#phone {
    display: none;
    
}
.picture{
  width: 100%;
  height: 30px;
   aspect-ratio: 16/9;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: chartreuse;
  color: #333;
  display: block;
  border: 2px dashed #333;
  cursor: pointer;
  transition: color 50ms ease-in-out, background 50ms ease-in-out;
}
.picture:active{
   background-color: transparent ;
}

 
  /* label {
    padding: 20px 10px;
    width: 200px;
    background-color: #333;
    color: #FFF;
    text-transform: uppercase;
    text-align: center;
    display: block;
    margin-top: 10px;
    cursor: pointer;
} */




.login {
    background-color: transparent;
}

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        </style>
    </head>
    <body >      
      <a href="{{route('login')}}"></a>
        <img src="{{url('image/StreamFairy.png')}}" width="auto" height="auto" alt="Stickman">
        
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif      
    
                <form method="post" action="{{url('users')}}">
                    @csrf
                    <div>
                        <section class="vh-100 gradient-custom">
                            <div class="container py-5 h-100">
                              <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                  <div class="card bg-dark text-white" style="border-radius: 1rem;">
                                    <div class="card-body p-5 text-center">
                          
                                      <div class="mb-md-5 mt-md-4 pb-5">
                          
                                        <h2 class="fw-bold mb-5 text-uppercase">Register</h2>
                                        @if(session()->has('success'))
                                        {{ session()->get('success') }} 
                                        @endif
                                        @error('error')
                                        <span>{{$message}}</span>
                                        @enderror
                                        <div class="form-outline form-white mb-4">
                                          <input type="name" id="typeEmailX"  name="name" value="" placeholder="Name" class="form-control form-control-lg" />
                                          @error('name')
                                            <span>{{$message}}</span>
                                          @enderror
                                          <label class="form-label" for="typeEmailX"></label>
                                         
                                        </div>
                                        <div class="form-outline form-white mb-4">
                                          <input type="email" id="typeEmailX"  name="email" value="" placeholder="Email" class="form-control form-control-lg" />
                                          @error('email')
                                            <span>{{$message}}</span>
                                          @enderror
                                          <label class="form-label" for="typeEmailX"></label>
                                         
                                        </div>
                          
                                        <div class="form-outline form-white mb-4">
                                          <input type="password" id="typePasswordX"name="password" id="password" placeholder="Password"  class="form-control form-control-lg" />
                                          @error('password')
                                          <span style="color='blue'">{{$message}}</span>
                                        @enderror
                                          <label class="form-label"  for="typePasswordX"></label>
                                        <button class="btn btn-outline-light btn-lg login col-12 px-5" value="Save"  type="submit">Register</button>
                                                                                   
                                      </div>
                          
                                     
                           <div>
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                    <div></div>

                </form>
              
           <fotter class="d">

           </fotter>
        </div>
        
    </body>
</html>
