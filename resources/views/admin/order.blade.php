<!DOCTYPE html>
<html>
<head>
   @include('admin.css')
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

    .table_deg
    {
        text-align:center;
        margin: auto;
        border: 2px solid yellowgreen;
        margin-top: 50px;
        width:600px;
    }

    th{
       background-color:skyblue;
       padding:15px;
       font-size:20px;
       font-weight:bold;
       color: white;
    }
   td {
    color:white;
    padding: 10px;
    border: 1px solid skyblue;
   }
   </style>
</head>

  <body>
    <head>
    @include('admin.header')
    </header>
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
<div class = "div_deg">
          <table class="table_deg">

<tr>
  <th>Customer Name </th> 
  <th>Address</th>
  <th>Phone</th>
  <th>Art Title</th>
  <th>Price</th>
  <th>The Art</th>
 </tr>
@foreach($data as $data)
 <tr>
  <td>{{$data->name}}</td> 
  <td>{{$data->address}}</td> 
  <td>{{$data->phone}}</td> 
  <td>{{$data->product->title}}</td> 
  <td>{{$data->product->price}}</td> 
  <td><img width=150 height=150 src="arts/{{$data->product->image}}"></td> 
  
 </tr>
   @endforeach 
</table>
</div>          
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
  </body>
</html>