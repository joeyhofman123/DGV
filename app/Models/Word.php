<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function texts(){
        return $this->belongsToMany(Text::class, 'text_word');
    }

    public function chars(){
        return $this->hasMany(Char::class);
    }

}
