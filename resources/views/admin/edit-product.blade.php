<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   
   <style type="text/css">
      .image-div{
        text-align: center;
        border-right: 1px solid #EEE;
    }
    .product-image{
        width: 100%;
        margin: 20px auto;
    }
      .form-container{
         width: 80%;
         margin-top: 100px;
      }
      .btn a{
        text-decoration: none;
        cursor: default;
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
    <div class="row">
        <div class="image-div col-md-4">
            <img class="product-image" src="../../../../storage/app/{{ $product->productimage }}">    
        </div>
        <div class="col-md-8">
            <form method="POST" action="{{ url('/admin/products/update/'. $product->id) }}" id="edit-product" enctype="multipart/form-data">
                          
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              
              <div>
                 <h4 class="text-center">Edit Product</h4>
              </div>

              <div>
                 <div class="row">
                    <div class="col-md-12 prl-20">
                       <div class="form-group">
                          <input type="hidden" name="type" value="product">
                          <label>product Name <span class="mandatory">*</span></label>
                          <input type="text" name="name" class="form-control" placeholder="product name" value="{{$product->name}}">
                       </div>
                     </div>
                 </div>
                 
                 <div class="row">
                    <div class="form-group clearfix">
                       <div class="col-md-12 prl-20">
                             <img src="" id="edit-product-image">
                             <label>product Image <span class="mandatory">*</span></label>
                             <input type="file" name="image" class="form-control" value="{{$product->productimage}}">                          
                       </div>
                    </div>
                 </div>

                 <div class="row">
                    <div class="col-md-12 prl-20">
                       <div class="form-group">
                          <input type="hidden" name="type" value="product">
                          <label>Price <span class="mandatory">*</span></label>
                          <input type="text" name="price" class="form-control" placeholder="product price" value="{{$product->price}}">
                       </div>
                     </div>
                 </div>

                 <div class="row">
                    <div class="col-md-12 prl-20">
                       <div class="form-group">
                          <input type="hidden" name="type" value="product">
                          <label>Stock Quantity <span class="mandatory">*</span></label>
                          <input type="text" name="quantity" class="form-control" placeholder="product quantity" value="{{$product->stockquantity}}">
                       </div>
                     </div>
                 </div>    
              </div>

              <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal"><a href="{{url('/admin/products')}}">Back</a></button>
                 <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
           </form>
        </div>
    </div>    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>



