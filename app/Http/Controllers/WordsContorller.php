<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordsContorller extends Controller
{
    public function show($id){
        $woorden = \App\Models\Text::findOrFail($id)->words()->orderBy('word', 'ASC')->get();
        return view('dashboard.woorden.show', compact('woorden'));
    }
}
