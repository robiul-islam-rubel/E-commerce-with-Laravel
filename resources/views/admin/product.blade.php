<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css');
 label{
    display:inline-block;
    width:2;
   }
   
  </head>
  <body>
    <div class="container-scroller">
    
      <!-- partial:partials/_sidebar.html -->
       @include('admin.sidebar');
      <!-- partial -->
       @include('admin.header');
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          <div align="center">
            <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div >
                    <label >Product title</label>
                    <input type="text" name="product_title" placeholder="Write your product title">
                </div>
                <div>
                    <label >Product Description</label>
                    <input type="text" name="product_desc" placeholder="Write your product desc">
                </div>
                <div>
                    <label for="">Product Image</label>
                    <input type="file" name="product_image" >
                </div>
                <div>
                    <label for="">Product Category</label>
                    <select name="product_category">
                        <option value="" selected="">Add a catefory</option>
                        @foreach($category as $cat)
                        <option value="">{{$cat->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="">Product Quantity</label>
                    <input type="number" name="product_quantity" placeholder="Write your quantity">
                </div>
                <div>
                    <label for="">Product Price</label>
                    <input type="number" name="product_price" placeholder="Write product price">
                </div>
                <div>
                    <label for="">Discount Price</label>
                    <input type="number" name="product_discount" placeholder="Write product discount price">
                </div>
                <div style="padding-top:20px">
 
                    <input type="button" name="button" value="Add Product" class="btn btn-primary">
                </div>
            </form>
          </div>
</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  @include('admin.script');
  </body>
</html>