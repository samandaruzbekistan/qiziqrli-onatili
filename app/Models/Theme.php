<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    public function quizzes()
    {
        return $this->hasMany(Quiz::class, 'theme_id');
    }

    public function audios()
    {
        return $this->hasMany(Audio::class, 'theme_id');
    }

    public function topics()
    {
        return $this->hasMany(Topic::class, 'theme_id');
    }

    public function dicts()
    {
        return $this->hasMany(Dict::class, 'theme_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'theme_id');
    }
}
