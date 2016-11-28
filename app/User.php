<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use EntrustUserTrait;
    public $primaryKey = 'username';
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password', 'firstName', 'lastName'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $login_validation_rules = [
        'username' => 'required|exists:users',
        'password' => 'required'
    ];

    public static $create_validation_rules = [
        'username' => 'required|unique:users',
        'password' => 'required'
    ];    

    public function sales()
    {
        return $this->hasMany('App\Sale', 'username', 'username');
    }
}
