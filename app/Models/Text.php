<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function words(){
        return $this->belongsToMany(Word::class, 'text_word');
    }
}
