<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requet extends Model
{
    protected $fillable = [
        'id', 'user_id','subject_id','description', 'date'
    ];
}
