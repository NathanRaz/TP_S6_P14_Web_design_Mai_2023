<?php
	
	use App\Http\Controllers\backoffice\admin\auth\AuthController;
	use App\Http\Controllers\backoffice\admin\contents\ContentController;
	use App\Http\Controllers\frontoffice\HomeController;
	use Illuminate\Support\Facades\Route;
	
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

$idRegex = '[0-9]+';
$slugRegex = '[0-9a-z\-]+';

Route::get('/', [HomeController::class, 'index'])->name('app.index');

Route::get ('/login',[AuthController::class, 'login'])->middleware('guest')->name ('login');
Route::post ('/login', [AuthController::class, 'doLogin'])->middleware('guest');
Route::delete ('/logout', [AuthController::class, 'logout'])->middleware('auth')->name ('logout');

Route::get ('/contenu', [ \App\Http\Controllers\frontoffice\ContentController::class, 'index'])->name ( 'frontoffice.contents.index');

Route::get ('/contenu/{slug}-{content}', [ \App\Http\Controllers\frontoffice\ContentController::class, 'show'])->name ( 'frontoffice.contents.show')->where ( [
		'contents' =>$idRegex,
		'slug'=>$slugRegex
]);

Route::prefix('backoffice')->name('backoffice.')->middleware('auth')->group(function () {
	
	Route::resource('contents', ContentController::class)->except(['show']);
	
});

