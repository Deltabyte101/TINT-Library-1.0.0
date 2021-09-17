<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ADMIN_TYPE = 1 ;
    const DEFAULT_TYPE = 0 ;
    protected $table = 'userData' ;

    public function isAdmin()
    {
        return $this->User_Admin_Type === self::ADMIN_TYPE ;
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'User_CID',
        'User_Title',
        'USer_Fname',
        'USer_Lname',
        'User_Password',
        'USer_Status_ID',
        'Dep_User_ID',
        'User_Email',
        'User_Admin_Type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
