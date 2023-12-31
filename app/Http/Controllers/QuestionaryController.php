<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class QuestionaryController extends Controller
{

    public function list(Request $request): View
    {
        $questions = Question::with('answer_options')->get();
        return view('questionary.questions')->with(compact('questions'));
    }

    public function getAnswers(Request $request): array
    {
        return $request->all();
    }
}
