<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $fillable = ['amount', 'user_id'];

    public function getBalanceAttribute(){
        return $this->amount;
    }

    public function getVerifyBalanaceAttribute($amount) {
        $verifyBalance = $this->amount - amount;
        if (amount > 0 && verifyBalance >= 0) {
            return true;
        }
        else{
            return false;
        }
    }

    public function getisValidAmountAttribute($amount){
        if (amount > 0) {
            return true;
        }
        else{
            return false;
        }
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
