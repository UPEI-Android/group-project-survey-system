<div>
Hello from  livewire
<style>
body {
    background-image: linear-gradient(#1EABE4, #0D4AAF);
}
</style>
<form>
    {{--Step 1--}}
    @if($answerType == 'none')
    <div class="step-one">
        <div class="card">
            <div class="card-header bg-primary text-white">Survey Name</div>
            <div class="card-body">
                <div class="col-md-8">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for=""> Survey Name </label>
                            <input type="text" class="form-control" placeholder="Enter the name of the survey" wire:model="survey_name">
                            <span class="text-danger">@error('survey_name'){{ $message }}@enderror</span>
                        </div>
                    </div>
                
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">Survey Type </label>
                            <select class="form-control" wire:model="survey_type">
                                <option value="" selected>Select Survey Type </option>
                                <option value="Exploratory"> Exploratory</option>
                                <option value="Descriptive"> Descriptive</option>
                                <option value="Causal"> Causal</option>
                            </select>
                            <span class="text-danger">@error('survey_type'){{ $message }}@enderror</span>
                        </div>
                    </div>
                </div>
            </div>
    <div class="card">
            <div class="card-body">
                <div class="col-md-8">
                    <div class="col-md-8">
                        <div class="form-group">
                        <label for=""> Question </label>
                        <input type="text" class="form-control" placeholder="Enter the question text" wire:model="question_text">
                    </div>
                        <label for=""> Choose Response type </label>
                        <div class="action-buttons d-flex justify-content-between bg-white pt-3 pb-6" >
                        <button type="button" class="btn btn-md btn-primary" wire:click="numericAnswer()">NUMERIC </button>
                        <button type="button" class="btn btn-md btn-primary" wire:click="textAnswer()">TEXT </button>
                        <button type="button" class="btn btn-md btn-primary" wire:click="mcq1Answer()">MCQ </button>
                        <button type="button" class="btn btn-md btn-primary" wire:click="mcq2Answer()">MCQ (multiple answer) </button>
                        <span class="text-danger">@error('answer_type'){{ $message }}@enderror</span>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if($answerType == 'mcq1')
    <div class="card">
            <div class="card-header bg-primary text-white">Input your 4 choices</div>
            <div class="card-body">                
                <div class="col-md-6">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for=""> Multiple Choice Question with 1 answer </label>
                        <input type="text" class="form-control" placeholder="Enter your first choice" wire:model="option1">
                        <input type="text" class="form-control" placeholder="Enter your second choice" wire:model="option2">
                        <input type="text" class="form-control" placeholder="Enter your third choice" wire:model="option3">
                        <input type="text" class="form-control" placeholder="Enter your fourth choice" wire:model="option4">
                        </div>
                </div>
            </div>
        </div>
    @endif
    @if($answerType == 'mcq2')
    <div class="card">
            <div class="card-header bg-primary text-white">Input your 4 choices</div>
            <div class="card-body">                
                <div class="col-md-6">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for=""> Multiple Choice Question with multiple answer </label>
                        <input type="text" class="form-control" placeholder="Enter your first choice" wire:model="option1">
                        <input type="text" class="form-control" placeholder="Enter your second choice" wire:model="option2">
                        <input type="text" class="form-control" placeholder="Enter your third choice" wire:model="option3">
                        <input type="text" class="form-control" placeholder="Enter your fourth choice" wire:model="option4">
                        </div>
                    </div>
            </div>
        </div>
    @endif
    @if($answerType == 'numeric')
    <div class="step-two">
        <div class="card">
            <div class="card-header bg-primary text-white">they choose to pick numeric as an answer type</div>
            <div class="card-body">
                <div class="col-md-6">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for=""> Numeric Answer </label>
                        <input type="text" class="form-control" placeholder="Enter numeric answer" wire:model="answer_form">
                        <span class="text-danger">@error('answer_form'){{ $message }}@enderror</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if($answerType == 'text')
    <div class="step-three">
        <div class="card">
            <div class="card-header bg-primary text-white">STEP3, say they choose to pick text as an answer type</div>
            <div class="card-body">
                <div class="col-md-6">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for=""> Text Answer</label>
                        <textarea class="form-control" cols="2" rows="2" wire:model="answer_form"></textarea>
                        <span class="text-danger">@error('answer_form'){{ $message }}@enderror</span>
                    </div>
            </div>
        </div>
    </div>
    @endif

   
    @if($answerType == 'noneTemp')
    <div class="card">
    <div class="card-header bg-primary text-white"> Total questions (<?php echo $currentQuestion ?>) New Question</div>
    <div class="card-body">
                <div class="col-md-8">
                    <div class="col-md-8">
                        <div class="form-group">
                        <label for=""> Question </label>
                        <input type="text" class="form-control" placeholder="Enter the question text" wire:model="question_text">
                    </div>
                        <label for=""> Choose Response type </label>
                        <div class="action-buttons d-flex justify-content-between bg-white pt-3 pb-6" >
                        <button type="button" class="btn btn-md btn-primary" wire:click="numericAnswer()">NUMERIC </button>
                        <button type="button" class="btn btn-md btn-primary" wire:click="textAnswer()">TEXT </button>
                        <button type="button" class="btn btn-md btn-primary" wire:click="mcq1Answer()">MCQ </button>
                        <button type="button" class="btn btn-md btn-primary" wire:click="mcq2Answer()">MCQ (multiple answer) </button>
                        <span class="text-danger">@error('answer_type'){{ $message }}@enderror</span>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="action-buttons d-flex justify-content-between bg-white pt-5 pb-3" >
        @if($currentQuestion >1)
            <div>
                <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseQuestion()">(-) </button>
            </div>
        @endif 
            <button type="button" class="btn btn-md btn-success" wire:click="increaseQuestion()">(+) </button>
            <button type="button" class="btn btn-md btn-primary" wire:click="submit()"> Submit </button>
    </div>
</form>
</div>
