<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css');
   <style>
    .div_center
    {
        text-align:center;
        padding-top:40px;
    }
    .font_size
    {
        font-size:40px;
        padding-bottom:40px;
    }
    .text_color
    {
        color:black;
        padding-bottom:20px;
    }
    label 
    {
        display:inline-block;
        width:200px;
    }
    .div_design 
    {
        padding-bottom:15px;

    }
   </style>
 
   
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
          @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="true" aria-hidden="true">x</button>

                {{session()->get('message')}}
            </div>
            @endif

          <div class="div_center">
            <h1 class="font_size">Update Product</h1>

            <form action="{{url('/update_product',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_design">
                    <label>Product title</label>
                    <input class="text_color" type="text" name="title" placeholder="Write your product title" value="{{$product->title}}">
                </div>
                <div class="div_design">
                    <label>Product Description</label>
                    <input class="text_color" type="text" name="description" placeholder="Write your product desc" value="{{$product->description}}">
                </div>
               
                <div class="div_design">
                    <label>Product Category</label>
                    <input class="text_color" type="text" name="category" placeholder="Write your category" value="{{$product->category}}">

                </div>
                <div class="div_design">
                    <label >Product Quantity</label>
                    <input class="text_color" type="number" name="quantity" placeholder="Write your quantity" value="{{$product->quantity}}">
                </div>
                <div class="div_design">
                    <label >Product Price</label>
                    <input class="text_color" type="number" name="price" placeholder="Write product price" value="{{$product->price}}">
                </div>
                <div class="div_design">
                    <label >Discount Price</label>
                    <input class="text_color" type="number" name="disc_price" placeholder="Write product discount price" value="{{$product->discount_price}}">
                </div>
                <div class="div_design">
                    <label>Change Product Image</label>
                    <div>
                        <img src="/productimage/{{$product->image}}" alt="">
                    </div>
                    <input class="text_color" type="file" name="image" value="/productimage/{{$product->image}}">
                </div>
                <div>
                    <input type="submit" name="button" value="Update Product" class="btn btn-primary">
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