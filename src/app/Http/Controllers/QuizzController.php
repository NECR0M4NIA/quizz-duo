<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Quizz;
use Illuminate\Http\Request;

class QuizzController extends Controller
{
    function index() {
        $quizzs = Quizz::all();
        return view('welcome', ['quizzs' => $quizzs]);
    }

    function showById($id) {
        $quizzs = Quizz::find($id);

        $questions = DB::table("questions")->where('quizz_id', $id);

        $first_question = $questions(0);

        $answers = DB::table("questions")->where('quizz_id', $id);

        var_dump($questions);
        return view('welcome', ['quizzs' => $quizzs]);
    }
}
