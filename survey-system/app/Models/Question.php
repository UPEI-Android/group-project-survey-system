<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * This function is using the Eloquent to define the relationship between the question table
 * and survey table. The relationship in this is one to many. So We build queries through 
 * response model and question model
 */
class Question extends Model
{
    use HasFactory;

    protected $primaryKey="id";

    public $table = 'questions';
    protected $fillable=[
        'id',
        'survey_id',
        'text',
        'response_type',
        'options'
    ];
    public $timestamps = false;

    public function responses()
    {
        //parent model
        return $this->hasMany('App\Models\Response');
    }



}
