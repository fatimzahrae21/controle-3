<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ProController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\InfosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuteurController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\MyInvokableController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/profiles',ProController::class);

Route::get('/invokable', MyInvokableController::class);

Route::resource('/car',CarController::class);
Route::resource('/auteur',AuteurController::class);
Route::get('/formateurs/{id}/groupes', [FormateurController::class, 'showGroups']);
Route::get('/formateurs', [FormateurController::class, 'index'])->name('formateurs.index');
Route::middleware('guest')->group(function(){
    Route::get('/loginNav', [LoginController::class,'show'])->name('login.show');
    Route::post('/loginNav', [LoginController::class,'login'])->name('loginNav');
    
});
Route::get('/logout', [LoginController::class,'logout'])->name('login.logout')->middleware('auth');

});

require __DIR__.'/auth.php';



Route::get('/home' ,[homeController::class,'index'] )->name('homepage');
Route::get('youtube','App\Http\Controllers\EventController@getVideo');
// Route::get('/salam/{nom}/{prenom}', function(Request $request){
// 
    // return view ('salam',[
        // 'nom'=>$request->nom,
        // 'prenom'=>$request->prenom
    // ]);
// });
// 
//afficher
// Route::get('/profiles/{profile}', [ProfileController::class, 'show'])->name('profiles.show');

// Route::get('/profiles',[ProfileController::class,'index'])->name('profiles.index');

// se connecter
// Route::get('/login',[LoginController::class,'show'])->name('login.show');
// Route::post('/login',[LoginController::class,'login'])->name('login');


// deconnecter

// Route::get('/logout',[LoginController::class,'logout'])
// ->name('login.logout');
//ajouter
// Route::post('/profiles/store',[ProfileController::class,'store'])
// ->name('store');

//informations
// Route::get('/infos',[InfosController::class,'index'])->name('infos.index');

// Route::get('/create',[ProfileController::class,'create'])->name('createProfile');




// //delete

// Route::delete('/profiles/{profile}',[ProfileController::class,'destroy'])
// ->name('profiles.destroy');
// // modifier

// Route::get('/profiles/{profile}/edit',[ProfileController::class,'edit'])
// ->name('profiles.edit');
// Route::put('/profiles/{profile}', [ProfileController::class, 'update'])
// ->name('profiles.update');

