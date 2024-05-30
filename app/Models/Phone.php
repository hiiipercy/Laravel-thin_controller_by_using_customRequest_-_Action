<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{   
    protected $fillable = [
        'phone',
        'user_id'
    ];

    // public function register(){
    //     return $this->belongsTo(Register::class);
    // }
    use HasFactory;
}
