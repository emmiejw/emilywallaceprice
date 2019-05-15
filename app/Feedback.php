<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $fillable = ['name', 'website', 'feedback', 'is_active'];
}
