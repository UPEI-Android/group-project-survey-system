<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
        .navbar-custom {
            background-color: #9FBEFE;
            height: 9vh;
        }
        .custom-div{
          width: 100%;
          display: inline;
          position:absolute;
          text-align:center;
          /* height: 150px; */
        }
        .name{
          text-align: middle;
          display: inline;
          font-weight: bold;
          color: black;
        }
        .link-group{
          color: #000;
          float: right;
          display: inline;
          position:absolute;   
          margin-right: 30px;              
          bottom:0;                         
          right:0;        
        }
        .link{
          text-decoration: none;
          color: black;
          margin-right: 20px;
          font-size: 16px;
          font-weight: 500;
        }
       
    </style>
 </head>
<body>
<nav class="navbar navbar-custom" >
  <div class="custom-div">
    <h1 class="name">Survey System Tool</h1>
    <ul class="link-group">
    <a class="link" href="/register">Register</a>
      <a class="link" href="/login">Login</a>
      </ul>
      
  </div>
</nav>
  
  
    @yield('content')
</body>
</html>