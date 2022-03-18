@extends('layout')

@section('title', '')

@section('content')
    <div style="margin-left: 200px">
        <h1 class="display-1 text-center">Survey List</h1>

        <style>
            .btn{
                width: auto;
                height: auto;
            }
        </style>
        <div>
            <ul>
                @foreach ($survey_list as $item)
                    <li> <a href="{{ route('surveydetail','id='.$item->id) }}">{{ $item->name }}</a>
                    
        <a class="btn btn-primary" href="{{ route('surveyexport','id='.$item->id) }}">exportExcel</a>
                    </li>



                @endforeach
            </ul>
        </div>

    </div>
@endsection
