<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $primaryKey="id";

    protected $fillable=[
        'survey_name',
        'profiles_id',
        'url',
        'survey_type',
        'survey_id',
        'survey_type'
    ];
    //id, name, profiles_id, url,

}
 