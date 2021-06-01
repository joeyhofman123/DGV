<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TextsContorller extends Controller
{
    public function index(){

    }

    public function create(){
        return view('dashboard.teksten.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => ['required', 'max:255', 'string'],
            'text' => ['required', 'max:500', 'string']
        ]);

        


       DB::transaction(function() use ($request){
        $wordsarray = explode(' ', $request->text);
        $aantalleestekens =  preg_match_all("/[\.]|[\,]|[\,]|[\!]|[\?]|[\:]|[\;]/", $request->text);
        $uppercase =  preg_match_all("/[A-Z]/", $request->text);
        $lowercase =  preg_match_all("/[a-z]/", $request->text);
        $vowels = preg_match_all("/[a|A]|[e|E]|[i|I]|[o|O]|[u|U]/", $request->text);
        $consonants = preg_match_all("/^[a|A]|[e|E]|[i|I]|[o|O]|[u|U]/", $request->text);
        $sentences =  preg_match_all("/[\.]|[\:]|[\?]|[\!]/", $request->text);


        $textlength = str_replace(' ', "", $request->text);

        $chars = strlen($textlength);

           $text = \App\Models\Text::create([
               "title" => $request->title,
               "text" => $request->text,
               "characters" => $chars,
               "uppercase" => $uppercase,
               "lowercase" => $lowercase,
               "vowels" => $vowels,
               "consonants" => $consonants,
               "sentences" => $sentences
           ]);

           foreach($wordsarray as $word){
                $wordchars = strlen($word);
                $wordvowels = preg_match_all("/[a|A]|[e|E]|[i|I]|[o|O]|[u|U]/", $word);
                $wordconsonants = preg_match_all("/^[a|A]|[e|E]|[i|I]|[o|O]|[u|U]/", $word);

                $wordcheck = \App\Models\Word::where('word', $word)->get();
                
                if($wordcheck->count() > 0){
                    $updateword = $wordcheck->first();
                    $updateword->amount_in_texts += 1;
                    $updateword->save();
                    continue;
                }
               $dbword = \App\Models\Word::create([
                   'word' => $word,
                   'amount_in_texts' => 1,
                   'vowels' => $wordvowels,
                   'consonants' => $wordconsonants
               ]);

               $text->words()->attach($dbword->id);
           }
       });

       return redirect('/');
    }
}
