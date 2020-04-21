<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identification extends Model
{
    //
    protected $fillable = ['code', 'identification_en', 'identification_fr'];
}
