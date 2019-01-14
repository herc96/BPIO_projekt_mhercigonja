<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sign extends Model
{
    protected $fillable = [
        'test1date', 'test1grade', 'test2date',
        'test2grade','testdate','testgrade',
        'presence','student_id', 'subject_id'
    ];

    public function student()
    {
        return $this->belongsTo(\App\Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(\App\Subject::class);
    }
}
