<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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
        return $this->hasMany('App\Models\Response');
    }



}
