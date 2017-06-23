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
  <div class="container form-container">
    <form method="POST" action="{{ url('/admin/updateProduct/') }}" id="edit-product" enctype="multipart/form-data">
                  
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



