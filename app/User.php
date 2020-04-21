<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    const ACTIVE = 1;
    const INACTIVE = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname','photo_id', 'identification_id','identification','pays_id', 'email', 'phone','is_active', 'password', 'account_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


public function account(){
    return $this->belongsTo('App\Account');
}

public function land(){
    return $this->belongsTo('App\Pays', 'pays_id');
}

public function photo(){
    return $this->belongsTo('App\Photo');
}

public function identification_piece(){
    return $this->belongsTo('App\Identification', 'identification_id');
}

    public function getNameAttribute(){
        return  $this->first_name.' '.$this->last_name;
    }

    public function withdraw()
    {
        return $this->hasMany('App\Withdraw', 'id', 'user_id');
    }

    public function deposit()
    {
        return $this->hasMany('App\Deposit', 'id', 'user_id');
    }
    public function transaction()
    {
        return $this->hasMany('App\Transaction', 'id', 'user_id');
    }

    public function  loans()
    {
        return $this->hasMany('App\Loan','loanPackage_id');
    }
}
