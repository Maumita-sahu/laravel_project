<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatagoryModel extends Model
{
    use HasFactory;
    protected $table="catagory";
    protected $fillable=[
        'catagory_name','image'
];
}
