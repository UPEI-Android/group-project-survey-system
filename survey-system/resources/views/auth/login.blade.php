
@extends('layouts.app')
@section('content')


   <body class="text-center"> 
    <form class="form-signin" method="POST" action="{{ route('login') }}">
      @csrf
        <img class="mb-4" src="Vector.svg" alt="" width="150" height="150" >
      <h1 class="h3 mb-3 font-weight-normal">User Login </h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email"  id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </p>
     

   
   
    </form>
</body>
    @endsection


