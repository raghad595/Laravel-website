<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowProfile;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
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
});
require __DIR__.'/auth.php';
Route::get('/customer/insert', function(){
    echo "Hello World";
});
Route::get('/customer/all_data', function(){
    return "All customers Data";
});
Route::get('/test',function(){
    echo 'Test royteenmnv';
});
Route::get('/user/update/{id}',function($id){
    echo "User $id Updated Succ";
})->name('User_update');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/greetingPost/{username}', function($username){
    echo "Welcome $username";
});
Route::redirect('/user/admin','/customer/all_data');
Route::post('/customer/greetingPost', [CustomerController::class, 'greetingPost']);
Route::get('/customer/test',[CustomerController::class,'test']);
Route::get('/customer/home',[CustomerController::class,'home']);
Route::get('/customer/contact',[CustomerController::class,'contact']);
Route::get('/customer/registed', function () {
    return view('register'); 
});
Route::post('/customer/registed', [CustomerController::class, 'registed']);
Route::get('/user/show_profile',ShowProfile::class);
Route::get('/customer/about',[CustomerController::class,'about']);
Route::resource('users', UserController::class);


// Route::fallback(function(){
//     return redirect('/customer/insert');
// });
//Customer Controller
// Route to handle the GET request for /customer/greet
//Route::get('/customer/greeting', [CustomerController::class, 'greeting']);
// Route to handle the POST request for /customer/greet

//User Controller
//Route::get('user/index',[UserController::class,'index']);

//Route::resource('/users',UserController::class);

