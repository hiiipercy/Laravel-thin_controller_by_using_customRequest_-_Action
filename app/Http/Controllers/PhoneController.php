<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Actions\PhoneAction;
use Illuminate\Http\Request;
use App\Http\Requests\PhoneRequest;
use App\Actions\UpdateRegisterAction;

class PhoneController extends Controller
{
    public function index(){
        $phone = Phone::get();
        return view('layout.phone',compact('phone'));
    }

    public function store(PhoneRequest $request, PhoneAction $registerAction){
        $phone = $registerAction->handle($request);
        $phone->save();
        return redirect()->back();
    }

    public function edit($id){
        $phone = Phone::findOrFail($id);
        return view('layout.phoneedit',compact('phone'));
    }

    public function update(PhoneRequest $request, UpdateRegisterAction $updateregisterAction){
        $phone = $updateregisterAction->handle($request);
        return redirect()->back();
    }

    public function delete($id){
        
        $phone = Phone::find($id);
        $phone->delete();
        return redirect()->back();
    }
}
