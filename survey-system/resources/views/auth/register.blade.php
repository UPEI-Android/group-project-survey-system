@extends('layouts.app')
@section('content')
<html>
<head>
<style type="text/css">
   body { background:   #DDF3FF; }
div.a {
  position: relative;
  width: 800px;
  height: 510px;
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

(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</head>

<body>
</br>
</br>
</br>
<div class="container a">
<form   action="register_post" method="post">
@csrf
<div class="row">
<h2 class="form-group col-md-1 offset-2 text-nowrap"><small>Registration Form</small></h2>
</div>
</br>

<div class="row">
    <div class="form-group col-md-4 offset-2">
      <label for="inputFirstname4">First Name</label>
      <input type="firstname" class="form-control" name="First_Name" id="inputFirstName4" required>
      <div class="valid-feedback">
            Looks good!
      </div>
      <div class="invalid-feedback">
            Please add your first name.
      </div>
    </div>
    <div class="form-group col-md-4">
      <label for="inputLastName4">Last Name</label>
      <input type="lastname" class="form-control" name="Last_Name" id="inputLastName4" required >
    
    <div class="valid-feedback">
            Looks good!
      </div>
      <div class="invalid-feedback">
            Please add your last name.
      </div>
      </div>
</div>
</br>

<div class="row">
    <div class="form-group col-md-4 offset-2">
      <label for="inputEmail4">Email</label>
      <input type="email" class="email white col-7 col-md-4 col-lg-7 ml-3 form-control" name="Email" id="inputEmail4" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
      <div class="valid-feedback feedback-pos">
            Looks good!
          </div>
          <div class="invalid-feedback feedback-pos">
            Please input valid email ID
          </div>
    </div>


    <div class="form-group col-md-4">
    <label for="inputDateOfBirth4">Date of Birth</label>
      <input type = "date"class="form-control" name="Date_of_Birth" id="inputDateOfBirth4" required>
      <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please choose a date.
          </div>
    </div>
</div>
</br>

<div class="row">
    <div class="form-group col-md-4 offset-2">
      <label for="inputPhoneNumber4">Phone Number</label>
      <input type="phoneNumber" class="form-control" id="inputPhoneNumber4" name="Phone_Number" required minlength="10" maxlength="10">
      <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please choose a valid telephone number(10 characters).
          </div>
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress4">Address</label>
      <input type="address" class="form-control" name="Address" id="inputAddress4" required>
      <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please add an address.
          </div>
    </div>
    </div>
    </br>

<div class="row">
    <div class="form-group col-md-4 offset-2">
      <label for="inputPhoneNumber4">Password</label>
      <input type="password" class="form-control" name="Password" id="inputPassword4" required>
      <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please add an address.
          </div>
    </div>
    </div>

    </div>
</br>
<input type="submit" value="submit">
<!-- <div class="row">
    <button type="submit" class="form-group col-md-2 offset-5 btn btn-primary submit" data-toggle="modal" data-target="#myModal">Submit</button>
</div> -->
</form>
  </div>
</body>
</html>
@endsection








