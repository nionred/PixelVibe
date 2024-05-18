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
    padding:15px;
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
<h1>Add Arts </h1> 
<div class="div_deg">

<form action="{{url('upload')}}" method="post" enctype="multipart/form-data">
           @csrf
 
      <div class="me">
      <label>Arts Title</label>
      <input type ="text" name="title"required >
     </div>

     <div class="me">
      <label>Artist</label>
      <textarea name="description" required></textarea>
     </div>

     <div class="me">
      <label>Price</label>
      <input type ="text" name="price"required >
     </div>

     <div class="me">
      <label>Category</label>
      <select name="category" required>
        <option>Select an option</option>
        @foreach($cat as $cat)
        <option value="{{$cat->category_name}}">{{$cat->category_name}}</option>
        @endforeach

</select>
     </div>

     <div>
      <label> The Art</label>
      <input type ="file" name="image" >
     </div>
     <div>
      
      <input class="btn btn-success" type ="submit" value="Add Art" >
     </div>

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