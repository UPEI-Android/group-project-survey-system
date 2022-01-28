@extends('layouts.app')
@section('content')
<html>
<head>
<style type="text/css">
   body { background: 	#DDF3FF; }
div.a {
  position: relative;
  width: 800px;
  height: 400px;
  background: white;
}
</style>
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
      <input type="firstname" class="form-control" id="inputFirstName4">
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
    </div>
</br>
<div class="row">
    <button type="submit" class="form-group col-md-2 offset-5 btn btn-primary submit">Submit</button>
</div>
    
</body>
</html>
@endsection