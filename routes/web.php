<?php

use App\Http\Controllers\user\CustomerController;
use App\Http\Middleware\CodeLab;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('customer.home');
        // return view('dashboard');
    })->name('dashboard');

    Route::group(["prefix" => 'customer', 'middleware' => 'codelab_middleware', 'namespace' => 'User'],function(){

        Route::get('home', [CustomerController::class, 'home']);
        Route::get('about', [CustomerController::class, 'about']);
        Route::get('service', [CustomerController::class, 'service']);
        
        });

        Route::get('userPage', function(){
            return "userPage";
        })->middleware('codelab_middleware');

        

});


// Route::get('one', function(){
//     return 'one';
// })->middleware(['codelab_middleware', 'kaung_middleware']);


// Route::middleware('codelab_middleware')->group(function() {

//     Route::get('one', function(){
//         return 'one';
//     });
    
//     Route::get('two', function(){
//         return 'two';
//     });
    
//     Route::get('three', function(){
//         return 'three';
//     });


// });

Route::middleware(CodeLab::class)->group(function() {

    Route::get('one', function(){
        return 'one';
    });
    
    Route::get('two', function(){
        return 'two';
    });

});

    
Route::get('three', function(){
    return 'three';
});


// middleware
//1. middleware create | 2. Delcare middleware at kernel | 2. use middleware
