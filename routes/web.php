<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;

Route::get('/matakuliah/index', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);
Route::get('/matakuliah/store', [MatakuliahController::class, 'store']);
Route::get('/matakuliah/show/{id?}', [MatakuliahController::class, 'show']);
Route::get('/matakuliah/edit/{id}', [MatakuliahController::class, 'edit']);
Route::get('/matakuliah/update/{id}', [MatakuliahController::class, 'update']);
Route::get('/matakuliah/delate/{id}', [MatakuliahController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/Fajar',function(){
    return 'Halo Fajar';
});

Route::get('/{param1}/{param2}/Fajar',function(){
    return 'Halo Fajar';
});

Route::get('/nim/{param1?}', function ($param1 = '2557301038') {
    return 'NIM saya: '.$param1;
});

Route::get('/nama/{param1}', function ($param1) {
    if($param1 == 'Fajar')
        return 'Rahman';
    else
        return 'Nama saya: '.$param1;
});

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('/home', [HomeController::class, 'index']);
Route::get('/mahasiswa/{param1}', [App\Http\Controllers\MahasiswaController::class, 'show']);
