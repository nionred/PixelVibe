<!DOCTYPE html>
<html>

<head>
@include('home.css')
<style type="text/css">
    input [type='text']
    {
       
        width: 400px;
        height: 50px;
    }

    .div_deg
    {
        display: flex;
        justify-content:center;
        align-items:center;
        margin:20px;
       
    }
    .cart 
    {
      text-align:center;
      margin-bottom:80px;
      padding:18px;
    }

    .table_deg
    {
        text-align:center;
        margin: auto;
        border: 2px solid black;
        margin-top: 25px;
        width:800px;
    }

    th{
       background-color:black;
       padding:10px;
       font-size:15px;
       font-weight:bold;
       color: white;
    }
   td {
    color:black;
    padding: 5px;
    border: 1px solid skyblue;
    font-weight:bold;
   }
   .order 
   {
    padding-right:150px;
    margin-top:50px;
   }
   label 
   {
    display:inline-block;
    width:150px
   }
   .app {
    padding:20px;
   }
    </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')

      <div class = "div_deg">
        <div class ="order">


        <form action="{{url('con_order')}}" method="post">
          @csrf
          <div>
          <div class="app">
            <label>Receiver Name</label>
            <input type = "text" name = "name" value="{{Auth::user()->name}}">
         </div>

         <div  class="app">
            <label>Receiver Address</label>
           <textarea name="address"> {{Auth::user()->address}}</textarea>
         </div>

         <div class="app">
            <label>Receiver Phone </label>
            <input type = "text" name = "phone" value="{{Auth::user()->number}}">
         </div>

         <div  class="app">
           
            <input class="btn btn-primary" type = "submit" value="Place Order">
         </div>
  </div>
    <table class="table_deg">

      <tr>
        <th>Title</th> 
        <th>Price</th>
        <th>Art</th>
       
         
       </tr>
       <?php 

        $value = 0;
       ?>
       @foreach($cart as $cart)
       <tr>
        <td>{{$cart->product->title}}</td> 
        <td>{{$cart->product->price}}</td>
        <td><img width = 100 height = 100 src="/arts/{{$cart->product->image}}"></td> 
        
       </tr>

       <?php 
       $value = $value + $cart->product->price;
       ?>
             @endforeach
     </table>
</div>

<div class = "cart">
  <h3> Total value of cart is: ${{$value}} </h3>
  </div>

  </div>
  </div>
            </div>
        </section>
  @include('home.footer')
</body>

</html>