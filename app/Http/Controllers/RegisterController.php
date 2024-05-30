<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Register;
use Illuminate\Http\Request;
use App\Actions\RegisterAction;
use App\Actions\UpdateRegisterAction;
use App\Http\Requests\RequestRegister;


class RegisterController extends Controller
{   

    public function index(){
        $user = Register::get();
        return view('layout.index',compact('user'));
    }

    public function store(RequestRegister $request, RegisterAction $registerAction){
        $user = $registerAction->handle($request);
        $user->save();
        return redirect()->back();
    }

    public function edit($id){
        $user = Register::findOrFail($id);
        dd($user);
        return view('layout.edit',compact('user'));
    }

    public function update(RequestRegister $request, UpdateRegisterAction $updateregisterAction){
        $user = $updateregisterAction->handle($request);
        return redirect()->back();
    }

    public function delete($id){
        
        $user = Register::find($id);
        $user->delete();
        return redirect()->back();
    }
}
