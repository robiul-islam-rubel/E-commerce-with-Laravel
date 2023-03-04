<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>E-commerce</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style>
        .center 
        {
        
            margin:auto;
            width:70%;
            text-align:center;
            padding:30px;
        }

        table , th,td
        {
            border:1px solid grey;
        }
        .th_deg 
        
        {
            font-size:20px;
            padding:5px;
            background:skyblue;
        }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header');
         <!-- end header section -->
         <!-- slider section -->
         <div class="center">

         <table>
            <tr>
                <th class="th_deg">Product title</th>
                <th class="th_deg">Product quantity</th>
                <th class="th_deg">Product price</th>
                <th class="th_deg">Product image</th>
                <th class="th_deg"> Action</th>
            </tr>
            <?php $totalprice=0; ?>
            @foreach($cart as $cart)
            <tr>
                <td>
                    {{$cart->product_title}} 
                </td>
                <td>  {{$cart->quantity}} </td>
                <td>  {{$cart->price}} </td>
                <td> <img height="100" width="80" src="/productimage/{{$cart->image}}" alt="">  </td>
                <td>
                    <a href="{{url('remove_cart',$cart->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this product?')">Remove</a>
                 </td>
            </tr>

            <?php $totalprice=$totalprice + $cart->price ?>
            @endforeach
         
         </table>
         <div>
            <h1>Total Price: {{$totalprice}}</h1>
         </div>
         </div>
        
       
      <!-- footer start -->
      @include('home.footer');
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/">Robiul Islam Rubel</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">Robiul Islam Rubel</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>