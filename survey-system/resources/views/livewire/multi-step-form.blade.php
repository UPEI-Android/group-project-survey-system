@extends('layout')

@section('title', 'Testing make_survey bruh')

@section('content')
<div style="margin-left: 300px">
You slick MF So slick<hr>
<form>
    <div class="card">
        <div class="card-header bg-secondary text-white">Creating a survey
             
             <div class="card-body">
                <div class="row">
                        <div class="col-md-6">
                        @if($answerChoice == 0)

                                <div class="form-group">
                                    <label for="">Survey Name </label>
                                    <input type="text" class="form-control" placeholder="Enter the name of the Survey" wire:model="survey_name">
                                </div>
                        </div>
                                <!-- Wire models are the stuff in the fillable in the student model-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Question text </label>
                                <textarea class="form-control" cols="2" rows="2" wire:model="question_text"></textarea>
                                <span class="text-danger">@error('question_text'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    <!-- This is where the user should choose the type of answer-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Choose Answer Type </label>
                                <button type="button" class="btn btn-md btn-success" wire:click = "numericAnswer()"> Numeric </button>
                                <button type="button" class="btn btn-md btn-success"> Text </button>
                                <button type="button" class="btn btn-md btn-secondary"> Multiple Choice </button>
                                <button type="button" class="btn btn-md btn-secondary"> Multiple Choice X </button>
                                <span class="text-danger">@error('answer_type '){{ $message }}@enderror</span>
                            </div>
                        </div>
                        @endif
                </div>
             </div>
         </div>

        @if($answerChoice == 1)
        <div class="form-group">
            <label for ="">Numeric answer (View Only) </label>
            <input type="text" class="form-control" placeholder="Numeric Answer (View Only)" wire:model="answer_form">
        </div>
        @endif
     <!-- Here will be the first choice which is numeric-->

            <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Question text </label>
                            <textarea class="form-control" cols="2" rows="2" wire:model="question_text"></textarea>
                            <span class="text-danger">@error('question_text'){{ $message }}@enderror</span>

                        </div>
            </div>


    <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
     <div>
        <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">NEXT </button>
        </div>
     
        @if($currentStep > 0)
        <div>
            <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">BACK </button>
            <button type="submit" class="btn btn-md btn-primary">SUBMIT </button>
    
        </div>
        @endif
    </div>
</form>
</div>
@endsection