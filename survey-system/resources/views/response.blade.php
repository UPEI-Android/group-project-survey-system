@extends('layout')

@section('title', '')

@section('content')
<html lang="en">
    
<div  style="margin-left: 15vw">
<h1 class="pageTitle">Responses</h1>
<a href="{{route('surveylist')}}" class="link-primary" style="font-size: 18px; margin: 0 0 20px 10px">Go back</a>


@foreach($questions as $question)
<div class="panel panel-success">

      <div class="panel-heading">Question: {{ $question->text }} </div>
      <table class="btn-light table table-hover">
        <thead>
    <tr>
        <th>Response</th>
        <th>Submitted by</th>
        <th>Response Type</th>
        @if(!empty($question->options))
          <th>options</th>
        @endif
      </tr>
    </thead>

    <tbody>
    <tr>
    @foreach($question->responses as $answer)
        <td scope="row">{{ $answer-> response_text }}</td>
        <td>{{ $answer-> created_at }}</td>
        <td>{{ $question-> responseType }}</td>
        @if(!empty($question->options))
        <td>{{$question->options}}</td>

        @endif
      </tr>
      @endforeach

    </tbody>

  </table>
  </div>
@endforeach
</div>
</div>
</html>
@endsection