<?php
namespace App\Actions;

use App\Models\Register;
use Illuminate\Http\Request;


class UpdateRegisterAction{

    public function handle(Request $request){
        return Register::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
    }
}