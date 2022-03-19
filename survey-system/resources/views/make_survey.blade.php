@extends('layout')

@section('title', 'Testing make_survey bruh')

@section('content')
<div style="margin-left: 200px">
<h1 class="pageTitle">Create a survey</h1>

<h1>{{$variable ?? ''}}</h1>
<h1 class="display-1 text-center">Create a survey</h1>
<div style="margin-left: 300px">
<h1>Survey Construction</h1>
<form action="users" method="POST">
    <h3>Enter Survey Name</h3>
    <input type="text" name="survey_name" placeholder="Enter the name of the survey"/> <br><br>
    <h3>Enter Question 1 </h3>
    <input type="text" name="question_number" placeholder="Enter question 1"/> <br><br>
    <h3>Choose the type of answer</h3>
    <input type="text" name="answer_type" placeholder="Choose the type of answer"/> <br><br>
    <button type="submit"> Next</button>

</form>

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