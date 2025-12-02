<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademyCource extends Model
{
    use SoftDeletes;

    protected $table = 'academy_courses';
    public $timestamps = false;

    protected $attributes = [
        'is_active' => true,
    ];

    protected $fillable = [
        'Course_name',
        'Country',
        'Course_description',
        'How_to_apply',
        'Deadline',
        'time_create',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'Deadline' => 'date',
        'time_create' => 'datetime',
    ];
}
