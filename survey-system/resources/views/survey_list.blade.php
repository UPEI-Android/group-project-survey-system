@extends('layout')

@section('title', '')

@section('content')
<html lang="en">
<div style="margin-left: 200px">
<h1 class="pageTitle" >Survey List</h1>

<div class="container">
<div style="margin-left: 100px">
  <h2>Survey List</h2>     
  <form action="/action_page.php">  
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th>id</th>
        <th>name</th>
        <th>url</th>
      </tr>
    </thead>
    <tbody>
    @foreach($allSurveys as $allSurvey)
      <tr>
      <div class="form-check">
        <td><input type="checkbox" class="form-check-input" id="check1" name="option1" value="something"></td>
        </div>
        <td>{{$allSurvey->id}}</td>
        <td><a href="{{$allSurvey->url}}" style="color:#33ccff;">{{$allSurvey->name}}</a></td>
        <td>{{$allSurvey->url}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <button type="submit" class="btn btn-primary mt-3">Delete</button>
  </form>
  </div>
  </div>
</div>
</html>
@endsection