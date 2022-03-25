@extends('layout')

@section('title', '')

@section('content')
<html lang="en">
        <style>

* {box-sizing: border-box;}
        h3{
          font-family:Arial, Helvetica, sans-serif;
        }
        .form-popup {
        display: none;
        margin-left: 0px;
        border: 3px solid black;
        }
        .cancel {
          padding: 10px 15px;
        background-color: darkblue; /* Green */
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
      }
      input{
        width: 25%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
      }
      .send {
        padding: 10px 15px;
        background-color: darkblue; /* Green */
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
      }


        </style>
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
        <th>Link</th>
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
        <td><a class="link-primary"onclick="openForm()">{{$allSurvey->url }}Send This</a></td>
          <div class="form-popup" id="sendEmailForm"> 
            <form action="/action_page.php" class="form-container">
              <h3> Send This Survey By Email </h3>
              <input type="text" placeholder="Enter Receiver's Email" name="email" required>
              <button type="submit" class="btn send" onclick="send()">Send</button>
              <button type="button" class="btn cancel" onclick="cancel()">Cancel</button>
            </form>
          </div>
          <script>
          function openForm() {
            document.getElementById("sendEmailForm").style.display = "block";
          }
          function cancel() {
            document.getElementById("sendEmailForm").style.display = "none";
          }
          function send(){
            window.open('mailto:example@example.com?subject=subject&body=body');
          }
          </script>
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