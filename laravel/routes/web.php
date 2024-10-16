<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\SettingsController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\website\IndexController;
use App\Http\Controllers\website\ServiceController;
use App\Http\Controllers\website\AboutController;
use App\Http\Controllers\website\GalleryController;
use App\Http\Controllers\website\PackagesController;
use App\Http\Controllers\website\DemoController;
use App\Http\Controllers\website\ContactController;
use App\Http\Middleware\SetAppLang;
use App\Models\Visit;


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




//Websire

// Route::get('/',[IndexController::class,'index'])->name("index");


    // Route::get('/services',[ServiceController::class,'index'])->name("services");

// English routes
// Route::get('/en', function () {
//     App::setLocale('en');
//     return view('website.index');
// });

// // // Arabic routes
// Route::get('/ar', function () {
//     App::setLocale('ar');
//     return view('website.index');
// });

// Other routes for both languages
// Route::get('/', function () {
//     return view('website.index');
// });
// Route::get('/', [IndexController::class,'index'])->name("index.a");
Route::middleware('setapplang')->get('/', function(){
    return(view("website.index"));
})->name("index");



Route::get("/demo/company", function () {
    return view('demo.company');
})->name('demo.company');

Route::get("/demo/resturant", function () {
    return view('demo.resturant');
})->name('demo.resturant');

Route::get("/demo/personal", function () {
    return view('demo.personal');
})->name('demo.personal');

Route::get("/demo/store", function () {
    return view('demo.store');
})->name('demo.store');



// Route::get('/', [IndexController::class,'index'])->name("home1");


Route::get('/services', [ServiceController::class,'index'])->name("services1");
Route::get('/about', [AboutController::class,'index'])->name("About1");
Route::get('/gallery', [GalleryController::class,'index'])->name("gallery1");
Route::get('/demo', [DemoController::class,'index'])->name("demo1");
Route::get('/contact', [ContactController::class,'index'])->name("contact1");

Route::middleware('setapplang')->prefix('{locale}')->group(function () {
    
    Route::get('/', [IndexController::class,'index'])->name("home");
    Route::get('/services', [ServiceController::class,'index'])->name("services");
    Route::get('/about', [AboutController::class,'index'])->name("About");
    Route::get('/gallery', [GalleryController::class,'index'])->name("gallery");
    Route::get('/packages', [PackagesController::class,'index'])->name("packages");
    Route::get('/demo', [DemoController::class,'index'])->name("demo");
    Route::get('/contact', [ContactController::class,'index'])->name("contact");
    
    Route::get("/demo/company", function () {
        return view('demo.company');
    })->name('demo.company');
    
    Route::get("/demo/resturant", function () {
        return view('demo.resturant');
    })->name('demo.resturant');

    Route::get("/demo/personal", function () {
        return view('demo.personal');
    })->name('demo.personal');

    Route::get("/demo/store", function () {
        return view('demo.store');
    })->name('demo.store');
    
});




//Dashboard

Route::group([ 'prefix'=>'en/amm12-dashboard' , 'as'=>'dashboard.','middleware'=>['auth','checkLogin'] ],function () {

    Route::get('/',function () {
        
        $visit = Visit::firstOrNew([]);
        // $visit->incrementCount();
        $visitCount = $visit->count;
        
        return view('dashboard.index', compact('visitCount'));
        
    })->name("index1");

    Route::get('settings',[SettingsController::class,'index'])->name("settings");

    Route::post('/settings/update/{setting}', [SettingsController::class, 'update'])->name('settings.update');

    Route::get('tasks',function () {
        return view('dashboard.tasks');
    })->name("tasks");

    Route::get('users',function () {
        return view('dashboard.users.index');
    })->name("users");

    Route::get('/users/all', [UserController::class, 'getUsersDatatable'])->name('users.all');
    Route::post('/users/delete', [UserController::class, 'delete'])->name('users.delete');

    Route::resources([
        'users' => UserController::class,
    ]);



});


Route::prefix('amm12-dashboard')->group(function () {
    Auth::routes(['login' => true, 'register' => false, 'reset' => false]);
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
