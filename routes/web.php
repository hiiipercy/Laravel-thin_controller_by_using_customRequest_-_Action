<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\RegisterController;
use App\Models\Register;
use App\Models\Phone;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('layout.index');
// });

Route::get('/ok',function() {
    // $user= Register::find(2)->phone;
    $user= Phone::find(2)->register;
    dd($user);
    return view('welcome');
});

Route::get('/',function() {
    // $user= Register::find(2)->phone;
    $user= Phone::find(2)->register;
    dd($user);
    return view('layout.index');
});

Route::get('/',[RegisterController::class, 'index'])->name('index');
 
Route::group(['prefix'=>'user','as'=>'user.'], function(){
    Route::get('/',[RegisterController::class, 'index'])->name('index');
    Route::post('store',[RegisterController::class, 'store'])->name('store');
    Route::get('{id}/edit',[RegisterController::class, 'edit'])->name('edit');
    Route::put('{id}/update',[RegisterController::class, 'update'])->name('update');
    Route::delete('{id}/delete',[RegisterController::class, 'delete'])->name('delete');
});

Route::group(['prefix'=>'phone','as'=>'phone.'], function(){
    Route::get('/',[PhoneController::class, 'index'])->name('index');
    Route::post('store',[PhoneController::class, 'store'])->name('store');
    Route::get('{id}/edit',[PhoneController::class, 'edit'])->name('edit');
    Route::put('{id}/update',[PhoneController::class, 'update'])->name('update');
    Route::delete('{id}/delete',[PhoneController::class, 'delete'])->name('delete');
});