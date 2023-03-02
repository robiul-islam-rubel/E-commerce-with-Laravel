<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css');
   <style type="text/css">
    .div_center
    {
        text-align:center;
    padding-top:40px;
    }
   .h2_font
   {
    font-size:40px;
    padding-bottom:40px;
   }
   .center {
    margin:auto;
    width:50%;
    text-align:center;
    padding-top:50px;
    margin-top:30px;
    border: 1px solid white;

   }

   </style>
  </head>
  <body>
    <div class="container-scroller">
    
      <!-- partial:partials/_sidebar.html -->
       @include('admin.sidebar');
      <!-- partial -->
       @include('admin.header');
       <div class="main-panel">
          <div class="content-wrapper">

            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="true" aria-hidden="true">x</button>

                {{session()->get('message')}}
            </div>
            @endif

          <div class="div_center"> 
            <h2 class="h2_font">Add Category</h2>

            <form action="{{url('add_category')}}" method="POST">
                @csrf
                <input type="text" name="category" placeholder="Write category name">
                <input type="submit" class="btn btn-success" name="submit" value="Add Category">
            </form>
          </div>
          <table class="center" border="1" cellspacing="0">
            <tr>
                <td>Category Name</td>
                <td>Action</td>
            </tr>
            @foreach($data as $cat)
            <tr>
                <td>{{$cat->category_name}}</td>
                <td><a href="{{url('delete_category',$cat->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
          </table>
</div>
</div>
  @include('admin.script');
  </body>
</html>