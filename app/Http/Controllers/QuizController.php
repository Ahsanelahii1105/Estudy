<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\question;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class QuizController extends Controller
{

    // adding data
    public function add(Request $request){
        $validate=$request->validate([
            'question'=>'required',
            'opa'=>'required',
            'opb'=>'required',
            'opc'=>'required',
            'opd'=>'required',
            'ans'=>'required',
        ]);
        $q = new question();
        $q->question=$request->question;
        $q->a=$request->opa;
        $q->b=$request->opb;
        $q->c=$request->opc;
        $q->d=$request->opd;
        $q->ans=$request->ans;

        $q->save();

        session::put('successMessage',"Question Successfully Added");
        return redirect('quiz/question');


    }

    public function showque(){
        $qs = question::all();

        return view('quiz/question')->with(['question'=>$qs]);
    }

    // updating data

    public function update(Request $request){
        $validate=$request->validate([
            'id'=>'required',
            'question'=>'required',
            'opa'=>'required',
            'opb'=>'required',
            'opc'=>'required',
            'opd'=>'required',
            'ans'=>'required',
        ]);
        $q = question::find($request->id);
        $q->question=$request->question;
        $q->a=$request->opa;
        $q->b=$request->opb;
        $q->c=$request->opc;
        $q->d=$request->opd;
        $q->ans=$request->ans;

        $q->save();

        session::put('successMessage',"Question Successfully Updated");
        return redirect('quiz/question');


    }

    // delete data
    public function delete(Request $request){
        $validate=$request->validate([
            'id'=>'required',
        ]);

        question::where('id', $request->id)->delete();
        session::put('successMessage',"Question Successfully Deleted");
        return redirect('quiz/question');
    }

    // start quiz function
    public function startquiz(){
        session::put("nextq",'1');
        session::put("wrongans",'0');
        session::put("correctans",'0');
        $q=question::all()->first();

        return view('quiz/answerDesk')->with(['question'=>$q]);
    }

    // submit answer function
    public function submitans(Request $request)
    {
        // Retrieve session data
        $nextq = Session::get('nextq', 1); // Default to 1 if not set
        $wrongans = Session::get('wrongans', 0);
        $correctans = Session::get('correctans', 0);

        // Validate request
        $validated = $request->validate([
            'ans' => 'required',
            'dbans' => 'required',
        ]);

        // Update question counter
        $nextq++;

        // Check if answer is correct
        if ($request->dbans == $request->ans) {
            $correctans++;
        } else {
            $wrongans++;
        }

        // Update session variables
        Session::put('nextq', $nextq);
        Session::put('wrongans', $wrongans);
        Session::put('correctans', $correctans);

        // Fetch all questions
        $questions = Question::all();

        // Check if the current question index exceeds the number of available questions
        if ($nextq > $questions->count()) {
            return view('quiz/end');
        }

        // Get the current question based on the index
        $currentQuestion = $questions->get($nextq - 1);

        return view('quiz/answerDesk')->with(['question' => $currentQuestion]);
    }

}
