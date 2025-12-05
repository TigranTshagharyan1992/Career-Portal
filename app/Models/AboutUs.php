<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $fillable =[
        'slider1_title',
        'slider1_description',
        'slider2_title',
        'slider2_description',
        'slider3_title',
        'slider3_description',
        'text1',
        'text2',
    ];
}
