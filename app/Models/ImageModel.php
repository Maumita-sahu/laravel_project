<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    use HasFactory;
    protected $table="addimage";
    protected $fillable=[
        'title','sub_title','description','catagory','image'
    ];
    // public $timestamps=false;

    public function getCatagory(){
        return $this->belongsTo(CatagoryModel::class,'catagory','id');
    }
}
