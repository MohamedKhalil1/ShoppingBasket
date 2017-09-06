<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   
   <style type="text/css">
      .form-container{
         width: 40%;
         margin-top: 100px;
      }
   </style>
  </head>

  <body>
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
        <a class="navbar-brand" href="{{url('/admin')}}">Admin Dashboard</a>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item">
                  <a class="nav-link" href="{{url('/admin/products')}}">All Products</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{url('/admin/categories')}}">All Categories</a>
               </li>
            </ul>   
               
               <ul class="nav navbar-nav navbar-right ml-auto">
                  <li class="nav-item">
                    @if(Auth::check())
                        <a class="nav-link" href="{{url('admin/logout')}}">Log out, {{ Auth::user()->name }}</a>
                    @endif
                  </li>
               </ul>   
      </nav>
      
  <div class="container form-container">
    <form method="POST" action="{{ url('/admin/categories/update/'. $category->id) }}" id="edit-category" enctype="multipart/form-data">
                  
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      
      <div>
         <h4 class="text-center">Edit category</h4>
      </div>

      <div>
         <div class="row">
            <div class="col-md-12 prl-20">
               <div class="form-group">
                  <input type="hidden" name="type" value="category">
                  <label>category Name</label>
                  <input type="text" name="name" class="form-control" placeholder="category name" value="{{$category->name}}">
               </div>
             </div>
         </div>

         <div class="row">
            <div class="col-md-12 prl-20">
               <div class="form-group">
                  <input type="hidden" name="type" value="category">
                  <label>Discount</label>
                  <input type="text" name="discount" class="form-control" value="{{$category->discount}}">
               </div>
             </div>
         </div>
      </div>

      <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
   </form>
   </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>



