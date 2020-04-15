<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    CONST DEBIT     = 'debit';
    CONST CREDIT    = 'credit';
    //
    protected $guarded = ['id'];

    protected $fillable = ['code','transaction_type'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
