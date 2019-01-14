<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'dateofbirth',
        'address', 'sign'
    ];

    public function signs()
    {
        return $this->hasMany(\App\Sign::class);
    }
    public function continent()
    {
        return $this->hasMany(\App\Continent::class);
    }
}
