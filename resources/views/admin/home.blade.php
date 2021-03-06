<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    @yield('links')

    <style>
        .body-container{
            margin-top: 200px;
            width: 30%;
        }

        #logout-container{
            text-align: center;
            margin-top: 20px;
        }
    
    @yield('styles')
    </style>
  </head>

  <body>
   <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
        <a class="navbar-brand" href="{{url('/admin')}}">Admin Dashboard</a>    
               <ul class="nav navbar-nav navbar-right ml-auto">
                  <li class="nav-item">
                    @if(Auth::check())
                        <a class="nav-link" href="{{url('admin/logout')}}">Log out, {{ Auth::user()->name }}</a>
                    @endif
                  </li>
               </ul>   
      </nav>



    <div class="container body-container">
        <div class="list-group">
            <a href="{{url('/admin/products')}}" class="list-group-item list-group-item-action list-group-item-success">Products</a>
            <a href="{{url('/admin/categories')}}" class="list-group-item list-group-item-action list-group-item-info">Products Categories</a>
        </div>
    
    @yield('content')
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    @yield('scripts')

  </body>

</html>