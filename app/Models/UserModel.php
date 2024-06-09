<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class UserModel extends Authenticatable
{
    use HasFactory,HasApiTokens;
    protected $table="user";
    protected $fillable=[
        'name','email','phone','password','gender'
    ];
    // public $timestamps=false;
}


