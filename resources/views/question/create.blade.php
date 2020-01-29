@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>
                {{-- <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                      @if(Session::has('alert-' . $msg))
                
                      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                      @endif
                    @endforeach
                  </div> <!-- end .flash-message --> --}}
                <div class="card-body">
                    <form action="/questionnaires/{{$questionnaire->id}}/questions" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="question[question]" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Question">
                            <small id="questionHelp" class="form-text text-muted">Ask simple and to-the-point questions for best results.</small>
                            @error('question.question')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                          <fieldset>
                              <legend>Choices</legend>
                              <small id="choicesHelp" class="form-text text-muted">Give choices that give you the most insight into your question.</small>

                              <div>
                                <div class="form-group">
                                    <label for="answer1">Choice 1</label>
                                    <input name="answers[][answer]" type="text"
                                     class="form-control" id="exampleInputEmail1" aria-describedby="choiceHelp" placeholder="Enter Choice 1">
                                    <small id="answer1Help" class="form-text text-muted">Giving a answer1 will increase answer1 of responses.</small>
                                    @error('answers.0.answer')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>  
                              </div>
                              <div>
                                <div class="form-group">
                                    <label for="answer2">Choice 2</label>
                                    <input name="answers[][answer]" type="text"
                                     class="form-control" id="exampleInputEmail1" aria-describedby="choiceHelp" placeholder="Enter Choice 2">
                                    <small id="answer2Help" class="form-text text-muted">Giving a answer1 will increase answer1 of responses.</small>
                                    @error('answers.1.answer')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>  
                              </div>
                              <div>
                                <div class="form-group">
                                    <label for="answer3">Choice 3</label>
                                    <input name="answers[][answer]" type="text"
                                     class="form-control" id="exampleInputEmail1" aria-describedby="choiceHelp" placeholder="Enter Choice 3">
                                    <small id="answer3Help" class="form-text text-muted">Giving a answer1 will increase answer1 of responses.</small>
                                    @error('answers.2.answer')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>  
                              </div>
                              <div>
                                <div class="form-group">
                                    <label for="answer4">Choice 4</label>
                                    <input name="answers[][answer]" type="text"
                                     class="form-control" id="exampleInputEmail1" aria-describedby="choiceHelp" placeholder="Enter Choice 4">
                                    <small id="answer4Help" class="form-text text-muted">Giving a answer1 will increase answer1 of responses.</small>
                                    @error('answers.3.answer')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>  
                              </div>
                          </fieldset>
                        </div>
                          <button type="submit" class="btn btn-primary">Add Question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
