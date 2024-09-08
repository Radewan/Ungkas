<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', [
        'title' => 'Dashboard'
    ]);
});
Route::get('/siswa', function () {
    return view('siswa', [
        'title' => 'Siswa'
    ]);
});
Route::get('/pemasukkan', function () {
    return view('pemasukkan', [
        'title' => 'Pemasukkan'
    ]);
});
Route::get('/pengeluaran', function () {
    return view('pengeluaran', [
        'title' => 'Pengeluaran'
    ]);
});
