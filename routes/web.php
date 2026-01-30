
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\JurusanController;

Route::get('/', function () {
    return view('welcome');
});
//untuk gruping route
Route::prefix('student')->group(function () {
    Route::get('/nama/{student}/{kelas?}', function ($student, $kelas = '11 RPL') {
        return ('nama saya ' . $student . '<br>' . ' kelas ' . $kelas);
    });
    Route::get('/datadiri', function () {
        return "Nama saya Reyes umur 17 tahun kelas 11 RPL ";
    });
    Route::get('/siswa/{student}/{kelas?}', [App\Http\Controllers\StudentController::class, 'show']);
    // Route /student
    Route::get('/', [StudentController::class, 'index']);
    // Route /student/{name}
    Route::get('/{name}', [StudentController::class, 'show']);
    // Route cekObject
    Route::get('/cekObject', [StudentController::class, 'cekObject']);
    // Route insert
    Route::get('/insert', [StudentController::class, 'insert']);
    // Route massassignment
    Route::get('/massassignment', [StudentController::class, 'massassignment']);
    // Route update
    Route::get('/update', [StudentController::class, 'update']);
    // Route massUpdate
    Route::get('/massUpdate', [StudentController::class, 'massUpdate']);
    // Route delete
    Route::get('/delete', [StudentController::class, 'delete']);
    // Route destroy
    Route::get('/destroy', [StudentController::class, 'destroy']);
    // Route massDelete
    Route::get('/massDelete', [StudentController::class, 'massDelete']);
    // Route all
    Route::get('/all', [StudentController::class, 'all']);
});
Route::prefix('jurusan')->name('jurusan.')->group(function () {
    Route::get('/', [JurusanController::class, 'index'])->name('index');
    Route::get('/create', [JurusanController::class, 'create'])->name('create');
    Route::post('/store', [JurusanController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [JurusanController::class, 'edit'])->name('edit');
    Route::put('/{id}', [JurusanController::class, 'update'])->name('update');
    Route::delete('/{id}', [JurusanController::class, 'destroy'])->name('destroy');
    Route::get('/insert', [JurusanController::class, 'insert'])->name('insert');
    Route::get('/massassignment', [JurusanController::class, 'massassignment'])->name('massassignment');
    Route::get('/massUpdate', [JurusanController::class, 'massUpdate'])->name('massUpdate');
    Route::get('/delete', [JurusanController::class, 'delete'])->name('delete');
    Route::get('/massDelete', [JurusanController::class, 'massDelete'])->name('massDelete');
    Route::get('/all', [JurusanController::class, 'all'])->name('all');
});