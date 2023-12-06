<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $table = "reviews";
    // protected $fillable = [
    //     'id_user',
    //     'id_order',
    //     'review',
    // ];
    public $timesetamps = false;
    public function users()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }
}