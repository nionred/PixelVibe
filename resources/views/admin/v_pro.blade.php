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
        margin-top:20px;
       
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
    text-align:center;
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

          

          <div class="div_deg">
      <table class="table_deg">

      <tr>
        <th>Art Title</th> 
        <th>Artist</th>
        <th>Category</th>
        <th>Price</th>
        <th>The Art</th>
        <th>Update</th>
        <th>Delete</th>
       </tr>
       @foreach($data as $datas)
       <tr>
        <td>{{$datas->title}}</td>
        <td>{{$datas->description}}</td>
        <td>{{$datas->category}}</td>
        <td>{{$datas->price}}</td>
        <td><img height="120" width="120" src="arts/{{ $datas->image }}"></td>
        <td><a class="btn btn-success" href="{{url('up_pro',$datas->id)}}">Update</a></td>
        <td><a class="btn btn-danger" href="{{url('del_pro',$datas->id)}}">Delete</a></td>
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