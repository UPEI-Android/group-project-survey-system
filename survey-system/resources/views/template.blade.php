@extends('layout')

@section('title', '')

@section('content')
<html lang="en">
<div style="margin-left: 200px">
<h1 class="pageTitle">Responses</h1>
@foreach($questions as $question)
<div class="panel panel-success">

      <div class="panel-heading">Question: {{ $question->text }} {{ $question->options }}</div>
      <table class="btn-light table table-hover">
        <thead>
    <tr>
        <th>response</th>
        <th>created time</th>
        <th>options</th>
      </tr>
    </thead>

    <tbody>
    <tr>
    @foreach($question->responses as $answer)
        <td>{{ $answer-> response_text }}</td>
        <td>{{ $answer-> created_at }}</td>
        <td>{{$answer->option}}</td>
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