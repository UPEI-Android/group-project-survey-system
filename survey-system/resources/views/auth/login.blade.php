
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
