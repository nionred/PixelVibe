<!DOCTYPE html>
<html>
<head>
   @include('admin.css')
   <style type="text/css">
    input [type='text']
    {
       
        width: 350px;
        height: 50px;
    }

    .div_deg
    {
        display: flex;
        justify-content:center;
        align-items:center;
        margin-top:20px;
       
    }
    h1
    {
        color:white;
    }
    label {
        width:200px;
        display:inline-block;
        color:white !important;
        font-size:18px !important;
    }
textarea 
{
    width:450px;
    height:50px;
}
.me 
{
    padding:20px;
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


          <h2 style="color:white;"> Update Post </h2>
    <div class="div_deg">



         <form action="{{url('upd_pro',$data->id)}}" method="post" enctype="multipart/form-data">
           @csrf
            
               <div class="me">
      <label>Arts Title</label>
      <input type ="text" name="title" value="{{$data->title}}" >
     </div>

     <div class="me">
      <label>artist</label>
      <textarea name="description">{{$data->description}}</textarea>
     </div>

     <div class="me">
      <label>Price</label>
      <input type ="text" name="price" value="{{$data->price}}" >
     </div>

     <div class="me">
      <label>Category</label>
      <select name="category">
        <option  value="{{$data->category}}">{{$data->category}}</option>

</select>
     </div>

     <div>
      <label> Current Art</label>
      <img height="100" width="100" src="/arts/{{ $data->image }}">
     </div>

     <div>
      <label> New Art</label>
      <input type ="file" name="image" >
     </div>
<input class="btn btn-primary" type ="submit" value="Update Post" >
 

         </form>
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