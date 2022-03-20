@extends('layout')

@section('title', 'Testing profile_settings bruh')


<div style="margin-left: 200px">
@if(session()->has('message'))
    <div class="alert alert-success text-center">
        {{ session()->get('message') }}
    </div>
@endif
@if(session()->has('alert-class'))
    <div class="alert alert-danger alert-dismissible text-center">
         {{ session()->get('alert-class') }}
    </div>
  
@endif
@if($errors->any())
<div class="alert alert-danger alert-dismissible text-center">
          {{$errors->first()}}
    </div>
@endif
    
<h1 class="pageTitle">Profile Setting</h1>
<form  method="POST" action="{{ route('profilesettings') }}" class="profileForm">
@csrf
<div class="row">
    <div class="form-group col-md-4 offset-2">
      <label for="inputFirstname4">First Name</label>
      <input type="firstname" class="form-control" name="First_Name" id="inputFirstName4"  value = <?= $user-> first_name ?> required></input>
      <div class="valid-feedback">
            Looks good!
      </div>
      <div class="invalid-feedback">
            Please add your first name.
      </div>
    </div>
    <div class="form-group col-md-4">
      <label for="inputLastName4">Last Name</label>
      <input type="lastname" class="form-control" name="Last_Name" id="inputLastName4" value = <?= $user-> last_name ?> required >
    
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
      <input type="email" class="email white col-7 col-md-4 col-lg-7 ml-3 form-control" name="Email" id="inputEmail4" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value = <?= $user-> email ?> required>
      <div class="valid-feedback feedback-pos">
            Looks good!
          </div>
          <div class="invalid-feedback feedback-pos">
            Please input valid email ID
          </div>
    </div>


    <div class="form-group col-md-4">
    <label for="inputDateOfBirth4">Date of Birth</label>
      <input type = "date"class="form-control" name="Date_of_Birth" id="inputDateOfBirth4" value = <?= $user-> DOB ?> required>
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
      <input type="phoneNumber" class="form-control" id="inputPhoneNumber4" name="Phone_Number" value = <?= $user-> phone ?> required minlength="10" maxlength="10">
      <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please choose a valid telephone number(10 characters).
          </div>
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress4">Address</label>
      <input type="address" class="form-control" name="Address" id="inputAddress4" value ="{{$user->address}}" required>
      <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please add an address.
          </div>
    </div>
    </div>
    </br>
    <div class="col-md-10 text-right">
    <button type="submit" class="saveButton" >Update</button>
</div>
</form>
</div>

<form  method="POST" action="{{ route('changePassword') }}" style="margin: 50px 0 0 200px"  class="text-center">
@csrf
<h1 >Change my password</h1>
    <div style="margin: 20px 0 0px 0"> 
    <div class="form-group col-md-2 offset-2">
      <label for="inputPhoneNumber4">Current Password</label>
      <input type="password" class="form-control"  name="currentPassword" required>
      <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please fill out this field.
          </div>
    </div>
    <div class="form-group col-md-2 ">
      <label for="inputPhoneNumber4">New Password</label>
      <input type="password" class="form-control" name="newPassword" required>
      <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please fill out this field.
          </div>
    </div>
    </div>
    <div class="form-group col-md-2">
      <label for="inputPhoneNumber4">Confirm Password</label>
      <input type="password" class="form-control"  name="confirmPassword" required>
      <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please fill out this field.
          </div>
    </div>
    </div>
</div>
<div class="col-md-2 text-right">
<button type="submit" class="saveButton" style="margin-top: 25px">Submit</button>
</div>
</div>
</form>
@section('content')
@endsection