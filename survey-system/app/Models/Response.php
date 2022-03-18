<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $primaryKey="id";

    protected $guarded =[
        'survey_id',
        'question_id',
    ];
    protected $fillable=[
        'answer_form',
    ];

}
