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
    <body >   <div>
      
      <h2>users</h2>
      @forelse($result as $test)
        <li>{{$test->name}}</li>
      @empty
      <li>vai dormir</li>

      @endforelse
        
    </body>
</html>
