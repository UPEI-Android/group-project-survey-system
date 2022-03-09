@extends('layout')

@section('title', 'Testing Dashboard bruh')

<html>
<head>
</head>
<style>
.a {
position: absolute;
width: 150px;
height: 320px;
left: 749px;
top: 70px;

font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 30px;
line-height: 40px;
}

.left { float: left; }

.b{
position: absolute;
width: 340px;
height: 300px;
left: 380px;
top: 350px;
background: rgba(18, 24, 125, 0.31);
}

.c{
position: absolute;
width: 280px;
height: 280px;
left: 400px;
top: 370px;

font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 20px;
line-height: 29px;
}

.d
{ 
position: absolute;
left: 80%;
right: 9.95%;
top: 5%;
bottom: 20%;
}

.e
{ 
position: absolute;
left: 30%;
right: 9.95%;
top: 10%;
bottom: 20%;
}

.f
{ 
position: absolute;
left: 80%;
right: 9.95%;
top: 30%;
bottom: 20%;
}



</style>
<body>

<div style="margin-left: 200px">
<h1 class="display-1 text-center">Home</h1>
<p class="d">
        <a href="#">
          <span class="glyphicon glyphicon-question-sign" style="font-size:36px;" ></span>
        </a>
        help
</p>




<div class = "e">
<p><span class="glyphicon glyphicon-user" style= "font-size:120px;"></span></p>
</div>


<div class = "a">
@foreach ($users as $user)
<p><span class='left'>Name: {{ $user->first_name}} {{ $user->last_name }}</span></p>
@endforeach
</br>
@foreach ($users as $user)
<p><span class='left'>Email:{{ $user->email }}</span></p>
@endforeach
</br>
<p><span class='left'>Surveys: </span></p>
</br>
<p><span class='left'>Responses:</span></p>
</div>


<div class = "b">
</div>

<div class = "c">
<p><span class='left'>Surveys: </span></p>
</br>
<p><span class='left'>Responses:</span></p>
</br>
</br>

<p>
<i class="fa fa-question-circle" aria-hidden="true"></i>
   <a href="/survey-list" class="btn btn-primary" role="button">View Surveys</a>
   <a class="btn btn-primary" role="button">View Analytics</a>
</p>

</div>
</div>
<p class ="f">
        <a href="/profile-settings">
          <span class="glyphicon glyphicon-pencil" style="font-size:36px;" ></span>
        </a>
        modify
</p>




</body>
</html>

@section('content')

@endsection


