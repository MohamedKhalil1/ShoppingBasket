<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>All Products</title>
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
         #myTable{
            border: solid 1px #EEE;
         }
         .add-product{
            margin-bottom: 50px;
            width: 80%;
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
        @if(Auth::check())
            <a class="ml-auto" href="{{url('admin/logout')}}">Log out, {{ Auth::user()->name }}</a>
        @endif

      </nav>

      <div class="container">
         <div id="btn-container">
            <button class="btn btn-primary add-product" data-toggle="modal" data-target="#add-product-modal"> Add New Product</button>
         </div>

         <div class="row mt-20">
            <div class="col-md-12">
               <table class="table table-striped" id="myTable" style="border-collapse:collapse;" >
                  <thead>
                     <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Stock Quantity</th>
                        <th>Price</th>
                        <th>Actions</th>


                     </tr>
                  </thead>
                  <tbody>
                     @foreach($products as $product)
                        <tr>
                           <td>{{ $product->id }}</td>
                           <td>{{ $product->name }}</td>
                           <td>{{ $product->stockquantity }}</td>
                           <td>{{ $product->price }}</td>


                           <td>
                             <a style="border-right: 1px solid blue; padding-right: 5px;" href="{{ url('admin/products/edit/'.$product->id) }}">Edit</a>
                             <a id="delete-product" href="{{ url('admin/products/delete/'.$product->id) }}" data-method="delete" data-delete="{{ $product->id }}" type="hidden" name="_method">Delete</a>
                           </td>
                        </tr>
                        @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>

      <!-- ADD PRODUCT MODAL-->
      <div class="modal fade mt-50" id="add-product-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <form method="POST" action="{{url('/admin/product/add')}}" id="add-product" enctype="multipart/form-data">

                  {{ csrf_field() }}

                  <div class="modal-header">
                     <h4 class="modal-title text-center">Add Product</h4>
                     <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>

                  <div class="modal-body">
                     <div class="row">
                        <div class="col-md-12 prl-20">
                           <div class="form-group">
                              <input type="hidden" name="type" value="product">
                              <label>product Name <span class="mandatory">*</span></label>
                              <input type="text" name="name" class="form-control" placeholder="product name">
                           </div>
                         </div>
                     </div>

                     <div class="row">
                        <div class="form-group clearfix">
                           <div class="col-md-12 prl-20">
                                 <input type="file" name="image" class="form-control">
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-md-12 prl-20">
                           <div class="form-group">
                              <input type="hidden" name="type" value="product">
                              <label>Price <span class="mandatory">*</span></label>
                              <input type="text" name="price" class="form-control" placeholder="product price">
                           </div>
                         </div>
                     </div>

                     <div class="row">
                        <div class="col-md-12 prl-20">
                           <div class="form-group">
                              <input type="hidden" name="type" value="product">
                              <label>Stock Quantity <span class="mandatory">*</span></label>
                              <input type="text" name="quantity" class="form-control" placeholder="product quantity">
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
         $('#myTable').DataTable();
         });

         $("#delete-product").on("click", function() {
            $.ajax({
               url: "{{ url('admin/products/delete'.$product->id)}}",
               data: {id: id, _token: '{{ csrf_token() }}', _method: 'DELETE'},
               type: "DELETE",
               success: function(response) {
                  window.location.reload();
               },
            });
         });
      </script>
   </body>
</html>
