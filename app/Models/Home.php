<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable =[
        'main_title',
        'main_image',
        'section1_title',
        'section1_text',
        'section1_image',
        'section2_title',
        'section2_text',
        'section2_image',
        'section3_title',
        'section3_text',
        'section3_image',
    ];
}
