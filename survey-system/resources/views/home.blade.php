@extends('layout')

@section('title', 'Testing Dashboard bruh')

<html>

<head>
</head>
<style>
    .a {
        position: absolute;
        width: 280px;
        height: 320px;
        left: 749px;
        top: 70px;

        font-family: Roboto;
        font-style: normal;
        font-weight: bold;
        font-size: 30px;
        line-height: 40px;
    }

    .left {
        float: left;
    }

    .b {
        position: absolute;
        width: 340px;
        height: 300px;
        left: 380px;
        top: 350px;
        background-color: #e6e6e6;
    }

    .c {
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

    .d {
        position: absolute;
        left: 80%;
        right: 9.95%;
        top: 5%;
        bottom: 20%;
    }

    .e {
        position: absolute;
        left: 30%;
        right: 9.95%;
        top: 10%;
        bottom: 20%;
    }

    .f {
        position: absolute;
        left: 80%;
        right: 9.95%;
        top: 30%;
        bottom: 20%;
    }
</style>

<body>

    <div style="margin-left: 150px">
        <h1 class="pageTitle">Home</h1>
        <div class="container-fluid">

            <div class="row justify-content-center" >
                <div class="col-lg-3">
                    <div id="box1" class="profile-box ">
                    <img src="{{ URL::to('/default-user.png') }}" class="userImg">
                    <span class="welcome">WELCOME!</span>
                    <span class="userName">{{$user->first_name}} {{$user->last_name}}</span>
                    <span class="title">Researcher</span>
                    <span class="userEmail">{{$user->email}}</span>
</div>
                </div>
                <div class="col-lg-3">
                    <div id="box2" class="box-part-1">
      <span class="col-md-12 fs-3 text-center" style="position:absolute;top:4vh;left:0px;">Number of surveys created</span>
      <div class="col-md-12 text-center" style="font-size:2rem;position:absolute;top:7vh;left:0px;">{{$surveyCount}}</div>
                    </div>
                    <div id="box5" class="box-part-1">
                    <span class="col-md-12 fs-3 text-center" style="position:absolute;top:17vh;left:0px;">Number of active surveys</span>
                    <div class="col-md-12 text-center" style="font-size:2rem;position:absolute;top:20vh;left:0px;">456</div>
                    </div>
                    <div id="box3" class="box-part text-center">3</div>
                </div> 
                <div class="col-lg-3">
                    <div id="box5" class="box-part-1 text-center">
                    <span class="col-md-12 fs-3 text-center" style="position:absolute;top:4vh;left:0px;">Total number of responses</span>
      <div class="col-md-12 text-center" style="font-size:2rem;position:absolute;top:7vh;left:0px;">456</div>
                    </div>
                    <div id="box5" class="box-part-1 text-center">
                    <span class="col-md-12 fs-3 text-center" style="position:absolute;top:17vh;left:0px;">Number of responses since last login</span>
      <div class="col-md-12 text-center" style="font-size:2rem;position:absolute;top:20vh;left:0px;">456</div>
                    </div>
                    <div id="box6" class="box-part text-center">6</div>
                </div>
               

            </div>
    </div>
</div>

</body>

</html>

@section('content')

@endsection