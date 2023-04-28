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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <body >

      <div class="container">
        <div class="row" style="margin: 20px;">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <h2>LARAVEL FUNCIONA! plz  </h2>
              </div>
              <div class="card-body">
                @if(auth()->check()||auth()->check()->is_admin==1)
                  <a href="{{url('/users/register')}}" class="btn btn-success btn-sm" title="Add New User">
                    Add New User
                  </a>
                    @else
                  vai dormir
                @endif
                <br>
                <br>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr class="items-center justify-center">
                        <th>#</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Adm</th>
                        <th class="center">Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->is_admin}}</td>

                          <td>
                            <a href="{{url('/users/'.$item->id)}}" title="View User"><button class="btn btn-info bt-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                            <a href="{{url('/users/'.$item->id.'/edit')}}" title="Edit User"><button class="btn btn-primary bt-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                            <form method="POST" action="{{url('/users' . '/' . $item->id)}}" accept-charset="UTF-8" style="display:inline ">
                                  {{method_field('DESTROY')}}
                                  {{ csrf_field()}}
                              <button title="Delete User" class="btn btn-danger bt-sm" type="submit" onclick="return confirm('Confirm delete?')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete</button> 
                            </form>  
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </body>
</html>
