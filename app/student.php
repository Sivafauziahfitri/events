<?php

namespace App;

use illminate\database\eloquent\model;

class Student extends model
{
    protected $table = 'students';
    protected $guardeo = [];

    public function user()
    {
        return $this->belongsto('app\user');
    }
}