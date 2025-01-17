<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{   
    protected $fillable= [
        'name',
        'email',
        'password'
    ];

    // public function phone(){
    //     return $this->hasOne(Phone::class);
    // }
    use HasFactory;
}
