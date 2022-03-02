@extends('layout')

@section('title', '')

@section('content')
<style>
        table,table tr th, table tr td { border:1px solid #0094ff;padding:20px}
        table { width: 500px; min-height: 25px; line-height: 25px; text-align: center; border-collapse: collapse;}
    </style>
<div style="margin-left: 200px">
<h1 class="display-1 text-center">Survey List</h1>
    <div style="width: 1280px;margin: 0 auto;">
        <table border="1">
            <tr>
                <th>Problem</th>
                <th>updated_at</th>
                <th>created_at</th>
            </tr>
            @foreach($survey as $value)
                <tr>
                    <td>{{$value->problem}}</td>
                    <td>{{$value->updated_at}}</td>
                    <td>{{$value->created_at}}</td>
                </tr>
            @endforeach
            <div>{{ $survey->links() }}</div>
        </table>
    </div>
</div>
@endsection
