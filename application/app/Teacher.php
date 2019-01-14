<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
    
            'first_name', 'last_name', 'title',
        
    ];

    public function subjects()
    {
        return $this->hasMany(\App\Subject::class);
    }
}
