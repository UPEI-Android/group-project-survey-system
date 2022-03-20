<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyTest extends Model
{
    use HasFactory;
    protected $fillable=[
        'survey_name',
        'profiles_id',
        'url',
        'survey_type',
        'question_text',
        'answer_type',
        'answer_form',
        'survey_id',
        'survey_type'
    ];
}
