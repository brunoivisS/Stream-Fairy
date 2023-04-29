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
background-image: url({{url('images/background.jpg')}});
    
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
        <form method="post" action="{{url('users/'.$edit->id)}}">
          {{!! csrf_field() !!}}
          @method("PATCH")
            <div>
                <section class="vh-100 gradient-custom">
                    <div class="container py-5 h-100">
                      <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                          <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                  
                              <div class="mb-md-5 mt-md-4 pb-5">
                  
                                <h2 class="fw-bold mb-5 text-uppercase">User</h2>
                                <div class="form-outline form-white mb-4">
                                    <input type="hidden" id="typeEmailX"  name="id" value="{{$edit->id}}" placeholder="Email" class="form-control form-control-lg" />
                                   
                                    <label class="form-label" for="typeEmailX"></label>
                                   
                                  </div>
                                  <div class="form-outline form-white mb-4">
                                    <input type="text" id="typeEmailX"  name="name" value="{{$edit->name}}" placeholder="Email" class="form-control form-control-lg" />
                                   
                                    <label class="form-label" for="typeEmailX"></label>
                                   
                                  </div>
                               
                                <div class="form-outline form-white mb-4">
                                  <input type="email" id="typeEmailX"  name="email" value="{{$edit->email}}" placeholder="Email" class="form-control form-control-lg" />
                                 
                                  <label class="form-label" for="typeEmailX"></label>
                                 
                                </div>
                  
                                <div class="form-outline form-white mb-4">
                                  <input type="password" id="typePasswordX"name="password" id="password" value="{{$edit->password}}" placeholder="Password"  class="form-control form-control-lg" />
                                 
                                  <label class="form-label"  for="typePasswordX"></label>
                                 
                                </div>
                                </div>                                 
                                            
                                <button class="btn btn-outline-light btn-lg login col-12 px-5"  type="submit">Update</button>
                                                                           
                              </div>
                  
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
            <div></div>

        </form>


        
    </body>
</html>
