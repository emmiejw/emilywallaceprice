<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public $fillable = ['date', 'time', 'bg', 'dexcom', 'bg_photo', 'dexcom_photo'];
}
