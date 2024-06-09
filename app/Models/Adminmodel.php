<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Adminmodel extends Authenticatable
{
    use HasFactory,Notifiable;
    protected $table="admin_login";
    protected $fillable=[
        'name','email','phone','password','gender'
    ];
    // public $timestamps=false;
}
