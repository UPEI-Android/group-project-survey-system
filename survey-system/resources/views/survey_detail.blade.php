@extends('layout')

@section('title', '')

@section('content')
    <div style="margin-left: 200px">
        <h1 class="display-1 text-center">Survey Detail</h1>
        <div>
            
            <div class="text-center">{{$surveys->name}}</div>
            <div class="content">{{$questions->text}}</div>
            
        </div>
        <div class="text-center">
            <a href="{{ route('surveylist')}}">back</a>
        </div>
    </div>
@endsection
