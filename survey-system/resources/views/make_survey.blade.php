@extends('layout')

@section('title', '')

@section('content')
<!DOCTYPE html>
<html lang="en">
@if(session()->has('message'))
    <div class="alert alert-success text-center">
        {{ session()->get('message') }}
    </div>
@endif
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}"> -->

    @livewireStyles
</head>
<body style="margin: 20px 50px 0 18vw">
    
<h1 class="pageTitle">Create a survey</h1>

    <hr>
    @livewire('survey-construction')
    @livewireScripts
</body>
</html>
@endsection
