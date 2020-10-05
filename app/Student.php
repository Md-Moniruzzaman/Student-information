<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function checkApplication()
    {
        return DB::table('students')->where('roll', $this->roll)->exists();
    }
}
