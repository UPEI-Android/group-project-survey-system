<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    use HasFactory;

    protected $primaryKey="id";

    
    protected $fillable=[
        'question_text',
        'answer_type',
        'answer_form',
    ];
    public $timestamps = false;


}
