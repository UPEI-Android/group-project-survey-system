@extends('layouts.app')
@section('content')
<html>
<head>
<style type="text/css">
   body { background: 	#DDF3FF; }
div.a {
  position: relative;
  width: 800px;
  height: 450px;
  background: white;
}

b, b:hover{
  color:#333
}

.modal {
  text-align: center;
  padding: 0!important;
}

.modal:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle;
  margin-right: -4px; /* Adjusts for spacing */
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}
</style>
<script>
  $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
</script>
</head>

<body>
</br>
</br>
</br>
<div class="container a">

<div class="row">
<h2 class="form-group col-md-1 offset-2 text-nowrap"><small>Registration Form</small></h2>
</div>
</br>

<div class="row">
    <div class="form-group col-md-4 offset-2">
      <label for="inputFirstname4">First Name</label>
      <input type="firstname" class="form-control" id="inputFirstName4" required>
      <div class="valid-feedback">
            Looks good!
      </div>
      <div class="invalid-feedback">
            Please add a name.
      </div>
    </div>
    <div class="form-group col-md-4">
      <label for="inputLastName4">Last Name</label>
      <input type="lastname" class="form-control" id="inputLastName4" >
    </div>
</div>
</br>

<div class="row">
    <div class="form-group col-md-4 offset-2">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-4">
    <label for="inputDateOfBirth4">Date of Birth</label>
      <input type = "date"class="form-control" id="inputDateOfBirth4">
    </div>
</div>
</br>

<div class="row">
    <div class="form-group col-md-4 offset-2">
      <label for="inputPhoneNumber4">Phone Number</label>
      <input type="phoneNumber" class="form-control" id="inputPhoneNumber4">
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress4">Address</label>
      <input type="address" class="form-control" id="inputAddress4" >
    </div>
    </div>
    </br>

<div class="row">
    <div class="form-group col-md-4 offset-2">
      <label for="inputPhoneNumber4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
    </div>

    </div>
</br>

<div class="row">
    <button type="submit" class="form-group col-md-2 offset-5 btn btn-primary submit" data-toggle="modal" data-target="#myModal">Submit</button>
</div>
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
  
        <div class="modal-header">
          <h4 class="modal-title">registration success</h4>
          <button type="button" class="close" data-dismiss="modal"></button>
        </div>
  
        <div class="modal-footer">
            <a class="btn btn-primary" href="http://127.0.0.1:8000/login" role="button">Login Page</a>
          
        </div>
   
      </div>
    </div>
  </div>
</body>
</html>
@endsection








