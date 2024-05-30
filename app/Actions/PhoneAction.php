<?php
namespace App\Actions;

use App\Models\Phone;
use Illuminate\Http\Request;


class PhoneAction{

    public function handle(Request $request){
        return Phone::create([
            'phone'=>$request->phone,
            'user_id'=>$request->user_id,

        ]);
    }
}