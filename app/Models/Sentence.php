<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sentence extends Model
{
    use HasFactory;
    protected $table = 'sentences';
    protected $fillable = ['description', 'meaning', 'language_id'];
}
