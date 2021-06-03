<?php

namespace App\Http\Controllers;
use App\Models\Char;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WordsContorller extends Controller
{
    public function show($id){
        $woorden = \App\Models\Text::findOrFail($id)->words()->orderBy('word', 'ASC')->get();
        return view('dashboard.woorden.show', compact('woorden'));
    }


    public function index(){
        $woorden = \App\Models\Word::orderby('word', 'asc')->orderby('amount_in_texts', 'asc')->get();
        return view('dashboard.woorden.index', compact('woorden'));


    }
}
