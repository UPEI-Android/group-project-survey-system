
@extends('layouts.app')
@section('content')
<div class="container">
<form class="form-horizontal">
    
    <div class="form-group">
    <label for="inputEmail3" class="col-xs-4 control-label">Email</label>
    <div class="col-xs-3">
      <input type="email" class="form-control" id="inputEmail3" >
    </div>
    </div>
    <div class="form-group">
    <label for="password" class="col-xs-4 control-label">Password</label>
    <div class="col-xs-3">
      <input type="email" class="form-control" id="password" >
    </div>
    </div>
    <button type="submit" class="col-xs-1 offset-5 btn btn-primary login">Sign in</button>
</form>
</div>
@endsection







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
      <input type="dateOfBirth" class="form-control" id="inputDateOfBirth4">
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









<label for="inputDateOfBirth4">Date of Birth</label>
      <input type = "date" name = "date"> 