<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\course;

class university extends Model
{
    public function courses()
    {
        return $this->belongsToMany(course::class);
    }
}
