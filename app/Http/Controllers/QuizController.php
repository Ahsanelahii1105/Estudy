<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Question; // Use uppercase 'Q'
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    // Adding data
    public function add(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required',
            'opa' => 'required',
            'opb' => 'required',
            'opc' => 'required',
            'opd' => 'required',
            'ans' => 'required',
        ]);

        $q = new Question();
        $q->question = $request->question;
        $q->a = $request->opa;
        $q->b = $request->opb;
        $q->c = $request->opc;
        $q->d = $request->opd;
        $q->ans = $request->ans;

        $q->save();

        Session::put('successMessage', "Question Successfully Added");
        return redirect('quiz/question');
    }

    public function showque() {
        $qs = question::all();
        Log::info('Questions: ', $qs->toArray());

        return view('quiz/question')->with(['question' => $qs]);
    }

    // Updating data
    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'question' => 'required',
            'opa' => 'required',
            'opb' => 'required',
            'opc' => 'required',
            'opd' => 'required',
            'ans' => 'required',
        ]);

        $q = Question::findOrFail($request->id);
        $q->question = $request->question;
        $q->a = $request->opa;
        $q->b = $request->opb;
        $q->c = $request->opc;
        $q->d = $request->opd;
        $q->ans = $request->ans;

        $q->save();

        Session::put('successMessage', "Question Successfully Updated");
        return redirect('quiz/question');
    }

    // Delete data
    public function delete(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
        ]);

        Question::destroy($request->id);
        Session::put('successMessage', "Question Successfully Deleted");
        return redirect('quiz/question');
    }

    // Start quiz function
    public function startquiz()
    {
        Session::put("nextq", 1);
        Session::put("wrongans", 0);
        Session::put("correctans", 0);

        $q = Question::first();

        return view('quiz/answerDesk')->with(['question' => $q]);
    }

    // Submit answer function
    public function submitans(Request $request)
    {
        // Retrieve session data
        $nextq = Session::get('nextq', 1);
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

        // Ensure that the question exists
        if (!$currentQuestion) {
            return redirect('quiz/end')->with('error', 'No more questions available.');
        }

        return view('quiz/answerDesk')->with(['question' => $currentQuestion]);
    }
}
