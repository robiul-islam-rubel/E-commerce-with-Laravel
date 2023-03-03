<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css');
   <style>
    .center 
    {
        margin:auto;
        width:80%;
        border:1px solid white;
        margin-top:40px;
    }
    .font_size 
    {
        text-align:center;
        font-size:40px;
        padding-top:20px;
    }
    .img_size
    {
        width:100px;
        height:100px
    }
    .th_color 
    {
        background:skyblue;
    }
    .th_deg 
    {
        padding:30px;
    }
   </style>
  </head>
  <body>
    <div class="container-scroller">
    
       @include('admin.sidebar');
     
       @include('admin.header');
       <div class="main-panel">
          <div class="content-wrapper">
            <h1 class="font_size">All Products</h1>
            <table class="center" >
                <tr class="th_color">
                    <th class="th_deg">
                        Product Title
                    </th>
                    <th  class="th_deg">Description</th>
                    <th  class="th_deg">Quantity</th>
                    <th  class="th_deg">Category</th>
                    <th  class="th_deg">Price</th>
                    <th  class="th_deg">Discount Price</th>
                    <th  class="th_deg">Image</th>
                    <th  class="th_deg">Delete</th>

                    <th  class="th_deg">Edit</th>

                    
                </tr>
                @foreach($product as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount_price}}</td>
                    <td>
                        <img class="img_size"src="/productimage/{{$product->image}}" alt="">
                    </td>
                    <td><a class="btn btn-danger"href="{{url('delete_product',$product->id)}}">Delete</a></td>
                    <td><a class="btn btn-success"href="{{url('edit_product',$product->id)}}">Edit</a></td>
                   
                </tr>
                @endforeach
            </table>
</div>
</div>
       
    
  @include('admin.script');
  </body>
</html>