
<div>
    <form action="{{ route('makesurvey') }}" method="POST">
        @csrf
        <div class="form-group {{ $errors->has('survey_name') ? 'has-error' : '' }}">
            Survey name
            <input type="text" name="survey_name" class="form-control"
                   value="{{ old('survey_name') }}" required>
            @if($errors->has('survey_name'))
                <em class="invalid-feedback">
                    {{ $errors->first('survey_name') }}
                </em>
            @endif
        </div>
        <div class="form-group {{ $errors->has('customer_email') ? 'has-error' : '' }}">
            Survey Type
            <select name="survey_type"
                                        class="form-control">
                                    <option value="">-- Choose a survey type --</option>
                                    <option value="Exploratory">
                                            Exploratory
                                        </option>
                                        <option value="Descriptive">
                                            Descriptive
                                        </option>
                                        <option value="Causal">
                                        Causal
                                        </option>
                                                                         
                                </select> 
            @if($errors->has('survey_type'))
                <em class="invalid-feedback">
                    {{ $errors->first('survey_type') }}
                </em>
            @endif
        </div>

        <div class="card">
            <div class="card-header">
                All questions
            </div>

            <div class="card-body">
                <table class="table" id="products_table">
                    <thead>
                    <tr>
                        <th>Response Type</th>
                        <th>Question Text</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($questions as $index => $question)
                        <tr>
                            <td>
                            <input type="text"
                                       name="questions[{{$index}}][question_text]"
                                       class="form-control"
                                       wire:model="questions.{{$index}}.question_text" />
                               
                                @if($question['response_type'] == 'mcq')
                            <h4>All options</h4>
                            @foreach ($question['options'] as $index2 => $tempOption)
                            <input type="text"
                                       name="questions[{{$index}}][options][{{$index2}}][option]"
                                       class="form-control"
                                       wire:model="questions.{{$index}}.options.{{$index2}}.option" />
                                <a href="#" wire:click.prevent="removeOption({{$index}},{{$index2}})">Delete this option</a>
                                      @endforeach 
                                      <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-secondary"
                            wire:click.prevent="addOption({{$index}})">+ Add Another Option</button>
                    </div>
                </div>
                            @endif
                            </td>
                            <td>
                            <select name="questions[{{$index}}][response_type]"
                                        wire:model="questions.{{$index}}.response_type"
                                        class="form-control">
                                    <option value="">-- Choose a response type --</option>
                                    <option value="mcq">
                                            Multiple Choice Question
                                        </option>
                                        <option value="text">
                                            Text Response 
                                        </option>
                                        <option value="numeric">
                                            Numerical Response 
                                        </option>
                                  
                                        
                                </select> 
                                </td>
                            <td>
                                <a href="#" wire:click.prevent="removeQuestion({{$index}})">Delete</a>
                            </td>
                           
                        </tr>
                    @endforeach
                   
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-secondary"
                            wire:click.prevent="addProduct">+ Add Another Question</button>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div> 
            <input class="btn btn-primary" type="submit" value="Create Survey">
        </div>
    </form>
</div>