@extends('layout')

@section('title', 'Testing make_survey bruh')

@section('content')
<div style="margin-left: 200px">
<h1 class="display-1 text-center">Create a survey</h1>

</div>
<form class="form-signin" method="post" action="make-survey">
      @csrf
      
      <label for="surveyName">SurveyName</label>
      <input type="text" name="name"  id="name" class="form-control" placeholder="" required autofocus>
 
      
      <label for="text" >text</label>
      <input type="text" name="text"  id="text" class="form-control" placeholder="" required autofocus>

      <label for="responseType" >responseType</label>
      <input type="text" name="responseType"  id="responseType" class="form-control" placeholder="" required autofocus>
 


      
      <input type="submit" name="sub" value="Next">  
      <input type="submit" name="sub" value="Submit">  
      </p>
     
</form>
@endsection