<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Doctrine\Inflector\WordInflector;
use Illuminate\Http\Request;

class WordsContorller extends Controller
{

    public function index(){
        $woorden = Word::orderBy('amount_in_texts', "DESC")->get();
        return view('dashboard.woorden.index', compact('woorden'));
    }


    public function show($id){
        $woorden = \App\Models\Text::findOrFail($id)->words()->orderBy('word', 'ASC')->get();
        return view('dashboard.woorden.show', compact('woorden'));
    }
}
