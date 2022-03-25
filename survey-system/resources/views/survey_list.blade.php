@extends('layout')

@section('title', '')

@section('content')
<html lang="en">
<div style="margin-left: 200px">
<h1 class="pageTitle" >Survey List</h1>

<div class="container">
<div >
  <h2>Survey List:</h2>     
  <form action="/action_page.php">  
  <table class="btn-light table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>Survey Name</th>
        <th>Survey Type</th>
        <th>Survey Type</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach($allSurveys as $allSurvey)
      <tr>
        <td>{{$allSurvey->id}}</td>
        <td><a href="$allSurvey->url" style="color:#33ccff;">{{$allSurvey->name}}</a></td>
        <td>{{$allSurvey->survey_type}}</td>
        <td><a href="{{ url('responses/'.$allSurvey->id) }}" class="link-primary">Show All Responses</a></td>
        <td><a class="link-primary">{{$allSurvey->url }}/a></td>
        <td><a href="{{ url('delete/'.$allSurvey->id) }}" class="link-danger">Delete</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
  </form>
  </div>
  </div>
</div>
</html>
@endsection