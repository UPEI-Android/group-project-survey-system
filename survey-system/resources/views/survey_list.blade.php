@extends('layout')

@section('title', '')

@section('content')
<html lang="en">
<div style="margin-left: 200px">
<h1 class="pageTitle" >Survey List</h1>

<div class="container">
<div >
  <form action="/action_page.php">  
  <table style="margin-top: 150px" class="btn-light table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>Survey Name</th>
        <th>Survey Type</th>
        <th>Active</th>
        <th>Survey URL</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach($allSurveys as $allSurvey)
      <tr>
        <td>{{$allSurvey->id}}</td>
        <td>{{$allSurvey->name}}</td>
        <td>{{$allSurvey->survey_type}}</td>
        @if($allSurvey->isActive == 0)
        <td>No</td> 
        @else
        <td>Yes</td>
        @endif
        <td><a href="http://127.0.0.1:8000/surveyRespond/{{$allSurvey->url }}" target="_blank" class="link-primary">http://127.0.0.1:8000/surveyRespond/{{$allSurvey->url }}</td>
        <td><a href="{{ url('responses/'.$allSurvey->id) }}" class="link-primary">Show All Responses</a></td>
        @if($allSurvey->isActive == 0)
        <td><a href="{{ url('activateSurvey/'.$allSurvey->id) }}"class="link-primary">Activate</a></td>
        @else
        <td><a href="{{ url('deactivateSurvey/'.$allSurvey->id) }}"class="link-primary">Deactivate</a></td>
        @endif
        
        <td><a href="{{ url('sharelink/'.$allSurvey->id) }} "class="link-share">Share Link</a></td>
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