<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>All categories</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
      {{-- <link href="{{asset('/libraries/slim/slim.min.css')}}"> --}}

      <style type="text/css">
         .container{
            margin-top: 100px;
            width: 100%;
            font-size: 90%;
         }
         #categoriesTable{
            border: solid 1px #EEE;
         }
         .add-category{
            margin-bottom: 50px;
            width: 30%;
         }
         #btn-container{
            text-align: center;
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

      <div class="container">
         <div id="btn-container">
            <button class="btn btn-primary add-category" data-toggle="modal" data-target="#add-category-modal"> Add New category</button>
         </div>

         <div class="row mt-20">
            <div class="col-md-12">
               <table class="table table-striped" id="categoriesTable" style="border-collapse:collapse;" >
                  <thead>
                     <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Discount</th>
                        <th>Actions</th>


                     </tr>
                  </thead>
                  <tbody>
                     @foreach($categories as $category)
                        <tr>
                           <td>{{ $category->id }}</td>
                           <td>{{ $category->name }}</td>
                           <td>{{ $category->discount}}</td>


                           <td>
                             <a style="border-right: 1px solid blue; padding-right: 5px;" href="{{ url('admin/categories/edit/'.$category->id) }}">Edit</a>
                             <a id="delete-category" href="{{ url('admin/categories/delete/'.$category->id) }}" data-method="delete" data-delete="{{ $category->id }}" type="hidden" name="_method">Delete</a>
                           </td>
                        </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>

      <!-- ADD category MODAL-->
      <div class="modal fade mt-50" id="add-category-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <form method="POST" action="{{url('/admin/categories/add')}}" id="add-category" enctype="multipart/form-data">

                  {{ csrf_field() }}

                  <div class="modal-header">
                     <h4 class="modal-title text-center">Add category</h4>
                     <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>

                  <div class="modal-body">
                     <div class="row">
                        <div class="col-md-12 prl-20">
                           <div class="form-group">
                              <label>category Name <span class="mandatory">*</span></label>
                              <input type="text" name="name" class="form-control" placeholder="category name">
                           </div>
                         </div>
                     </div>

                     <div class="row">
                        <div class="col-md-12 prl-20">
                           <div class="form-group">
                              <label>Discount</span></label>
                              <input type="text" name="discount" id="discount" class="form-control" placeholder="Eg. 20%">
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
         </div>
      </div>


      <!-- jQuery first, then Tether, then Bootstrap JS. -->

      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
      <script src="https://use.fontawesome.com/17968ae4f4.js"></script>

      <script>
         $(document).ready(function(){
         $('#categoriesTable').DataTable();
         });
      </script>
   </body>
</html>
