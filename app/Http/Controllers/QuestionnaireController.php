<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;
use Session;
class QuestionnaireController extends Controller
{
    public function create () {

     
        return view('layouts.questionnaire.create'); 
    }
    public function store(Request $request) {
        $data = request()->validate([

            'title' => 'required',
            'purpose' => 'required'
        ]);
        
        $user_id                = auth()->user()->id;
        $questionnaire          = new Questionnaire();
        $questionnaire->title   = $request->title;
        $questionnaire->purpose = $request->purpose;
        $questionnaire->user_id = $user_id;
        if($questionnaire->save())
        {
            Session::flash('alert-success','Questionniare is added succcessfully');
        }
        else
        {
            Session::flash('error','Oops something went wrong!');
        }
        
        return redirect()->back();
        
    }

    public function show(Questionnaire $questionnaire) {

        return view('layouts.questionnaire.show', compact('questionnaire')); 
    }

}
