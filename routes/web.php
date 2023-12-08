<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProjectController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cursos/{num}', HomeController::class );

Route::get('/getUsers', [UserController::class,'index']);
Route::get('/getUser/{userId?}', [UserController::class,'show']);
Route::post('/createUser', [UserController::class,'store']);
Route::post('/deleteUser/{userId?}', [UserController::class,'destroy']);
Route::post('/updateUser/{userId?}', [UserController::class,'update']);

Route::get('/getDocuments', [FileController::class,'index']);
Route::get('/downloadDocument', [FileController::class,'get']);
Route::get('/getDocument/{fileId?}', [FileController::class,'show']);
Route::post('/uploadDocument/{fileId?}', [FileController::class,'store']);
Route::post('/modifyDocument/{fileId?}', [FileController::class,'update']);
Route::post('/deleteDocument/{fileId?}', [FileController::class,'destroy']);


Route::get('/getProject', [ProjectController::class,'index']);
Route::get('/getProject/{project_id}/{userId?}', [ProjectController::class,'show']);
Route::post('/createProject', [ProjectController::class,'store']);
Route::post('/updateProject/{project_id}', [ProjectController::class,'update']);
Route::post('/deleteProject/{project_id}', [ProjectController::class,'destroy']);

