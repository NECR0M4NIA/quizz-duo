<?php

namespace App\Http\Controllers;

use App\Models\Quizz;
use Illuminate\Http\Request;

class QuizzController extends Controller
{
    function index() {
        $quizzs = Quizz::all();
        return view('welcome', ['quizzs' => $quizzs]);
    }
}
