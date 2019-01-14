<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name', 'description', 'year', 'hour_lesson',
        'hour_exercise', 'teacher_id'
    ];

    public function teacher()
    {
        return $this->belongsTo(\App\Teacher::class);
    }

    public function sign()
    {
        return $this->hasOne(\App\Sign::class);
    }
}
