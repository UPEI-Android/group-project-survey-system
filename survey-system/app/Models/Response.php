<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * This function is using the Eloquent to define the relationship between the question table
 * and survey table. The relationship in this is one to many. So We build queries through 
 * response model and question model
 */
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
    public $timestamps = false;
    public function question()
    {
        //child models
        return $this->belongsTo('App\Models\Question');
    }

}
