@extends('layout')

@section('title', 'Testing profile_settings bruh')

<div style="margin-left: 200px">
@if(session()->has('alert-class'))
    <div class="alert alert-danger alert-dismissible text-center">
         {{ session()->get('alert-class') }}
    </div>
@endif
<h1 class="display-1 text-center">Profile Setting</h1>

</div>

@section('content')
@endsection