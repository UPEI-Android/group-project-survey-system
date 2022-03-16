@extends('layout')

@section('title', 'Testing make_survey bruh')

@section('content')
<div style="margin-left: 200px">
<h1 class="display-1 text-center">Create a survey</h1>

</div>
<form class="form-signin" method="post" action="make-survey">
      @csrf
      
      <label for="surveyName">SurveyName</label>
      <input type="text" name="surveyName"  id="surveyName" class="form-control" placeholder="" required autofocus>
 
      <label for="numberOfQuestion" >numberOfQuestion</label>
      <input type="text" name="numberOfQuestion"  id="numberOfQuestion" class="form-control" placeholder="" required autofocus>

      <label for="text1" >text1</label>
      <input type="text" name="text1"  id="text1" class="form-control" placeholder="" required autofocus>

      <label for="responseType1" >responseType1</label>
      <input type="text" name="responseType1"  id="responseType1" class="form-control" placeholder="" required autofocus>

      <label for="text2" >text1</label>
      <input type="text" name="text2"  id="text2" class="form-control" placeholder="" required autofocus>

      <label for="responseType2" >responseType1</label>
      <input type="text" name="responseType2"  id="responseType2" class="form-control" placeholder="" required autofocus>
 


      
      <input type="submit" name="sub" value="Next">  
      <input type="submit" name="sub" value="Submit">  
      </p>
     
</form>
@endsection